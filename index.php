<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Yuda Zihad Rozikin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        .hero{
            background: linear-gradient(135deg,#0d6efd,#4facfe);
            color:white;
            padding:100px 0;
        }

        .hero img{
            width:220px;
            height:220px;
            object-fit:cover;
            border-radius:50%;
            border:6px solid white;
            box-shadow:0 10px 20px rgba(0,0,0,.2);
        }

        .card{
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-10px);
            box-shadow:0 10px 20px rgba(0,0,0,.15);
        }

        footer{
            background:#0d6efd;
            color:white;
            padding:20px;
        }

        .section-title{
            font-weight:bold;
            margin-bottom:30px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Yuda Portfolio</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Tentang</a>
                </li>
                <li class="nav-item">
                    <a href="#skill" class="nav-link">Skill</a>
                </li>
                <li class="nav-item">
                    <a href="#project" class="nav-link">Project</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero text-center" id="home">
    <div class="container">

        <img src="https://via.placeholder.com/220" alt="Foto Profil">

        <h1 class="mt-4 fw-bold">Yuda Zihad Rozikin</h1>

        <p class="lead">
            Web Developer | Mahasiswa | UI Designer
        </p>

        <a href="#project" class="btn btn-light btn-lg mt-3">
            Lihat Project
        </a>

    </div>
</section>

<!-- About -->
<section class="py-5" id="about">
    <div class="container">

        <h2 class="text-center section-title">
            Tentang Saya
        </h2>

        <p class="text-center">
            Halo! Saya <b>Yuda Zihad Rozikin</b>. Saya memiliki minat dalam
            pengembangan website menggunakan HTML, CSS, Bootstrap,
            JavaScript, dan PHP. Saya senang belajar teknologi baru
            serta membuat tampilan website yang modern dan responsif.
        </p>

    </div>
</section>

<!-- Skill -->
<section class="py-5 bg-light" id="skill">

<div class="container">

<h2 class="text-center section-title">
Skill
</h2>

<div class="row text-center">

<div class="col-md-3 mb-4">
<div class="card p-4">
<h3><i class="bi bi-filetype-html text-danger"></i></h3>
<h5>HTML</h5>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card p-4">
<h3><i class="bi bi-filetype-css text-primary"></i></h3>
<h5>CSS</h5>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card p-4">
<h3><i class="bi bi-bootstrap text-purple"></i></h3>
<h5>Bootstrap</h5>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card p-4">
<h3><i class="bi bi-filetype-js text-warning"></i></h3>
<h5>JavaScript</h5>
</div>
</div>

</div>

</div>

</section>

<!-- Project -->
<section class="py-5" id="project">

<div class="container">

<h2 class="text-center section-title">
Project
</h2>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://via.placeholder.com/400x250" class="card-img-top">

<div class="card-body">

<h5>Website Sekolah</h5>

<p>Membuat website sekolah menggunakan Bootstrap dan PHP.</p>

<button class="btn btn-primary">
Detail
</button>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://via.placeholder.com/400x250" class="card-img-top">

<div class="card-body">

<h5>Website Toko</h5>

<p>Website penjualan online sederhana yang responsif.</p>

<button class="btn btn-primary">
Detail
</button>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://via.placeholder.com/400x250" class="card-img-top">

<div class="card-body">

<h5>Portfolio</h5>

<p>Website portfolio pribadi dengan desain modern.</p>

<button class="btn btn-primary">
Detail
</button>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Contact -->
<section class="py-5 bg-light" id="contact">

<div class="container">

<h2 class="text-center section-title">
Kontak
</h2>

<div class="row justify-content-center">

<div class="col-md-6">

<form>

<input type="text" class="form-control mb-3" placeholder="Nama">

<input type="email" class="form-control mb-3" placeholder="Email">

<textarea class="form-control mb-3" rows="5" placeholder="Pesan"></textarea>

<button class="btn btn-primary w-100">
Kirim
</button>

</form>

</div>

</div>

</div>

</section>

<!-- Footer -->
<footer class="text-center">
    <p class="mb-0">
        © 2026 | Yuda Zihad Rozikin
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>