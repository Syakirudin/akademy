<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademy</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <script src="./script.js"></script>
    <header>
        <nav class="navbar">
            <div class="logo">Logo</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Website</h1>
            <p>Your source for amazing products and services.</p>
            <a href="#contact" class="cta-button">Get Started</a>
        </div>
    </section>
    <section id="features" class="features">
        <h2>Features</h2>
        <div class="feature-item">
            <img src="feature1.jpg" alt="Feature 1">
            <h3>Feature 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature-item">
            <img src="feature2.jpg" alt="Feature 2">
            <h3>Feature 2</h3>
            <p>Nullam vel semper mauris. Praesent interdum euismod turpis.</p>
        </div>
    </section>
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>We are a dedicated team...</p>
    </section>
    <section id="contact" class="contact">
        <h2>Contact</h2>
        <form id="contact-form">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
