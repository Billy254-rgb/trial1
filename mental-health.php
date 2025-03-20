<?php 
session_start();
// Rest of your PHP code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULISO - Mental Health</title>
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

   <!-- Mental Health Content -->
<section class="programme-header">
    <img src="images/img4.jpg" alt="Mental Health Awareness">
    <div class="header-overlay">
        <h1>Transforming Mental Health Care</h1>
    </div>
</section>

<section class="programme-content">
    <div class="content-container">
        <div class="section-box">
            <div class="urgent-alert">
                <i class="fas fa-exclamation-triangle"></i>
                <p>1 in 4 Kenyans will experience mental health issues in their lifetime</p>
            </div>

            <h2 class="section-title">Breaking Barriers in Mental Health</h2>
            <p class="lead-text">While Kenya's Mental Health Act provides essential frameworks, critical gaps remain in early detection and affordable care access.Many struggle to access due to.</p>

            <div class="challenge-grid">
                <div class="challenge-card">
                    <i class="fas fa-microscope"></i>
                    <h3>Detection Challenges</h3>
                    <p>Limited diagnostic tools in workplaces and clinics</p>
                </div>
                <div class="challenge-card">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Financial Barriers</h3>
                    <p>High treatment costs excluding vulnerable populations</p>
                </div>
                <div class="challenge-card">
                    <i class="fas fa-comment-slash"></i>
                    <h3>Social Stigma</h3>
                    <p>Persistent misconceptions hindering help-seeking</p>
                </div>
            </div>

            <div class="strategy-section">
                <h2 class="section-title">ULISO's Comprehensive Strategy</h2>
                <div class="strategy-grid">
                    <div class="strategy-card">
                        <div class="strategy-number">1</div>
                        <h3>Community Care</h3>
                        <p>Local support networks and awareness campaigns</p>
                    </div>
                    <div class="strategy-card">
                        <div class="strategy-number">2</div>
                        <h3>De-institutionalization</h3>
                        <p>Home-based care solutions and family support</p>
                    </div>
                    <div class="strategy-card">
                        <div class="strategy-number">3</div>
                        <h3>Collaborative Care</h3>
                        <p>Partnerships with healthcare providers and NGOs</p>
                    </div>
                </div>
            </div>

            <div class="impact-banner">
                <i class="fas fa-globe-africa"></i>
                <div>
                    <h3>World Mental Health Day</h3>
                    <p>Leading annual initiatives every October 10th</p>
                </div>
            </div>

            <div class="cta-section">
                <p>Join our mission to create mentally healthier communities</p>
                <a href="partner.php" class="donate-btn">
                    <i class="fas fa-hand-holding-heart"></i>
                    Support Mental Health Initiatives
                </a>
            </div>
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