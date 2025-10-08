<?php 
$year = 2026;
$mail = "admision@icttalagante.cl";
$encargado = "Francisca Willhems";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ICT Talagante - Admicion</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="../resources/css/index.css">
  <link rel="stylesheet" href="../resources/css/admision.css">
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
                <li><a class="dropdown-item" href="info.html">Información General</a></li>
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
        <section id="inicio" class="contenido-seccion active">
                <div class="hero-visual d-flex align-items-center">
                    <div class="container-lg py-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-white hero-text">
                                <h1 class="display-5 fw-bold">Instituto de Ciencia y Tecnología de Talagante</h1>
                                <p class="lead">Proceso de admisión <?=$year?></p>
                                <ul class="bullet-list text-black">
                                    <li><strong>admicion@icttalagante.cl</strong></li>
                                </ul>
                            </div>

                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="hero-carousel-frame shadow-sm rounded-3 p-2">
                                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../resources/image/aboutus/imagenfachada.jpg" class="d-block w-100" alt="Imagen 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../resources/image/aboutus/imagendos.png" class="d-block w-100" alt="Imagen 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../resources/image/aboutus/imagentres.jpg" class="d-block w-100" alt="Imagen 3">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Anterior</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Siguiente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </section>
    </main>

  <div class="convocatoria-container">
    <h2>Ficha y Convocatoria 2026</h2>
    <div class="botones">
      <button class="btn btn-yellow">📄 Convocatoria Proceso Admisión 2026</button>
      <button class="btn btn-yellow">📄 Proyecto educativo</button>
      <button class="btn btn-cyan">📄 Formulario de Postulación</button>
      <button class="btn btn-cyan">📄 Requisitos de Ingreso</button>
    </div>
  </div>

  <br>

<!-- ====== PROCESOS DE POSTULACIÓN ====== -->
<section id="procesos" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4 text-uppercase text-dark">Procesos de Postulación</h2>
    <p class="text-muted mb-5">
      Conoce las etapas y requisitos del proceso de admisión. Cada paso ha sido diseñado para asegurar una postulación clara y transparente.
    </p>

    <div class="accordion" id="accordionProcesos">
      <div class="accordion-item">
        <h2 class="accordion-header" id="procesoUno">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
            📝 Registro y Envío de Documentos
          </button>
        </h2>
        <div id="collapseUno" class="accordion-collapse collapse show" aria-labelledby="procesoUno" data-bs-parent="#accordionProcesos">
          <div class="accordion-body">
            Regístrate en línea, completa tus datos personales y sube la documentación requerida. Recibirás un correo de confirmación con los siguientes pasos.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="procesoDos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
            💬 Entrevista Personal
          </button>
        </h2>
        <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="procesoDos" data-bs-parent="#accordionProcesos">
          <div class="accordion-body">
            Los postulantes seleccionados serán contactados para una entrevista, presencial o en línea, donde podrán compartir sus motivaciones y expectativas.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="procesoTres">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
            ✅ Resultados y Matrícula
          </button>
        </h2>
        <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="procesoTres" data-bs-parent="#accordionProcesos">
          <div class="accordion-body">
            Los resultados serán publicados en la plataforma. Los estudiantes aceptados podrán realizar su matrícula dentro del plazo establecido.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== PREGUNTAS FRECUENTES (FAQ) ====== -->
<section id="faq" class="py-5"> 
  <div class="container">
    <h2 class="fw-bold text-center text-uppercase mb-4 text-dark">Preguntas Frecuentes</h2>
    <p class="text-center text-muted mb-5">
      Encuentra respuestas a las dudas más comunes sobre el proceso de admisión.
    </p>

    <div class="accordion" id="accordionFAQ">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqUno">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqUno" aria-expanded="true" aria-controls="collapseFaqUno">
            📅 ¿Cuáles son las fechas del proceso de admisión?
          </button>
        </h2>
        <div id="collapseFaqUno" class="accordion-collapse collapse show" aria-labelledby="faqUno" data-bs-parent="#accordionFAQ">
          <div class="accordion-body">
            Las fechas exactas se publicarán en la sección de convocatorias. Te recomendamos revisar regularmente la página para mantenerte actualizado.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqDos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqDos" aria-expanded="false" aria-controls="collapseFaqDos">
            💰 ¿Tiene costo la postulación?
          </button>
        </h2>
        <div id="collapseFaqDos" class="accordion-collapse collapse" aria-labelledby="faqDos" data-bs-parent="#accordionFAQ">
          <div class="accordion-body">
            No. El proceso de postulación es completamente gratuito, sin costos ocultos ni compromisos de pago.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqTres">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqTres" aria-expanded="false" aria-controls="collapseFaqTres">
            📄 ¿Qué documentos debo presentar?
          </button>
        </h2>
        <div id="collapseFaqTres" class="accordion-collapse collapse" aria-labelledby="faqTres" data-bs-parent="#accordionFAQ">
          <div class="accordion-body">
            Se requieren documentos básicos como certificado de estudios, identificación válida y una carta de motivación. Los detalles exactos se informarán al momento de la postulación.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
