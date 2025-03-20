<?php 
session_start();
// Rest of your PHP code
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULISO - Mother and Child Health</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="header-item">
                <i class="fas fa-envelope"></i>
                <span>upendolifesolutions@gmail.com</span>
            </div>
            <div class="header-item">
                <i class="fas fa-phone"></i>
                <span>+254 733 956 098</span>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="images/ULISO_LOGO.png" alt="Logo" class="logo">
                <h3 class="logo-text">
                    <span class="upendo">Upendo</span>
                    <span class="life-solutions">Life Solutions</span>
                </h3>
            </div>
            <ul class="nav-menu">
    <li class="nav-item">
        <a href="index.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'index.php' ? 'class="active"' : ''; ?>>Home</a>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF'])) == 'mental-health.php' || basename($_SERVER['PHP_SELF']) == 'mother-child-health.php' ? 'active' : ''; ?>">
            Our Programmes <i class="fas fa-chevron-down"></i>
        </a>
        <div class="dropdown-content">
            <a href="mother-child-health.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'mother-child-health.php' ? 'class="active"' : ''; ?>>Mother and Child Health</a>
            <a href="mental-health.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'mental-health.php' ? 'class="active"' : ''; ?>>Mental Health</a>
        </div>
    </li>
    <li class="nav-item">
        <a href="partner.php" <?php echo (basename($_SERVER['PHP_SELF'])) == 'partner.php' ? 'class="active"' : ''; ?>>Partner With Us</a>
    </li>
    <li class="nav-item">
        <a href="#">Media</a>
    </li>
    <li class="nav-item">
        <a href="#">Contact</a>
    </li>
</ul>
            <div class="menu-toggle">
                <i class="fas fa-bars" id="menu-open"></i>
                <i class="fas fa-times" id="menu-close" style="display: none;"></i>
            </div>
        </div>
    </nav>

    <!-- Programme Content -->
<section class="programme-header">
    <img src="images/img4.jpg" alt="Mother and Child Health">
    <div class="header-overlay">
        <h1>Protecting Mothers & Children</h1>
    </div>
</section>
<section class="programme-content">
    <div class="content-container">
        <!-- Vulnerability Section -->
        <div class="section-box priority-section">
            <div class="priority-header">
                <h2 class="section-title">Maternal & Child Health</h2>
                <p class="lead-text">Expectant mothers, neonates and children below the age of 5 years make up a population that is the most vulnerable to infectious diseases such as diarrhea, respiratory ailments like pneumonia and tuberculosis, malaria and HIV. This is explained by recent historical data on morbidity and mortality rates that are attached to ULISO’s host communities. It is for this reason that we have given specific focus on maternal and child health. </p>
            </div>
<!-- 
            <div class="priority-grid">
                
                <div class="priority-card risk-factors">
                    <div class="card-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Critical Risk Factors</h3>
                    </div>
                    <ul class="disease-list">
                        <li>Respiratory Infections <span>(Pneumonia/TB)</span></li>
                        <li>Waterborne Illnesses <span>(Diarrheal Diseases)</span></li>
                        <li>Vector-Borne Diseases <span>(Malaria)</span></li>
                        <li>HIV Complications</li>
                    </ul>
                </div>

               
                <div class="priority-card statistics-card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar"></i>
                        <h3>Why We Prioritize</h3>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">65%+</div>
                        <div class="stat-label">Preventable Hospitalizations</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">1:5</div>
                        <div class="stat-label">Children with Chronic Malnutrition</div>
                    </div>
                </div>

                <div class="priority-card commitment-card">
                    <div class="card-header">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Our Strategic Approach</h3>
                    </div>
                    <div class="approach-list">
                        <div class="approach-item">
                            <div class="approach-number">01</div>
                            <div class="approach-text">Enhanced Healthcare Worker Training</div>
                        </div>
                        <div class="approach-item">
                            <div class="approach-number">02</div>
                            <div class="approach-text">Community-Based Prevention Programs</div>
                        </div>
                        <div class="approach-item">
                            <div class="approach-number">03</div>
                            <div class="approach-text">Continuous Care System Development</div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="callout-banner">
                <i class="fas fa-heartbeat"></i>
                <p>Building healthier futures starts with protecting those most at risk</p>
            </div>
        </div>
        </div>


