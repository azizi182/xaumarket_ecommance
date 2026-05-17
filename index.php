    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XauMarket - Your Modern Shopping Destination</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Swiper CSS for carousels -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root {
                --primary-color: #111827;
                --secondary-color: #1f2937;
                --accent-color: #fbbf24;
                --gold-light: #fcd34d;
                --light-bg: #f5f5f5;
                --white: #ffffff;
                --text-dark: #1e293b;
                --border-light: #e5e7eb;
                --card-bg: #ffffff;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: var(--text-dark);
                background: linear-gradient(135deg, #f9fafb, #f3f4f6);
                overflow-x: hidden;
            }

            /* ============ Navigation Bar ============ */
            .navbar {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
                padding: 1rem 0;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 0;
                z-index: 100;
            }

            .navbar-brand {
                font-size: 1.8rem;
                font-weight: 700;
                color: var(--white) !important;
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .navbar-brand i {
                color: var(--accent-color);
                font-size: 2rem;
            }

            .nav-buttons {
                display: flex;
                gap: 1rem;
                align-items: center;
            }

            .btn-login, .btn-signup {
                padding: 0.6rem 1.5rem;
                border-radius: 50px;
                font-weight: 600;
                transition: all 0.3s ease;
                border: none;
                cursor: pointer;
            }

            .btn-login {
                background-color: transparent;
                color: var(--white);
                border: 2px solid var(--white);
            }

            .btn-login:hover {
                background-color: var(--white);
                color: var(--primary-color);
                transform: translateY(-2px);
            }

            .btn-signup {
                background: linear-gradient(135deg, #fbbf24, #f59e0b);
                color: #111827;
                font-weight: 700;
            }

            .btn-signup:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(251, 191, 36, 0.4);
            }

            /* ============ Hero Section / Featured Carousel ============ */
            .featured-carousel {
                background: var(--white);
                padding: 2rem;
                margin: 2rem 0;
                border-radius: 15px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            }

            .swiper {
                width: 100%;
                height: 400px;
                border-radius: 10px;
                overflow: hidden;
            }

            .swiper-slide {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.5rem;
                font-weight: 600;
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                color: var(--white);
                position: relative;
                border-radius: 10px;
            }

            .swiper-slide img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .slide-content {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8));
                color: var(--white);
                padding: 2rem;
                text-align: left;
            }

            .slide-content h2 {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 0.5rem;
            }

            .slide-content p {
                font-size: 1.1rem;
                margin-bottom: 1rem;
                opacity: 0.9;
            }

            .btn-shop-now {
                background: var(--accent-color);
                color: var(--white);
                padding: 0.8rem 2rem;
                border-radius: 50px;
                border: none;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                display: inline-block;
            }

            .btn-shop-now:hover {
                background: #ff5520;
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(255, 107, 53, 0.4);
            }

            .swiper-button-next, .swiper-button-prev {
                color: var(--accent-color);
                width: 45px;
                height: 45px;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .swiper-button-next::after, .swiper-button-prev::after {
                font-size: 1.2rem;
            }

            .swiper-pagination-bullet {
                background: var(--accent-color);
            }

            /* ============ Advertisement Carousel ============ */
            .ads-section {
                background: var(--white);
                padding: 2rem;
                margin: 2rem 0;
                border-radius: 15px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            }

            .ads-carousel .swiper {
                height: 300px;
            }

            .ad-slide {
                background: linear-gradient(135deg, var(--secondary-color), #06d6d0);
                display: flex;
                justify-content: center;
                align-items: center;
                color: var(--white);
                text-align: center;
                border-radius: 10px;
            }

            .ad-slide h3 {
                font-size: 2rem;
                font-weight: 700;
                margin-bottom: 0.5rem;
            }

            .ad-slide p {
                font-size: 1rem;
                opacity: 0.95;
            }

            /* ============ Section Title ============ */
            .section-title {
                font-size: 2rem;
                font-weight: 700;
                margin-bottom: 2rem;
                color: var(--primary-color);
                position: relative;
                padding-bottom: 1rem;
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 60px;
                height: 4px;
                background: linear-gradient(90deg, var(--accent-color), var(--secondary-color));
                border-radius: 2px;
            }

            /* ============ Popular Items Grid ============ */
            .popular-section {
                background: var(--white);
                padding: 3rem 2rem;
                margin: 2rem 0;
                border-radius: 15px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            }

            .product-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 2rem;
                padding: 2rem 0;
            }

            .product-card {
                background: var(--card-bg);
                border-radius: 18px;
                overflow: hidden;
                box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
                transition: all 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .product-card:hover {
                transform: translateY(-18px);
                box-shadow: 0 20px 35px rgba(120, 89, 8, 0.45),
                0 0 15px rgba(251, 191, 36, 0.15);
            }

            .product-image {
                width: 100%;
                height: 250px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--white);
                font-size: 3rem;
                position: relative;
                overflow: hidden;
            }

            .product-image::after {
                content: attr(data-discount);
                position: absolute;
                top: 10px;
                right: 10px;
                background: var(--accent-color);
                color: var(--white);
                padding: 0.5rem 1rem;
                border-radius: 50px;
                font-weight: 600;
                font-size: 0.9rem;
            }

            .product-info {
                padding: 1.5rem;
            }

            .product-name {
                font-size: 1.1rem;
                font-weight: 600;
                margin-bottom: 0.5rem;
                color: var(--text-dark);
                min-height: 2.4rem;
            }

            .product-rating {
                color: #ffc107;
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }

            .product-price {
                font-size: 1.5rem;
                font-weight: 700;
                color: var(--accent-color);
                margin-bottom: 1rem;
            }

            .product-link{
                text-decoration: none !important;
                color: inherit;
                display: block;
            }

            .product-link:hover{
                text-decoration: none !important;
                color: inherit;
            }

            .btn-add-cart {
                width: 100%;
                padding: 0.8rem;
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                color: var(--white);
                border: none;
                border-radius: 8px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .btn-add-cart:hover {
                transform: scale(1.02);
                box-shadow: 0 8px 20px rgba(26, 58, 82, 0.3);
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

            /* ============ Responsive Design ============ */
            @media (max-width: 768px) {
                .navbar {
                    padding: 1rem 0;
                }

                .navbar-brand {
                    font-size: 1.3rem;
                }

                .nav-buttons {
                    gap: 0.5rem;
                }

                .btn-login, .btn-signup {
                    padding: 0.5rem 1rem;
                    font-size: 0.9rem;
                }

                .swiper {
                    height: 300px;
                }

                .slide-content h2 {
                    font-size: 1.8rem;
                }

                .product-grid {
                    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                    gap: 1.5rem;
                }

                .section-title {
                    font-size: 1.5rem;
                }

                .search-container {
                    width: 100%;
                    max-width: 100%;
                }

                .search-box {
                    width: 100%;
                }

                .nav-buttons {
                    width: 100%;
                    margin-top: 10px;
                }

                .cart-btn {
                    align-self: flex-start;
                }
            }

            /* ============ Animations ============ */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .featured-carousel,
            .ads-section,
            .popular-section {
                animation: fadeInUp 0.6s ease-out;
            }

            .product-card {
                animation: fadeInUp 0.6s ease-out;
            }

            

            /* ===== Search Button ===== new*/
            .search-btn{
                border:none;
                background:linear-gradient(135deg,#fbbf24,#f59e0b);
                padding:12px 25px;
                border-radius:12px;
                font-weight:700;
            }

            .search-btn:hover{
                transform: translateY(-2px);
                box-shadow: 0 0 20px rgba(251,191,36,0.4);
            }

            /* ===== Search Section ===== */
            
            .search-section{
                position: sticky;
                top: 88px;
                z-index: 999;
                padding: 8px 0;
                background: rgba(255,255,255,0.75);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(16px);

                border-bottom: 1px solid rgba(255,255,255,0.3);

                box-shadow:
                    0 8px 30px rgba(0,0,0,0.06),
                    0 1px 0 rgba(255,255,255,0.6) inset;
            }

            /* Search Wrapper */
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

            /* Search Box */
            .search-box{
                flex:1;

                display:flex;
                align-items:center;
                gap:12px;

                background:#ffffff;

                border:1px solid #ececec;
                border-radius:18px;

                padding:16px 18px;

                transition:all 0.3s ease;

                box-shadow:0 4px 15px rgba(0,0,0,0.04);
            }

            /* Hover + Focus */
            .search-box:hover,
            .search-box:focus-within{
                border-color:#fbbf24;

                transform:translateY(-2px);

                box-shadow:
                    0 10px 25px rgba(251,191,36,0.18),
                    0 0 0 4px rgba(251,191,36,0.08);
            }

            /* Icons */
            .search-box i{
                font-size:1rem;
                color:#f59e0b;
            }

            /* Inputs */
            .search-box input{
                width:100%;
                border:none;
                outline:none;
                background:transparent;

                font-size:1rem;
                font-weight:500;

                color:#111827;
            }

            .search-box input::placeholder{
                color:#9ca3af;
                font-weight:400;
            }

            /* Search Button */
            .search-btn{
                border:none;

                padding:16px 30px;

                border-radius:18px;

                font-weight:700;
                letter-spacing:0.5px;

                color:#111827;

                background: linear-gradient(135deg,#fbbf24,#f59e0b);

                transition:all 0.3s ease;

                box-shadow:
                    0 10px 20px rgba(251,191,36,0.25);
            }

            /* Button Hover */
            .search-btn:hover{
                transform:translateY(-3px) scale(1.02);

                box-shadow:
                    0 15px 30px rgba(251,191,36,0.4),
                    0 0 20px rgba(251,191,36,0.2);
            }

            /* Mobile Responsive */
            @media(max-width: 992px){

                .search-section{
                    top:76px;
                    padding:14px 0;
                }

                .search-wrapper{
                    flex-direction:column;
                    align-items:stretch;

                    padding:12px;
                    border-radius:20px;
                }

                .search-box{
                    width:100%;
                }

                .search-btn{
                    width:100%;
                }
            }


            /* ===== Cart Button ===== */
            .cart-btn {
                position: relative;
                width: 48px;
                height: 48px;
                border-radius: 50%;
                border: none;
                background: rgba(255,255,255,0.1);
                color: white;
                font-size: 1.1rem;
                transition: 0.3s;
            }

            .cart-btn:hover {
                background: var(--accent-color);
                color: #111827;
                transform: translateY(-2px);
            }

            .cart-badge {
                position: absolute;
                top: -5px;
                right: -3px;
                background: #ef4444;
                color: white;
                font-size: 0.7rem;
                width: 18px;
                height: 18px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* ===== Login Modal ===== */
            .modal-content {
                border: none;
                border-radius: 20px;
                overflow: hidden;
            }

            .login-modal-header {
                background: linear-gradient(135deg, #111827, #1f2937);
                color: white;
                padding: 2rem;
                text-align: center;
            }

            .login-modal-header i {
                font-size: 3rem;
                color: var(--accent-color);
                margin-bottom: 1rem;
            }

            .login-form {
                padding: 2rem;
            }

            .form-control {
                border-radius: 12px;
                padding: 0.9rem 1rem;
                border: 1px solid #d1d5db;
            }

            .form-control:focus {
                border-color: var(--accent-color);
                box-shadow: 0 0 10px rgba(251,191,36,0.3);
            }

            .btn-login-submit {
                width: 100%;
                padding: 0.9rem;
                border: none;
                border-radius: 12px;
                background: linear-gradient(135deg, #fbbf24, #f59e0b);
                color: #111827;
                font-weight: 700;
                transition: 0.3s;
            }

            .btn-login-submit:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(251,191,36,0.3);
            }
        </style>
    </head>

    <body>
        <!-- ============ Navigation Bar ============ -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid px-3 px-lg-4">

            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-coins"></i> XauMarket
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- RIGHT ACTIONS -->
                <div class="ms-auto nav-buttons d-flex flex-column flex-lg-row gap-2 align-items-center">

                    <!-- Cart -->
                    <button class="cart-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge">0</span>
                    </button>

                    <!-- Login -->
                    <a href="login.php" class="btn-login text-decoration-none w-100 w-lg-auto text-center">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>

                    <!-- Signup -->
                    <a href="signup.php" class="btn-signup text-decoration-none w-100 w-lg-auto text-center">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- SEARCH AREA -->
    <section class="search-section">
        <div class="container">
            <div class="search-wrapper">

                <!-- Product Search -->
                <div class="search-box">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search products...">
                </div>

                <!-- Location Search -->
                <div class="search-box">
                    <i class="fas fa-location-dot"></i>
                    <input type="text" placeholder="Search location...">
                </div>

                <!-- Search Button -->
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                    Search
                </button>

            </div>
        </div>
    </section>



        <div class="container">
            <!-- ============ Featured Products Carousel ============ -->
            <section class="featured-carousel">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div style="background: linear-gradient(135deg, #111827 0%, #1e293b 100%); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-laptop" style="font-size: 5rem; color: rgba(255,255,255,0.2);"></i>
                                </div>
                                <div class="slide-content">
                                    <h2>Premium Electronics</h2>
                                    <p>Discover the latest gadgets and tech at unbeatable prices</p>
                                    <button class="btn-shop-now">Shop Now</button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-shopping-cart" style="font-size: 5rem; color: rgba(255,255,255,0.2);"></i>
                                </div>
                                <div class="slide-content">
                                    <h2>Fashion Collection</h2>
                                    <p>Trendy outfits for every occasion - Up to 50% off!</p>
                                    <button class="btn-shop-now">Shop Now</button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                                <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-home" style="font-size: 5rem; color: rgba(255,255,255,0.2);"></i>
                                </div>
                                <div class="slide-content">
                                    <h2>Home & Living</h2>
                                    <p>Transform your space with our exclusive home collection</p>
                                    <button class="btn-shop-now">Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Pagination dots -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- ============ Advertisement Carousel ============ -->
            <section class="ads-section">
                <h3 class="section-title">Special Promotions</h3>
                <div class="swiper ads-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ad-slide">
                            <div>
                                <h3>🎁 Summer Sale</h3>
                                <p>Get up to 70% off on selected items</p>
                            </div>
                        </div>
                        <div class="swiper-slide ad-slide" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                            <div>
                                <h3>⭐ New Arrivals</h3>
                                <p>Check out our latest trending products</p>
                            </div>
                        </div>
                        <div class="swiper-slide ad-slide" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                            <div>
                                <h3>🚚 Free Shipping</h3>
                                <p>On orders over $50 - Limited time offer</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- ============ Popular Items ============ -->
            <section class="popular-section">

                <h2 class="section-title">Popular Items</h2>
                <div class="product-grid">
                    <!-- Product 1 -->
                    <a href="product_detail.php" class="product-link">
                        <div class="product-card">

                            <div class="product-image" data-discount="-15%">
                                <i class="fas fa-headphones"></i>
                            </div>

                            <div class="product-info">
                                <h3 class="product-name">Wireless Headphones</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    (128 reviews)
                                </div>
                                <div class="product-price">$79.99</div>
                                <button class="btn-add-cart">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image" data-discount="-25%" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">4K Camera</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (256 reviews)
                            </div>
                            <div class="product-price">$249.99</div>
                            <button class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image" data-discount="-20%" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                            <i class="fas fa-watch"></i>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Smart Watch</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                (89 reviews)
                            </div>
                            <div class="product-price">$149.99</div>
                            <button class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image" data-discount="-30%" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Latest Smartphone</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (512 reviews)
                            </div>
                            <div class="product-price">$699.99</div>
                            <button class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-image" data-discount="-10%" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                            <i class="fas fa-keyboard"></i>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Gaming Keyboard</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                (67 reviews)
                            </div>
                            <div class="product-price">$119.99</div>
                            <button class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-image" data-discount="-35%" style="background: linear-gradient(135deg, #ff9a56 0%, #ff6a88 100%);">
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Sports Shoes</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (342 reviews)
                            </div>
                            <div class="product-price">$89.99</div>
                            <button class="btn-add-cart">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ============ FOOTER ============ -->
        <?php include('includes/footer.php'); ?>

        <!-- ============ AUTH MODAL (Login Required) ============ -->
        <div class="modal fade" id="authModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

            <!-- Header -->
            <div class="login-modal-header">
                <i class="fas fa-user-lock"></i>
                <h3 class="mt-2">Login Required</h3>
                <p style="opacity:0.85;">Please login or sign up to continue shopping</p>
            </div>

            <!-- Body -->
            <div class="login-form">

                <div class="d-grid gap-3">
                <a href="login.php" class="btn btn-login-submit">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>

                <a href="signup.php" class="btn btn-outline-dark btn-lg rounded-3">
                    <i class="fas fa-user-plus"></i> Sign Up
                </a>
                </div>

                <hr class="my-4">

                <p class="text-center text-muted" style="font-size:0.9rem;">
                You must have an account to add items to cart
                </p>

                <button class="btn btn-light w-100 mt-2" data-bs-dismiss="modal">
                Maybe Later
                </button>
            </div>

            </div>
        </div>
        </div>

        

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
        <script>
            // Initialize featured products carousel
            const mySwiper = new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.mySwiper .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.mySwiper .swiper-button-next',
                    prevEl: '.mySwiper .swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                }
            });

            // Initialize advertisement carousel
            const adsSwiper = new Swiper('.ads-carousel', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.ads-carousel .swiper-pagination',
                    clickable: true,
                },
                effect: 'slide'
            });

            // Add click handlers for buttons
            

            document.querySelectorAll('.btn-shop-now').forEach(btn => {
                btn.addEventListener('click', function() {
                    alert('Redirecting to shop...');
                });
            });

            const authModal = new bootstrap.Modal(document.getElementById('authModal'));

            document.querySelectorAll('.btn-add-cart').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();

                    // show login required modal instead of adding to cart
                    authModal.show();
                });
            });
        </script>

    </body>
    </html>
