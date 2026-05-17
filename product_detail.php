<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Details - XauMarket</title>

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
    --gold-light: #fcd34d;;
    --white: #ffffff;
    --text-dark: #1e293b;
    --border-light: #e5e7eb;
    --card-bg: #ffffff;
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

/* ================= SEARCH SECTION ================= */

.search-section{
    position:sticky;
    top:88px;
    z-index:999;

    padding:10px 0;

    background:rgba(255,255,255,0.7);

    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);

    border-bottom:1px solid rgba(255,255,255,0.4);

    box-shadow:
    0 8px 30px rgba(0,0,0,0.05);
}

.search-wrapper{
    display:flex;
    align-items:center;
    gap:10px;

    background:var(--secondary-color);

    padding:10px;
    border-radius:22px;

    box-shadow:
    0 10px 30px rgba(0,0,0,0.08);
}

.search-box{
    flex:1;

    display:flex;
    align-items:center;
    gap:10px;

    background:white;

    border-radius:16px;

    padding:13px 16px;

    transition:0.3s;

    border:1px solid #ececec;
}

.search-box:hover,
.search-box:focus-within{
    border-color:var(--accent-color);

    box-shadow:
    0 10px 20px rgba(251,191,36,0.18);
}

.search-box i{
    color:#f59e0b;
}

.search-box input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
}

.search-btn{
    border:none;

    padding:14px 24px;

    border-radius:16px;

    font-weight:700;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    color:#111827;

    transition:0.3s;

    box-shadow:
    0 10px 25px rgba(251,191,36,0.25);
}

.search-btn:hover{
    transform:translateY(-2px);

    box-shadow:
    0 15px 30px rgba(251,191,36,0.4);
}

/* ================= PRODUCT SECTION ================= */

.product-wrapper{
    margin-top:35px;
}

.product-image{
    background:white;

    border-radius:22px;

    height:420px;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:6rem;

    color:#d1d5db;

    box-shadow:
    0 15px 35px rgba(0,0,0,0.10),
    0 0 20px rgba(251,191,36,0.08);
}

.product-info{
    background:white;

    border-radius:22px;

    padding:24px;

    box-shadow:
    0 15px 35px rgba(0,0,0,0.10),
    0 0 20px rgba(251,191,36,0.08);
}

.product-title{
    font-size:1.8rem;
    font-weight:800;
}

.product-price{
    font-size:2rem;
    font-weight:700;
    color:#f59e0b;

    margin:10px 0 18px;
}

.product-rating{
    color:#fbbf24;
    margin-bottom:20px;
}

.product-desc{
    color:#4b5563;
    line-height:1.7;
    font-size:0.96rem;
}

/* ================= SELLER ================= */

.seller-box{
    display:flex;
    align-items:center;
    gap:14px;

    background:#f9fafb;

    padding:14px;

    border-radius:16px;

    margin-top:20px;
}

.seller-avatar{
    width:55px;
    height:55px;

    border-radius:50%;

    background:linear-gradient(135deg,#d1d5db,#9ca3af);
}

/* ================= BUTTONS ================= */

.action-buttons{
    display:flex;
    gap:10px;

    margin-top:22px;
}

.btn-chat,
.btn-offer{
    flex:1;

    border:none;

    padding:13px;

    border-radius:14px;

    background:var(--primary-color);

    color:white;

    font-weight:700;

    transition:0.3s;
}

.btn-buy{
    width:100%;

    margin-top:12px;

    border:none;

    padding:14px;

    border-radius:14px;

    font-weight:700;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    color:#111827;

    transition:0.3s;
}

.btn-chat:hover,
.btn-offer:hover,
.btn-buy:hover{
    transform:translateY(-2px);
}

/* ================= REVIEW ================= */

.review-section{
    margin-top:45px;
    margin-bottom:50px;
}

.section-title{
    font-size:1.7rem;
    font-weight:800;
    margin-bottom:20px;
}

.review-card{
    background:white;

    border-radius:20px;

    padding:22px;

    margin-bottom:18px;

    box-shadow:
    0 10px 30px rgba(0,0,0,0.08);
}

.review-header{
    display:flex;
    align-items:center;
    gap:14px;

    margin-bottom:15px;
}

.review-avatar{
    width:55px;
    height:55px;

    border-radius:50%;

    background:#d1d5db;
}

.review-stars{
    color:#fbbf24;
}

/* ================= REVIEW BUTTON ================= */

.btn-review{
    width:100%;

    margin-top:12px;

    border:none;

    padding:14px;

    border-radius:14px;

    font-weight:700;

    background:white;

    color:#111827;

    border:1px solid #e5e7eb;

    transition:0.3s;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.05);
}

.btn-review:hover{
    background:#111827;
    color:white;

    transform:translateY(-2px);

    box-shadow:
    0 15px 30px rgba(0,0,0,0.12);
}

/* ================= MODAL ================= */

.modal-content{
    border:none;
    border-radius:24px;

    overflow:hidden;

    box-shadow:
    0 25px 50px rgba(0,0,0,0.18);
}

