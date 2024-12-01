<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking.css"> <!-- Corrected Path -->
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <a href="#" class="logo"><img src="social media aserts andlogologo.png" alt="Logo"></a> <!-- Corrected Path -->
            <nav class="nav-menu">
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="des.php">Destinations</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero-content">
        <h1>Booking</h1>
        <p>Capture your all memorable moments</p>
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
            <img src="maldives.jpg" alt="Travel and Photography"> <!-- Corrected Path -->
            <p class="image-description">Capture every unforgettable moment with our professional photography services.</p>
        </div>
    </section>

    <div class="booking-container" style="background-image: url('polynesia-3021072_1920.jpg');"> <!-- Corrected Path -->
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
                    <label for="pickup">Address</label>
                    <input type="text" id="pickup" placeholder="Enter ZIP/Location">
                </div>
                <div class="form-group">
                    <label for="destination">CNIC</label>
                    <input type="text" id="destination" placeholder="Enter CNIC">
                </div>
                <div class="form-group">
                    <label for="agent">Choose Agent</label>
                    <select id="agent">
                        <option value="sam">Sam</option>
                        <option value="john">John</option>
                        <option value="stefon">Stefon</option>
                        <option value="steve">Steve</option>
                        <option value="roben">Roben</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="package">Package</label>
                    <select id="package">
                        <option value="standard">Standard</option>
                        <option value="gold">Gold</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input type="text" placeholder="Location">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Pickup Date</label>
                        <input type="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="members">Members</label>
                        <select id="members">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>More than 9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="luggage">Luggage</label>
                        <select id="luggage">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>More than 9</option>
                        </select>
                    </div>
                    <div class="form-group">
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

    <!-- Footer -->
    <footer>
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
        <!-- Footer content here -->

    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top-btn" id="scrollTopBtn">&#8679;</button>
    <script>
        // Scroll to top functionality
        const scrollTopBtn = document.getElementById("scrollTopBtn");
        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        };
        scrollTopBtn.onclick = function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>
</body>
</html>
