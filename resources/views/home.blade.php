<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    
   
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
</head>
<body> 
    <section id="Header">
        <a href="#"><img src="/img/ecomm_logo-removebg-preview.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="{{asset('home')}}">Home</a></li>
                <li><a href="{{asset('shop')}}">Shop</a></li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li><a href="{{asset('about')}}">About</a></li>
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
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>on all product</h1>
        <p>save more with coupen & 70% off</p>
        <button>Shop Now</button>
    </section>



    <section id="product-1" class="section-p1">
    <h2>Feature Product</h2>
    <p>Summer collection of new design</p>

    <div class="pro-container">
        <div class="pro" > <a href="{{asset('sproduct')}}">   <img src="/img/products/f1.jpg" alt="" ></a>
            <div class="des">
                <span>adidas</span>
                <h5>T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>750 RS</h4>
            </div>
            <a href="{{asset('sproduct')}}" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro" > <a href="{{asset('sproduct2')}}">   <img src="/img/products/f2.jpg" alt="" ></a>
           
            <div class="des">
                <span>adidas</span>
                <h5>T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>750 RS</h4>
            </div>
            <a href="{{asset('sproduct2')}}"  ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro" > <a href= "{{asset('sproduct3')}}">   <img src="/img/products/f3.jpg" alt="" ></a>
           
            <div class="des">
                <span>adidas</span>
                <h5>T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>750 RS</h4>
            </div>
            <a href="{{asset('sproduct3')}}" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro" > <a href="{{asset('sproduct4')}}">   <img src="/img/products/f4.jpg" alt="" ></a>
           
            <div class="des">
                <span>adidas</span>
                <h5>T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>750 RS</h4>
            </div>
            <a href="{{asset('sproduct4')}}" ><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
       
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
    <!-- <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script>
</body>
</html>