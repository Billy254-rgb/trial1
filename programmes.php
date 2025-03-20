
<?php 
session_start();
// Rest of your PHP code
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULISO - Our Programmes</title>
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

    <!-- Add after navigation -->
<section class="programme-header">
    <img src="images/img4.jpg" alt="Mother and Child Health">
    <div class="header-overlay">
        <h1>Mother and Child Health</h1>
    </div>
</section>

<section class="programme-content">
    <div class="content-container">
        <div class="section-box">
            <p>Expectant mothers, neonates and children below the age of 5 years make up a population that is the most vulnerable...</p>
        </div>

        <div class="section-box">
            <h2 class="section-title">Child Health</h2>
            <p>The primary focus is on REDUCING INFANT MORTALITY AND CHILD MORTALITY through initiatives like...</p>
            <ul class="programme-list">
                <li>Integrated Management of Childhood Illnesses (IMCI)</li>
                <li>International Child Health Day celebrations</li>
            </ul>
            <a href="partner.html" class="donate-btn">Donate to this Program</a>
        </div>

        <div class="section-box">
            <h2 class="section-title">Maternal Health</h2>
            <p>ULISO’s goal of maternal health programs is to ensure that mothers and newborns have access to skilled care...</p>
            <ul class="programme-list">
                <li>Prenatal and postnatal care programs</li>
                <li>International Day for Maternal Health and Rights</li>
            </ul>
            <a href="partner.html" class="donate-btn">Donate to this Program</a>
        </div>
    </div>
</section>

<!-- Add after navigation -->
<section class="programme-header">
    <img src="images/img3.jpg" alt="Mental Health">
    <div class="header-overlay">
        <h1>Mental Health Initiatives</h1>
    </div>
</section>

<section class="programme-content">
    <div class="content-container">
        <div class="section-box">
            <p>Mental health challenges are hardly noticed in normal daily settings until they manifest through late-stage symptoms...</p>
            
            <h2 class="section-title">Our Approach</h2>
            <ul class="programme-list">
                <li>Community-based care initiatives</li>
                <li>De-institutionalization programs</li>
                <li>Collaborative partnerships</li>
            </ul>
            
            <h2 class="section-title">Key Initiatives</h2>
            <ul class="programme-list">
                <li>World Mental Health Day commemorations</li>
                <li>Workplace mental health programs</li>
                <li>Public awareness campaigns</li>
            </ul>
            
            <a href="partner.html" class="donate-btn">Donate to this Program</a>
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