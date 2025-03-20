
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Same head section as index.html -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner With Us - ULISO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional form styling */
        .partner-form {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #444;
        }

        input, textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #b40001;
            box-shadow: 0 0 8px rgba(180, 0, 1, 0.2);
            outline: none;
        }

        button[type="submit"] {
            background-color: #b40001;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #9b0000;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .partner-form {
                margin: 1rem;
                padding: 1.5rem;
            }
            
            input, textarea {
                padding: 0.8rem;
            }
        }
    </style>
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

     <!-- Partner With Us Content -->
     <section class="programme-header">
        <img src="images/img2.jpg" alt="Partnership">
        <div class="header-overlay">
            <h1>Partner With Us</h1>
        </div>
    </section>

    <section class="programme-content">
        <div class="content-container">
            <div class="section-box">
                <h2 class="section-title">Why Partner With ULISO?</h2>
                <p class="lead-text">Join hands with us to create sustainable impact in maternal health, child welfare, and mental health support. Your partnership enables us to:</p>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Direct Impact</h3>
                        <p>See tangible results in vulnerable communities</p>
                    </div>
                    <div class="benefit-card">
                        <i class="fas fa-chart-line"></i>
                        <h3>Sustainable Change</h3>
                        <p>Support long-term health initiatives</p>
                    </div>
                    <div class="benefit-card">
                        <i class="fas fa-users"></i>
                        <h3>Community Engagement</h3>
                        <p>Connect directly with those in need</p>
                    </div>
                </div>
            </div>

            <div class="partner-form">
                <h2 class="section-title" style="text-align: center; margin-bottom: 2rem;">Become a Partner</h2>
                <form method="post" action="send-email.php">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" required placeholder="John Doe">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required placeholder="john@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="organization">Organization (Optional)</label>
                        <input type="text" name="organization" id="organization" placeholder="Company Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Partnership Type</label>
                        <select name="subject" id="subject" required>
                            <option value="">Select partnership type</option>
                            <option value="Corporate Sponsorship">Corporate Sponsorship</option>
                            <option value="NGO Collaboration">NGO Collaboration</option>
                            <option value="Individual Support">Individual Support</option>
                            <option value="Volunteer Program">Volunteer Program</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" rows="5" required placeholder="How would you like to partner with us?"></textarea>
                    </div>
                    
                    <button type="submit" name="submitContact">Submit Partnership Request</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <!-- Same footer as index.html -->
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

    <!-- Add these near existing scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var messageText = "<?= $_SESSION['status'] ?? '' ?>";
    if (messageText) {
        Swal.fire({
            title: "Thank you",
            text: messageText,
            icon: "success"
        });
        <?php unset($_SESSION['status']); ?>
    }
</script>
</body>
</html>