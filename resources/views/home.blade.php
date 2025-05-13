<!-- @extends('layout')
@section('title', 'HomePage')
@section('content')
{{auth()->user()->name}}
@endsection -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Foodbubu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #c9d6ff, #e2e2e2);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }

        header {
            width: 100%;
            background: #7494ec;
            padding: 20px;
            text-align: center;
            color: white;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .content {
            text-align: center;
            margin-top: 30px;
        }

        .content p {
            font-size: 1.2rem;
        }

        .btn {
            margin-top: 20px;
            padding: 12px 25px;
            background: #7494ec;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #5f7bd6;
        }

        .icons {
            margin-top: 40px;
            font-size: 1.5rem;
        }

        .icons a {
            margin: 0 10px;
            color: #333;
        }

        .logout {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 1rem;
            background: transparent;
            border: 2px solid white;
            border-radius: 5px;
            padding: 6px 12px;
            text-decoration: none;
        }

        .logout:hover {
            background-color: white;
            color: #7494ec;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Foodbubu</h1>
        <a class="logout" href="{{ route('login') }}">Logout</a>
    </header>

    <div class="content">
        <p>Hello! You have successfully logged in.</p>
        <button class="btn" onclick="alert('This could take you to your profile or dashboard!')">Go to Dashboard</button>

        <div class="icons">
            <p>Follow us on:</p>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
        </div>
    </div>

</body>

</html>