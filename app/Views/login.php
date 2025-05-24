<!-- app/Views/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | YourAppName</title>
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        /* Reset & base */
        * {
            box-sizing: border-box;
        }
        body, html {
            margin: 0; padding: 0; height: 100%;
            font-family: 'Poppins', sans-serif;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        /* Container */
        #form {
            background: #fff;
            width: 580px;           /* Responsive width */
            max-width: 100%;     /* Max width */
            border-radius: 15px;
            padding: 40px 35px 50px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            transition: box-shadow 0.3s ease;
            margin: 40px 20px;
        }
        #form:hover {
            box-shadow: 0 25px 50px rgba(0,0,0,0.25);
        }

        /* Heading */
        h1 {
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2.8rem;
            color: #2A3F54;
            text-align: center;
            letter-spacing: 1.2px;
        }

        /* Error Message */
        p.error-message {
            background-color: #ffe6e6;
            color: #cc0000;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 2px 6px rgba(204,0,0,0.2);
        }

        /* Input groups */
        .inp {
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
        }
        .inp label {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #2A3F54;
        }
        .inp input {
            padding: 14px 18px;
            font-size: 1.1rem;
            border-radius: 10px;
            border: 2px solid #ccc;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            font-weight: 500;
        }
        .inp input:focus {
            outline: none;
            border-color: #2A3F54;
            box-shadow: 0 0 8px rgba(118, 75, 162, 0.5);
            background-color: #faf7ff;
        }

        /* Button */
        #form button {
            width: 100%;
            padding: 15px 0;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #2A3F54 0%, #667eea 100%);
            color: white;
            font-size: 1.3rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(102, 126, 234, 0.4);
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }
        #form button:hover {
            background: linear-gradient(135deg, #667eea 0%,#2A3F54 100%);
            box-shadow: 0 12px 20px rgba(0, 66, 209, 0.6);
        }
        #form button:active {
            transform: scale(0.98);
        }

        /* Login link */
        .login {
            margin-top: 20px;
            text-align: center;
            font-style: italic;
            font-size: 1rem;
            color: #5a3e85;
        }
        .login a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .login a:hover {
            color: #2A3F54;
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #form {
                padding: 35px 25px 40px;
                margin: 30px 15px;
                height: 470px;
            }
            h1 {
                font-size: 2.4rem;
            }
            .inp input {
                font-size: 1.05rem;
                padding: 12px 16px;
            }
            #form button {
                font-size: 1.2rem;
                padding: 14px 0;
            }
        }

        @media (max-width: 480px) {
            #form {
                padding: 30px 20px 35px;
                margin: 20px 10px;
                width: 95%;
            }
            h1 {
                font-size: 2rem;
            }
            .inp label {
                font-size: 1rem;
            }
            .inp input {
                font-size: 1rem;
                padding: 12px 14px;
            }
            #form button {
                font-size: 1.1rem;
                padding: 13px 0;
            }
            .login {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<form id="form" method="post" action="<?= base_url('/admin') ?>">
    <h1>Login</h1>
    <?php if(session()->getFlashdata('error')): ?>
        <p class="error-message"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <div class="inp">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required autofocus>
    </div>
    <div class="inp">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" id="btn">Login</button>

    <div class="login">
        Don't have an account? <a href="<?= base_url('registration') ?>">Register here</a>
    </div>
</form>


<script src="<?= base_url('js/scripts/script.js')?>"></script>

</body>
</html>
