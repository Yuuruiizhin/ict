<?php
$telefono = "+5125562423";
$mail = "admision@icttalagante.cl";
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
  <link rel="stylesheet" href="../resources/css/contacto.css">
  <link rel="stylesheet" href="../resources/css/yrz_cards.css">
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
   <br>
  <center>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Información de Contacto</h3>
                
                <div class="contact-info d-flex flex-row gap-2 flex-wrap">

                    <a href="https://wa.me/<?= $telefono ?>">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <p class="FLIPCTitle">Whatsapp</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                    </svg>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title" #back-card-txt><strong><?= $telefono ?></strong></p>
                                    <p>Haz click en la tarjeta para enviar mensaje.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="mailto:<?= $mail ?>">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <p class="FLIPCTitle">Email</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                    </svg>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title" #back-card-txt><strong><?= $mail ?></strong></p>
                                    <p>Haz click en la tarjeta para enviar mensaje.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <p class="FLIPCTitle">Facebook</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title" #back-card-txt><strong>IctTalagante</strong></p>
                                    <p>Haz click en la tarjeta para enviar mensaje.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
  </center>
  <br>
  <center>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Encuentranos en Talagante</h3>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.847671736095!2d-70.92874918865257!3d-33.661108673195415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662e364d248e2fd%3A0xa634ddb700903fe7!2sInstituto%20de%20Ciencias%20y%20Tecnolog%C3%ADa%20Talagante!5e0!3m2!1ses!2scl!4v1761139555285!5m2!1ses!2scl" width="70%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  <center>
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
