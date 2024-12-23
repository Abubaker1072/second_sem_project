<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
          <a href="#" class="logo"><img src="/social media aserts and logo/logo.png" alt="Logo"></a>
          <nav class="nav-menu">
            <ul>
              <li><a href="/main page/main.php">Home</a></li>
              <li><a href="/destination page/des.php">Destinations</a></li>
              <li><a href="/booking page/booking.php">Booking</a></li>
              <li><a href="/signuppage/signup.php">Signup</a></li>
            </ul>
          </nav>
        </div>
      </header>
    
      <!-- Hero Section -->
     <div style="background-image: url(/aserts/desthome.jpg);" >
        <div class="hero-content"  >
          <h1>Signup</h1>
          <p>Capture your all memorable moments </p>
        </div>
    <div class="hero-section">
        <div class="marquee">
            <marquee>✨ 30% OFF for first-time signup! ✨</marquee>
        </div>
        <div class="form-container"  >
            <div class="form-box">
                <h2 class="form-title">Sign Up</h2>
                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <a href="">Forget Password</a>
                    <br><br>
                    <button type="submit" class="submit-button">Sign Up/Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
      <!--Footer-->
    
      <footer>
        <div class="footer">
          <div class="footer-left">
            <img src="/social media aserts and logo/logo.png" alt="TradeAtlas Logo" />
            <p>
              A tour & Photography and Videography WebSite That Provide <br>Quality Content And Make Every Moment Memorable.
            </p>
        
    
            <div class="footer-links">
              <p id="linkpara" >
                <a href="#">Terms of Use</a> • <a href="#">Privacy Terms</a> •
                <a href="#">Cookies Policy</a> • <a href="#">Settings</a>
              </p>
            </div>
          </div>
    
          <div class="footer-columns">
            <div class="footer-column">
              <h3>Quick link</h3>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="photographers.php">Destination</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="/details/details.php">details</a></li>
                <li><a href="term and codition.php">Terms&Condition</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>Market value</h3>
              <ul>
                <li><a href="#">What is Nature </a></li>
                <li><a href="#">Duties of Countries</a></li>
                <li><a href="#">Target Markets</a></li>
                
                <li><a href="#">Blog</a></li>
                <li><a href="#">Fairs</a></li>
                <li><a href="#">Lets explore</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3>Useful Links</h3>
              <div class="footer-social">
               
                <a href="https://www.twitter.com" target="_blank">
    <h4>Linkedin</h4>
                </a>
                <a href="https://www.linkedin.com" target="_blank">
                <h4>Faceboook</h4>
                </a>
                <a href="https://www.whatsapp.com" target="_blank">
                  <h4>Whatsapp</h4>
                </a>
                <a href="https://www.whatsapp.com" target="_blank"></a>
                    <div>
                        <h4>+923453245</h4>
                        <h4>+923043545</h4>
                        <h4>Generationxstudio@gmail.com</h4>
                    </div>
                
              </div>
            </div>
          </div>
        
              </div>
     <!-- Scroll to Top Button -->
    <button class="scroll-top-btn" id="scrollTopBtn">
    &#8679;
    </button>
    
    <!-- Sample content to enable scrolling -->
    
    <script>
    // Scroll to top functionality
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    
    window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      scrollTopBtn.style.display = "block";
    } else {
      scrollTopBtn.style.display = "none";
    }
    };
    
    scrollTopBtn.onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    };
    </script>
    <!-- WhatsApp Button -->
    <div class="whatsapp-button">
      <a href="https://wa.me/1234567890" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp">
      </a>
    </div>
  
             
    
    

</body>
</html>
