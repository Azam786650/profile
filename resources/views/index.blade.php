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
    * { margin:0; padding:0; box-sizing:border-box; scroll-behavior:smooth; font-family:'Poppins',sans-serif; }
    .hero { position:relative; height:100vh; display:flex; align-items:center; justify-content:center; text-align:center; color:white; overflow:hidden; }
    .hero-video { position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-2; }
    .hero-overlay { position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:-1; }
    .hero-content { position:relative; z-index:1; max-width:600px; margin:0 auto; }
    .hero-img { display:block; margin:0 auto 20px auto; width:180px; height:180px; border-radius:50%; border:4px solid #ffd700; object-fit:cover; box-shadow:0 5px 15px rgba(0,0,0,0.4); background:#fff; }
    @media (max-width:768px) { .hero-img{width:130px;height:130px;} .hero h1{font-size:2rem;} .hero p{font-size:1rem;} }
    .section-title { text-align:center; font-weight:700; margin-bottom:50px; font-size:2.5rem; color:#222; position:relative; }
    .section-title::after { content:""; width:70px; height:4px; background:#2a5298; display:block; margin:10px auto; border-radius:2px; }
    #about,#portfolio,#services,#contact{padding:80px 0;}
    #about{background-color:#f9f9f9;text-align:center;}
    #about p{font-size:1.1rem;max-width:700px;margin:auto;line-height:1.8;}
    #portfolio{background-color:#fff;}
    .project-card{border:none;box-shadow:0 8px 20px rgba(0,0,0,0.15);border-radius:15px;overflow:hidden;transition:.3s;}
    .project-card img{height:250px;object-fit:cover;}
    .project-card:hover{transform:translateY(-10px);box-shadow:0 12px 30px rgba(0,0,0,0.25);}
    #services{background-color:#f9f9f9;}
    .service-box{background:white;padding:30px;border-radius:15px;box-shadow:0 8px 20px rgba(0,0,0,0.15);transition:.3s;text-align:center;}
    .service-box i{font-size:40px;color:#2a5298;margin-bottom:15px;}
    .service-box:hover{transform:translateY(-10px);}
      .contact-section {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .social-links a img {
      height: 50px;
      width: 50px;
      margin: 0 12px;
      transition: transform 0.2s;
    }
    .social-links a img:hover {
      transform: scale(1.1);
    }
    @media (max-width: 576px) {
  .social-links a img {
    height: 40px;
    width: 40px;
    margin: 0 8px;
  }
}

    footer{background:#111;color:#aaa;padding:20px 0;text-align:center;margin-top:30px;}
    footer a{color:#ffd700;text-decoration:none;}
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
<section id="about">
  <h2 class="section-title">About Me</h2>
  <p>
   I’m a passionate Web Developer with strong expertise in front-end and back-end technologies, specializing in HTML, CSS, Bootstrap, JavaScript, PHP, and Laravel. My focus is on building responsive, modern, and user-friendly websites that not only look great but also perform smoothly across all devices.

💻 What I Do:

Front-End Development: Crafting clean, pixel-perfect interfaces using HTML, CSS, Bootstrap, and JavaScript to ensure seamless user experiences.

Back-End Development: Developing secure, scalable, and dynamic web applications using PHP & Laravel, including authentication systems, dashboards, and REST APIs.

Database Management: Designing and integrating databases with MySQL, ensuring efficient data handling and performance optimization.

Responsive Design: Building websites that are fully mobile-friendly and optimized for different screen sizes.

Custom Web Solutions: Creating tailored solutions such as content management systems (CMS), e-commerce platforms, and business management systems.

🚀 Why Work With Me?

Strong understanding of UI/UX principles for user-centered design.

Experience in developing projects from scratch to deployment.

Clean, maintainable, and scalable code following best practices.

Passion for learning and keeping up with the latest web technologies.

Commitment to delivering projects on time and with high quality.

🔧 Technologies & Tools I Use:

Languages: HTML5, CSS3, JavaScript (ES6+), PHP

Frameworks/Libraries: Bootstrap, Laravel

Database: MySQL

Version Control: Git & GitHub

Deployment: Render, Netlify, and shared hosting servers

🌟 Whether you need a personal portfolio website, a business website, or a custom web application, I can help bring your ideas to life with modern, secure, and efficient solutions.
  </p>
</section>

<!-- Portfolio Section -->
<section id="portfolio">
  <h2 class="section-title">My Projects</h2>
  <div class="container">
    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <a href="{{ route('projects.show', 'estate') }}" class="text-decoration-none">
          <div class="card project-card">
            <img src="{{ asset('Estate.png') }}" onerror="this.src='{{ asset('storage/Estate.png') }}'" class="card-img-top" alt="Real Estate">
            <div class="card-body text-center">
              <h5 class="card-title">Real Estate Management System</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ route('projects.show', 'eye') }}" class="text-decoration-none">
          <div class="card project-card">
            <img src="{{ asset('Eye.png') }}" onerror="this.src='{{ asset('storage/Eye.png') }}'" class="card-img-top" alt="Eye Department">
            <div class="card-body text-center">
              <h5 class="card-title">Mayo Hospital Eye Department</h5>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services">
  <h2 class="section-title">Services</h2>
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="service-box">
          <i class="bi bi-laptop"></i>
          <h5>Front-End Development</h5>
          <p>Modern, responsive websites using HTML, CSS, Bootstrap, and JavaScript.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <i class="bi bi-code-slash"></i>
          <h5>Back-End Development</h5>
          <p>Secure, scalable web applications with PHP & Laravel framework.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <i class="bi bi-bug"></i>
          <h5>Bug Fixing</h5>
          <p>Debugging and fixing issues in your existing website or application.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  
<!-- Contact Section -->

<div class="contact-section">
  <div class="text-center">
    <h2 class="mb-4 fw-bold">Connect With Me</h2>
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
</div>

<!-- Footer -->
<footer>
  
  <p>© 2025 M.Azam | Web Developer | <a href="mailto:azam07316@gmail.com">E-mail: azam07316@gmail.com</a>
</p>
</footer>

</body>
</html>
