<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>M.Azam | Web Developer</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
  }

  /* ===== HERO SECTION ===== */
  .hero {
    position: relative;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    overflow: hidden;
  }
  .hero-video {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    z-index: -2;
  }
  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }
  .hero-content {
    position: relative;
    z-index: 1;
    max-width: 600px;
    margin: 0 auto;
  }
  .hero-img {
    display: block;
    margin: 0 auto 20px auto;
    width: 180px; height: 180px;
    border-radius: 50%;
    border: 4px solid #ffd700;
    object-fit: cover;
    box-shadow: 0 5px 15px rgba(0,0,0,0.4);
    background: #fff;
  }
  .hero h1 {
    font-size: 3rem;
    font-weight: 700;
  }
  .hero p {
    font-size: 1.3rem;
    margin-top: 10px;
    color: #f0f0f0;
  }
  .btn-warning {
    font-size: 1.1rem;
    font-weight: 600;
    padding: 12px 30px;
    border-radius: 30px;
  }
  @media (max-width: 768px) {
    .hero-img { width: 130px; height: 130px; }
    .hero h1 { font-size: 2.2rem; }
    .hero p { font-size: 1rem; }
  }

  /* ===== SECTION TITLES ===== */
  .section-title {
    text-align: center;
    font-weight: 700;
    margin-bottom: 50px;
    font-size: 2.7rem;
    color: #222;
    position: relative;
  }
  .section-title::after {
    content: "";
    width: 80px; height: 4px;
    background: #2a5298;
    display: block;
    margin: 12px auto;
    border-radius: 2px;
  }

  /* ===== ABOUT SECTION ===== */
  #about, #portfolio, #services, #contact { padding: 80px 0; }
  #about { background-color: #f9f9f9ff; text-align: center; }

  /* About Boxes */
  .about-box {
    background: #fff;
    border: 2px solid #2a5298;
    border-left: 8px solid #ffd700;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
  }

  .about-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(42, 82, 152, 0.25);
  }

  .about-box h5 {
    color: #2a5298;
    font-weight: 700;
  }

  .about-box ul li {
    margin-bottom: 10px;
  }

  .about-box strong {
    color: #111;
  }

 /* ===== PORTFOLIO ===== */
#portfolio {
  background-color: #ffffff; /* Pure white background */
  padding: 80px 0;
}

#portfolio .section-title {
  color: black;
  font-weight: 700;
  font-size: 2.5rem;
}

/* Vertical layout */
#portfolio .row {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#portfolio .col-md-8 {
  width: 100%;
  max-width: 900px;
  margin-bottom: 40px;
}

/* Project Cards */
.project-card {
  border: none;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  border-radius: 15px;
  overflow: hidden;
  transition: all 0.3s ease;
  background: #ffffff;
}

.project-card img {
  height: 320px;
  object-fit: cover;
  border-bottom: 4px solid #007BFF;
  transition: transform 0.3s ease;
}

.project-card:hover img {
  transform: scale(1.05);
}

.project-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 30px rgba(0,0,0,0.25);
}

.card-title {
  font-size: 1.6rem;
  font-weight: 600;
  color: #007BFF;
}

.card-text {
  color: #555;
  font-size: 1.2rem;
  line-height: 1.7;
}


 /* ===== MODERN SERVICES SECTION ===== */
.service-box-modern {
  background: #fff;
  border-radius: 18px;
  padding: 40px 25px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
  border-top: 5px solid #2d70e4ff;
}

.service-box-modern:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(42, 82, 152, 0.25);
}

