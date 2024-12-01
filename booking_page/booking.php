<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking_page/booking.css">
</head>

<style>
  /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and general styling */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
}
.hero-content h1{
    margin-left: 550px;
    font-family: 'Times New Roman', Times, serif;
    font-size: xx-large;
}
.hero-content p{
    margin-left: 480px;
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
}

/* Navbar */
.navbar {
    background: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.container a img {
    height: 90px;
    width: 200px;
}

.nav-menu ul {
    list-style: none;
    display: flex;
    gap: 40px;
    margin-left: 800px;
    margin-top: -40px;
    font-size: 18px;
}

.nav-menu a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

/* Hero section */
.hero {
    background: url('hero-bg.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 150px 20px;
}

.hero h1 {
    font-size: 4rem;
    margin-bottom: 10px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

/* Booking Form Container */
.booking-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto; 
    background-color: #f4f4f4;
    padding: 40px 20px; /* Add some padding */
}

/* Form Box Styling */
.form-box {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px; /* Reduce the width */
    text-align: center;
    opacity: 0.8;
}

/* Form Title Styling */
.form-title {
    font-size: 24px; /* Reduce the font size */
    margin-bottom: 15px;
    color: #333;
}

/* Form row styling */
.form-row {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 15px;
}

/* Grouping form fields */
.form-group {
    width: 100%;
}

/* Styling for small input fields */
.small-input {
    width: 30%;
}

/* Input field styling */
input[type="text"],
input[type="email"],
input[type="date"],
select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px; /* Reduce font size */
}

/* Label styling */
label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px; /* Reduce font size */
    color: #333;
}

/* Button styling */
.submit-button {
    background-color: #5cb85c;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px; /* Adjust font size */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px;
    width: 100%;
}

.submit-button:hover {
    background-color: #4cae4c;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
    }

    .small-input {
        width: 100%; /* Full width on small screens */
    }
}
/* Services Section */
.services-section {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin: 20px auto;
    max-width: 1200px;
    padding: 0 20px;
    margin-top: 90px;
  }
  
  .services-content {
    flex: 1;
    font-family: Arial, sans-serif;
  }
  
  .services-content h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #333;
  }
  
  .services-content p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 10px;
  }
  
  .services-image {
    flex: 0 0 300px;
    text-align: center;
  }
  
  .services-image img {
    width: 100%;
    height: 250px;
    width: 400px;
    display: block;
  }
  
  .image-description {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
  }
  
  /*footer*/
  
  .foot{
      margin-top: 200px;
  }
  
  .footer{
      background-color:#010811;
  }
  
  .box{
      margin-left: 30px;
  }
  
  
  .footer .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
      gap:2rem;
  }
  
  .footer .box-container .box h3{
      font-size: 2.5rem;
      color:#000;
      padding: 1rem 0;
  }
  
  .footer .box-container .box a{
      display: block;
      font-size: 1.5rem;
      color:var(--light-color);
      padding: .7rem 0;
  }
  
  .footer .box-container .box a i{
      padding-right: .5rem;
      color: white;
  }
  
  .footer .box-container .box a:hover i{
      padding-right:2rem;
  }
  
  .footer .credit{
      padding: 1rem;
      padding-top: 2rem;
      margin-top: 2rem;
      text-align: center;
      font-size: 2rem;
      color: white(--light-color);
  }
  /* General reset and body styling */
  body, html {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  
  /* Scroll-to-top button styling */
  .scroll-top-btn {
      position: fixed;
      right: 20px;
      bottom: 20px;
      display: none;
      background-color: #333;
      color: white;
      border: none;
      padding: 15px;
      font-size: 20px;
      border-radius: 50%;
      cursor: pointer;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
  }
  
  /* Scroll button hover effect */
  .scroll-top-btn:hover {
      background-color: #555;
      transform: scale(1.1);
  }
  /* -----------------------------------------------------*/
  .footer {
      background-color: skyblue;
      color: #000000;
      padding: 30px 30px;
      display: flex;
      justify-content: space-between;
      text-decoration: none;
    }
    
    .footer-left {
      max-width: 35%;
    }
    
    .footer-left img {
      max-width: 200px;
      margin-bottom: 20px;
      color: #000000;
    }
    
    .footer-left p {
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 20px;
    }
    
    .footer-social {
      margin-bottom: 20px;
      text-decoration: none;
    }
    
    .footer-social img {
      width: 30px;
      margin-right: 10px;
      color: #062b4d;
    }
    .footer-links {
      text-align: left;
      margin-right: 10px;
    }
    
    .footer-links a {
      color: rgb(0, 0, 0);
      text-decoration: none;
    }
    
    .footer-links a:hover {
      color: rgb(0, 0, 0);
      text-decoration: underline;
    }
    
    p {
      margin: 0;
    }
    .footer-columns {
      display: flex;
      justify-content: space-between;
      width: 60%;
    }
    
    .footer-column {
      margin-right: 40px;
    }
    
    .footer-column h3 {
      border-bottom: 1px solid #000000;
      padding-bottom: 10px;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-size: 16px;
    }
    
    .footer-column ul {
      padding: 0;
    }
    
    .footer-column ul li {
      margin-bottom: 10px;
    }
    
    .footer-column ul li a {
      color: #000000;
      text-decoration: none;
      font-size: 14px;
    }
    
    .footer-column ul li a:hover {
      text-decoration: underline;
    }
    
    /* WhatsApp Floating Button */
  .whatsapp-button {
    position: fixed;
    bottom: 20px; 
    left: 20px; 
    z-index: 1000;
    cursor: pointer;
    transition: transform 0.3s ease; 
  }
  
  .whatsapp-button a img {
    width: 60px; 
    height: 60px;
    border-radius: 50%; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  /* Enlarge button on hover */
  .whatsapp-button a img:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); 
  }
  
  </style>