.review-modal-header{
    background:linear-gradient(135deg,#111827,#1f2937);

    color:white;

    padding:28px;
}

.review-modal-title{
    font-size:1.5rem;
    font-weight:800;
}

.review-modal-body{
    padding:30px;
}

/* ================= STAR RATING ================= */

.rating-stars{
    display:flex;
    gap:12px;

    margin:20px 0 30px;
}

.rating-stars i{
    font-size:2rem;

    cursor:pointer;

    color:#d1d5db;

    transition:0.3s;
}

.rating-stars i:hover{
    color:#fbbf24;

    transform:scale(1.12);
}

.review-input{
    width:100%;

    border:1px solid #e5e7eb;

    border-radius:18px;

    padding:16px 18px;

    background:#f9fafb;

    outline:none;

    transition:0.3s;
}

.review-input:focus{
    border-color:#fbbf24;

    background:white;

    box-shadow:
    0 10px 25px rgba(251,191,36,0.18);
}

.submit-review-btn{
    width:100%;

    margin-top:20px;

    border:none;

    padding:16px;

    border-radius:16px;

    font-weight:700;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    color:#111827;

    transition:0.3s;

    box-shadow:
    0 15px 30px rgba(251,191,36,0.25);
}

.submit-review-btn:hover{
    transform:translateY(-2px);

    box-shadow:
    0 20px 35px rgba(251,191,36,0.35);
}

/* ================= MOBILE ================= */

@media(max-width:992px){

    .search-section{
        top:76px;
    }

    .search-wrapper{
        flex-direction:column;
        align-items:stretch;
    }

    .search-btn{
        width:100%;
    }

}

@media(max-width:768px){

    .product-image{
        height:280px;
        margin-bottom:20px;
    }

    .product-title{
        font-size:1.5rem;
    }

    .action-buttons{
        flex-direction:column;
    }

}
/* ============ Footer ============ */
            footer {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
                color: var(--white);
                padding: 3rem 2rem 1rem;
                margin-top: 3rem;
            }

            .footer-content {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
                margin-bottom: 2rem;
            }

            .footer-section h4 {
                font-size: 1.2rem;
                font-weight: 700;
                margin-bottom: 1rem;
                color: var(--accent-color);
            }

            .footer-section ul {
                list-style: none;
            }

            .footer-section ul li {
                margin-bottom: 0.8rem;
            }

            .footer-section a {
                color: var(--white);
                text-decoration: none;
                opacity: 0.85;
                transition: opacity 0.3s ease;
            }

            .footer-section a:hover {
                opacity: 1;
                color: var(--accent-color);
            }

            .footer-bottom {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding-top: 2rem;
                text-align: center;
                opacity: 0.9;
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

<!-- ================= SEARCH SECTION ================= -->

<section class="search-section">
    <div class="container">

        <div class="search-wrapper">

            <div class="search-box">
                <i class="fas fa-magnifying-glass"></i>
                <input type="text" placeholder="Search products...">
            </div>

            <div class="search-box">
                <i class="fas fa-location-dot"></i>
                <input type="text" placeholder="Search location...">
            </div>

            <button class="search-btn">
                <i class="fas fa-search"></i>
                Search
            </button>

        </div>

    </div>
</section>

<div class="container">

    <!-- ================= PRODUCT ================= -->

    <div class="row product-wrapper g-4">

        <!-- LEFT -->
        <div class="col-lg-6">

            <div class="product-image">
                <i class="fas fa-headphones"></i>
            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-lg-6">

            <div class="product-info">

                <h1 class="product-title">
                    Wireless Headphones
                </h1>

                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    (128 Reviews)
                </div>

                <div class="product-price">
                    RM 120
                </div>

                <p class="product-desc">
                    Premium wireless headphones with immersive sound quality,
                    ultra comfort design and long battery performance.
                </p>

                <!-- SELLER -->
                <div class="seller-box">

                    <div class="seller-avatar"></div>

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
                <div class="action-buttons">

                    <a href="chat_detail.php" class="btn-chat text-decoration-none text-center">
                        <i class="fas fa-comments"></i>
                        Chat Now
                    </a>

                    <a href="make_offer.php" class="btn-offer text-decoration-none text-center">
                        <i class="fas fa-handshake"></i>
                        Make Offer
                    </a>

                </div>

                <button class="btn-buy">
                    <i class="fas fa-cart-shopping"></i>
                    Buy Now
                </button>

                

            </div>

        </div>

    </div>

    <!-- ================= REVIEWS ================= -->

    <div class="review-section">

        <h2 class="section-title">
            Reviews & Feedback
        </h2>

        <a href="review_detail.php" class="btn-review text-decoration-none text-center" data-bs-toggle="modal" data-bs-target="#reviewModal">
            <i class="fas fa-star"></i>
            Review & Feedback
        </a>

        

        <!-- REVIEW -->
        <div class="review-card">

            <div class="review-header">

                <div class="review-avatar"></div>

                <div>
                    <h5 class="mb-1">
                        Alex Tan
                    </h5>

                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <small class="text-muted">
                        3 min ago
                    </small>
                </div>

            </div>

            <p class="mb-0">
                Product arrived in excellent condition.
                Seller was responsive and delivery was fast.
            </p>

        </div>

        <!-- REVIEW -->
        <div class="review-card">

            <div class="review-header">

                <div class="review-avatar"></div>

                <div>
                    <h5 class="mb-1">
                        Sarah Lim
                    </h5>

                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                    <small class="text-muted">
                        10 min ago
                    </small>
                </div>

            </div>

            <p class="mb-0">
                Good quality item with smooth transaction.
                Highly recommended seller.
            </p>

        </div>

    </div>

</div>

    <!-- ============ FOOTER ============ -->
    <?php include('includes/footer.php'); ?>

</body>
</html>