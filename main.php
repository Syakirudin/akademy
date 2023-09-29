<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Akademy</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">Logo</div>
        <ul class="nav-items">
            <li class="nav-item"><a class="nav-link" href="#">Child 1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Child 2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Child 3</a></li>
        </ul>
    </div>
   
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to Our Website</h1>
            <p class="hero-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos iure similique provident ipsa repellendus iusto praesentium tenetur velit, quo aliquam quidem eius hic quisquam quas natus. Ratione quidem eos nam.</p>
            <a href="#" class="cta-button">Explore More</a>
        </div>
        <div class="hero-image">
            <img src="./img/public-speaker.jpg" alt="Hero Image">
        </div>
    </section>


    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-us-content">
            <h2 class="section-title">About Us</h2>
            <p>We are a passionate team of educators and professionals dedicated to providing high-quality online learning experiences. Our mission is to empower individuals with knowledge and skills to achieve their goals and aspirations.</p>
            <p>With years of experience in education, technology, and innovation, we strive to make learning accessible, engaging, and impactful. Join us on this journey of discovery and growth!</p>
        </div>
        <div class="about-us-image">
            <img src="about-us-image.jpg" alt="About Us Image">
        </div>
    </section>

    <!-- ... (continue with other sections) ... -->



    <section class="quotes-section">
        <h2 class="section-title">Famous Quotes</h2>
        
        <!-- Quote Container -->
        <div class="quote-container">
            <p class="quote-text">"The only way to do great work is to love what you do."</p>
            <p class="quote-author">- Steve Jobs</p>
        </div>

        <div class="quote-container">
            <p class="quote-text">"In three words I can sum up everything I've learned about life: it goes on."</p>
            <p class="quote-author">- Robert Frost</p>
        </div>

        <div class="quote-container">
            <p class="quote-text">"Education is the most powerful weapon which you can use to change the world."</p>
            <p class="quote-author">- Nelson Mandela</p>
        </div>
</section>


    <!-- Responsive Container -->

    <h2 class="section-title">What We Offer</h2>
    <section class="container">
        

        <div class="child">
            <img src="image1.jpg" alt="Image 1">
            <p>Public Speaking</p>
        </div>
        <div class="child">
            <img src="image2.jpg" alt="Image 2">
            <p>Paragraph 2</p>
        </div>
        <div class="child">
            <img src="image3.jpg" alt="Image 3">
            <p>Paragraph 3</p>
        </div>
        <div class="child">
            <img src="image4.jpg" alt="Image 4">
            <p>Paragraph 4</p>
        </div>
        <div class="child">
            <img src="image5.jpg" alt="Image 5">
            <p>Paragraph 5</p>
        </div>
        <div class="child">
            <img src="image6.jpg" alt="Image 6">
            <p>Paragraph 6</p>
        </div>
</section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h2 class="section-title">Contact Us</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </section>



    <!-- Rest of your content goes here -->
</body>
</html>
