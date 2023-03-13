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
                <li><a  href="{{asset('home')}}">Home</a></li>
                <li><a href="{{asset('shop')}}">Shop</a></li>
                <!-- <li><a href="blog.html">Blog</a></li> -->
                <li><a href="{{asset('about')}}">About</a></li>
                <li><a class="active"href="{{asset('contact')}}">Contact</a></li>
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
   
        <h2>#let's talk</h2>
        
        <p>LEAVE a massage where we can talk </p>
       
    </section>
    
    <section id="contact" class="section-p1">
        <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Vist one of our agency locations or contact us today</h2>
        <h3>Head office</h3>
        <div>
            <li>
                <i class="fa-solid fa-location-dot"></i>
                <p>Vijay nagar indore</p>
            </li>
            <li>
                <i class="fa-regular fa-envelope"></i>
                <p>info@qualityweb.in</p>
            </li>
            
        </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.3351795924896!2d75.89151466479552!3d22.752939135090358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396302af403406fb%3A0x5b50834b117f8bab!2sVijay%20Nagar%2C%20Indore%2C%20Madhya%20Pradesh%20452010!5e0!3m2!1sen!2sin!4v1674223761838!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <section id="form-details"class="section-p1">
        <form action="">
            <span>LEAVE A MASSAGE</span>
            <h2>We love to hear you</h2>
            <input type="text" required="" placeholder="Enter your Name">
            <input type="email" placeholder="Enter your email">
            <input type="text" placeholder="Enter your subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Massage"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            
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