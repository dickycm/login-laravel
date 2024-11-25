<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }

        .container {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 40px;
            width: 80%;
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1.5s ease-in-out;
        }

        .header {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .message {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.8;
        }

        .button {
            padding: 15px 30px;
            font-size: 1.1rem;
            background-color: #ff6f61;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #ff4e3a;
            transform: translateY(-5px);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            .header {
                font-size: 2.5rem;
            }

            .message {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="header">Selamat Datang di Aplikasi Kami!</h1>
        <p class="message">
            Kami sangat senang Anda bergabung. Temukan fitur terbaik yang akan mempermudah hidup Anda!
        </p>
        <a href="{{ url('/home') }}" class="button">Mulai Sekarang</a>

    </div>

</body>
</html>
