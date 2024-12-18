<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch($error) {
        case 'vacio':
            $message = "<p style='color: red; font-size: 1.3rem; text-align:center '>Por favor,ingrese su correo electrónico.</p>";
            break;
        case 'no_existe':
            $message = "<p style='color: red; font-size: 1.3rem; text-align:center '>No se encontró ninguna cuenta con ese correo electrónico.</p>";
            break;
      
        case 'error':
            $message = "<p style='color: red; font-size: 1.3rem; text-align:center '>Hubo un problema al enviar el correo.Por favor,intenta nuevamente más tarde.</p>";
            break;
        
            default:
            $message = "<p style='color: red; font-size: 1.3rem; text-align:center '>Error desconocido</p>";
            break;
    }
}elseif (isset($_GET['success'])) {
  $success = $_GET['success']; 
  if ($success == 'restablecer') {
      $message = "<p style='color: green; font-size: 1.3rem; text-align:center '>Hemos enviado un enlace para restablecer tu contraseña al correo proporcionado.</p>";
  }
}
?>
<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="front-pages-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Servicios de Telefonía VoIP para Empresas en Colombia - BestVoIPer</title>

    <meta name="description" content="Descubra soluciones avanzadas en telefonía VoIP e 
    IP para su empresa en Colombia. Mejore sus comunicaciones con BestVoIPer, su aliado tecnológico." />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" alt="bestvoiper comunicaciones"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/front-config.js"></script>
  </head>
  <style>
    @media (max-width: 500px) {
        .imagenContacto {
            margin-top: 25%;
        }
    }

  
</style>
<body>
  <div>
    <nav class="layout-navbar shadow-none py-0">
      <div class="container" >
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="/paginaweb/index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
               <img src="../assets/img/branding/LOGOBESTVOIPER.png" width="35" alt="bestvoiper comunicaciones"/>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Bestvoiper</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="tf-icons bx bx-x bx-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="/paginaweb/index.php">Inicio</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link fw-medium" href="contacto.php">Contáctanos</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link fw-medium" href="admin.php" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- navbar button: Start -->
            <li>
              <a href="/paginaweb/pages/admin.php" class="btn btn-primary" style="background-color: #74ac58;border: 1px solid #74ac58;" target="_blank">
                <span class="tf-icons bx bx-user me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>

      <section style="width: 100%; display: flex; justify-content: center; 
        align-items: center;margin-top: 10%;">

         <div>
          
           <div class="imagenContacto">
            
             <img src="../assets/img/front-pages/landing-page/reset.svg" alt="recuperar contraseña"/>
           
           </div>
           <div>
             <br/>
           <h4 class="mb-1 text-center">RECUPERAR CONTRASEÑA</h4>
           <p class="mb-4 text-center" style="width: 90%;margin: auto; margin-bottom: 10px;">
              <br class="d-none d-lg-block" />
            
           </p>
           <form action="../mail/recuperar.php" method="POST" id="contactForm">
            
             <input type="hidden" name="product_name" value="Home Page">
             
              <input
              id="email"
              type="email"
              placeholder="Correo"
              name="correo"
              style="width: 100%;min-width: 380px;"
              required
            />
              
             <input type="submit" value="RECUPERAR CONTRASEÑA" name="enviar" />
             <div id="respuestaEnviado" style="display: none;">
                 <p id="respuestaTexto"></p>
             </div>
             <div style="text-align: center;">
              <a  href="admin.php"  style="cursor: pointer;color:#5579b7; text-decoration: none;">Iniciar Sesión</a>
              <br/>
              <a href="registro.php" style="cursor: pointer;color:#5579b7; text-decoration: none;">Registrarse</a>
             </div>
             <div id="error-message" style="color: red; font-size: 1.3rem; text-align:center; font-family: 'Montserrat', 'sans-serif'; font-weight: 400;">
             <?php 
                if (isset($message)) {
                  echo "<p>" . $message  ."</p>";
                }
                ?>
            </div>
         </form>
       </div>
 
       </div>
     </section>



  <script src="login.js"></script>
  <script>
    function send(event) {
    event.preventDefault(); // Prevent the form from submitting

    const email = document.querySelector('[name="correo"]').value;

    if (!email) {
      document.getElementById("error-message").innerText = "Por favor, ingresa un correo electrónico";
      document.getElementById("error-message").style.display = "block";
    } else {
      document.getElementById("error-message").style.display = "none";
      // Proceed with form submission or other actions
    }
  }

  function handle(event) {
    // Handle change events for the input fields
  }
  </script>

     <!-- Footer: Start -->
     <footer class="landing-footer bg-body footer-text">
        <div class="footer-top position-relative overflow-hidden z-1">
      
          <div class="container">
            <div class="row gx-0 gy-4 g-md-5">
              <div class="d-flex justify-content-between align-items-center w-100" >
                
                <!-- Sección de Bestvoiper (al lado derecho) -->
                <a href="index.php" class="app-brand-link mb-4 d-flex align-items-center">
                  <span class="app-brand-logo demo">
                    <img src="../assets/img/branding/LOGOBESTVOIPER.png" width="35" alt="bestvoiper comunicaciones"/>
                  </span>
                  <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Bestvoiper</span>
                  <span class="footer-text" style="margin-right: 20px;">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                  </span>
                </a>
          
                <!-- Sección de Redes Sociales (al lado izquierdo) -->
                <div class="d-flex align-items-center">
                  <a href="https://github.com/themeselection" class="footer-link me-3" target="_blank">
                    <img src="../assets/img/front-pages/icons/github-light.png" alt="github icon" />
                  </a>
                  <a href="https://www.facebook.com/ThemeSelections/" class="footer-link me-3" target="_blank">
                    <img src="../assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" />
                  </a>
                  <a href="https://twitter.com/Theme_Selection" class="footer-link me-3" target="_blank">
                    <img src="../assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" />
                  </a>
                  <a href="https://www.instagram.com/themeselection/" class="footer-link" target="_blank">
                    <img src="../assets/img/front-pages/icons/instagram-light.png" alt="instagram icon" />
                  </a>
                </div>
                
              </div>
            </div>
          </div>
  
  
  
        </div>
        
      </footer>
      <!-- Footer: End -->
  
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="../assets/vendor/libs/popper/popper.js"></script>
      <script src="../assets/vendor/js/bootstrap.js"></script>
  
      <!-- endbuild -->
  
      <!-- Vendors JS -->
      <script src="../assets/vendor/libs/nouislider/nouislider.js"></script>
      <script src="../assets/vendor/libs/swiper/swiper.js"></script>
  
      <!-- Main JS -->
      <script src="../assets/js/front-main.js"></script>
  
      <!-- Page JS -->
      <script src="../assets/js/front-page-landing.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.4/lottie.min.js"></script>
        <script>
          var animation = lottie.loadAnimation({
              container: document.getElementById('lottie'), // El contenedor donde se renderiza la animación
              renderer: 'svg', // Se recomienda 'svg' o 'canvas'
              loop: true, // Si quieres que la animación se repita
              autoplay: true, // Para que la animación comience automáticamente
              path: 'assets/img/front-pages/landing-page/grow.json' // Ruta del archivo JSON de la animación Lottie
          });
      </script>
    </body>
  

  
</body>
</html>