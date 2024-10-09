<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaeaea; /* Background color */
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .sticker {
            width: 80px;
            height: 80px;
            margin: 10px;
            transition: transform 0.3s;
        }
        .sticker:hover {
            transform: scale(1.1); /* Zoom effect on hover */
        }
        h2 {
            color: #2c3e50; /* Dark blue color */
            margin-bottom: 20px;
        }
        .message {
            color: #34495e; /* Slightly lighter dark blue */
            font-size: 1.2rem; /* Size */
            line-height: 1.6; /* Line height */
            text-align: left; /* Align left */
            margin-top: 20px; /* Top margin */
            margin-bottom: 20px; /* Bottom margin */
            background-color: #f9f9f9; /* Light background for contrast */
            padding: 15px; /* Padding */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        /* Custom audio message */
        audio {
            display: none; /* Hide the audio element */
        }
        .whatsapp-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>For U!!!</h2>

    <!-- Stickers -->
    <div class="my-3"><center>
        <img src="assets/P2.gif" alt="Sticker 1" class="sticker"></center>
    </div>

    <p class="message">
        <strong>Dear cewe cantik yang gabisa tinggi,</strong><br><br>
        Pagi, cantik! How's ur day? Semoga hari ini full senyum.<br><br>

        Maaf banget kalau dalam beberapa hari ini aku bikin kamu merasa nggak nyaman. Aku cuma pengen bilang, aku di sini berusaha banget untuk nunjukin kalau nggak semua cowok itu sama kayak masa lalu kamu.<br><br>

        Aku ngerti kok, susah banget buat ngelupain hal-hal yang udah terjadi. Tapi aku pengen jadi temen yang bisa kamu percaya, yang siap ada buat kamu.<br><br>

        Semoga harimu selalu cerah, dan ingat, aku di sini buat kamu!
        <br>
        Dengerin lagunya sampe selesai...
        <br>
        <br> Yok beli Es Krim!!!!!!
    </p>

    <!-- Audio element (plays automatically on page load) -->
    <audio id="greetingSound" autoplay>
        <source src="assets/P3.mp3" type="audio/mpeg">
    </audio>

    <!-- WhatsApp Button -->
    <div class="whatsapp-button">
        <a href="https://wa.me/+6289666534148?text=Lv U???" class="btn btn-success" target="_blank">
            Balas di WhatsApp
        </a>
    </div>
</div>

<!-- JavaScript for autoplaying sound -->
<script>
    window.onload = function() {
        var sound = document.getElementById("greetingSound");
        sound.play();
    }
</script>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
