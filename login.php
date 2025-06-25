<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Login & Signup Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        /* Body Styles */
        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        /* Container Styles */
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            min-height: 500px;
            height: auto;
        }

        /* Form Container Styles */
        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        /* Form Styles */
        form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            font-size: clamp(1.5rem, 2.5vw, 2rem);
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 15px 0;
        }

        span {
            font-size: 12px;
            margin: 10px 0;
            display: block;
        }

        /* Input Styles */
        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Button Styles */
        button {
            border-radius: 20px;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 10px 0;
            cursor: pointer;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #fff;
            color: #fff;
        }

        /* Social Container */
        .social-container {
            margin: 15px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-container a {
            border: 1px solid #ddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            width: 40px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        /* Overlay Styles */
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .overlay {
            background: #3a0ca3;
            background: linear-gradient(to right, #4361ee, #3a0ca3);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        /* Animation Classes */
        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        /* Link Styles */
        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 10px 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                min-height: 700px;
                flex-direction: column;
            }
            
            .form-container {
                width: 100%;
                height: 50%;
                position: absolute;
                top: 0;
            }
            
            .sign-in-container {
                top: 0;
                transform: translateX(0);
            }
            
            .sign-up-container {
                top: 50%;
                transform: translateX(0);
                opacity: 0;
            }
            
            .overlay-container {
                position: absolute;
                top: 50%;
                height: 50%;
                left: 0;
                width: 100%;
                transform: translateY(-100%);
            }
            
            .container.right-panel-active .overlay-container {
                transform: translateY(0);
            }
            
            .overlay {
                top: -100%;
                left: 0;
                width: 100%;
                height: 200%;
                transform: translateY(0);
            }
            
            .container.right-panel-active .overlay {
                transform: translateY(50%);
            }
            
            .overlay-panel {
                top: 20%;
                height: 60%;
                width: 100%;
                padding: 0 20px;
            }
            
            .container.right-panel-active .sign-in-container {
                transform: translateY(-100%);
            }
            
            .container.right-panel-active .sign-up-container {
                transform: translateY(-100%);
                opacity: 1;
                z-index: 5;
            }
            
            form {
                padding: 0 20px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            button {
                padding: 10px 35px;
            }
        }

        @media (max-width: 480px) {
            .container {
                min-height: 600px;
            }
            
            .overlay-panel {
                top: 15%;
                height: 70%;
            }
            
            .social-container a {
                height: 35px;
                width: 35px;
            }
            
            input {
                padding: 10px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form>
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form>
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            // Set initial state for mobile
            function checkMobile() {
                if (window.innerWidth <= 768) {
                    container.classList.remove("right-panel-active");
                }
            }

            // Check on load
            checkMobile();
            
            // Check on resize
            window.addEventListener('resize', checkMobile);

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });

            // Form submission handlers (demo only)
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formType = this.querySelector('h1').textContent.toLowerCase();
                    alert(`${formType} form submitted (demo only)`);
                });
            });
        });
    </script>
</body>
</html>