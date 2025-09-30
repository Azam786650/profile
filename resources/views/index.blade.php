<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>M.Azam | Web Developer</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: 'Poppins', sans-serif;
}

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

/* Video fills entire section */
.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -2; /* behind everything */
}

/* Optional dark overlay for readability */
.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: -1; /* between video and content */
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 600px;
  margin: 0 auto;
}


/* ✅ Profile Image */
.hero-img {
  display: block;
  margin: 0 auto 20px auto; /* center the image */
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 4px solid #ffd700;
  object-fit: cover;  /* makes it fit without stretching */
  box-shadow: 0 5px 15px rgba(0,0,0,0.4);
  background: #fff;
}

/* ✅ Responsive */
@media (max-width: 768px) {
  .hero-img {
    width: 130px;
    height: 130px;
  }
  .hero h1 {
    font-size: 2rem;
  }
  .hero p {
    font-size: 1rem;
  }
}



/* Section Titles */
.section-title {
  text-align: center;
  font-weight: 700;
  margin-bottom: 50px;
  font-size: 2.5rem;
  color: #222;
  position: relative;
}
.section-title::after {
  content: "";
  width: 70px;
  height: 4px;
  background: #2a5298;
  display: block;
  margin: 10px auto;
  border-radius: 2px;
}

/* About Section */
#about {
  padding: 80px 0;
  background-color: #f9f9f9;
  text-align: center;
}
#about p {
  font-size: 1.1rem;
  max-width: 700px;
  margin: auto;
  line-height: 1.8;
}

/* Portfolio */
#portfolio {
  padding: 80px 0;
  background-color: #fff;
}
.project-card {
  border: none;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  border-radius: 15px;
  overflow: hidden;
  transition: 0.3s ease-in-out;
}
.project-card img {
  height: 250px;
  object-fit: cover;
}
.project-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
}

/* Services */
#services {
  padding: 80px 0;
  background-color: #f9f9f9;
}
.service-box {
  background: white;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  transition: 0.3s;
  text-align: center;
}
.service-box i {
  font-size: 40px;
  color: #2a5298;
  margin-bottom: 15px;
}
.service-box:hover {
  transform: translateY(-10px);
}

