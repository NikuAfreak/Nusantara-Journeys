<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Nusantara Journeys</title>
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
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-card {
            max-width: 320px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 1.5rem;
            width: 100%;
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
            color: #7bc043;
            font-weight: bold;
            font-size: 22px;
        }

        .form-control:focus {
            border-color: #7bc043;
            box-shadow: 0 0 0 0.2rem rgba(123, 192, 67, 0.25);
        }

        .btn-green {
            background-color: #7bc043;
            border: none;
        }

        .btn-green:hover {
            background-color: #6ab034;
        }

        a {
            color: #7bc043;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="register-card">
            <div class="text-center mb-4">
                <div class="brand-container">
                    <img src="img/logo.png" alt="Logo" class="brand-logo">
                    <div class="brand-text">Nusantara Journeys</div>
                </div>
                <h4 class="mt-3">Create your account</h4>
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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-green w-100">Register</button>
            </form>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