<!-- <section class="programme-content">
    <div class="content-container"> -->
        <!-- Child Health Section -->
       <!-- Child Health Section -->
<div class="section-box">
    <div class="urgent-alert">
        <i class="fas fa-baby-carriage"></i>
        <p>Every child deserves a healthy start - Join our mission to reduce under-5 mortality</p>
    </div>

    <h2 class="section-title">Our Focus On Child Health</h2>
    
    <div class="initiative-grid">
        <div class="initiative-card">
            <i class="fas fa-user-md icon-red"></i>
            <h3>IMCI Program</h3>
            <p>We aim at reducing Infant and Child mortality through the IMCI program which aims at training healthcare workers in integrated childhood illness management.</p>
        </div>
        
        <div class="initiative-card">
            <i class="fas fa-hand-holding-heart icon-red"></i>
            <h3>Community Health Practices</h3>
            <p>We also aim at  Community Health Practices which will ensure children under 5 years old receive quality care and achieve healthy growth and development.</p>
        </div>
    </div>

    <div class="impact-banner">
        <i class="fas fa-calendar-alt"></i>
        <div>
            <h3>International Child Health Day</h3>
            <p>First Monday of October - Annual awareness campaigns</p>
        </div>
    </div>

    <!-- Centered Donate Button -->
    <div class="cta-container" style="margin-top: 25px; text-align: center;">
        <a href="partner.php" class="donate-btn">
            <i class="fas fa-hand-holding-medical"></i>
            Support Child Health
        </a>
    </div>
</div>

        <!-- Maternal Health Section -->
<div class="section-box">
    <div class="urgent-alert">
        <i class="fas fa-venus-double"></i>
        <p>Maternal care is a fundamental right - Help us ensure safe pregnancies</p>
    </div>

    <h2 class="section-title">Our Focus On Maternal Health</h2>
    
    <div class="strategy-grid">
        <div class="strategy-card">
            <div class="strategy-number">1</div>
            <h3>Prenatal Care</h3>
            <p>We are aimed at ensuring skilled pregnancy monitoring to reduce the incidences of maternal, perinatal and newborn mortality and morbidity.</p>
        </div>
        
        <div class="strategy-card">
            <div class="strategy-number">2</div>
            <h3>Safe Delivery</h3>
            <p>We are aimed at ensuring that skilled care is also provided during Childbirth reducing maternal, perinatal and newborn mortality and morbidity.</p>
        </div>
        
        <div class="strategy-card">
            <div class="strategy-number">3</div>
            <h3>Postpartum Support</h3>
            <p>We are aimed at ensuring the skilled care is given even after Childbirth in order to continue minimizing Mother and Child morbidity and mortality further.</p>
        </div>
    </div>

    <div class="impact-banner">
        <i class="fas fa-calendar-check"></i>
        <div>
            <h3>Maternal Health Rights Day</h3>
            <p>April 11 - Global call to action for maternal care</p>
        </div>
    </div>

    <!-- Donate Button Moved Here -->
    <div class="cta-container" style="margin-top: 25px; text-align: center;">
        <a href="partner.php" class="donate-btn">
            <i class="fas fa-people-carry"></i>
            Support Maternal Health
        </a>
    </div>
</div>

    
</section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="footer-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="mother-child-health.php">Mother and Child Program</a></li>
    <li><a href="mental-health.php">Mental Health Program</a></li>
    <li><a href="partner.php">Partner With Us</a></li>
    <li><a href="#">Media</a></li>
    <li><a href="#">Contact</a></li>
</ul>
            </div>
            <div class="footer-column">
                <h3>Contact Info</h3>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> HomaBay County, Kenya</li>
                    <li><i class="fas fa-envelope"></i> P.O. Box 612-40300, HomaBay, Kenya</li>
                    <li><i class="fas fa-envelope"></i> upendolifesolutions@gmail.com</li>
                    <li><i class="fas fa-phone"></i> +254 733 956 098</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/upendolifesolutionsuliso" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Upendo Life Solutions. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll-to-Top Button -->
    <button id="scroll-to-top" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="script.js"></script>
</body>
</html>