<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    <form class="row g-3 my-5 mx-5">
        <h1 class="text-center">Order Summary</h1>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">E-Mail</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option value="AN">Andaman and Nicobar Islands</option>
      <option value="AP">Andhra Pradesh</option>
      <option value="AR">Arunachal Pradesh</option>
      <option value="AS">Assam</option>
      <option value="BR">Bihar</option>
      <option value="CH">Chandigarh</option>
      <option value="CT">Chhattisgarh</option>
      <option value="DN">Dadra and Nagar Haveli</option>
      <option value="DD">Daman and Diu</option>
      <option value="DL">Delhi</option>
      <option value="GA">Goa</option>
      <option value="GJ">Gujarat</option>
      <option value="HR">Haryana</option>
      <option value="HP">Himachal Pradesh</option>
      <option value="JK">Jammu and Kashmir</option>
      <option value="JH">Jharkhand</option>
      <option value="KA">Karnataka</option>
      <option value="KL">Kerala</option>
      <option value="LA">Ladakh</option>
      <option value="LD">Lakshadweep</option>
      <option value="MP">Madhya Pradesh</option>
      <option value="MH">Maharashtra</option>
      <option value="MN">Manipur</option>
      <option value="ML">Meghalaya</option>
      <option value="MZ">Mizoram</option>
      <option value="NL">Nagaland</option>
      <option value="OR">Odisha</option>
      <option value="PY">Puducherry</option>
      <option value="PB">Punjab</option>
      <option value="RJ">Rajasthan</option>
      <option value="SK">Sikkim</option>
      <option value="TN">Tamil Nadu</option>
      <option value="TG">Telangana</option>
      <option value="TR">Tripura</option>
      <option value="UP">Uttar Pradesh</option>
      <option value="UT">Uttarakhand</option>
      <option value="WB">West Bengal</option>
    </select>
  </div>
  <div class="form-floating">
 Address
    <textarea class="form-control" placeholder="Enter the Address" id="floatingTextarea"></textarea>
    
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Cash On Delivery
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary text-center" type="submit">Place Order</button>
  </div>
</form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>