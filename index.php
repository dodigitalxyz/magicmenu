<?php echo 'hello'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Menu for Restaurants & Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .qr-image {
            max-width: 70%;
            height: auto;
        }
        .feature-img {
            max-width: 100%;
            height: auto;
        }
        .point {
            display: none; /* Initially hide all points */
            opacity: 0; /* Start with transparent text */
            transition: opacity 0.5s ease, transform 0.5s ease; /* Add transition effects */
            transform: translateY(-20px); /* Slide from above */
        }
        .point.active {
            display: block; /* Show the active point */
            opacity: 1; /* Make it fully visible */
            transform: translateY(0); /* Slide to its original position */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">QR Menu</a>
        </div>
    </nav> -->

    <!-- QR Code Comparison Section -->
    <section class="text-center py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Why Choose <span style="color: blue;">QR Menus</span> Over Physical Menus?</h1>
                    <div id="points">
                        <div class="point active" id="point1">
                            <h4 style="color: #0000ff;">Cost Efficiency</h4>
                            <p>Physical Menu: Reprinting costs for updates can add up. <br>Digital Menu: Updates are free with a QR code.</p>
                        </div>
                        <div class="point" id="point2">
                            <h4 style="color: #0000ff;">Flexibility and Real-Time Updates</h4>
                            <p>Physical Menu: Updates require redesign and reprinting. <br>Digital Menu: Change your menu instantly.</p>
                        </div>
                        <div class="point" id="point3">
                            <h4 style="color: #0000ff;">Ease of Use</h4>
                            <p>Physical Menu: Susceptible to wear and tear. <br>Digital Menu: Guests browse easily on their devices.</p>
                        </div>
                        <div class="point" id="point4">
                            <h4 style="color: #0000ff;">Hygiene</h4>
                            <p>Physical Menu: Can spread germs between guests. <br>Digital Menu: No physical contact required.</p>
                        </div>
                        <div class="point" id="point5">
                            <h4 style="color:#0000ff;">Sustainability</h4>
                            <p>Physical Menu: Increases paper waste. <br>Digital Menu: Reduces waste with digital updates.</p>
                        </div>
                        <div class="point" id="point6">
                            <h4 style="color:#0000ff;">Interactive Features</h4>
                            <p>Physical Menu: Static content. <br>Digital Menu: Includes images, videos, and more.</p>
                        </div>
                        <div class="point" id="point7">
                            <h4 style="color: #0000ff;">Initial Setup Cost</h4>
                            <p>Physical Menu: Primarily printing costs. <br>Digital Menu: Initial setup cost but long-term savings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://dodigitalxyz.github.io/magicmenu/1.jpg" alt="Sample QR Code" class="qr-image mb-4">
                </div>
            </div>
        </div>
    </section>

    <!-- Other sections remain the same -->

    <!-- Call to Action Section -->
    <section id="get-started" class="py-5 text-center">
        <div class="container">
            <h2>Start Enhancing Your Guest Experience</h2>
            <p class="lead">Upgrade your ordering system with QR-based technology. No more waiting, no more hassle.</p>
            <h4>Call Now : 8808454894, 6393788060</h4>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Digital Menu By <a href="https://dodigital.xyz" target="_blank">DoDigital</a>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for rotating points -->
    <script>
        let currentIndex = 0;
        const points = document.querySelectorAll('.point');
        
        function showNextPoint() {
            points[currentIndex].classList.remove('active'); // Remove active class from current point
            currentIndex = (currentIndex + 1) % points.length; // Move to the next point
            points[currentIndex].classList.add('active'); // Show the next point
        }

        // Initialize the first point
        points[currentIndex].classList.add('active');

        // Set interval to show the next point every 5 seconds
        setInterval(showNextPoint, 5000);
    </script>
</body>
</html>
