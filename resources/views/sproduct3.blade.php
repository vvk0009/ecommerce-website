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
                <li><a class="active" href="{{asset('shop')}}">Shop</a></li>
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
     
    <section id="prodetails" class="section-p1">
    <div class="left">
        <img src="/img/products/f3.jpg" width="100%" id="main-img" alt="">
        <div class="small-img-group">
          <div class="small-img-col">
            <img src="/img/products/f1.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="/img/products/f2.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="/img/products/f3.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="/img/products/f4.jpg" width="100%" class="small-img" alt="">
          </div>
         </div>
    </div>
    <div class="right">
        <h6>home /T-shirts</h6>
        <h4>Men,s fashion T-shirts</h4>
        <h2>750 RS</h2> <br>
        <!-- <select >
            <option >Select Size</option>
            <option >XL</option>
            <option >XXL</option>
            <option >Small</option>
            <option >Large</option>
           
        </select>
        <input type="number" value="1"> -->
        <button class="normal"><a href="{{asset('buy')}}">Buy Now</a></button>
        <h4>Product details</h4>
        <span>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit exercitationem temporibus porro dolorem molestias rem tempore sed inventore illum illo perspiciatis similique qui nesciunt libero et consequatur, quaerat iure facilis aliquam at. Autem, sapiente cupiditate. Soluta dicta harum odio provident, labore molestiae quod aliquam voluptates eaque velit cum quae autem debitis nihil. Aperiam, itaque.
        </span>
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

    <script>
        var maining = document.getElementById('main-img');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            maining.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            maining.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            maining.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            maining.src = smallimg[3].src;
        }
    </script>
    <script src="/script.js"></script>
</body>

</html>