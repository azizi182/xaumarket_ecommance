<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Review Product - XauMarket</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

:root{
    --primary-color:#111827;
    --secondary-color:#1f2937;
    --accent-color:#fbbf24;
    --light-bg:#f9fafb;
    --gold-light:#fcd34d;
    --white:#ffffff;
    --text-dark:#1e293b;
    --border-light:#e5e7eb;
}

/* ================= BODY ================= */
body{
    background:linear-gradient(135deg,#f9fafb,#f3f4f6);
    font-family:'Segoe UI',sans-serif;
    color:#111827;
}

/* ================= NAVBAR ================= */
.navbar{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    padding:1rem 0;
    position:sticky;
    top:0;
    z-index:1000;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
}

.navbar-brand{
    font-size:1.7rem;
    font-weight:700;
    color:white !important;
}

.navbar-brand i{
    color:var(--accent-color);
}

/* ================= REVIEW SECTION ================= */
.review-section{
    padding:30px 0;
}

.review-wrapper{
    max-width:1500px;
    margin:auto;
}

.review-card{
    background:white;
    border-radius:28px;
    overflow:hidden;
    box-shadow:0 20px 40px rgba(0,0,0,0.08);
}

/* ================= PRODUCT SIDE (same as Make Offer) ================= */
.product-side{
    background:linear-gradient(135deg,#111827,#1f2937);
    color:white;
    height:100%;
    padding:35px;
    position:relative;
}

.back-btn{
    width:46px;
    height:46px;
    border:none;
    border-radius:14px;
    background:rgba(255,255,255,0.12);
    color:white;
    transition:0.3s;
}

.back-btn:hover{
    background:#fbbf24;
    color:#111827;
    transform:translateY(-2px);
}

.product-image{
    width:100%;
    height:300px;
    margin-top:30px;
    border-radius:22px;
    background:rgba(255,255,255,0.08);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:5rem;
    color:rgba(255,255,255,0.7);
}

.product-title{
    font-size:2rem;
    font-weight:800;
    margin-top:28px;
}

.product-price{
    font-size:2rem;
    font-weight:700;
    color:#fbbf24;
    margin:15px 0;
}

.product-desc{
    color:rgba(255,255,255,0.8);
    line-height:1.7;
}

/* ================= FORM SIDE ================= */
.form-side{
    padding:45px;
}

.review-badge{
    display:inline-block;
    padding:10px 18px;
    border-radius:50px;
    background:#fef3c7;
    color:#92400e;
    font-weight:700;
    margin-bottom:18px;
}

.form-title{
    font-size:2rem;
    font-weight:800;
    margin-bottom:10px;
}

.form-subtitle{
    color:#6b7280;
    margin-bottom:35px;
}

/* ================= INPUT ================= */
.input-group-modern{
    margin-bottom:25px;
}

.input-label{
    font-weight:700;
    margin-bottom:10px;
    display:block;
}

.modern-input{
    width:100%;
    border:1px solid #e5e7eb;
    border-radius:18px;
    padding:16px 18px;
    background:#f9fafb;
    transition:0.3s;
    outline:none;
}

.modern-input:focus{
    border-color:#fbbf24;
    background:white;
    box-shadow:0 10px 25px rgba(251,191,36,0.18);
}

/* ================= STAR RATING ================= */
.star-rating{
    display:flex;
    gap:8px;
    font-size:1.5rem;
    color:#d1d5db;
    cursor:pointer;
}

.star-rating i.active{
    color:#fbbf24;
}

/* ================= BUTTON ================= */
.submit-btn{
    width:100%;
    border:none;
    padding:18px;
    border-radius:18px;
    margin-top:20px;
    font-weight:800;
    font-size:1rem;
    background:linear-gradient(135deg,#fbbf24,#f59e0b);
    color:#111827;
    transition:0.3s;
    box-shadow:0 15px 30px rgba(251,191,36,0.25);
}

.submit-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 20px 35px rgba(251,191,36,0.4);
}

/* ================= FOOTER ================= */
footer{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    color:white;
    padding:3rem 2rem 1rem;
    margin-top:3rem;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <i class="fas fa-coins"></i> XauMarket
        </a>
    </div>
</nav>

<!-- ================= REVIEW SECTION ================= -->
<section class="review-section">

<div class="container review-wrapper">

    <div class="review-card">

        <div class="row g-0">

            <!-- LEFT PRODUCT -->
            <div class="col-lg-5">

                <div class="product-side">

                    <button class="back-btn mb-4" onclick="history.back()">
                        <i class="fas fa-arrow-left"></i>
                    </button>

                    <div class="product-image">
                        <i class="fas fa-headphones"></i>
                    </div>

                    <h1 class="product-title">
                        Wireless Headphones
                    </h1>

                    <div class="product-price">
                        RM 120
                    </div>

                    <p class="product-desc">
                        Premium wireless headphones with immersive sound quality,
                        ultra comfort design and long battery performance.
                    </p>

                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-7">

                <div class="form-side">

                    <div class="review-badge">
                        <i class="fas fa-star"></i>
                        Share Your Experience
                    </div>

                    <h2 class="form-title">
                        Leave a Review
                    </h2>

                    <p class="form-subtitle">
                        Tell other buyers about your experience with this product.
                    </p>

                    <!-- STAR RATING -->
                    <div class="input-group-modern">

                        <label class="input-label">Rating</label>

                        <div class="star-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                    <!-- TITLE -->
                    <div class="input-group-modern">
                        <label class="input-label">Review Title</label>
                        <input type="text" class="modern-input" placeholder="Great product!">
                    </div>

                    <!-- REVIEW -->
                    <div class="input-group-modern">
                        <label class="input-label">Your Feedback</label>
                        <textarea rows="5" class="modern-input"
                        placeholder="Write your experience..."></textarea>
                    </div>

                    <!-- UPLOAD -->
                    <div class="input-group-modern">
                        <label class="input-label">Upload Image (optional)</label>
                        <input type="file" class="modern-input">
                    </div>

                    <!-- BUTTON -->
                    <button class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Submit Review
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- FOOTER -->
<?php include('includes/footer.php'); ?>

</body>
</html>