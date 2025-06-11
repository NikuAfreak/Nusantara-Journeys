<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Nusantara Journeys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
    margin: 0;
    padding: 0;
  background: url('{{ asset('img/login-bg.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Segoe UI', sans-serif;
}
.overlay {
    /* background-color: rgba(255, 255, 255, 0.85); */
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
        .login-card {
            max-width: 320px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 1.5rem;
        }

        .brand-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .brand-logo {
            width: 40px;
            height: 40px;
        }

        .brand-text {
            color: #C54B24;
            font-weight: bold;
            font-size: 22px;
        }

        .form-control:focus {
            border-color: #C54B24;
            box-shadow: 0 0 0 0.2rem #702c15;
        }

        .btn-green {
            background-color: #C54B24;
            border: none;
        }

        .btn-green:hover {
            background-color: #c7856f;
        }

        a {
            color: #C54B24;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="login-card">
            <div class="text-center mb-4">
                <div class="brand-container">
                    <img src="img/logo.png" alt="Logo" class="brand-logo">
                    <div class="brand-text">Nusantara Journeys</div>
                </div>
                <h4 class="mt-3">Login to your account</h4>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-green w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