<body>
      <!-- Navbar -->
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
 
    <div class="hero-content">
      <h1>Booking</h1>
      <p>Capture your all memorable moments </p>
    </div>
    <section class="services-section">
        <div class="services-content">
          <h2>How To Book</h2>
          <p>We specialize in providing top-notch tour and travel experiences, tailored to your needs and preferences.</p>
          <p>Our services include professional photo and video shoots to capture your best moments during trips.</p>
          <p>We collaborate with the best photographers to deliver outstanding quality and unforgettable memories.</p>
          <p>From picturesque destinations to personalized itineraries, we make your journey truly remarkable.</p>
        </div>
        <div class="services-image">
          <img src="/aserts/maldives.jpg" alt="Travel and Photography">
          <p class="image-description">Capture every unforgettable moment with our professional photography services.</p>
        </div>
      </section>

<br>
<br>
<br>
<br>
    <div class="booking-container"  style="background-image: url(/aserts/polynesia-3021072_1920.jpg);" >
        <div class="form-box">
            <h1 class="form-title">Book Your Shoot Slot</h1>
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="pickup">Adddress</label>
                    <input type="text" id="pickup" placeholder="Enter ZIP/Location">
                </div>
                <div class="form-group">
                    <label for="destination">CNIC</label>
                    <input type="text" id="destination" placeholder="Enter CNIC">
                </div>
                <div class="form-group">
                    <label for="destination">Chose Agent</label>
                    <select name="" id="">
                        
                        <li>
                            <option value=""><li>Sam</li></option>
                            <option value=""><li>John</li></option>
                            <option value=""><li>Stefon</li></option>
                            <option value=""><li>Steve</li></option>
                            <option value=""><li>Roben</li></option>
                        </li>
                    </select>
                    <div class="form-group">
                      <label for="pickup">Package</label>
                      <select name="" id="">
                        <li>
                        <option value="">Standerd</option>
                        <option value="">Gold</option>
                        <option value="">Primium</option>
                      </li>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" placeholder="Location">
                    </div>
            
                    <br>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Pickup Date</label>
                        <input type="date" id="date">
                    </div>
                    <div class="form-group small-input">
                        <label for="hour">Members</label>
                        <select id="hour">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>more than 9</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group small-input">
                        <label for="minute">Luguge</label>
                        <select id="minute">
                            <option>00</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>more than 9</option>
                        </select>
                    </div>
                    <div class="form-group small-input">
                        <label for="ampm">AM/PM</label>
                        <select id="ampm">
                            <option>AM</option>
                            <option>PM</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="submit-button">BOOK NOW</button>
            </form>
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
                <a href="https://www.whatsapp.com" target="_blank">
                  
                </a>
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
    
    
