<x-mylayouts.layout-default title="E-Commerce" :hideBanner="true">
    <!-- ====== Add-on Styles (non-destructive) ====== -->
    <style>
        :root {
            --brand: #0d6efd;
            /* primary */
            --brand-2: #6610f2;
            /* accent */
            --dark: #0f1220;
            --text: #2b2f3c;
            --muted: #6c757d;
            --card: #ffffff;
            --soft: #f6f8fb;
            --ring: rgba(13, 110, 253, .35);
            --shadow: 0 10px 30px rgba(15, 18, 32, .08);
        }

        /* Global polish */
        html {
            scroll-behavior: smooth
        }

        body {
            color: var(--text)
        }

        .hero .overlay {
            background: linear-gradient(90deg, rgba(15, 18, 32, .55), rgba(15, 18, 32, .15));
        }

        /* Headings */
        .heading-section h2,
        .heading-section-bold h2 {
            letter-spacing: .3px
        }

        .vr {
            color: #fff;
            padding: .4rem .8rem;
            background-size: cover;
            background-position: center;
            border-radius: 999px;
            box-shadow: var(--shadow);
            display: inline-block;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
        }

        /* Buttons — keeps your classes, just elevates them */
        .btn {
            position: relative;
            border-radius: 14px;
            font-weight: 700;
            letter-spacing: .02em;
            outline: none;
            border: none;
            transition: transform .15s ease, box-shadow .2s ease, background .2s ease, color .2s ease;
            box-shadow: 0 6px 16px rgba(13, 110, 253, .18);
        }

        .btn:focus-visible {
            box-shadow: 0 0 0 6px var(--ring)
        }

        .btn:active {
            transform: translateY(1px)
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            color: #fff !important;
        }

        .btn-primary:hover {
            filter: saturate(1.1) brightness(1.02)
        }

        .btn-white {
            background: #fff;
            color: var(--dark) !important;
            box-shadow: 0 6px 16px rgba(15, 18, 32, .1);
            border: 1px solid rgba(15, 18, 32, .06);
        }

        .btn-white:hover {
            background: #fdfdfd
        }

        /* CTA buttons inside product cards */
        .bottom-area .add-to-cart,
        .bottom-area .buy-now {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .4rem;
            border-radius: 12px;
            padding: .6rem 1rem !important;
            font-weight: 700;
            border: 1px solid rgba(15, 18, 32, .08);
            background: #fff;
            transition: transform .15s ease, box-shadow .2s ease, border-color .2s ease;
            white-space: nowrap;
        }

        .bottom-area .add-to-cart:hover,
        .bottom-area .buy-now:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
            border-color: rgba(13, 110, 253, .25);
        }

        /* Hero sizing polish */
        .hero .slider-item .text .subheading {
            background: rgba(255, 255, 255, .92);
            color: var(--dark);
            padding: .35rem .75rem;
            border-radius: 999px;
            font-weight: 700;
            display: inline-block;
            box-shadow: 0 6px 14px rgba(15, 18, 32, .08);
        }

        .hero .slider-item .text h1 {
            line-height: 1.05;
            font-weight: 800;
            text-shadow: 0 10px 30px rgba(0, 0, 0, .12);
        }

        .hero .slider-item .text p {
            max-width: 560px;
            font-size: 1.05rem;
        }

        /* About/feature icons */
        .services {
            background: #fff;
            border-radius: 18px;
            box-shadow: var(--shadow);
            padding: 1.25rem;
            transition: transform .15s ease, box-shadow .2s ease;
        }

        .services:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(15, 18, 32, .12)
        }

        .services .icon {
            width: 66px;
            height: 66px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(13, 110, 253, .12), rgba(102, 16, 242, .12));
            box-shadow: inset 0 0 0 1px rgba(13, 110, 253, .2);
        }

        .services .heading {
            font-weight: 800
        }

        /* Product cards */
        .product {
            background: var(--card);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform .15s ease, box-shadow .2s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(15, 18, 32, .12)
        }

        .product .img-prod {
            display: block;
            position: relative
        }

        .product .img-prod img {
            object-fit: cover;
            width: 100%;
            height: 280px
        }

        .product .status {
            position: absolute;
            top: 14px;
            left: 14px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            font-weight: 800;
            padding: .25rem .55rem;
            border-radius: 999px;
            font-size: .8rem;
            box-shadow: 0 8px 18px rgba(34, 197, 94, .25);
        }

        .product .text {
            flex: 1
        }

        .product .text h3 a {
            color: var(--dark);
            text-decoration: none
        }

        .price .price-dc {
            text-decoration: line-through;
            color: var(--muted)
        }

        .price .price-sale {
            color: #22c55e;
            font-weight: 800
        }

        .rating span {
            opacity: .6
        }

        .bottom-area {
            gap: .6rem
        }

        /* Choose blocks */
        .ftco-choose .img,
        .ftco-choose .img-2 {
            border-radius: 22px;
            box-shadow: var(--shadow);
            min-height: 380px;
            background-size: cover;
            background-position: center;
        }

        .text-2,
        .wrap-about {
            background: #fff;
            border-radius: 22px;
            box-shadow: var(--shadow)
        }

        .text-2 p,
        .wrap-about p {
            color: #3a4151
        }

        /* Counters */
        #section-counter {
            background-size: cover;
            background-position: center;
            position: relative;
        }

        #section-counter::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(15, 18, 32, .55);
        }

        #section-counter .block-18 {
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(6px);
            border-radius: 18px;
            padding: 1.25rem;
            min-width: 160px;
        }

        #section-counter .number {
            font-size: 2rem;
            color: #fff;
            text-shadow: 0 8px 18px rgba(0, 0, 0, .25);
        }

        #section-counter span {
            color: #e9eefc
        }

        /* Testimonials */
        .carousel-testimony .item .testimony-wrap {
            background: #fff;
            border-radius: 22px;
            box-shadow: var(--shadow);
        }

        .testimony-wrap .user-img {
            border-radius: 18px;
            box-shadow: inset 0 0 0 3px rgba(255, 255, 255, .85), 0 12px 24px rgba(15, 18, 32, .18);
        }

        /* Newsletter */
        .ftco-section-parallax .heading-section h2 {
            color: #fff;
            text-shadow: 0 8px 22px rgba(0, 0, 0, .35)
        }

        .subscribe-form .form-control {
            height: 52px;
            border-radius: 14px 0 0 14px;
            border: 0;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .4);
        }

        .subscribe-form .submit {
            border-radius: 0 14px 14px 0;
            border: 0;
            font-weight: 800;
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            color: #fff;
            box-shadow: 0 10px 24px rgba(13, 110, 253, .28);
        }

        /* Utilities */
        .horizontal {
            display: flex;
            flex-direction: column;
            gap: .75rem
        }

        .ftco-section.bg-light {
            background: var(--soft) !important
        }

        .ftco-animate {
            will-change: transform, opacity
        }

        /* Small responsive tweaks */
        @media (max-width: 991.98px) {
            .product .img-prod img {
                height: 240px
            }

            .hero .slider-item .text h1 {
                font-size: 2rem
            }
        }
    </style>

    <!-- ====== Optional: Small ripple effect on click for all .btn ====== -->
    <script>
        (function() {
            document.addEventListener('click', function(e) {
                const t = e.target.closest('.btn, .add-to-cart, .buy-now');
                if (!t) return;
                const circle = document.createElement('span');
                const d = Math.max(t.clientWidth, t.clientHeight);
                circle.style.width = circle.style.height = d + 'px';
                circle.style.position = 'absolute';
                circle.style.left = (e.clientX - t.getBoundingClientRect().left - d / 2) + 'px';
                circle.style.top = (e.clientY - t.getBoundingClientRect().top - d / 2) + 'px';
                circle.style.background = 'rgba(255,255,255,.35)';
                circle.style.borderRadius = '50%';
                circle.style.pointerEvents = 'none';
                circle.style.transform = 'scale(0)';
                circle.style.opacity = '1';
                circle.style.transition = 'transform .45s ease, opacity .6s ease';
                t.style.position = getComputedStyle(t).position === 'static' ? 'relative' : '';
                t.appendChild(circle);
                requestAnimationFrame(() => {
                    circle.style.transform = 'scale(2.4)';
                    circle.style.opacity = '.0';
                });
                setTimeout(() => circle.remove(), 650);
            }, {
                passive: true
            });
        })();
    </script>

    <!-- ====== Your Original Markup (unchanged content; only added classes/attrs when helpful) ====== -->

    <section id="home-section" class="hero" aria-label="Hero">
        <div class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight"
                            style="background-image:url('images/bg_1.jpg');" role="img"
                            aria-label="Fashion cover 1"></div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">ShopSphere</span>
                                <div class="horizontal">
                                    <h3 class="vr" style="background-image: url('images/divider.jpg');">Established
                                        Since 2022</h3>
                                    <h1 class="mb-4 mt-3">Catch the Best Deals in Tech, Fashion & More <br><span>Stylish
                                            &amp; Look</span></h1>
                                    <p>ShopSphere is Trinidad & Tobago’s all-in-one online marketplace. From phones to
                                        fashion, discover the latest products at unbeatable prices with fast local
                                        delivery.

                                        We built ShopSphere to make online shopping simple, secure, and rewarding. Enjoy
                                        loyalty points, exclusive deals, and a seamless checkout experience.

                                        Discover eco-friendly shopping options, secure payments, and transparent
                                        pricing all powered by a platform made for our local community.

                                        ShopSphere connects you to trusted sellers across the country, bringing global
                                        standards to local shopping.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3 mt-3"
                                            aria-label="Discover products">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight"
                            style="background-image:url('images/bg_2.jpg');" role="img"
                            aria-label="Fashion cover 2"></div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Winkel eCommerce Shop</span>
                                <div class="horizontal">
                                    <h3 class="vr" style="background-image: url(images/divider.jpg);">Best eCommerce
                                        Online Shop</h3>
                                    <h1 class="mb-4 mt-3">A Thouroughly <span>Modern</span> Woman</h1>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. It is a paradisematic country.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3 mt-3"
                                            aria-label="Shop now">Shop Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" aria-label="About shipping">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url('images/about.jpg');">
                    <a href="https://vimeo.com/45830194"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center"
                        aria-label="Play video about shipping">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Better Way to Ship Your Products</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                            Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                            agency, where they abused her for their.</p>
                        <div class="row ftco-services">
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-002-recommended" aria-hidden="true"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Refund Policy</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-001-box" aria-hidden="true"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Premium Packaging</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-003-medal" aria-hidden="true"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Superior Quality</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- pb-md-5 -->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" aria-label="Best sellers">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Best Sellers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Product 1 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-1.jpg" alt="Floral Jacquard Pullover">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0">
                                        <span class="mr-2 price-dc">$120.00</span>
                                        <span class="price-sale">$80.00</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0" aria-label="Rating 0 out of 5">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-2.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-3.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-4.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- row -->
        </div>
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt" aria-label="Season collections">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-stretch">
                    <div class="img" style="background-image: url(images/about-1.jpg);" role="img"
                        aria-label="Women collection"></div>
                </div>
                <div class="col-md-4 py-md-5 ftco-animate">
                    <div class="text py-3 py-md-5">
                        <h2 class="mb-4">New Women's Clothing Summer Collection 2019</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-5 order-md-last d-flex align-items-stretch">
                    <div class="img img-2" style="background-image: url('images/about-2.jpg');" role="img"
                        aria-label="Men collection"></div>
                </div>
                <div class="col-md-7 py-3 py-md-5 ftco-animate">
                    <div class="text text-2 py-md-5">
                        <h2 class="mb-4">New Men's Clothing Summer Collection 2019</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" aria-label="Products">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Product 5 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-5.jpg" alt="Floral Jacquard Pullover">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span class="mr-2 price-dc">$120.00</span><span
                                            class="price-sale">$80.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-6.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-7.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="images/product-8.jpg" alt="Floral Jacquard Pullover">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="#">Floral Jackquard Pullover</a></h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="pricing">
                                    <p class="price mb-0"><span>$120.00</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3 mt-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                            class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- row -->
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url('images/bg_4.jpg');" aria-label="Stats">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Partner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Awards</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section" aria-label="Testimonials">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url('images/person_1.jpg')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url('images/person_2.jpg')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url('images/person_3.jpg')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url('images/person_1.jpg')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url('images/person_1.jpg')">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- owl -->
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section class="ftco-section-parallax" aria-label="Newsletter">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form" aria-label="Newsletter form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address"
                                            inputmode="email" aria-label="Email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-mylayouts.layout-default>
