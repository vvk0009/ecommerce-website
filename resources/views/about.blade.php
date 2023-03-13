<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    
    <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
</head>
<body> 
    <section id="Header">
        <a href="#"><img src="/img/ecomm_logo-removebg-preview.png" class="logo" alt=""></a>
        <div>
        <ul id="navbar">
                <li><a href="{{asset('home')}}">Home</a></li>
                <li><a href="{{asset('shop')}}">Shop</a></li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li><a  class="active"  href="{{asset('about')}}">About</a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>
                <!-- <li><a href="cart.html" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
          
        </div>
    </section>
    <section id="page-header" class="about-header">
   
        <h2>#KnowUs</h2>
        
        <p>All Information about Us</p>
       
    </section>

    <section id="about-head" class="section-p1">
        <img src="/img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem qui fugit temporibus provident nostrum fuga dolorem sit quasi earum atque. Illo eius recusandae repudiandae, tempore vero placeat veritatis culpa earum aut rem ducimus itaque fugit laudantium sit eum, exercitationem minus assumenda inventore tenetur unde voluptas est? Id laudantium perspiciatis dolorum nesciunt voluptatum praesentium deserunt.</p>
            <abbr title="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur itaque reiciendis quam maxime incidunt? Iusto optio qui dolorem veniam id.</abbr>
            <br>
            <br>
            <!-- <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%" >Kanha vishwakarma</marquee> -->
        </div>
    </section>
   

    <footer class="section-p1">
        <div class="col">
            <img src="/img/ecomm_logo-removebg-preview.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address</strong> :vijay nagar indore</p>
            <p><strong>Phone</strong> :123456789 </p>
            <p><strong>Hours</strong> : 10:00 - 18:00 , mon-sat</p>
          
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">about us</a>
            <a href="#">delivary information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & condition</a>
            <a href="#">Contect Us</a>
        </div>
        <div class="col">
            <h4>My account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track my Order</a>
            <a href="#">Help</a>
        </div>

       
    </footer>
    <div class="copyright">
        <p>@ 2023 , QualityWeb -- all right reserved </p>
       </div>
    <script src="/script.js"></script>
</body>
</html>