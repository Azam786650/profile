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
    /* Your existing styles remain the same */
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
    #contact{background-color:#fff;}
    .contact-form{max-width:600px;margin:auto;padding:30px;border-radius:15px;background:#f9f9f9;box-shadow:0 8px 20px rgba(0,0,0,0.1);}
    footer{background:#111;color:#aaa;padding:20px 0;text-align:center;margin-top:30px;}
    footer a{color:#ffd700;text-decoration:none;}
  </style>
</head>
<body>

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
    <a href="#contact" class="btn btn-warning">Hire Me</a>
  </div>
</section>

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

<footer>
  <div class="mb-3">
    <a href="https://www.fiverr.com/sellers/muhammadazam406/edit" target="_blank" class="mx-2 text-decoration-none">
      <img src="{{ asset('fiverr.png') }}" onerror="this.src='{{ asset('storage/fiverr.png') }}'" alt="Fiverr" style="height:24px;">
    </a>
    <a href="https://www.upwork.com/freelancers/~010cdfa67351e6dc9b" target="_blank" class="mx-2 text-decoration-none">
      <img src="{{ asset('upwork.png') }}" onerror="this.src='{{ asset('storage/upwork.png') }}'" alt="Upwork" style="height:24px;">
    </a>
  </div>
  <p>© 2025 M.Azam | Web Developer | <a href="#contact">Hire Me</a></p>
</footer>

</body>
</html>
