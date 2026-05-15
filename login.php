<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - XauMarket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg, #111827, #1f2937);
            height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: Poppins, sans-serif;
        }

        .login-card{
            background:white;
            padding:40px;
            border-radius:20px;
            width:400px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        .title{
            text-align:center;
            font-weight:700;
            color:#fbbf24;
            margin-bottom:25px;
        }

        .btn-login{
            background:#fbbf24;
            border:none;
            color:#111827;
            font-weight:600;
        }

        .btn-login:hover{
            background:#f59e0b;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2 class="title">XauMarket Login</h2>

    <form>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
        </div>

        <button class="btn btn-login w-100">Login</button>

        <p class="text-center mt-3">
            Don't have account?
            <a href="signup.php">Sign Up</a>
        </p>
    </form>
</div>

</body>
</html>