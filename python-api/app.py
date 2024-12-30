from flask import Flask, Response, jsonify, render_template
from ultralytics import YOLO
import cv2
import os

app = Flask(__name__)

# Atur Confidence Threshold
CONFIDENCE_THRESHOLD = 0.4

# Muat model YOLO
try:
    model = YOLO('models/best.pt')
    print("Model berhasil dijalankan!")
except Exception as e:
    print(f"Model gagal dijalankan: {e}")

@app.route('/pemantauan-live')
def pemantauan_live():
    return render_template('pemantauan-live.html')  # Template untuk menampilkan video

@app.route('/stream-video/<video_name>')
def stream_video(video_name):
    video_path = f"videos/{video_name}.mp4"
    if not os.path.exists(video_path):
        return jsonify({'error': 'Video tidak ditemukan'}), 404

    cap = cv2.VideoCapture(video_path)

    def generate_frames():
        while True:
            ret, frame = cap.read()
            if not ret:
                break

            # Inisialisasi variabel untuk menghitung jumlah objek
            normal_count = 0
            anomaly_count = 0

            # Gunakan YOLO untuk mendeteksi objek
            results = model(frame)
            for result in results:
                boxes = result.boxes.data
                for box in boxes:
                    x1, y1, x2, y2, conf, cls = box.tolist()

                    # Cek apakah confidence lebih besar dari threshold
                    if conf < CONFIDENCE_THRESHOLD:
                        continue  # Jika kurang dari threshold, lewati objek ini

                    # Tentukan warna berdasarkan kelas objek
                    if result.names[int(cls)] == 'anomali':
                        color = (0, 0, 255)  # Merah untuk anomali
                        anomaly_count += 1
                    else:
                        color = (0, 255, 0)  # Hijau untuk objek normal
                        normal_count += 1

                    # Gambar kotak deteksi dengan warna yang sesuai
                    cv2.rectangle(frame, (int(x1), int(y1)), (int(x2), int(y2)), color, 2)

                    # Label dan confidence di atas bounding box
                    label = f"{result.names[int(cls)]}: {conf:.2f}"
                    cv2.putText(frame, label, (int(x1), int(y1) - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.5, color, 2)

            # Menambahkan teks jumlah objek terdeteksi
            total_count = normal_count + anomaly_count
            summary_text = f"Jumlah objek terdeteksi: {total_count}, Normal: {normal_count}, Anomali: {anomaly_count}"
            cv2.putText(frame, summary_text, (20, frame.shape[0] - 30), cv2.FONT_HERSHEY_SIMPLEX, 0.8, (255, 255, 255), 2)

            # Menambahkan peringatan jika jumlah anomali lebih banyak
            if anomaly_count > normal_count:
                warning_text = "Kelas Tidak Kondusif!"
                cv2.putText(frame, warning_text, (20, frame.shape[0] - 10), cv2.FONT_HERSHEY_SIMPLEX, 1, (0, 0, 255), 2)

            # Encode frame ke format JPEG
            _, buffer = cv2.imencode('.jpg', frame)
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + buffer.tobytes() + b'\r\n')

    return Response(generate_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == '__main__':
    app.run(debug=True)
