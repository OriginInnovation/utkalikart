<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Signup | ShopNow</title>

    <!-- LIBS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* BACKGROUND BLOBS */
        .blob {
            position: absolute;
            width: 380px;
            height: 380px;
            background: linear-gradient(135deg, #ff7a18, #ff3d00);
            filter: blur(80px);
            opacity: 0.45;
            animation: float 10s infinite alternate;
        }

        .blob.one {
            top: -120px;
            left: -120px;
        }

        .blob.two {
            bottom: -120px;
            right: -120px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
        }

        @keyframes float {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(40px);
            }
        }

        /* FLIP CONTAINER */
        .flip-container {
            perspective: 1200px;
        }

        .flip-card {
            width: 380px;
            height: 480px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.9s cubic-bezier(.4, .2, .2, 1);
        }

        .flip-card.flipped {
            transform: rotateY(180deg);
        }

        /* CARD SIDES */
        .card-side {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 22px;
            padding: 35px;
            backface-visibility: hidden;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            color: #fff;
        }

        .card-side h3 {
            font-weight: 700;
            margin-bottom: 25px;
        }

        .back {
            transform: rotateY(180deg);
        }

        /* INPUTS */
        .form-group {
            position: relative;
            margin-bottom: 22px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .form-group label {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 13px;
            color: #999;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: -7px;
            font-size: 11px;
            background: #fff;
            padding: 0 6px;
            color: #764ba2;
        }

        /* BUTTON */
        .auth-btn {
            width: 100%;
            border: none;
            padding: 14px;
            border-radius: 50px;
            background: linear-gradient(135deg, #ff7a18, #ff3d00);
            color: #fff;
            font-weight: 600;
            transition: 0.4s;
            margin-top: 10px;
        }

        .auth-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 61, 0, 0.55);
        }

        /* SWITCH TEXT */
        .switch {
            margin-top: 22px;
            text-align: center;
            font-size: 14px;
        }

        .switch span {
            color: #ffd6c9;
            cursor: pointer;
            font-weight: 600;
        }

        /* SOCIAL */
        .social {
            text-align: center;
            margin-top: 20px;
        }

        .social i {
            margin: 0 10px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .social i:hover {
            transform: scale(1.2);
        }

        @media (max-width: 480px) {
            .flip-card {
                width: 330px;
                height: 470px;
            }
        }
    </style>
</head>

<body>

    <!-- BLOBS -->
    <div class="blob one"></div>
    <div class="blob two"></div>

    <!-- FLIP CARD -->
    <div class="flip-container">
        <div class="flip-card" id="flipCard">

            <!-- LOGIN -->
            <div class="card-side front">
                <h3>Welcome Back 👋</h3>

                <div class="form-group">
                    <input type="email" placeholder=" " required>
                    <label>Email</label>
                </div>

                <div class="form-group">
                    <input type="password" placeholder=" " required>
                    <label>Password</label>
                </div>

                <button class="auth-btn">Login</button>

                <div class="social">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-apple"></i>
                </div>

                <div class="switch">
                    New here? <span onclick="flip()">Create Account</span>
                </div>
            </div>

            <!-- SIGNUP -->
            <div class="card-side back">
                <h3>Create Account ✨</h3>

                <div class="form-group">
                    <input type="text" placeholder=" " required>
                    <label>Full Name</label>
                </div>

                <div class="form-group">
                    <input type="email" placeholder=" " required>
                    <label>Email</label>
                </div>

                <div class="form-group">
                    <input type="password" placeholder=" " required>
                    <label>Password</label>
                </div>

                <button class="auth-btn">Sign Up</button>

                <div class="switch">
                    Already have an account? <span onclick="flip()">Login</span>
                </div>
            </div>

        </div>
    </div>

    <script>
        function flip() {
            document.getElementById("flipCard").classList.toggle("flipped");
        }
    </script>

</body>

</html>