/* Contact */
#contact {
  padding: 80px 0;
  background-color: #fff;
}
.contact-form {
  max-width: 600px;
  margin: auto;
  padding: 30px;
  border-radius: 15px;
  background: #f9f9f9;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Badge */
.badge {
  font-size: 12px;
  padding: 5px 7px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

/* Footer */
footer {
  background: #111;
  color: #aaa;
  padding: 20px 0;
  text-align: center;
  margin-top: 30px;
}
footer a {
  color: #ffd700;
  text-decoration: none;
}

  </style>
</head>
<body>

 <section class="hero">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="{{ asset('storage/background.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <img src="{{ asset('storage/profile.jpg') }}" alt="M.Azam" class="hero-img">
    <h1>Hi, I'm <span>M.Azam</span></h1>
    <p>Front-End & Back-End Web Developer | PHP & Laravel</p>
    <a href="#contact" class="btn btn-warning">Hire Me</a>
  </div>
</section>



  <section id="about">
    <h2 class="section-title">About Me</h2>
    <p>
      Hello! I’m a Full-Stack Web Developer with hands-on experience in designing and developing modern, responsive, and scalable web applications. I specialize in Laravel development and creating user-friendly front-end interfaces using the latest web technologies.

I help businesses build, optimize, and maintain their digital products by delivering clean, efficient, and performance-driven solutions.

🔹 Tech Stack & Tools

Frontend: HTML5, CSS3, Bootstrap, JavaScript, jQuery

Backend: PHP, Laravel, MySQL

API Development: REST APIs, Third-Party Integrations

Version Control & Tools: Git, GitHub, Bitbucket, cPanel

Others: Authentication Systems, Queue Jobs, Payment Gateway Integration<br>
<br>
<b>🔸 What I Can Do for You</b>
<br>
✅ Custom Website Development – Responsive and pixel-perfect websites tailored to your business needs
✅ Laravel Web Applications – Secure, scalable, and high-performance applications
✅ API Development & Integration – Seamless integration with third-party services and platforms
✅ Performance Optimization – Faster load times, better SEO, and optimized database queries
✅ Maintenance & Support – Bug fixing, code refactoring, and ongoing project improvements<br>
<br>
<b>🌟 Why Work With Me </b>
<br>
Clean, maintainable, and well-documented code

Mobile-friendly, responsive, and user-focused designs

On-time delivery and transparent communication

Ability to work on both small tasks and large-scale projects

Dedicated to turning your ideas into real, functional solutions
    </p>
  </section>

  
 <section id="portfolio">
  <h2 class="section-title">My Projects</h2>
  <div class="container">
    <div class="row g-4 justify-content-center">
      
      <!-- Project 1 -->
      <div class="col-md-4">
        <a href="{{ route('projects.show', 'estate') }}" class="text-decoration-none">
          <div class="card project-card">
            <img src="{{ asset('storage/Estate.png') }}" class="card-img-top" alt="Real Estate Management System">
            <div class="card-body text-center">
              <h5 class="card-title">Real Estate Management System (University Project)</h5>
            
            </div>
          </div>
        </a>
      </div>
      
      <!-- Project 2 -->
      <div class="col-md-4">
        <a href="{{ route('projects.show', 'eye') }}" class="text-decoration-none">
          <div class="card project-card">
            <img src="{{ asset('storage/Eye.png') }}" class="card-img-top" alt="Mayo Hospital Eye Department">
            <div class="card-body text-center">
              <h5 class="card-title">Mayo Hospital Eye Department (My First Project)</h5>
             
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>




  <section id="services">
    <h2 class="section-title">Services</h2>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-box">
            <i class="bi bi-code-slash"></i>
            <h5>Front-End Development</h5>
            <p>Modern, responsive websites using HTML, CSS, Bootstrap, and JavaScript.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <i class="bi bi-server"></i>
            <h5>Back-End Development</h5>
            <p>Secure and scalable web applications using PHP & Laravel framework.</p>
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

  <section id="contact">
    <h2 class="section-title">Contact Me</h2>
    <div class="container">
     <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
    @csrf
    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="mb-3">
        <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
    </div>
    <button class="btn btn-primary w-100">Send Message</button>
</form>

<a href="{{ route('contact.pin') }}" class="position-relative btn btn-warning"> 📩 Mailbox @if($unreadCount > 0) <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> {{ $unreadCount }} </span> @endif </a>



 <footer>
  <div class="mb-3">
    <!-- Facebook -->
    <a href="https://www.facebook.com/profile.php?id=100006992227413" target="_blank" class="mx-2 text-decoration-none">
      <i class="bi bi-facebook" style="font-size: 24px; color: #1877f2;"></i>
    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/muhammad-azam-b05176301?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " target="_blank" class="mx-2 text-decoration-none">
      <i class="bi bi-linkedin" style="font-size: 24px; color: #0a66c2;"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/azmee0/" target="_blank" class="mx-2 text-decoration-none">
      <i class="bi bi-instagram" style="font-size: 24px; color: #e4405f;"></i>
    </a>

    <!-- Fiverr -->
    <a href="https://www.fiverr.com/sellers/muhammadazam406/edit" target="_blank" class="mx-2 text-decoration-none">
      <img src="{{ asset('storage/fiverr.png') }}" alt="Fiverr" style="height: 24px;">
    </a>

    <!-- Upwork -->
    <a href="https://www.upwork.com/freelancers/~010cdfa67351e6dc9b" target="_blank" class="mx-2 text-decoration-none">
      <img src="{{ asset('storage/upwork.png') }}" alt="Upwork" style="height: 24px;">
    </a>
  </div>

  <p>© 2025 M.Azam | Web Developer | <a href="#contact">Hire Me</a></p>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
