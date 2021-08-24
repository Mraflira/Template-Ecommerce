<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>
        Home
    </title>
</head>
<div class="section1">
    <div class="top-header">
        <div class="top-header-email"><i class="far fa-envelope"></i><span>Example@gmail.com</span></div>
        <div class="top-header-sosmed"><i class="fab fa-instagram"></i><i class="fab fa-whatsapp"></i><i
                class="fab fa-facebook-f"></i><i class="fab fa-youtube"></i></div>
    </div>
    <div class="header">
        <div class="logo"><img src="/images/logo-ipsum.svg  " alt=""></div>
        <div class="search">
            <div class="search-box"><input type="text" placeholder="Search Produk In Here"><i class="fas fa-search"></i>
            </div>
        </div>
        <div class="cart"><i class="fas fa-shopping-cart"></i></div>
    </div>
</div>
<div class="section-menu" id="slider">
    <div class="menu">
        <div class="hamburger-menu-section">
            <div class="nav2">
            <div class="header-nav2">
				<h2>View By Categories</h2>
			</div>
			<ul>
                <li class="sub-menu sub-btn1"><label>Produk Pria</label>
                </li>
				<li class="sub-menu"><label>Insight to Instagram</label></li>
				<li class="sub-menu sub-btn2"><label>Produk Pria<span><i class="fas fa-caret-down icon-sub-menu2"></i></span></label>
					<ul class="sub-menu-show2">
						<li><a href="#"> Lorem Ipsum Dolor</a></li>
					</ul>
				</li>
				<li class="sub-menu sub-btn3"><label>Produk Wanita<span><i class="fas fa-caret-down icon-sub-menu3"></i></span></label>
					<ul class="sub-menu-show3">
						<li><a href="#">Lorem Ipsum Dolor</a></li>
					</ul>
				</li>
				<li class="sub-menu"><label>Best Seller</label></li>
				<li class="sub-menu"><label>Favorite Brand</label></li>
				<li class="sub-menu"><label>How To Order</label></li>
			</ul>
            </div>
            <div class="hamburger-menu">
                <input type="checkbox" class="checkbox" id="controls">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop by Category</a></li>
                <li><a href="#">Promo</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><input type="submit" value="Login"><i class="fas fa-user"></i></li>
            </ul>
        </nav>
    </div>
</div>

<div class="menu-mobile">
    <div><a href="#">Home</a></div>
    <div><a href="#">Shop by Category</a></div>
    <div><a href="#">Promo</a></div>
    <div><a href="#">About Us</a></div>
    <div><a href="#">Contact</a></div>
</div>
<body>
    <?= $this->renderSection('content') ?>
    <script src="js/swiper-bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="js/hamburger-menu.js"></script>
    <script type="text/javascript" src="js/trending-product.js"></script>
    <script type="text/javascript" src="js/testimonials.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
</body>
<footer>
    <div class="footer">
        <div class="footer-kiri">
            <div class="logo-footer">
                <img src="images/logo.svg" alt="">
            </div>
            <div class="menu-footer">
                <p>
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Promo</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                </p>
            </div>
            <div class="footer-copyright">
                <p>Lorem Ipsum © 2021</p>
            </div>
        </div>
        <div class="footer-tengah">
                <div>
                <i class="fas fa-map-marker-alt"></i>
                <p><span>Jl. Bkr No. 15
                tawang,</span> <br>Kota Tasikmalaya</p>
                </div>

                <div>
                <i class="fas fa-phone-alt"></i>
                <p>085245454545</p>
                </div>

                <div>
                <i class="fas fa-envelope"></i>
                <p>loremipsum@gmail.com</p>
                </div>
        </div>
        <div class="footer-kanan">
            <div class="about-footer">
            <h1>About Company</h1>
             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, natus! Atque reiciendis amet laborum perferendis! Placeat.</p>
            </div>
            <div class="icon-footer">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

</html>