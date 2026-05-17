<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Make Offer - XauMarket</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
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
    --card-bg:#ffffff;
}

body{
    background:linear-gradient(135deg,#f9fafb,#f3f4f6);
    font-family:'Segoe UI',sans-serif;
    color:#111827;
    overflow-x:hidden;
}

/* ================= NAVBAR ================= */

.navbar{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    padding:1rem 0;
    position:sticky;
    top:0;
    z-index:1000;

    box-shadow:
    0 5px 20px rgba(0,0,0,0.15);
}

.navbar-brand{
    font-size:1.7rem;
    font-weight:700;
    color:white !important;
}

.navbar-brand i{
    color:var(--accent-color);
}

/* ================= PAGE ================= */

.offer-section{
    padding:30px 0;
}

.offer-wrapper{
    max-width:1500px;
    margin:auto;
}

.offer-card{
    background:white;

    border-radius:28px;

    overflow:hidden;

    box-shadow:
    0 20px 40px rgba(0,0,0,0.08);
}

/* ================= PRODUCT SIDE ================= */

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

    font-size:6rem;

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

.offer-badge{
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

    box-shadow:
    0 10px 25px rgba(251,191,36,0.18);
}

.offer-price-box{
    position:relative;
}

.currency{
    position:absolute;
    left:18px;
    top:50%;

    transform:translateY(-50%);

    font-weight:700;
    color:#6b7280;
}

.offer-price-input{
    padding-left:60px;
    font-size:1.3rem;
    font-weight:700;
}

/* ================= QUICK OFFER ================= */

.quick-offers{
    display:flex;
    flex-wrap:wrap;
    gap:12px;

    margin-top:15px;
}

.quick-btn{
    border:none;

    padding:12px 18px;

    border-radius:14px;

    background:#f3f4f6;

    font-weight:700;

    transition:0.3s;
}

.quick-btn:hover{
    background:#fbbf24;

    transform:translateY(-2px);
}

/* ================= SELLER ================= */

.seller-box{
    display:flex;
    align-items:center;
    gap:14px;

    background:#f9fafb;

    padding:18px;

    border-radius:18px;

    margin-top:10px;
}

.seller-avatar{
    width:60px;
    height:60px;

    border-radius:50%;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    display:flex;
    align-items:center;
    justify-content:center;

    font-weight:700;
    font-size:1.1rem;
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

    box-shadow:
    0 15px 30px rgba(251,191,36,0.25);
}

.submit-btn:hover{
    transform:translateY(-3px);

    box-shadow:
    0 20px 35px rgba(251,191,36,0.4);
}

/* ================= MOBILE ================= */

@media(max-width:992px){

    .product-side,
    .form-side{
        padding:28px;
    }

}

@media(max-width:768px){

    .offer-section{
        padding:20px 0;
    }

    .offer-card{
        border-radius:0;
    }

    .product-image{
        height:220px;
        font-size:4rem;
    }

    .form-title{
        font-size:1.6rem;
    }

    .product-title{
        font-size:1.6rem;
    }

}

/* ================= FOOTER ================= */

footer{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    color:white;
    padding:3rem 2rem 1rem;
    margin-top:3rem;
}

.footer-content{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:2rem;
    margin-bottom:2rem;
}

.footer-section h4{
    font-size:1.2rem;
    font-weight:700;
    margin-bottom:1rem;
    color:var(--accent-color);
}

.footer-section ul{
    list-style:none;
}

.footer-section ul li{
    margin-bottom:0.8rem;
}

.footer-section a{
    color:white;
    text-decoration:none;
    opacity:0.85;
    transition:0.3s;
}

.footer-section a:hover{
    opacity:1;
    color:var(--accent-color);
}

.footer-bottom{
    border-top:1px solid rgba(255,255,255,0.1);
    padding-top:2rem;
    text-align:center;
    opacity:0.9;
}

</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a href="index.php" class="navbar-brand text-decoration-none">
            <i class="fas fa-coins"></i> XauMarket
        </a>

    </div>
</nav>

<!-- ================= OFFER SECTION ================= -->

<section class="offer-section">

    <div class="container offer-wrapper">

        <div class="offer-card">

            <div class="row g-0">

                <!-- LEFT -->
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

                <!-- RIGHT -->
                <div class="col-lg-7">

                    <div class="form-side">

                        <div class="offer-badge">
                            <i class="fas fa-tags"></i>
                            Negotiate Your Best Price
                        </div>

                        <h2 class="form-title">
                            Make an Offer
                        </h2>

                        <p class="form-subtitle">
                            Send your offer directly to the seller and negotiate instantly.
                        </p>

                        <!-- OFFER PRICE -->
                        <div class="input-group-modern">

                            <label class="input-label">
                                Your Offer Price
                            </label>

                            <div class="offer-price-box">

                                <span class="currency">
                                    RM
                                </span>

                                <input 
                                    type="number"
                                    class="modern-input offer-price-input"
                                    placeholder="100"
                                >

                            </div>

                            <!-- QUICK BUTTON -->
                            <div class="quick-offers">

                                <button class="quick-btn">
                                    RM 90
                                </button>

                                <button class="quick-btn">
                                    RM 100
                                </button>

                                <button class="quick-btn">
                                    RM 110
                                </button>

                            </div>

                        </div>

                        <!-- MESSAGE -->
                        <div class="input-group-modern">

                            <label class="input-label">
                                Message to Seller
                            </label>

                            <textarea 
                                rows="5"
                                class="modern-input"
                                placeholder="Hi seller, can you accept this price?"
                            ></textarea>

                        </div>

                        <!-- CONTACT -->
                        <div class="input-group-modern">

                            <label class="input-label">
                                Contact Number
                            </label>

                            <input 
                                type="text"
                                class="modern-input"
                                placeholder="+60 12-345 6789"
                            >

                        </div>

                        <!-- SELLER -->
                        <div class="seller-box">

                            <div class="seller-avatar">
                                J
                            </div>

                            <div>
                                <h6 class="fw-bold mb-1">
                                    John Seller
                                </h6>

                                <small class="text-muted">
                                    Trusted Seller • 4.9 Rating
                                </small>
                            </div>

                        </div>

                        <!-- BUTTON -->
                        <button class="submit-btn">

                            <i class="fas fa-paper-plane"></i>
                            Submit Offer

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ============ FOOTER ============ -->
<?php include('includes/footer.php'); ?>

</body>
</html>