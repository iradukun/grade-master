<!-- GradeMaster/app/views/home/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <svg class="logo-icon" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="currentColor" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                <span>GradeMaster</span>
            </div>
            <ul class="nav-links">
                <li><a href="<?php echo URLROOT; ?>" class="active">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>/login" class="login-btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content" data-aos="fade-right">
                <h1>Welcome to GradeMaster</h1>
                <p class="hero-subtitle">A comprehensive Student Marks Management System designed to streamline grading and enhance educational insights.</p>
                <div class="hero-buttons">
                    <a href="<?php echo URLROOT; ?>/login" class="btn btn-primary">Get Started</a>
                    <a href="#features" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <div class="floating-cards">
                    <div class="card card-1">
                        <img src="<?php echo URLROOT; ?>/public/images/grade.svg" alt="Grade" class="card-icon">
                        <span>Grade Analytics</span>
                    </div>
                    <div class="card card-2">
                        <img src="<?php echo URLROOT; ?>/public/images/analytics.svg" alt="Analytics" class="card-icon">
                        <span>Real-time Updates</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <h2 data-aos="fade-up">Why Choose GradeMaster?</h2>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo URLROOT; ?>/public/images/grade.svg" alt="Easy Grading" class="feature-icon">
                    <h3>Easy Grading</h3>
                    <p>Streamline your grading process with our intuitive interface. Save time and reduce errors.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo URLROOT; ?>/public/images/analytics.svg" alt="Analytics" class="feature-icon">
                    <h3>Insightful Analytics</h3>
                    <p>Gain valuable insights into student performance with comprehensive analytics tools.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php echo URLROOT; ?>/public/images/secure.svg" alt="Secure" class="feature-icon">
                    <h3>Secure Access</h3>
                    <p>Protect sensitive data with our robust security measures and role-based access control.</p>
                </div>
            </div>
        </section>

        <section class="stats" data-aos="fade-up">
            <div class="stats-container">
                <div class="stat-item">
                    <span class="stat-number" data-count="1000">0</span>
                    <span class="stat-label">Schools</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="50000">0</span>
                    <span class="stat-label">Students</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="5000">0</span>
                    <span class="stat-label">Teachers</span>
                </div>
            </div>
        </section>

        <section class="cta" data-aos="zoom-in">
            <div class="cta-content">
                <h2>Ready to Transform Your Grading System?</h2>
                <p>Join thousands of schools already using GradeMaster to streamline their grading process.</p>
                <a href="<?php echo URLROOT; ?>/login" class="btn btn-primary">Start Now</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo">
                    <svg class="logo-icon" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="currentColor" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    <span>GradeMaster</span>
                </div>
                <p>Empowering education through innovative grade management.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="<?php echo URLROOT; ?>/login">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITENAME; ?>. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Animate statistics
        const stats = document.querySelectorAll('.stat-number');
        stats.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-count'));
            let current = 0;
            const increment = target / 100;
            const updateCount = () => {
                if(current < target) {
                    current += increment;
                    stat.textContent = Math.round(current);
                    requestAnimationFrame(updateCount);
                } else {
                    stat.textContent = target;
                }
            };
            updateCount();
        });
    </script>
</body>
</html>