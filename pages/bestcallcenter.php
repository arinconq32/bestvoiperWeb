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

    <title>Bestvoiper Comunicaciones</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

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

  <body>
   
    <script src="../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../assets/vendor/js/mega-dropdown.js"></script>
    <script>
 let index = 0;  
let slidesToShow = 3;  // Este será el valor por defecto para pantallas grandes

// Función para mover el slide (con base en el tamaño de la pantalla)
function moveSlide(step) {
  const slides = document.querySelectorAll('.slide');  
  const totalSlides = slides.length;
  
  // Determinar el número de slides a mostrar en función del tamaño de la pantalla
  if (window.innerWidth <= 850) {
    slidesToShow = 1;  // En pantallas móviles, mostramos solo 1 slide a la vez
  } else {
    slidesToShow = 3;  // En pantallas grandes, mostramos 3 slides a la vez
  }

  // Actualizamos el índice según la dirección del desplazamiento
  index += step;
  
  // Ajustar el índice cuando se sale de los límites
  if (index < 0) {
    index = totalSlides - slidesToShow;  
  } else if (index >= totalSlides - slidesToShow) {
    index = 0;  
  }
  
  // Desplazamos el slider
  const slider = document.querySelector('#slider');
  slider.style.transform = `translateX(-${index * (100 / slidesToShow)}%)`;
  
  // Actualizamos las clases de los slides
  updateSlideClasses(slides);
}

// Actualizamos las clases activas de los slides
function updateSlideClasses(slides) {
  slides.forEach((slide, i) => {
    const nextSlideIndex = (index + 1) % slides.length;
    
    if (i === nextSlideIndex) {
      slide.classList.add('active');  // Añadimos la clase 'active' al siguiente slide
    } else {
      slide.classList.remove('active');  // Removemos la clase 'active' a los demás
    }
  });
}

// Escuchar el evento de redimensionar la ventana para actualizar el número de slides visibles
window.addEventListener('resize', () => {
  // Actualizar el número de slides a mostrar cada vez que se cambia el tamaño de la pantalla
  if (window.innerWidth <= 850) {
    slidesToShow = 1;  // Pantallas pequeñas
  } else {
    slidesToShow = 3;  // Pantallas grandes
  }
});


    </script>


<style>
 
 
 .response {
    display: none;
  }
  #slider-container {
    position: relative;
    width: 100%;
    height: auto;
    margin: auto;
    overflow: hidden;
    margin: 30px auto;
  }
  
  #slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }
  
  
  .slide {
    min-width: 33.33%; /* Mostrar tres slides a la vez */
    transition: transform 0.5s ease-in-out;
    display: block;
    padding: 10px;
    transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
    opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
  }
  
  /* El siguiente slide será más grande (cuando se mueve al siguiente grupo) */
  .slide.active {
    transform: scale(1);  /* El siguiente slide será el más grande */
    opacity: 1; /* Mayor opacidad para el slide activo */
  }
  
  .prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    font-size: 24px;
    cursor: pointer;
    z-index: 10;
  }
  
  .prev { left: 10px; }
  .next { right: 10px; }
  
  /**/
 
  /* Pantallas pequeñas (móviles) */
  @media (max-width: 850px) {
    body {
      background-color: lightblue;
    }
    .slide {
    min-width: 100%; /* Mostrar tres slides a la vez */
    transition: transform 0.5s ease-in-out;
    display: block;
    padding: 10px;
    transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
    opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
  }
  
  #slider-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-top: -100px;
  }
 
  }
  
  /* Pantallas medianas (tablets) */
  @media (min-width: 768px) and (max-width: 1024px) {
    body {
      background-color: lightgreen;
    }
    .slide {
    min-width: 33.33%; /* Mostrar tres slides a la vez */
    transition: transform 0.5s ease-in-out;
    display: block;
    padding: 10px;
    transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
    opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
  }
  
  }
  
  /* Pantallas grandes (escritorios, laptops) */
  @media (min-width: 1025px) {
    body {
      background-color: lightcoral;
    }
    .slide {
    min-width: 33.33%; /* Mostrar tres slides a la vez */
    transition: transform 0.5s ease-in-out;
    display: block;
    padding: 10px;
    transform: scale(0.8); /* Reduce el tamaño de todos los slides inicialmente */
    opacity: 0.8; /* Hace los slides laterales un poco más transparentes */
  }
 
  }
/* Estilo general para el contenedor */
.contenedorToogle {
 
  font-family: 'Montserrat', 'sans-serif'; font-weight: 200;
  padding: 20px;
  border-radius: 8px;
  background-color: #f9f9f9;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  /* Sombra suave */
}

