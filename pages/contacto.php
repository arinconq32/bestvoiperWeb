<?php

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == 'mail') {
        $message = "<p style='color: red; font-size: 1.3rem; text-align:center '>Se presentó un error al enviar el correo</p>";
    } 
   
}
if (isset($_GET['success'])) {
  $success = $_GET['success'];
  if ($success == 'true') {
      $message = "<p style='color: green; font-size: 1.3rem; text-align:center '>Mensaje enviado con éxito. Pronto nos estaremos contactando contigo.</p>";
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
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/front-config.js"></script>
  
  </head>

  <body>
   
    <script src="assets/vendor/js/dropdown-hover.js"></script>
    <script src="assets/vendor/js/mega-dropdown.js"></script>
    <style>
        @media (max-width: 500px) {
            .imagenContacto {
                margin-top: 25%;
            }
        }
    
      
    </style>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
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
            <a href="/paginaweb/paginaweb/index.php" class="app-brand-link">
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
                <a class="nav-link fw-medium" aria-current="page" href="index.php#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#somos">¿Quienes somos?</a>
              </li>
              <li class="nav-item mega-dropdown">
                <a
                  href="javascript:void(0);"
                  class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                  aria-expanded="false"
                  data-bs-toggle="mega-dropdown"
                  data-trigger="hover">
                  <span data-i18n="Pages">Nuestros Productos</span>
                </a>
                <div class="dropdown-menu p-4">
                  <div class="row gy-4">
                    <div class="col-12 col-lg">
                      
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/bestcontactcenter.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Pricing">Best Contact Center Pro</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/bestcallcenter.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Payment">Best Call Center Pro</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/bestdid.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Checkout">Best DID</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/bestiptrunk.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">Best IpTrunk</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/masivos.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">SMS Masivos</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                   
                   
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#landingFAQ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="index.php#landingContact">Contáctanos</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link fw-medium" href="pages/admin.php" target="_blank">Admin</a>
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
    <!-- Navbar: End -->

    <!-- Sections:Start -->



    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>

    <div style="width: 85%; margin: 10% auto;" id="landingContact">
      <section style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 30px; padding: 0 15px;">
       
       
      
       <div>
        
         <div class="imagenContacto">
          
           <img src="../assets/img/front-pages/landing-page/contacto.svg" alt="contactanos"/>
           <div class="col-md-6 col-lg-12 col-xl-6">
             <div class="d-flex align-items-center">
               <div><i class='bx bxs-envelope' style="color:#5579b7; font-size: 3em;margin: 5px;"></i></div>
               <div>
                 <p class="mb-0">Correo</p>
                 <h5 class="mb-0">
                   <a class="text-heading">info@bestvoiper.com.co</a>
                 </h5>
               </div>
             </div>
           </div>
           <div class="col-md-6 col-lg-12 col-xl-6">
             <div class="d-flex align-items-center">
               <div>
                 <i class='bx bxs-phone' style="color:#5579b7; font-size: 3em;margin: 5px;" ></i>
               </div>
               <div>
                 
                 <p class="mb-0">Teléfonos:</p>
                 <h5 class="mb-0">
                   <a class="text-heading" style="font-size: 12px;">(+57)3330333014 (+57)312 456 0009</a>
                 </h5>
               </div>
             </div>
           </div>
         </div>
         <div>
           <br/>
         <h4 class="mb-1 text-center">¡Escríbenos!</h4>
         <p class="mb-4 text-center" style="width: 90%;margin: auto; margin-bottom: 10px;">
           ¡No dudes en contáctarnos!<br class="d-none d-lg-block" />
           Resolveremos todas las dudas que tengas
         </p>
         <form action="../mail/enviarMail.php" method="POST" id="contactForm">
          
           <input type="hidden" name="product_name" value="Home Page">
           <div style="display: flex; justify-content: space-between; flex-wrap: wrap; ">
             <input
               id="nombres"
               type="text"
               placeholder="Nombre y Apellido"
               name="nombres"
               required
             
             />
             <input
               id="email"
               type="email"
               placeholder="Correo"
               name="email"
             
               required
             />
           </div>
           <input
               id="telefono"
               type="number"
               placeholder="Teléfono de Contacto"
               name="telefono"
               required
           />
           <textarea
               id="mensaje"
               placeholder="¿Cómo podemos ayudarte? (opcional)"
               name="mensaje"
           ></textarea>
           <input type="submit" value="ENVIAR MENSAJE" name="enviar" />
           <div id="errorMessage" style="display: none;">
           </div>
           <div style="margin: auto">
             <?php 
                if (isset($message)) {
                  echo "<p>" . $message  ."</p>";
                }
                ?>
              </div>
           <p class="registro">Con BESTVOIPER crecemos juntos</p>
           
       </form>
     </div>

     </div>
   </section>


   
     <!-- Contact Us: End -->
  
     <!-- Contact Us: End -->
   </div>


    <!-- Vendors JS -->
    <script src="assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="assets/js/front-main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/front-page-landing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.4/lottie.min.js"></script>
      <script>
        var animation = lottie.loadAnimation({
            container: document.getElementById('lottie'), // El contenedor donde se renderiza la animación
            renderer: 'svg', // Se recomienda 'svg' o 'canvas'
            loop: true, // Si quieres que la animación se repita
            autoplay: true, // Para que la animación comience automáticamente
            path: 'assets/img/front-pages/landing-page/grow.json' // Ruta del archivo JSON de la animación Lottie
        });
      


        document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll('.section'); // Seleccionamos todas las secciones
        const currentParagraph = document.getElementById('current-paragraph'); // El párrafo en el contenedor fijo
        const currentSubtitle = document.getElementById('current-subtitle'); // El subtítulo en el contenedor fijo
        const currentTitle = document.getElementById('current-title'); // El título en el contenedor fijo
        const currentImage = document.getElementById('current-image'); // La imagen en el contenedor fijo
        const fixedContainer = document.querySelector('.fixed-container'); // El contenedor fijo
        const body = document.querySelector('body'); // El body para ajustar el margen inferior al final

    // Función que cambia el contenido visible (título, subtítulo, párrafo, imagen) según la sección en vista
    function showContentOnScroll() {
        let currentVisibleIndex = -1; // Inicialmente no hay sección visible

        sections.forEach((section, index) => {
            const rect = section.getBoundingClientRect(); // Obtenemos la posición de la sección
            const isInView = rect.top <= window.innerHeight && rect.bottom >= 0; // Verificamos si la sección está en la vista

            const paragraph = section.querySelector('p'); // Seleccionamos el párrafo dentro de la sección
            const subtitle = section.querySelector('h3'); // Seleccionamos el subtítulo dentro de la sección
            const title = section.querySelector('h1'); // Seleccionamos el título dentro de la sección
            const image = section.querySelector('.imagenCRM img'); // Seleccionamos la imagen dentro de la sección

            if (isInView) {
                // Si la sección está en la vista, actualizamos los contenidos visibles
                currentParagraph.textContent = paragraph.textContent; // Cambiamos el contenido del párrafo fijo
                currentSubtitle.textContent = subtitle.textContent; // Cambiamos el contenido del subtítulo fijo
                currentTitle.textContent = title.textContent; // Cambiamos el contenido del título fijo

                // Cambiar la imagen (usando el atributo src)
                if (image) {
                    currentImage.src = image.src; // Actualiza la fuente de la imagen en el contenedor fijo
                    currentImage.alt = image.alt; // También actualizamos el texto alternativo
                }

                paragraph.classList.add('visible'); // Hacemos visible el párrafo de la sección
                subtitle.classList.add('visible'); // Hacemos visible el subtítulo de la sección
                title.classList.add('visible'); // Hacemos visible el título de la sección
                currentVisibleIndex = index; // Guardamos el índice de la sección visible
            } else {
                paragraph.classList.remove('visible'); // Ocultamos el párrafo si no está en la vista
                subtitle.classList.remove('visible'); // Ocultamos el subtítulo si no está en la vista
                title.classList.remove('visible'); // Ocultamos el título si no está en la vista
            }
        });

        // Solo mostramos contenido cuando hay una sección visible
        if (currentVisibleIndex === -1) {
            currentParagraph.textContent = "Desplázate para ver más contenido."; // Texto por defecto cuando no hay sección visible
            currentSubtitle.textContent = ""; // No mostrar subtítulo si no hay sección visible
            currentTitle.textContent = ""; // No mostrar título si no hay sección visible
            currentImage.src = ""; // Limpiar la imagen si no hay sección visible
        }

        // Verificar si llegamos al final del scroll (última sección visible)
        const lastSection = sections[sections.length];
        const lastSectionRect = lastSection.getBoundingClientRect();

        // Si la última sección está completamente en la vista (llegamos al final del contenido)
        if (lastSectionRect.top <= window.innerHeight) {
            // Liberamos el contenedor fijo, dejándolo en el fondo de la página
            fixedContainer.classList.add('end');
            body.classList.add('fixed-content'); // Ajusta el margen inferior para no dejar espacio
        } else {
            // Si aún no estamos en el último bloque, mantenemos la posición fija
            fixedContainer.classList.remove('end');
            body.classList.remove('fixed-content'); // Restablecer el margen cuando no estamos al final
        }
    }

    // Ejecutamos la función cuando el usuario hace scroll
    window.addEventListener('scroll', showContentOnScroll);

    // Llamamos a la función de inmediato para verificar si ya hay un contenido visible al cargar la página
    showContentOnScroll();

//VALIDACIÓN FORMULARIO
document.getElementById("contactForm").addEventListener("submit", function (event) {
  event.preventDefault(); 

  // Obtener los valores de los campos
  const nombres = document.getElementById("nombres").value;
  const email = document.getElementById("email").value;
  const telefono = document.getElementById("telefono").value;
  let errorMessage = ""; 

  // Validación de Nombre (debe ser no vacío)
  if (nombres.trim() === "") {
    errorMessage += "<p style='color: red;'>El campo 'Nombre y Apellido' es obligatorio.</p>";
  }

  // Validación de Correo (debe ser un correo válido)
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (!emailRegex.test(email)) {
    errorMessage += "<p style='color: red;'>Por favor, ingrese un correo electrónico válido.</p>";
  }

  // Validación de Teléfono (debe ser un número válido)
  if (telefono.trim() === "" || isNaN(telefono) || telefono.length < 10) {
    errorMessage += "<p style='color: red;'>Por favor, ingrese un teléfono válido (al menos 10 dígitos).</p>";
  }

  // Si hay mensajes de error, mostrar en el formulario
  if (errorMessage !== "") {
    const errorDiv = document.getElementById("errorMessage"); 
    errorDiv.style.display = "block";
    errorDiv.innerHTML = errorMessage; 
    return false; 
  }

  // Si todo está correcto, enviar el formulario
  this.submit(); 
});
});
    </script>
  </body>


  </styl>
</html>
