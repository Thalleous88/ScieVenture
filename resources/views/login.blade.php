<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>Login</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #182028, #1a4562);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .login-container {
            background: rgba(49, 45, 60, 0.797);
            border-radius: 15px;
            padding: 30px;
            margin: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
            position: relative;
            z-index: 1;
        }

        .login-container:hover {
            transform: scale(1.05);
        }

        .login-container input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.1);
            color: #34495e;
        }

        .login-container .button {
            width: 95%;
            background: #215375;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 1.1rem;
            transition: background 0.3s, transform 0.2s;
        }

        .login-container .button:hover {
            background: #2980b9;
        }

        .login-container .button:active {
            transform: scale(0.95);
            background: #1a4d6d; /* Warna lebih gelap saat diklik */
        }

        header {
            text-align: center;
            margin: 20px 0;
            padding: 20px;
        }

        .button2 {
            background: #30495a;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .button2:hover {
            background: #3a5a70; /* Warna lebih terang saat hover */
        }

        .button2:active {
            transform: scale(0.95);
            background: #2a4a60; /* Warna lebih gelap saat diklik */
        }

        /* Animasi Latar Belakang */
        .animation-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .animation-background div {
            position: absolute;
            opacity: 0.5;
            animation: move 10s linear infinite;
        }

        @keyframes move {
            0% { transform: translateY(0); }
            100% { transform: translateY(-100%); }
        }

        /* Tambahkan beberapa elemen animasi */
        .math-symbol, .bio-symbol, .chem-symbol, .phy-symbol {
            font-size: 50px;
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <div class="animation-background">
        <!-- Simbol Matematika -->
        <div class="math-symbol" style="top: 5%; left: 5%;">+</div>
        <div class="math-symbol" style="top: 10%; left: 20%;">-</div>
        <div class="math-symbol" style="top: 15%; left: 35%;">×</div>
        <div class="math-symbol" style="top: 20%; left: 50%;">÷</div>
        <div class="math-symbol" style="top: 25%; left: 65%;">=</div>
        <div class="math-symbol" style="top: 30%; left: 80%;">√</div>
        <div class="math-symbol" style="top: 35%; left: 10%;">∑</div>
        <div class="math-symbol" style="top: 40%; left: 25%;">∏</div>
        <div class="math-symbol" style="top: 45%; left: 40%;">∞</div>
        <div class="math-symbol" style="top: 50%; left: 55%;">∫</div>
        <div class="math-symbol" style="top: 55%; left: 70%;">∂</div>
        <div class="math-symbol" style="top: 60%; left: 85%;">≠</div>
        
        <!-- Simbol Biologi -->
        <div class="bio-symbol" style="top: 65%; left: 15%;">🌱</div>
        <div class="bio-symbol" style="top: 70%; left: 30%;">🦠</div>
        <div class="bio-symbol" style="top: 75%; left: 45%;">🧬</div>
        <div class="bio-symbol" style="top: 80%; left: 60%;">🌿</div>
        <div class="bio-symbol" style="top: 85%; left: 75%;">🦋</div>
        
        <!-- Simbol Kimia -->
        <div class="chem-symbol" style="top: 90%; left: 10%;">⚗️</div>
        <div class="chem-symbol" style="top: 95%; left: 25%;">🔬</div>
        <div class="chem-symbol" style="top: 100%; left: 40%;">🧪</div>
        <div class="chem-symbol" style="top: 105%; left: 55%;">🧫</div>
        <div class="chem-symbol" style="top: 110%; left: 70%;">🧬</div>
        
        <!-- Simbol Fisika -->
        <div class="phy-symbol" style="top: 115%; left: 85%;">🔭</div>
        <div class="phy-symbol" style="top: 120%; left: 10%;">⚛️</div>
        <div class="phy-symbol" style="top: 125%; left: 25%;">🌌</div>
        <div class="phy-symbol" style="top: 130%; left: 40%;">💡</div>
        <div class="phy-symbol" style="top: 135%; left: 55%;">🌠</div>
    </div>

    <header>
        <h1>Welcome to ScieVenture</h1>
    </header>
    <header>
        <div class="login-container">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="user_id" placeholder="User ID">
                <input type="password" name="password" placeholder="Password">
                <div class="button2" onclick="window.location.href='/'">
                    Login
                </div>
            </form>
        </div>
    </header>
</body>
</html>