.icon-wrapper {
  width: 90px;
  height: 90px;
  background: linear-gradient(135deg, #2970ecff, #4682f0ff);
  color: #fff;
  border-radius: 20%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 45px;
  margin: 0 auto 20px auto;
  transition: all 0.3s ease;
}

.service-box-modern:hover .icon-wrapper {
  transform: rotate(10deg) scale(1.1);
  background: linear-gradient(135deg, #ffd700, #ffae00);
  color: #2a5298;
}

.service-box-modern h5 {
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 15px;
  color: #2b73f0ff;
}

.service-box-modern p {
  color: #555;
  font-size: 1.1rem;
  line-height: 1.7;
}


 /* ===== CONTACT ===== */
.contact-section {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 100%);
}

.social-links a img {
  height: 85px;   /* Increased from 55px */
  width: 85px;    /* Increased from 55px */
  margin: 0 20px;
  border-radius: 50%;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
  background: white;
  padding: 10px;
}

.social-links a img:hover {
  transform: scale(1.15);
  box-shadow: 0 10px 25px rgba(42, 82, 152, 0.35);
}

/* Responsive */
@media (max-width: 768px) {
  .social-links a img {
    height: 65px;
    width: 65px;
    margin: 0 12px;
  }
}

@media (max-width: 480px) {
  .social-links a img {
    height: 50px;
    width: 50px;
    margin: 0 8px;
  }
}


  /* ===== FOOTER ===== */
  footer {
    background: #111;
    color: #aaa;
    padding: 20px 0;
    text-align: center;
    margin-top: 30px;
    font-size: 1.05rem;
  }
  footer a {
    color: #ffd700;
    text-decoration: none;
    font-weight: 500;
  }
  /* ===== GLOBAL FONT SIZE ADJUSTMENTS ===== */
body {
  font-size: 1.25rem; /* Increases all base text size */
}

/* Headings */
h1, .hero h1 { font-size: 3.5rem; }
h2, .section-title { font-size: 3rem; }
h3, h4, h5 { font-size: 1.75rem; }

/* Paragraphs and text */
p, li, a, strong, .lead {
  font-size: 1.25rem;
  line-height: 1.8;
}

/* Buttons */
.btn, .btn-warning {
  font-size: 1.3rem;
  padding: 14px 36px;
}

/* About box content */
.about-box h5 {
  font-size: 1.6rem;
}

.about-box p, .about-box ul li {
  font-size: 1.25rem;
}

/* Portfolio cards */
.card-title {
  font-size: 1.4rem;
}

/* Services section */
.service-box h5 {
  font-size: 1.5rem;
}
.service-box p {
  font-size: 1.25rem;
}

/* Footer */
footer {
  font-size: 1.15rem;
}

</style>

</head>
<body>

<!-- Hero Section -->
<section class="hero">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="{{ asset('background.mp4') }}" onerror="this.src='{{ asset('storage/background.mp4') }}'" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <img src="{{ asset('profile.jpg') }}" onerror="this.src='{{ asset('storage/profile.jpg') }}'" alt="M.Azam" class="hero-img">
    <h1>Hi, I'm <span>M.Azam</span></h1>
    <p>Front-End & Back-End Web Developer | PHP & Laravel</p>
    <a href="#contact" class="btn btn-warning">Contact Me</a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5" style="background-color: #007FFF; color: #fff;">
  <div class="container text-center">
    <h2 class="section-title fw-bold mb-5 text-white">About Me</h2>
    
    <div class="about-box p-4 mb-5 bg-white text-dark rounded-4 shadow-sm border border-2 border-light">
      <p class="lead mb-0">
        I’m a <strong>passionate PHP & Laravel Developer</strong> with a keen eye for design and performance. 
        I specialize in creating <strong>modern, responsive, and user-focused web applications</strong> 
        that combine clean UI with solid backend functionality.
      </p>
    </div>

    <div class="row justify-content-center text-start g-4">
      <div class="col-md-6">
        <div class="about-box p-4 bg-white text-dark rounded-4 shadow-sm border border-2 border-light h-100">
          <h5 class="fw-semibold mb-3" style="color: #FFA500;">💻 What I Do</h5>
          <ul class="list-unstyled mb-0">
            <li>• <strong>Front-End Development:</strong> Pixel-perfect interfaces using HTML, CSS, Bootstrap, and JavaScript.</li>
            <li>• <strong>Back-End Development:</strong> Scalable and secure web apps built with PHP & Laravel.</li>
            <li>• <strong>Database Management:</strong> Efficient data modeling and integration with MySQL.</li>
            <li>• <strong>Responsive Design:</strong> Fully optimized layouts for all devices.</li>
            <li>• <strong>Custom Web Solutions:</strong> CMS, dashboards, e-commerce, and business systems.</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <div class="about-box p-4 bg-white text-dark rounded-4 shadow-sm border border-2 border-light h-100">
          <h5 class="fw-semibold mb-3" style="color: #FFA500;">🚀 Why Work With Me</h5>
          <ul class="list-unstyled mb-3">
            <li>• Strong understanding of modern UI/UX design principles.</li>
            <li>• Hands-on experience from concept to deployment.</li>
            <li>• Clean, maintainable, and scalable code following best practices.</li>
            <li>• Dedicated to delivering quality work — on time, every time.</li>
          </ul>
        </div>
      </div>

      <div class="col-md-12">
        <div class="about-box p-4 mt-3 bg-white text-dark rounded-4 shadow-sm border border-2 border-light">
          <h5 class="fw-semibold mb-3 text-center" style="color: #FFA500;">🧰 Tech Stack</h5>
          <p class="text-muted mb-0 text-center">
            <strong>Languages:</strong> HTML5, CSS3, JavaScript (ES6+), PHP <br>
            <strong>Frameworks:</strong> Laravel, Bootstrap <br>
            <strong>Database:</strong> MySQL <br>
            <strong>Version Control:</strong> Git, GitHub <br>
            <strong>Deployment:</strong> Render, Netlify, Shared Hosting
          </p>
        </div>
      </div>
    </div>

    <div class="about-box p-4 mt-5 bg-white text-dark rounded-4 shadow-sm border border-2 border-light">
      <p class="mb-0" style="max-width: 800px; margin: auto;">
        🌟 Whether it’s a <strong>personal portfolio</strong>, a <strong>business website</strong>, 
        or a <strong>custom Laravel application</strong> — I’m here to turn your ideas into a 
        fast, beautiful, and secure digital reality.
      </p>
    </div>
  </div>
</section>



<!-- Portfolio Section -->
<section id="portfolio">
  <div class="container text-center">
    <h2 class="section-title fw-bold mb-5">My Projects</h2>

    <div class="row flex-column align-items-center g-4">
      <!-- Project 1 -->
      <div class="col-md-8">
        <a href="{{ route('projects.show', 'estate') }}" class="text-decoration-none text-dark">
          <div class="card project-card border-0 shadow-lg rounded-4">
            <img src="{{ asset('Estate.png') }}" onerror="this.src='{{ asset('storage/Estate.png') }}'" class="card-img-top" alt="Real Estate Project">
            <div class="card-body">
              <h5 class="card-title text-primary fw-bold">Real Estate Management</h5>
              <p class="card-text text-muted">A complete property listing and client management platform built with Laravel.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Project 2 -->
      <div class="col-md-8">
        <a href="{{ route('projects.show', 'eye') }}" class="text-decoration-none text-dark">
          <div class="card project-card border-0 shadow-lg rounded-4">
            <img src="{{ asset('Eye.png') }}" onerror="this.src='{{ asset('storage/Eye.png') }}'" class="card-img-top" alt="Eye Department Project">
            <div class="card-body">
              <h5 class="card-title text-primary fw-bold">Hospital Eye Department</h5>
              <p class="card-text text-muted">Developed for Mayo Hospital’s Eye Department to manage patient records efficiently.</p>
            </div>
          </div>
        </a>
      </div>

    <!-- Project 3 -->
<div class="col-md-8">
  <a href="{{ route('projects.show', 'mazar') }}" class="text-decoration-none text-dark">
    <div class="card project-card border-0 shadow-lg rounded-4">
      <img src="{{ asset('MT.PNG') }}" onerror="this.src='{{ asset('storage/Coffee.png') }}'" class="card-img-top" alt="Mazar Traders Project">
      <div class="card-body">
        <h5 class="card-title text-primary fw-bold">Mazar Traders LLC</h5>
        <p class="card-text text-muted">
          A trusted company delivering quality products and reliable trading solutions.
        </p>
      </div>
    </div>
  </a>
</div>


      <!-- Project 4 -->
      <div class="col-md-8">
        <a href="{{ route('projects.show', 'quicklink') }}" class="text-decoration-none text-dark">
          <div class="card project-card border-0 shadow-lg rounded-4">
            <img src="{{ asset('QLP.PNG') }}" onerror="this.src='{{ asset('storage/QLP2.webp') }}'" class="card-img-top" alt="Quicklink Payments">
            <div class="card-body">
              <h5 class="card-title text-primary fw-bold">Quicklink Payments</h5>
              <p class="card-text text-muted">A secure online payment platform with full admin dashboard integration.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>



<!-- Services Section -->
<section id="services" style="background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%);">
  <div class="container py-5">
    <h2 class="section-title mb-5">Services</h2>
    <div class="row g-4 justify-content-center">

      <!-- Service 1 -->
      <div class="col-md-6 col-lg-5">
        <div class="service-box-modern">
          <div class="icon-wrapper">
            <i class="bi bi-laptop"></i>
          </div>
          <h5>Front-End Development</h5>
          <p>Crafting visually stunning, pixel-perfect, and responsive user interfaces using HTML, CSS, JavaScript, and Bootstrap.</p>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-6 col-lg-5">
        <div class="service-box-modern">
          <div class="icon-wrapper">
            <i class="bi bi-code-slash"></i>
          </div>
          <h5>Back-End Development</h5>
          <p>Building secure, high-performance web applications using PHP and Laravel, ensuring stability and scalability.</p>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-6 col-lg-5">
        <div class="service-box-modern">
          <div class="icon-wrapper">
            <i class="bi bi-gear"></i>
          </div>
          <h5>API Integration</h5>
          <p>Connecting your app with third-party APIs and services to create smooth, efficient, and automated workflows.</p>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-6 col-lg-5">
        <div class="service-box-modern">
          <div class="icon-wrapper">
            <i class="bi bi-bug"></i>
          </div>
          <h5>Debugging & Optimization</h5>
          <p>Fixing issues, improving performance, and optimizing code for better speed and reliability across all devices.</p>
        </div>
      </div>

    </div>
  </div>
</section>


  
<section id="contact" class="contact-section">
  <div class="text-center">
    <h2 class="mb-4 fw-bold">Connect With Me</h2>
        <p class="text-muted mb-5">I’m always excited to collaborate on new ideas, projects, and opportunities.<br> Whether you need a full-stack developer, front-end expert,<br> or reliable partner for your next digital solution — let’s connect and bring your vision to life.</p>

    <div class="social-links d-flex justify-content-center">

      <!-- Fiverr -->
      <a href="https://www.fiverr.com/muhammadazam406" target="_blank">
        <img src="{{ asset('Fiverr.jpg') }}" onerror="this.src='{{ asset('storage/Fiverr.png') }}'" alt="Fiverr">
      </a>

      <!-- Facebook -->
      <a href="https://www.facebook.com/profile.php?id=100006992227413" target="_blank">
        <img src="{{ asset('Facebook.jpg') }}" onerror="this.src='{{ asset('storage/Facebook.png') }}'" alt="Facebook">
      </a>

      <!-- Instagram -->
      <a href="https://www.instagram.com/azmee0/" target="_blank">
        <img src="{{ asset('Instagram.jpg') }}" onerror="this.src='{{ asset('storage/Instagram.png') }}'" alt="Instagram">
      </a>

      <!-- LinkedIn -->
      <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank">
        <img src="{{ asset('Linkedin.jpg') }}" onerror="this.src='{{ asset('storage/Linkedin.png') }}'" alt="LinkedIn">
      </a>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-center py-3" style="background: #0d1b2a; color: #ffffff; font-size: 15px;">
  <p class="mb-1">
    © 2025 <span style="color: #4dabf7; font-weight: 600;">Developed by Muhammad Azam</span> — All Rights Reserved
  </p>
  <p class="mb-0">
    <a href="mailto:azam07316@gmail.com" style="color: #90e0ef; text-decoration: none;">
      <i class="bi bi-envelope-fill me-1"></i> azam07316@gmail.com
    </a>
  </p>
</footer>


</body>
</html>
