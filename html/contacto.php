<?php
$telefono = "+56982334100";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ICT Talagante - contacto</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="../resources/css/index.css">
  <link rel="icon" href="../resources/image/Misc/Logn.png" type="image/x-icon">
</head>
<body>
  <!-- ========================= -->
  <!-- HEADER / NAVBAR -->
  <!-- ========================= -->
  <header class="sticky-top bg-white shadow-sm">
    <nav class="container navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-0">
        <div class="d-flex align-items-center">
          <img src="../resources/image/Misc/Logn.png" alt="Logo ICT" id="logo" style="cursor:pointer;">
          <a class="navbar-brand ms-2 fw-bold" href="../index.html">ICT Talagante</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="../index.html">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.html">Sobre Nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Más Información</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pei.html">Proyecto Educativo</a></li>
                <li><a class="dropdown-item" href="admision.php">Admisión</a></li>
                <li><a class="dropdown-item" href="contacto.php">Contacto</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- ========================= -->
  <!-- CONTENIDO -->
  <!-- ========================= -->
  <main class="container-lg py-5">
            <section id="contacto" class="contenido-seccion container-lg py-5">
            <h2 class="section-title text-center">Contacto</h2>
            <div class="row align-items-start gy-4">
                <div class="col-md-6">
                    <form action="contacto" class="contact-form">
                        <input type="text" id="nombre" placeholder="Nombre" class="input mb-2">
                        <input type="email" id="email" placeholder="Email" class="input mb-2">
                        <input type="text" id="asunto" placeholder="Asunto" class="input mb-2">
                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="mb-2"></textarea>
                        <div class="mt-2">
                            <button class="btn btn-primary"><span>Enviar</span></button>
                            <a href="https://wa.me/<?=$telefono?>"><p>Contactar via whatsapp</p></a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d293.5242570404888!2d-70.92608149847482!3d-33.661103237584506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1759772686428!5m2!1ses!2scl" id="mapa" style="border:0;width:100%;height:320px;border-radius:8px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
  </main>

  <!-- ========================= -->
  <!-- FOOTER -->
  <!-- ========================= -->
  <footer class="bg-light">
    <div class="container text-center py-3">
      <ul class="lista-horizontal mb-2">
        <li><a href="#"><img src="../resources/image/icons/facebook.png" alt="Facebook" id="social-icon"></a></li>
        <li><a href="#"><img src="../resources/image/icons/instagram.png" alt="Instagram" id="social-icon"></a></li>
        <li><a href="#"><img src="../resources/image/icons/twitter.png" alt="Twitter" id="social-icon"></a></li>
        <li><a href="#"><img src="../resources/image/icons/youtube.png" alt="YouTube" id="social-icon"></a></li>
      </ul>
      <p class="mb-0">&copy; Yuuruii's development — Todos los derechos reservados</p>
    </div>
  </footer>

  <!-- ========================= -->
  <!-- SCRIPTS -->
  <!-- ========================= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../resources/js/ict_main.js"></script>
</body>
</html>
