<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Foodbubu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", sans-serif;
            background: #f5f7fa;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            font-size: 1.2rem;
            max-width: 600px;
        }

        .btn {
            margin-top: 30px;
            padding: 12px 30px;
            font-size: 1.1rem;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background: #357ab8;
        }

        .footer {
            margin-top: 50px;
            font-size: 0.9rem;
            color: #888;
        }

        .icons {
            margin-top: 20px;
        }

        .icons a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: #555;
            text-decoration: none;
        }

        .icons a:hover {
            color: #4a90e2;
        }
    </style>
</head>

<body>

    <h1>Welcome to Our Service</h1>
    <p>Explore features, get to know us, and login when you're ready to get started.</p>

    <a href="{{ route('login') }}" class="btn">Login</a>

    <div class="icons">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-github'></i></a>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} FoodBubu Sdn. Bhd. All rights reserved.
    </div>

</body>

</html>