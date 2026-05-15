<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<a href="index.php" class="back-home">
    <i class="fas fa-arrow-left"></i> Back to Home
</a>
<title>Sign Up - XauMarket</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
    :root {
        --primary: #111827;
        --secondary: #1f2937;
        --accent: #fbbf24;
    }

    /* ===== Full screen layout ===== */
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        height: 100vh;
        overflow: hidden;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
    }

    .auth-wrapper {
        display: flex;
        height: 100vh;
    }

    /* ===== LEFT BRAND SIDE ===== */
    .auth-left {
        flex: 1;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 60px;
        background: radial-gradient(circle at top, #1f2937, #0f172a);
    }

    .brand-title {
        font-size: 3rem;
        font-weight: 800;
        color: var(--accent);
    }

    .brand-sub {
        font-size: 1.2rem;
        opacity: 0.8;
        margin-top: 10px;
    }

    .feature {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .feature div {
        display: flex;
        align-items: center;
        gap: 10px;
        opacity: 0.9;
    }

    /* ===== RIGHT SIDE ===== */
    .auth-right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(255,255,255,0.03);
        backdrop-filter: blur(10px);
    }

    /* ===== SIGNUP CARD ===== */
    .signup-card {
        width: 400px;
        padding: 35px;
        border-radius: 20px;
        background: rgba(255,255,255,0.08);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        color: white;
    }

    .signup-title {
        text-align: center;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--accent);
    }

    .form-control {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        border-radius: 12px;
    }

    .form-control::placeholder {
        color: rgba(255,255,255,0.5);
    }

    .form-control:focus {
        background: rgba(255,255,255,0.15);
        border-color: var(--accent);
        box-shadow: none;
        color: white;
    }

    /* ===== BUTTON ===== */
    .btn-signup {
        background: linear-gradient(135deg, #fbbf24, #f59e0b);
        border: none;
        font-weight: 700;
        color: #111827;
        border-radius: 12px;
        padding: 10px;
        transition: 0.3s;
    }

    .btn-signup:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(251,191,36,0.3);
    }

    /* ===== LINKS ===== */
    a {
        color: var(--accent);
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* ===== MOBILE ===== */
    @media(max-width: 768px) {
        .auth-left {
            display: none;
        }
    }

    .back-home {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        font-size: 0.9rem;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .back-home:hover {
        color: #fbbf24;
        transform: translateX(-3px);
    }
</style>
</head>

<body>

<div class="auth-wrapper">

    <!-- LEFT SIDE -->
    <div class="auth-left">
        <h1 class="brand-title"><i class="fas fa-coins"></i> XauMarket</h1>
        <p class="brand-sub">Join our marketplace community today</p>

        <div class="feature">
            <div><i class="fas fa-user-plus text-warning"></i> Easy registration</div>
            <div><i class="fas fa-store text-warning"></i> Buy & sell easily</div>
            <div><i class="fas fa-shield-alt text-warning"></i> Safe community trading</div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="auth-right">

        <div class="signup-card">
            <h2 class="signup-title">Create Account</h2>

            <form>
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter full name">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Create password">
                </div>

                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm password">
                </div>

                <button class="btn btn-signup w-100">
                    <i class="fas fa-user-plus"></i> Sign Up
                </button>

                <p class="text-center mt-3">
                    Already have an account? <a href="login.php">Login</a>
                </p>
            </form>
        </div>

    </div>

</div>

</body>
</html>