<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopHub - Your Modern Shopping Destination</title>
    
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
            --primary-color: #1a3a52;
            --secondary-color: #0f8b8d;
            --accent-color: #ff6b35;
            --light-bg: #f8f9fa;
            --white: #ffffff;
            --text-dark: #2c3e50;
            --border-light: #e0e0e0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            background-color: var(--light-bg);
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
            background: linear-gradient(135deg, var(--accent-color), #ff8c5a);
            color: var(--white);
        }

        .btn-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.4);
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
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid var(--border-light);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
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
    </style>
</head>

<body>
    <!-- ============ Navigation Bar ============ -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <i class="fas fa-shopping-bag"></i>
                ShopHub
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto nav-buttons">
                    <button class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                    <button class="btn-signup">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- ============ Featured Products Carousel ============ -->
        <section class="featured-carousel">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
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

    <!-- ============ Footer ============ -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <!-- About Us -->
                <div class="footer-section">
                    <h4><i class="fas fa-store"></i> About Us</h4>
                    <p style="margin-bottom: 1rem;">ShopHub is your ultimate destination for quality products at the best prices. We're committed to providing an exceptional shopping experience with premium customer service.</p>
                    <div>
                        <a href="#" style="margin-right: 1rem;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="margin-right: 1rem;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="margin-right: 1rem;"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Contact Us -->
                <div class="footer-section">
                    <h4><i class="fas fa-phone"></i> Contact Us</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> Email: <a href="mailto:support@shophub.com">support@shophub.com</a></li>
                        <li><i class="fas fa-phone"></i> Phone: <a href="tel:+1800123456">+1-800-123-456</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> Address: 123 Commerce Street, Shopping City, SC 12345</li>
                        <li><i class="fas fa-clock"></i> Hours: Mon-Fri 9AM-6PM EST</li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="footer-section">
                    <h4><i class="fas fa-headset"></i> Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Support</a></li>
                    </ul>
                </div>

                <!-- Sponsorship -->
                <div class="footer-section">
                    <h4><i class="fas fa-hand-holding-heart"></i> Partnership & Sponsorship</h4>
                    <ul>
                        <li><a href="#">Become a Sponsor</a></li>
                        <li><a href="#">Brand Partnerships</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                        <li><a href="#">Corporate Inquiries</a></li>
                        <li><a href="#">Media Relations</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 ShopHub. All rights reserved. | <a href="#" style="color: var(--accent-color);">Privacy Policy</a> | <a href="#" style="color: var(--accent-color);">Terms of Service</a></p>
            </div>
        </div>
    </footer>

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
        document.querySelectorAll('.btn-login').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Login functionality coming soon!');
            });
        });

        document.querySelectorAll('.btn-signup').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Sign up functionality coming soon!');
            });
        });

        document.querySelectorAll('.btn-shop-now').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Redirecting to shop...');
            });
        });

        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Added to cart!');
            });
        });
    </script>
</body>
</html>
