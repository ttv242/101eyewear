<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" />

    <meta name="author" content="CodePixar" />

    <meta name="description" content="" />

    <meta name="keywords" content="" />

    <meta charset="UTF-8" />

    <title>Eyewear</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">

    <script nonce="30056003-5a6a-4015-850d-45575fb00857">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            }))))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                        "_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "{{ asset('cdn-cgi/zaraz/sd0d9.js?z=') }}" + btoa(encodeURIComponent(JSON.stringify(f[
                        h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<style>
    body {

        /* background: #e2eaef; */
        font-family: "Open Sans", sans-serif;

    }

    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 60px;
    }

    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        border-radius: 1px;
        background: #7ac400;
        border-radius: 5vw;
        left: 0;
        right: 0;
        bottom: -20px;
    }

    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }

    .carousel .item {
        color: #747d89;
        min-height: 325px;
        text-align: center;
        overflow: hidden;
    }

    .carousel .thumb-wrapper {
        padding: 25px 15px;
        background: #fff;
        border-radius: 6px;
        text-align: center;
        position: relative;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }

    .carousel .item .img-box {
        height: 120px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }

    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .carousel .item h4 {
        font-size: 18px;
    }

    .carousel .item h4,
    .carousel .item p,
    .carousel .item ul {
        margin-bottom: 5px;
    }

    .carousel .thumb-content .btn {
        color: #7ac400;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #7ac400;
        padding: 6px 14px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 20px;
    }

    .carousel .thumb-content .btn:hover,
    .carousel .thumb-content .btn:focus {
        color: #fff;
        background: #7ac400;
        box-shadow: none;
    }

    .carousel .thumb-content .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }

    .carousel .item-price strike {
        opacity: 0.7;
        margin-right: 5px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        height: 44px;
        width: 40px;
        background: #7ac400;
        margin: auto 0;
        border-radius: 4px;
        opacity: 0.8;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background: #78bf00;
        opacity: 1;
    }

    .carousel-control-prev i,
    .carousel-control-next i {
        font-size: 36px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -19px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: #fff;
        text-shadow: none;
        font-weight: bold;
    }

    .carousel-control-prev i {
        margin-left: -2px;
    }

    .carousel-control-next i {
        margin-right: -4px;
    }

    .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border: none;
    }

    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }

    .carousel .wish-icon {
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 99;
        cursor: pointer;
        font-size: 16px;
        color: #abb0b8;
    }

    .carousel .wish-icon .fa-heart {
        color: #ff6161;
    }

    .star-rating li {
        padding: 0;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffc000;
    }
</style>

<body>
    <header class="header-area">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg">
                    <div class="col menu-left">
                        <a class="active" href="index.html">Trang chủ</a>
                        <a href="modules/category.html">Thương hiệu</a>
                        <a href="modules/archive.html">Archive</a>
                    </div>
                    <div class="col-5 text-lg-center mt-2 mt-lg-0">
                        <span class="logo-outer">
                            <span class="logo-inner">
                                <a href="index.html"><img class="col-lg-4 col-md-5 col-8 mx-auto"
                                        src="{{ asset('images/logo.png') }}" alt="" /></a>
                            </span>
                        </span>
                    </div>
                    <nav class="col navbar navbar-expand-lg justify-content-end">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="lnr lnr-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
                            <ul class="navbar-nav justify-content-center w-100">
                                <li class="nav-item hide-lg">
                                    <a class="nav-link" href="index.html">Trang chủ</a>
                                </li>
                                <li class="nav-item hide-lg">
                                    <a class="nav-link" href="modules/category.html">Thương hiệu</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="modules/elements.html">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="modules/blog-single.html">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="modules/contact.html">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="home-banner-area relative">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel home-banner-owl">
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b1.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b2.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b3.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b4.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b5.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b6.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b7.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img class="assets/images-fluid" src="{{ asset('images/banner/b4.jpg') }}" alt="" />
                        <div class="text-wrapper">
                            <a href="#" class="d-flex">
                                <h1>
                                    Make the world a better place <br />
                                    with camera
                                </h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-icons">
            <ul>
                <li>
                    <a href="index.html"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="diffrent">sharre now</li>
            </ul>
        </div>
    </section>

    @yield('content')

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                            value="" type="text">
                                    </div>

                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="{{ asset('images/instagram/i1.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i2.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i3.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i4.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i5.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i6.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i7.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('images/instagram/i8.jpg') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.tabs.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('js/bootstrap-datepicke') }}r.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7bcad2b3dd863d37","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".wish-icon i").click(function() {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
    </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/revive/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 02:12:54 GMT -->

</html>