/* Título principal */
h1 {
  font-size: 2.5em;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
  font-family: 'Montserrat', 'sans-serif'; font-weight: 200;
}

/* Estilo de los títulos de los toggles */
.tituloToggle {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-bottom: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Cambio de color y animación al pasar el mouse por encima */
.tituloToggle:hover {
  background-color: #74ac58;  /* Fondo cuando pasa el mouse */
  transform: translateX(5px);  /* Leve movimiento hacia la derecha */
}

.tituloToggle:hover .toggleTitulo {
  color: white;  /* Cambiar el color del texto a blanco cuando pasa el mouse */
}

.toggleTitulo {

  color: #7e7e7e;  /* Color inicial del título */
  font-weight: bold;
  margin: 0;
  transition: color 0.3s ease;  /* Transición suave para el cambio de color */
  font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;
  font-size: 1.1rem;
}
.response p{
  font-size: 1.1rem;
}
/* Estilo del icono chevron */
.chevron {
  font-size: 1.5em;
  color: #999;
  transition: transform 0.3s ease, color 0.3s ease;  /* Agregar transición de color */
}

/* Cambiar el color del chevron al hacer hover */
.tituloToggle:hover .chevron {
  color: white;  /* Cambia el color del chevron cuando se hace hover */
}
/* Estilo de los contenidos (por defecto ocultos) */
.response {
  display: none;
  padding: 15px;
  margin-top: 10px;
  background-color: #fafafa;
  border-radius: 8px;
  border-left: 5px solid #74ac58;  /* Barra azul a la izquierda */
  color: #555;
  font-size: 1.1em;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

/* Mostrar los contenidos cuando están visibles */
.response.active {
  display: block;
}

/* Transición suave para el cambio del chevron */
.tituloToggle.active .chevron {
  transform: rotate(180deg); /* Rotar el chevron cuando se abre el toggle */
}

/* Estilo para el texto del contenido */
.response p {
  margin: 0;
}

/* Estilo de los chevrons cuando se abre */
.tituloToggle.active {
  background-color: #e3f2fd;
  border-color: #2196f3;
}
#contactForm{
  margin: 100px auto;
}
</style>

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
                      <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestcontactcenter.php">
                        <i class="bx bx-radio-circle me-2"></i>
                        <span data-i18n="Pricing">Best Contact Center Pro</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestcallcenter.php">
                        <i class="bx bx-radio-circle me-2"></i>
                        <span data-i18n="Payment">Best Call Center Pro</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestdid.php">
                        <i class="bx bx-radio-circle me-2"></i>
                        <span data-i18n="Checkout">Best DID</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/bestiptrunk.php">
                        <i class="bx bx-radio-circle me-2"></i>
                        <span data-i18n="Help Center">Best IpTrunk</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="/paginaweb/pages/masivos.php">
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
            <a class="nav-link fw-medium" href="/paginaweb/pages/contacto.php">Contáctanos</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link fw-medium" href="/paginaweb/pages/admin.php" target="_blank">Admin</a>
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

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section >
        
       

        <div class="container2">
         
            <img
              src="../assets/img/front-pages/landing-page/3.svg"
              alt="bestcallcenter"
              class="imagen"
              data-app-light-img="front-pages/landing-page/3.svg"
              data-app-dark-img="front-pages/landing-page/3.svg"
            />
          
        </div>


        
        <div class="landing-hero-blank"></div>
      </section>
    
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="somos" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            
            <p class="text-center mb-3 mb-md-5 pb-3" >
              Herramienta con funciones avanzadas que permite a teleoperadores, asesores o agentes de atención al cliente:            </p>
            
            
              <section style="width: 100%; margin: auto;">
                  <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 20px;">
                      <img src="../assets/img/front-pages/landing-page/call1.svg" style="width: 450px" alt="Realizar una encuesta" />
                      <img src="../assets/img/front-pages/landing-page/call2.svg" style="width: 450px" alt="Recibir y realizar llamadas a clientes actuales y portenciales para vender productos" />
                      <img src="../assets/img/front-pages/landing-page/call3.svg" style="width: 450px" alt="Ofrecer un servicio" />
                      <img src="../assets/img/front-pages/landing-page/call4.svg" style="width: 450px" alt="Recibir llamadas para responder inquietudes y tomar pedidos" />
                      <img src="../assets/img/front-pages/landing-page/call5.svg" style="width: 450px" alt="Registrar reclamos, sondeos, entre otros" />
                 
                  </div>
              </section>
             
          </div>
      
      
          <div class="text-center mb-3 pb-1">
            
          
          <h3 class="text-center mb-1" style="font-size: 2em;font-family: 'Montserrat', 'sans-serif'; font-weight: 200;"></h3>
          <p class="text-center mb-3 mb-md-5 pb-3" >
            Nuestro software de call center todo-en-uno te permite establecer una comunicación con tus clientes, proveedores o socios comerciales.
          </p>
        
        </div>
        <h1 class="text-center mb-1" style="color: #74ac58; font-weight: bolder;">CARACTERISTICAS</h1>
       
        <div id="slider-container">
          <div id="slider">
            <!-- Duplicar los slides al principio y al final para crear un efecto infinito -->
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO1.svg" alt="Integraciones con IV, CRM, WEBSERVICES Y DISCADORES" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO2.svg" alt="Panel de control monitorei en tiempo real de llamadas y asesores" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO3.svg" alt="Sistema de encuestas y grabación de llamadas" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO4.svg" alt="Administración y configuración de colas de llamadas y agentes" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO5.svg" alt="Reportes y estadisticas de llamadas. Control de Logueo." style="width: 100%; height: 800px;">
            </div>
        
            <!-- Duplicamos los slides para crear un efecto infinito -->
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO1.svg" alt="Imagen 1" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO2.svg" alt="Imagen 2" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO3.svg" alt="Imagen 3" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO4.svg" alt="Imagen 4" style="width: 100%; height: 800px;">
            </div>
        
            <div class="slide">
              <img src="../assets/img/front-pages/landing-page/CARACTERISTICASBESTCALLCENTERPRO5.svg" alt="Imagen 5" style="width: 100%; height: 800px;">
            </div>
          </div>
        
          <!-- Botones de navegación -->
          <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
          <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
       
         
          
        
      <!-- Useful features: End -->
   
    
      
    
    <h1 style="font-size: 40px; text-align: center;font-family: 'Open Sans', sans-serif;font-weight: bolder;color:#74ac58">APLICACIONES</h1>
    <section style="width: 100%; margin: auto;">
        <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 20px;">
            <img src="../assets/img/front-pages/landing-page/APLICACIONES1.svg" style="width: 350px" alt="Promociones y ofertas de productos" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES2.svg" style="width: 350px" alt="Telemarketing" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES3.svg" style="width: 350px" alt="Encuestas de interés" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES4.svg" style="width: 350px" alt="Recolección de información" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES5.svg" style="width: 350px" alt="Confirmación de turnos y asistencias" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES6.svg" style="width: 350px" alt="Información de estados y vencimientos" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES7.svg" style="width: 350px" alt="Campañas de Cartera" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES8.svg" style="width: 350px" alt="Campañas de fidelización" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES9.svg" style="width: 350px" alt="Campañas de atención al cliente" />
            <img src="../assets/img/front-pages/landing-page/APLICACIONES10.svg" style="width: 350px" alt="Campañas de contacto masivo" />
        </div>
    </section>
   
<div class="container">
  <h1 style="font-size: 2.5rem; text-align: center; font-family: 'Open Sans', sans-serif; font-weight: bolder; color: #74ac58; margin-bottom: 20px;">
    HERRAMIENTAS
</h1> 
    <div class="contenedorToogle">
     
      <!-- Titulo y contenido de cada toggle -->
      <div class="tituloToggle" id="toggle1">
          <p class="toggleTitulo">Discador Automático</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response1" class="response">
          <p>Marcador inteligente que optimiza el tiempo productivo del agente y aumenta la cantidad de contactos efectivos.</p>
      </div>
  
      <div class="tituloToggle" id="toggle2">
          <p class="toggleTitulo">Grabación de llamadas</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response2" class="response">
          <p>Tanto salientes como entrantes, para auditoria y gestión de procesos.</p>
      </div>
  
      <div class="tituloToggle" id="toggle3">
          <p class="toggleTitulo">ACD</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response3" class="response">
          <p>Distribuye de forma inteligente las llamadas a los operadores según reglas configurables.</p>
      </div>
  
      <div class="tituloToggle" id="toggle4">
          <p class="toggleTitulo">API</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response4" class="response">
          <p>Integración vía webservices a base de datos y sistemas de terceros.</p>
      </div>
  
      <div class="tituloToggle" id="toggle5">
          <p class="toggleTitulo">IVR</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response5" class="response">
          <p>Realiza la atención automática de las llamadas entrantes, permitiendo que el cliente autogestione sus consultas.</p>
      </div>
  
      <div class="tituloToggle" id="toggle6">
          <p class="toggleTitulo">Dashboard</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response6" class="response">
          <p>Facilita el monitoreo en tiempo real de la gestión y el rendimiento de los agentes y colas de atención.</p>
      </div>
  
      <div class="tituloToggle" id="toggle7">
          <p class="toggleTitulo">CRM</p>
          <span class="chevron">▼</span>
      </div>
      <div id="response7" class="response">
          <p>Gestión y administración de bases de datos, campañas y contactos.</p>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
      <!-- Contact Us: Start -->
      <section style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 30px; padding: 0 15px;">
        <h1 style="font-size: 2.5rem; text-align: center; font-family: 'Open Sans', sans-serif; font-weight: bolder; color: #5579b7; margin-bottom: 20px;">
            ADQUIERE BESTCALLCENTER AHORA MISMO
        </h1>
      
    </section>
   <section>
    <div style="width: 80%; margin: auto;" id="landingContact">
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
           ¡No dudes en contáctarnos!
           Resolveremos todas las dudas que tengas
         </p>
         <form action="../mail/enviarMail.php" method="POST" id="contactForm" style="margin-top: 0px;">
          
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
           <div id="respuestaEnviado" style="display: none;">
               <p id="respuestaTexto"></p>
           </div>
           <p class="registro">Con BESTVOIPER crecemos juntos</p>
           
       </form>
     </div>

     </div>
   </section>


   
     <!-- Contact Us: End -->
  
     <!-- Contact Us: End -->
   </div>
   </section>

    <!-- Footer: Start -->
     <div class="container">
      <footer class="landing-footer bg-body footer-text">
        <div class="footer-top position-relative overflow-hidden z-1">
      
          <div class="container">
            <div class="row gx-0 gy-4 g-md-5">
              <div class="d-flex justify-content-between align-items-center w-100" >
                
                <!-- Sección de Bestvoiper (al lado derecho) -->
                <a href="/paginaweb/paginaweb/index.php" class="app-brand-link mb-4 d-flex align-items-center">
                  <span class="app-brand-logo demo">
                    <img src="../assets/img/branding/LOGOBESTVOIPER.png" width="35" />
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
</div>
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
    <script src="../assets/js/front-main2.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/front-page-landing.js"></script>
  </body>
  





  <script>
    // Función para mostrar u ocultar el contenido y cambiar el chevron
function toggleVisibility(id, chevron) {
  const response = document.getElementById(id);
  const isVisible = response.style.display === "block"; // Verifica si está visible

  // Mostrar u ocultar el contenido
  if (isVisible) {
    response.style.display = "none"; // Si está visible, lo ocultamos
    chevron.textContent = "▼"; // Cambiar el chevron a su dirección original (abajo)
  } else {
    response.style.display = "block"; // Si no está visible, lo mostramos
    chevron.textContent = "▲"; // Cambiar el chevron hacia arriba
  }
}

// Asignamos los eventos de clic a cada título (toggle)
document.getElementById("toggle1").addEventListener("click", function() {
  toggleVisibility("response1", this.querySelector(".chevron"));
});

document.getElementById("toggle2").addEventListener("click", function() {
  toggleVisibility("response2", this.querySelector(".chevron"));
});

document.getElementById("toggle3").addEventListener("click", function() {
  toggleVisibility("response3", this.querySelector(".chevron"));
});

document.getElementById("toggle4").addEventListener("click", function() {
  toggleVisibility("response4", this.querySelector(".chevron"));
});

document.getElementById("toggle5").addEventListener("click", function() {
  toggleVisibility("response5", this.querySelector(".chevron"));
});

document.getElementById("toggle6").addEventListener("click", function() {
  toggleVisibility("response6", this.querySelector(".chevron"));
});

document.getElementById("toggle7").addEventListener("click", function() {
  toggleVisibility("response7", this.querySelector(".chevron"));
});
document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Evitar el envío del formulario

        // Recoger los valores de los campos
        const nombres = document.getElementById('nombres').value;
        const email = document.getElementById('email').value;
        const telefono = document.getElementById('telefono').value;
        const mensaje = document.getElementById('mensaje').value;

        // Verificar que todos los campos sean válidos antes de enviar
        if (nombres && email && telefono) {
            // Lógica para enviar el formulario (aquí puedes enviar datos a un servidor o realizar cualquier acción)
            enviarFormulario(nombres, email, telefono, mensaje);
        } else {
            alert('Por favor, complete todos los campos obligatorios.');
        }
    });

    // Función que simula el envío del mensaje
    function enviarFormulario(nombres, email, telefono, mensaje) {
        // Aquí puedes agregar la lógica para enviar el correo, por ejemplo, usando AJAX o Fetch API
        // Para este ejemplo, solo mostramos el mensaje en el frontend.

        // Simulamos el éxito del envío
        setTimeout(function() {
            document.getElementById('respuestaTexto').innerText = 'Mensaje enviado correctamente. ¡Gracias por contactarnos!';
            document.getElementById('respuestaEnviado').style.display = 'block';
        }, 1000);  // Simulamos que el mensaje se envía después de 1 segundo
    }
  </script>
</html>
