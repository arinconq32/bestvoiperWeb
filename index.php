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

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Servicios de Telefonía VoIP para Empresas en Colombia - BestVoIPer</title>

    <meta name="description" content="Descubra soluciones avanzadas en telefonía VoIP e 
    IP para su empresa en Colombia. Mejore sus comunicaciones con BestVoIPer, su aliado tecnológico." />
    <meta name="keywords" content="comunicaciones, especialistas, CRM, voip, telefonía, call center, omnicalidad," />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preload" href="fonts/Montserrat/Montserrat-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">    
<!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/front-config.js"></script>
  </head>

  <body>
   
    <script src="assets/vendor/js/dropdown-hover.js"></script>
    <script src="assets/vendor/js/mega-dropdown.js"></script>

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
            <a href="/paginaweb/index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
               <img src="assets/img/branding/LOGOBESTVOIPER.png" width="35" alt="Bestvoiper Comunicaciones"/>
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
                href="index.php#productos"
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
                        <li class="nav-item">
                          <a class="nav-link mega-dropdown-link" href="pages/bestpbx.php">
                            <i class="bx bx-radio-circle me-2"></i>
                            <span data-i18n="Help Center">Best PBX</span>
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
              <a href="pages/admin.php" class="btn btn-primary" style="background-color: #74ac58;border: 1px solid #74ac58;" target="_blank">
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
      <section id="inicio" >
        
       

        <div class="container2">
        
            <img
              src="../assets/img/front-pages/landing-page/1.svg"
              alt="Bestvoiper Comunicaciones"
              class="imagen"
              data-app-light-img="front-pages/landing-page/1.svg"
              data-app-dark-img="front-pages/landing-page/1.svg"
            />
        
        </div>


        
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="somos" class="section-py landing-features">
        <div class="container">
          <div class="contenedorCRM">
           
            <div class="descripcionCRM">
              <div style="width: 100%; margin: 20px  auto;text-align: center;">
                <span  
              style="font-size: 3em; font-family: 'Open Sans', 
              sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.3rem;">
              ¿QUIENES SOMOS?</span>
              </div>
              <h1 style="text-align: left;">Compañía latinoamericana especialista en comunicaciones
              </h1>
              <h2>Proveemos servicios y soluciones VoIP para empresas en Colombia</h2>
               <p> Contamos con amplia experiencia en la implementación de soluciones de telefonía IP en ambientes corporativos, 
                gubernamentales u oficiales, con servicios de:</p>
                <ul>
                  <li>Llamadas locales</li>
                  <li>Llamadas nacionales</li>
                  <li>Llamadas internacionales</li>
                </ul>
                <p>Excelente calidad de audio, a precios altamente competitivos.</p>
                
            </div>
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/somos.svg" width="100%" alt="Proveemos servicios y soluciones VoIP para empresas en Colombia"/>
            </div>
          </div>




         
            <div style="width: 100%; margin: 20px  auto;text-align: center;">
              <span  
            style="font-size: 3em; font-family: 'Open Sans', sans-serif;font-weight: bolder;color: #7eb83b !important;text-align: center;line-height: 1.1rem;">
            ESPECIALISTAS EN CRM</span>
            </div>
            
          

          <div class="contenedorCRM">
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/crm.svg" width="100%" alt="CRM omnicanal"/>
            </div>
            <div class="descripcionCRM">
              <h1 style="text-align: left;">Nos especializamos en CRM Omnicanal con WebRTC, Whatsapp y métricas avanzadas, 
                materializando comunicaciones  en tiempo real desde tu página web.
              </h1>
               <p> Simplifica la gestión de tu canales de comunicación respondiendo a mensajes de Facebook, 
                Instagram y más desde un solo lugar.</p>
                <ul>
                  <li>Chat en vivo para tu web</li>
                  <li>Sincronización con CRM y métricas avanzadas.</li>
                </ul>
                <a href="pages/CRM.php"><p>CONOCER MAS</p></a>
            </div>
          </div>

          <div class="contenedorCRM">
           
            <div class="descripcionCRM">
              <h1>Telefonía VoIP Empresarial
              </h1>
              <p>La telefonía VoIP de BestVoIPer 
                te permite realizar llamadas locales, nacionales e internacionales 
                con excelente calidad de audio y a precios altamente competitivos. </p>
               
                <a href="pages/telefoniaVoip.php"><p>CONOCER MAS</p></a>
            </div>
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/voipEmpresarial.svg" width="100%" alt="Telefonía VoIP Empresarial"/>
            </div>
          </div>
          
          <div class="contenedorCRM">
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/sms.svg" width="100%" alt="Mensajería Masiva SMS"/>
            </div>
            <div class="descripcionCRM">
              <h1>Mensajería Masiva SMS
              </h1>
             
              <h2>Mensajería SMS Masiva para Empresas en Colombia</h2>
               <p>Nuestra solución de SMS masivo es 
                ideal para campañas de marketing, notificaciones o recordatorios. </p>
                <a href="pages/sms.php"><p>CONOCER MAS</p></a>
            </div>
           
          </div>
          <div class="contenedorCRM">
           
            <div class="descripcionCRM">
              <h1>Software de Métricas para Call Centers
              </h1>
             
              <h2>Métricas Especializadas para Optimizar el Rendimiento de tu Call Center</h2>
               <p>Nuestro software ofrece herramientas de análisis avanzado 
                para gestionar y mejorar la eficiencia de tu call center.</p>
                
               
                <a href="pages/metricasCallCenter.php"><p>CONOCER MAS</p></a>
            </div>
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/call.svg" width="100%" alt="Software de Métricas para Call Centers"/>
            </div>
           
          </div>

          <div class="contenedorCRM">
            <div class="imagenCRM">
              <img src="assets/img/front-pages/landing-page/social.svg" width="100%" alt="Plataforma de Omnicanalidad"/>
            </div>
            <div class="descripcionCRM">
             
            
              <h1 style="text-align: left;">Plataforma de Omnicanalidad</h1>
               <p>Conecta WhatsApp, Redes Sociales y tu Sitio Web en una Plataforma Omnicanal.
                Simplifica la gestión de tus canales de comunicación con nuestra plataforma omnicanal.</p>
                
               
                <a href="pages/plataformaOmnicalidad.php"><p>CONOCER MAS</p></a>
            </div>
           
          </div>

        <div class="PList" id="productos">
          <div class="listaProductos">
            <img id="nuestroProductos" src="assets/img/front-pages/icons/nuestrosProductos.svg" alt="Nuestros Productos"/>
            <a href="pages/bestcallcenter.php">
              <img id="uno" src="assets/img/front-pages/icons/Pbestcall.svg" alt="call center"/>
            </a>
            <a href="pages/bestcontactcenter.php">
              <img id="dos" src="assets/img/front-pages/icons/Pbestcontact.svg" alt="telefonía voip" />
            </a>
            <a href="pages/bestdid.php">
              <img id="tres" src="assets/img/front-pages/icons/Pbestdid.svg" alt="llamadas a todo el mundo" />
            </a>
            <a href="pages/bestiptrunk.php">
              <img id="cuatro" src="assets/img/front-pages/icons/Pbestip.svg" alt="gestion comunicaciones empresariales" />
            </a>
            <a href="pages/bestpbx.php">
              <img id="cinco" src="assets/img/front-pages/icons/Pbestpbx.svg"  alt="pbx"/>
            </a>
            <a href="pages/masivos.php">
              <img id="seis" src="assets/img/front-pages/icons/Pbmasivo.svg" alt="mensajería masiva"/>
            </a>
          </div>
        </div>
          </div>
          <div class="contenedor" id="productos">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1037" style="enable-background: new 0 0 1000 1037;" xml:space="preserve">
          
          <g id="Capa_1">
        
            <g id="Capa_1_1_">
              <g>
                <g>
                  <path class="st0" d="M588.8,628.7c-21,15.1-46.8,24.1-74.6,24.1c-27.1,0-52.3-8.5-72.9-22.9l-45.4,63.2
                    c33.6,23.2,74.4,36.8,118.3,36.8c44.7,0,86.1-14.1,120-38L588.8,628.7z"/>
                </g>
                <g>
                  <path class="st1" d="M641.9,525.1c0,42.7-20.9,80.4-53.1,103.6l45.4,63.2c53.4-37.7,88.3-99.9,88.3-170.3h-80.6
                    C641.9,522.8,641.9,524,641.9,525.1z"/>
                </g>
                <g>
                  <path class="st2" d="M638.8,354.8l-48.6,67.7c30.5,22.6,50.6,58.6,51.7,99.2h80.6C722.5,453.4,689.6,392.8,638.8,354.8z"/>
                </g>
                <g>
                  <path class="st1" d="M386.5,525.1c0-1.1,0-2.3,0-3.4h-80.6c0,71.1,35.6,133.9,90,171.4l45.4-63.2
                    C408.2,606.9,386.5,568.5,386.5,525.1z"/>
                </g>
                <g>
                  <path class="st2" d="M439.9,421.3l-48.6-67.7c-12.2,8.9-23.3,19.1-33.3,30.4l-24.4,34C316,448.5,306,484,306,521.7h80.6
                    C387.6,480.3,408.4,443.8,439.9,421.3z"/>
                </g>
                <g>
                  <path class="st0" d="M391.2,353.6l48.6,67.7c20.9-15,46.6-23.9,74.3-23.9c28.5,0,54.8,9.3,76,25.1l48.6-67.7
                    c-34.8-26-77.9-41.4-124.6-41.4C468.2,313.4,425.7,328.3,391.2,353.6z"/>
                </g>
              </g>
            </g>
        
          </g>
        
          <g id="Capa_8_1_">
            <g id="Capa_8">
              <g>
                <g>
                  <path class="st2" d="M412.2,555.6c-0.3-0.3-0.5-0.9-0.5-1.6v-20.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h8.8
                    c3.7,0,6.4,0.7,8,2.2c1.7,1.5,2.5,3.7,2.5,6.6c0,2.9-0.8,5.1-2.5,6.6s-4.4,2.2-8,2.2h-2.2v5.4c0,0.7-0.2,1.2-0.5,1.6
                    s-0.9,0.5-1.8,0.5h-4.4C413.1,556.1,412.5,555.9,412.2,555.6z M422,542.4c0.8,0,1.4-0.2,1.9-0.6c0.5-0.4,0.7-1,0.7-1.9
                    s-0.2-1.5-0.7-1.9s-1.1-0.6-1.9-0.6h-2.5v5H422L422,542.4z"/>
                  <path class="st2" d="M434.9,555.6c-0.3-0.3-0.5-0.9-0.5-1.6v-20.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h8.8
                    c3.7,0,6.4,0.7,8,2.2c1.7,1.5,2.5,3.7,2.5,6.6c0,1.8-0.3,3.3-0.9,4.5s-1.5,2.2-2.8,2.8l3.4,7.3c0.1,0.2,0.1,0.4,0.1,0.7
                    s-0.1,0.5-0.3,0.7c-0.2,0.2-0.4,0.3-0.7,0.3h-6.2c-0.4,0-0.7-0.1-0.9-0.2s-0.4-0.3-0.5-0.6l-2.7-6.8h-1.3v5.5
                    c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5h-4.4C435.8,556.1,435.2,555.9,434.9,555.6z M444.6,542.4c0.8,0,1.4-0.2,1.9-0.6
                    c0.5-0.4,0.7-1,0.7-1.9s-0.2-1.5-0.7-1.9s-1.1-0.6-1.9-0.6h-2.5v5H444.6L444.6,542.4z"/>
                  <path class="st2" d="M460.5,553.3c-2.3-2.3-3.4-5.5-3.4-9.7s1.1-7.4,3.4-9.7s5.6-3.4,9.9-3.4s7.7,1.1,9.9,3.4s3.4,5.5,3.4,9.7
                    s-1.1,7.4-3.4,9.7s-5.6,3.4-9.9,3.4S462.7,555.5,460.5,553.3z M473.8,548.8c0.7-1.1,1.1-2.9,1.1-5.2s-0.4-4.1-1.1-5.2
                    c-0.7-1.1-1.9-1.7-3.5-1.7s-2.8,0.6-3.5,1.7s-1.1,2.9-1.1,5.2s0.4,4,1.1,5.2c0.7,1.1,1.9,1.7,3.5,1.7S473.1,549.9,473.8,548.8z"
                    />
                  <path class="st2" d="M486,555.6c-0.3-0.3-0.5-0.9-0.5-1.6v-20.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h8.5
                    c8.7,0,13,4.2,13,12.5c0,4.1-1.1,7.2-3.3,9.3s-5.4,3.2-9.7,3.2h-8.5C486.9,556.1,486.4,555.9,486,555.6z M496.5,549.9
                    c1.4,0,2.4-0.5,3-1.4s0.9-2.5,0.9-4.9s-0.3-4-0.9-4.9s-1.6-1.4-3-1.4h-2.2v12.5L496.5,549.9L496.5,549.9z"/>
                  <path class="st2" d="M516.6,555.5c-1.8-0.8-3.2-1.9-4.2-3.3c-1-1.5-1.5-3.2-1.5-5.2v-13.8c0-0.7,0.2-1.2,0.5-1.6
                    s0.9-0.5,1.7-0.5h4.4c0.8,0,1.4,0.2,1.8,0.5s0.5,0.9,0.5,1.6v13.9c0,1.2,0.3,2,0.9,2.6c0.6,0.6,1.4,0.8,2.4,0.8s1.8-0.3,2.4-0.8
                    c0.6-0.6,0.9-1.4,0.9-2.6v-13.9c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h4.4c0.8,0,1.4,0.2,1.8,0.5s0.5,0.9,0.5,1.6V547
                    c0,2-0.5,3.8-1.5,5.2s-2.4,2.6-4.2,3.3c-1.8,0.8-3.9,1.2-6.3,1.2S518.4,556.3,516.6,555.5z"/>
                  <path class="st2" d="M540.4,553.4c-2.5-2.2-3.7-5.5-3.7-9.8s1.2-7.6,3.6-9.8c2.4-2.2,5.8-3.3,10.3-3.3c2,0,3.8,0.2,5.4,0.6
                    s2.9,0.9,3.9,1.7c0.3,0.2,0.4,0.5,0.4,0.7s-0.1,0.5-0.3,0.9l-1.8,3.2c-0.2,0.3-0.4,0.5-0.7,0.5c-0.2,0-0.5-0.1-0.8-0.3
                    c-0.7-0.3-1.4-0.6-2.2-0.8s-1.6-0.3-2.6-0.3c-2,0-3.6,0.6-4.7,1.8c-1.1,1.2-1.6,2.9-1.6,5.1c0,2.2,0.6,3.9,1.8,5.1
                    s2.8,1.8,4.8,1.8c1.8,0,3.4-0.4,4.9-1.1c0.4-0.2,0.7-0.3,0.8-0.3c0.3,0,0.5,0.2,0.7,0.5l1.8,3.2c0.2,0.4,0.3,0.7,0.3,0.9
                    c0,0.3-0.2,0.5-0.4,0.7c-1.1,0.7-2.4,1.3-4,1.7s-3.4,0.6-5.4,0.6C546.3,556.7,542.8,555.6,540.4,553.4z"/>
                  <path class="st2" d="M567.9,555.6c-0.3-0.3-0.5-0.9-0.5-1.6v-16.7h-5.3c-0.8,0-1.3-0.2-1.6-0.5s-0.4-0.9-0.4-1.6v-2.1
                    c0-0.7,0.1-1.3,0.4-1.6s0.8-0.5,1.6-0.5h19.4c0.8,0,1.3,0.2,1.6,0.5s0.4,0.9,0.4,1.6v2.1c0,0.7-0.1,1.3-0.4,1.6
                    c-0.3,0.3-0.8,0.5-1.6,0.5h-5.3V554c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5h-4.4C568.8,556.1,568.2,555.9,567.9,555.6z"/>
                  <path class="st2" d="M585.6,553.3c-2.3-2.3-3.4-5.5-3.4-9.7s1.1-7.4,3.4-9.7c2.3-2.3,5.6-3.4,9.9-3.4s7.7,1.1,9.9,3.4
                    s3.4,5.5,3.4,9.7s-1.1,7.4-3.4,9.7c-2.3,2.3-5.6,3.4-9.9,3.4S587.9,555.5,585.6,553.3z M599,548.8c0.7-1.1,1.1-2.9,1.1-5.2
                    s-0.4-4.1-1.1-5.2s-1.9-1.7-3.5-1.7s-2.8,0.6-3.5,1.7s-1.1,2.9-1.1,5.2s0.3,4,1.1,5.2c0.7,1.1,1.9,1.7,3.5,1.7
                    S598.3,549.9,599,548.8z"/>
                  <path class="st2" d="M613.8,556c-1.9-0.5-3.5-1.1-4.6-2c-0.5-0.3-0.7-0.7-0.7-1c0-0.2,0.1-0.5,0.3-0.7l2.1-3.3
                    c0.2-0.3,0.4-0.5,0.7-0.5c0.2,0,0.4,0.1,0.7,0.3c0.9,0.5,1.9,1,3,1.3s2.3,0.5,3.3,0.5c0.9,0,1.6-0.1,2-0.4s0.6-0.6,0.6-1.1
                    c0-0.6-0.3-1-0.8-1.4s-1.5-0.8-2.8-1.3c-2.5-1-4.4-2-5.8-3.3c-1.4-1.2-2.1-2.8-2.1-4.8c0-2.5,0.9-4.5,2.7-5.8s4.2-1.9,7.2-1.9
                    c2.1,0,3.9,0.2,5.4,0.5c1.5,0.4,2.8,1,3.9,1.7c0.5,0.3,0.7,0.7,0.7,1c0,0.2-0.1,0.5-0.3,0.7l-2.1,3.3c-0.2,0.3-0.4,0.5-0.7,0.5
                    c-0.2,0-0.4-0.1-0.7-0.3c-0.6-0.4-1.3-0.7-2.1-1s-1.7-0.4-2.6-0.4c-0.9,0-1.5,0.1-2,0.4s-0.7,0.6-0.7,1.2c0,0.4,0.2,0.8,0.5,1.1
                    s0.7,0.5,1.2,0.8c0.5,0.2,1.3,0.5,2.4,1c1.8,0.7,3.3,1.4,4.3,2.1c1,0.7,1.8,1.5,2.4,2.4s0.8,2.1,0.8,3.6c0,2.2-0.8,4-2.5,5.3
                    c-1.7,1.4-4.1,2-7.4,2C617.7,556.7,615.7,556.4,613.8,556z"/>
                </g>
              </g>
            </g>
          </g>
          <g id="Capa_9_1_">
            <g id="Capa_9">
              <g>
                <g>
                  <path class="st0" d="M413.4,527c-0.3-0.3-0.5-0.9-0.5-1.6v-20.9c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.8-0.5h3.5
                    c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.6,0.4,0.8,0.8l6.7,9.9v-8.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h4.4c0.8,0,1.4,0.2,1.8,0.5
                    s0.5,0.9,0.5,1.6v20.9c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5h-3.5c-0.5,0-0.9-0.1-1.2-0.2c-0.3-0.1-0.6-0.4-0.8-0.8l-6.7-9.9
                    v8.8c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5h-4.4C414.3,527.5,413.7,527.3,413.4,527z"/>
                  <path class="st0" d="M444.3,526.9c-1.8-0.8-3.2-1.9-4.2-3.3c-1-1.5-1.5-3.2-1.5-5.2v-13.8c0-0.7,0.2-1.2,0.5-1.6
                    s0.9-0.5,1.7-0.5h4.4c0.8,0,1.4,0.2,1.8,0.5s0.5,0.9,0.5,1.6v13.9c0,1.2,0.3,2,0.9,2.6s1.4,0.8,2.4,0.8s1.8-0.3,2.4-0.8
                    c0.6-0.6,0.9-1.4,0.9-2.6v-13.9c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h4.4c0.8,0,1.4,0.2,1.8,0.5s0.5,0.9,0.5,1.6v13.8
                    c0,2-0.5,3.8-1.5,5.2s-2.4,2.6-4.2,3.3c-1.8,0.8-3.9,1.2-6.3,1.2S446.1,527.6,444.3,526.9z"/>
                  <path class="st0" d="M465.6,527c-0.3-0.3-0.5-0.9-0.5-1.6v-20.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h15.2
                    c0.8,0,1.3,0.2,1.6,0.5s0.4,0.9,0.4,1.6v2.1c0,0.7-0.1,1.3-0.4,1.6c-0.3,0.3-0.8,0.5-1.6,0.5h-8.6v3.2h5.3
                    c0.8,0,1.3,0.2,1.6,0.5s0.4,0.9,0.4,1.6v2c0,0.7-0.1,1.3-0.4,1.6s-0.8,0.5-1.6,0.5h-5.3v3.2h8.6c0.8,0,1.3,0.2,1.6,0.5
                    s0.4,0.9,0.4,1.6v2.1c0,0.7-0.1,1.3-0.4,1.6s-0.8,0.5-1.6,0.5h-15.2C466.5,527.5,465.9,527.3,465.6,527z"/>
                  <path class="st0" d="M490.9,527.3c-1.9-0.5-3.5-1.1-4.6-2c-0.5-0.3-0.7-0.7-0.7-1c0-0.2,0.1-0.5,0.3-0.7l2.1-3.3
                    c0.2-0.3,0.4-0.5,0.7-0.5c0.2,0,0.4,0.1,0.7,0.3c0.9,0.5,1.9,1,3,1.3s2.3,0.5,3.3,0.5c0.9,0,1.6-0.1,2-0.4s0.6-0.6,0.6-1.1
                    c0-0.6-0.3-1-0.8-1.4c-0.5-0.3-1.5-0.8-2.8-1.3c-2.5-1-4.4-2-5.9-3.3c-1.4-1.2-2.1-2.8-2.1-4.8c0-2.5,0.9-4.5,2.7-5.8
                    s4.2-1.9,7.2-1.9c2.1,0,3.9,0.2,5.4,0.5s2.8,0.9,3.9,1.7c0.5,0.3,0.7,0.7,0.7,1c0,0.2-0.1,0.5-0.3,0.7l-2.1,3.4
                    c-0.2,0.3-0.4,0.5-0.7,0.5c-0.1,0-0.4-0.1-0.7-0.3c-0.6-0.4-1.3-0.7-2.1-1s-1.7-0.4-2.6-0.4s-1.5,0.1-2,0.4s-0.7,0.6-0.7,1.2
                    c0,0.4,0.1,0.8,0.5,1.1s0.7,0.5,1.2,0.8c0.5,0.2,1.3,0.6,2.4,1c1.8,0.7,3.3,1.4,4.3,2.1s1.9,1.5,2.4,2.4s0.8,2.1,0.8,3.6
                    c0,2.2-0.8,4-2.5,5.3c-1.7,1.4-4.1,2-7.4,2C494.9,528,492.8,527.8,490.9,527.3z"/>
                  <path class="st0" d="M514.3,527c-0.3-0.3-0.5-0.9-0.5-1.6v-16.7h-5.3c-0.8,0-1.3-0.2-1.6-0.5s-0.4-0.9-0.4-1.6v-2.1
                    c0-0.7,0.1-1.3,0.4-1.6c0.3-0.3,0.8-0.5,1.6-0.5h19.4c0.8,0,1.3,0.2,1.6,0.5s0.4,0.9,0.4,1.6v2.1c0,0.7-0.1,1.3-0.4,1.6
                    c-0.3,0.3-0.8,0.5-1.6,0.5h-5.3v16.7c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5H516C515.2,527.5,514.6,527.3,514.3,527z"/>
                  <path class="st0" d="M531.5,527c-0.3-0.3-0.5-0.9-0.5-1.6v-20.8c0-0.7,0.2-1.2,0.5-1.6s0.9-0.5,1.7-0.5h8.8c3.7,0,6.4,0.7,8,2.2
                    s2.5,3.7,2.5,6.6c0,1.8-0.3,3.3-0.9,4.5c-0.6,1.2-1.5,2.2-2.8,2.8l3.4,7.3c0.1,0.2,0.2,0.4,0.2,0.7s-0.1,0.5-0.3,0.7
                    s-0.4,0.3-0.7,0.3h-6.2c-0.4,0-0.7-0.1-0.9-0.2s-0.4-0.3-0.5-0.6l-2.7-6.8h-1.3v5.5c0,0.7-0.2,1.2-0.5,1.6s-0.9,0.5-1.8,0.5
                    h-4.4C532.4,527.5,531.9,527.3,531.5,527z M541.3,513.8c0.8,0,1.4-0.2,1.9-0.6c0.5-0.4,0.7-1,0.7-1.9s-0.2-1.5-0.7-1.9
                    s-1.1-0.6-1.9-0.6h-2.5v5L541.3,513.8L541.3,513.8z"/>
                  <path class="st0" d="M557.1,524.6c-2.3-2.3-3.4-5.5-3.4-9.7s1.1-7.4,3.4-9.7s5.6-3.4,9.9-3.4s7.7,1.1,9.9,3.4s3.4,5.5,3.4,9.7
                    s-1.1,7.4-3.4,9.7c-2.3,2.3-5.6,3.4-9.9,3.4S559.3,526.9,557.1,524.6z M570.5,520.1c0.7-1.1,1.1-2.9,1.1-5.2s-0.4-4.1-1.1-5.2
                    s-1.9-1.7-3.5-1.7s-2.8,0.6-3.5,1.7s-1.1,2.9-1.1,5.2s0.3,4,1.1,5.2c0.7,1.1,1.9,1.7,3.5,1.7S569.8,521.3,570.5,520.1z"/>
                  <path class="st0" d="M585.2,527.3c-1.9-0.5-3.5-1.1-4.6-2c-0.5-0.3-0.7-0.7-0.7-1c0-0.2,0.1-0.5,0.3-0.7l2.1-3.3
                    c0.2-0.3,0.4-0.5,0.7-0.5c0.2,0,0.4,0.1,0.7,0.3c0.9,0.5,1.9,1,3,1.3s2.3,0.5,3.3,0.5c0.9,0,1.6-0.1,2-0.4s0.6-0.6,0.6-1.1
                    c0-0.6-0.3-1-0.8-1.4c-0.5-0.3-1.5-0.8-2.8-1.3c-2.5-1-4.4-2-5.8-3.3c-1.4-1.2-2.1-2.8-2.1-4.8c0-2.5,0.9-4.5,2.7-5.8
                    s4.2-1.9,7.2-1.9c2.1,0,3.9,0.2,5.4,0.5c1.5,0.4,2.8,0.9,3.9,1.7c0.5,0.3,0.7,0.7,0.7,1c0,0.2-0.1,0.5-0.3,0.7l-2.1,3.4
                    c-0.2,0.3-0.4,0.5-0.7,0.5c-0.2,0-0.4-0.1-0.7-0.3c-0.6-0.4-1.3-0.7-2.1-1s-1.7-0.4-2.6-0.4c-0.9,0-1.5,0.1-2,0.4
                    s-0.7,0.6-0.7,1.2c0,0.4,0.2,0.8,0.5,1.1s0.7,0.5,1.2,0.8c0.5,0.2,1.3,0.6,2.4,1c1.8,0.7,3.3,1.4,4.3,2.1c1,0.7,1.8,1.5,2.4,2.4
                    c0.5,0.9,0.8,2.1,0.8,3.6c0,2.2-0.8,4-2.5,5.3c-1.7,1.4-4.1,2-7.4,2C589.2,528,587.1,527.8,585.2,527.3z"/>
                </g>
              </g>
            </g>
          </g>
          <g id="Capa_7_1_">
            <a href="pages/bestpbx.php">
            <g id="Capa_5">
              <g>
                <g>
                  <circle class="st0" cx="308.9" cy="418.7" r="10.4"/>
                </g>
                <g>
                  <path class="st0" d="M293.2,410.2l-0.5,1c-1.1,2.4-4.1,3.4-6.5,2.3l-55-26.4c-2.4-1.1-3.4-4.1-2.3-6.5l0.5-1
                    c1.1-2.4,4.1-3.4,6.5-2.3l55,26.4C293.3,404.9,294.4,407.8,293.2,410.2z"/>
                </g>
                <g>
                  <circle class="st0" cx="152.2" cy="347.2" r="76"/>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M127.6,387c-0.5,0.2-1.1,0.1-1.8-0.3l-20.4-9.8c-0.7-0.3-1.1-0.7-1.3-1.2c-0.2-0.5-0.1-1.1,0.3-1.9
                      l5.2-10.9c1.4-2.9,3.1-4.8,5-5.6c1.9-0.8,4-0.6,6.3,0.5c1.1,0.5,1.9,1.2,2.5,2.1s0.9,1.8,0.9,2.7c1.7-1.8,3.9-2,6.6-0.8
                      c2.3,1.1,3.7,2.8,4.4,5s0.2,5-1.3,8.1l-5.1,10.7C128.5,386.4,128.1,386.9,127.6,387z M118.1,369.1c0.5-1.1,0.3-1.9-0.8-2.4
                      s-1.8-0.2-2.4,0.9l-1.3,2.7l3.2,1.5L118.1,369.1z M127.5,372.9c0.2-0.5,0.3-1,0.1-1.5s-0.5-0.8-1.1-1.1
                      c-0.6-0.3-1.1-0.3-1.6-0.2c-0.5,0.1-0.8,0.5-1.1,1l-1.6,3.4l3.6,1.7L127.5,372.9z"/>
                    <path class="st3" d="M139.1,363c-0.5,0.2-1.1,0.1-1.8-0.3L117,353c-0.7-0.3-1.1-0.7-1.3-1.2c-0.2-0.5-0.1-1.1,0.3-1.9l7.1-14.9
                      c0.4-0.8,0.8-1.2,1.2-1.3s1,0,1.8,0.3l2,1c0.7,0.3,1.2,0.7,1.4,1.2s0.1,1-0.3,1.8l-4,8.4l3.1,1.5l2.5-5.2
                      c0.4-0.8,0.8-1.2,1.2-1.3s1.1,0,1.8,0.3l1.9,0.9c0.7,0.4,1.2,0.7,1.4,1.2s0.1,1-0.3,1.8l-2.5,5.2l3.1,1.5l4-8.4
                      c0.4-0.8,0.8-1.2,1.2-1.3s1.1,0,1.8,0.3l2,1c0.7,0.3,1.2,0.7,1.4,1.2s0.1,1-0.3,1.8l-7.1,14.9
                      C140.1,362.3,139.6,362.8,139.1,363z"/>
                    <path class="st3" d="M151.4,338.4c-1.4,1.6-2.7,2.9-4.1,3.6c-0.6,0.3-1,0.4-1.3,0.3c-0.2-0.1-0.4-0.3-0.6-0.6l-2.3-3.7
                      c-0.2-0.4-0.3-0.7-0.2-0.9c0.1-0.2,0.3-0.4,0.6-0.6c0.9-0.6,1.8-1.4,2.7-2.4c0.8-1,1.5-2,2-3c0.4-0.9,0.6-1.6,0.6-2.1
                      s-0.3-0.9-0.8-1.1c-0.6-0.3-1.1-0.2-1.7,0.1c-0.6,0.4-1.4,1.1-2.6,2.1c-2.1,2-4.1,3.4-5.9,4.2c-1.9,0.8-3.8,0.8-5.7-0.2
                      c-2.5-1.2-4-3-4.4-5.3s0.1-5,1.5-7.9c1-2.1,2-3.7,3.1-5s2.2-2.3,3.5-3c0.6-0.3,1-0.4,1.3-0.3c0.2,0.1,0.4,0.3,0.6,0.6l2.3,3.7
                      c0.2,0.4,0.3,0.7,0.2,0.9c-0.1,0.1-0.3,0.3-0.6,0.5c-0.7,0.4-1.3,0.9-1.9,1.6c-0.6,0.7-1.2,1.5-1.6,2.4
                      c-0.4,0.8-0.6,1.5-0.6,2.1s0.3,1,0.8,1.2c0.4,0.2,0.9,0.2,1.3,0.1c0.4-0.2,0.9-0.4,1.3-0.8s1.1-1,2.1-1.9
                      c1.6-1.5,2.9-2.5,4.1-3.3c1.1-0.7,2.3-1.1,3.5-1.2s2.5,0.2,3.9,0.9c2.2,1,3.5,2.7,4.1,4.9s0.1,5-1.5,8.2
                      C153.9,334.8,152.7,336.7,151.4,338.4z"/>
                    <path class="st3" d="M161.9,315.3c-0.5,0.2-1.1,0.1-1.8-0.3l-16.3-7.8l-2.5,5.2c-0.4,0.8-0.8,1.2-1.2,1.3s-1,0-1.8-0.3l-2-1
                      c-0.7-0.3-1.2-0.7-1.4-1.2s-0.1-1,0.3-1.8l9.1-19c0.4-0.8,0.8-1.2,1.2-1.3s1,0,1.8,0.3l2,1c0.7,0.3,1.2,0.7,1.4,1.2
                      s0.1,1-0.3,1.8l-2.5,5.2l16.3,7.8c0.7,0.3,1.1,0.7,1.3,1.2s0.1,1.1-0.3,2l-2.1,4.3C162.9,314.7,162.4,315.2,161.9,315.3z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M161,393.9c-0.5,0.2-1.1,0.1-1.8-0.3l-20.4-9.8c-0.7-0.3-1.1-0.7-1.3-1.2s-0.1-1.1,0.3-1.9l4.1-8.6
                      c1.7-3.6,3.7-5.9,5.9-6.8c2.2-1,4.8-0.8,7.6,0.6s4.6,3.2,5.3,5.5c0.6,2.3,0.1,5.3-1.6,8.9l-1,2.2l5.3,2.5
                      c0.7,0.3,1.1,0.7,1.3,1.2s0.1,1.1-0.3,2l-2.1,4.3C162,393.3,161.5,393.8,161,393.9z M152.7,378.2c0.4-0.8,0.4-1.5,0.3-2.1
                      c-0.2-0.6-0.7-1.1-1.5-1.5s-1.6-0.5-2.2-0.2s-1.1,0.8-1.5,1.5l-1.2,2.5l4.9,2.4L152.7,378.2z"/>
                    <path class="st3" d="M171.7,371.7c-0.5,0.2-1.1,0.1-1.8-0.3l-20.4-9.8c-0.7-0.3-1.1-0.7-1.3-1.2s-0.1-1.1,0.3-1.9l5.2-10.9
                      c1.4-2.9,3.1-4.8,5-5.6c1.9-0.8,4-0.6,6.3,0.5c1.1,0.5,1.9,1.2,2.5,2.1s0.9,1.8,0.9,2.7c1.7-1.8,3.9-2,6.6-0.8
                      c2.3,1.1,3.7,2.8,4.4,5s0.2,5-1.3,8.1l-5.1,10.7C172.6,371.1,172.1,371.6,171.7,371.7z M162.1,353.8c0.5-1.1,0.3-1.9-0.8-2.4
                      s-1.9-0.2-2.4,0.9l-1.3,2.7l3.2,1.5L162.1,353.8z M171.6,357.6c0.2-0.5,0.3-1,0.1-1.5s-0.5-0.8-1.1-1.1
                      c-0.6-0.3-1.1-0.3-1.6-0.2s-0.8,0.5-1.1,1l-1.6,3.4l3.6,1.7L171.6,357.6z"/>
                    <path class="st3" d="M182.2,350.4c-0.2,0.1-0.4,0.1-0.7,0c-0.2-0.1-0.4-0.3-0.6-0.6l-7.2-13.6l-13.9,2.7
                      c-0.4,0.1-0.6,0-0.9-0.1c-0.2-0.1-0.4-0.3-0.4-0.5s-0.1-0.5,0.1-0.8l3.2-6.7c0.2-0.4,0.4-0.6,0.5-0.8c0.2-0.1,0.4-0.3,0.7-0.3
                      l6.7-1.3l-3.2-6c-0.1-0.2-0.2-0.5-0.2-0.7s0.1-0.5,0.3-0.9l3.2-6.7c0.1-0.3,0.3-0.5,0.6-0.5s0.4-0.1,0.7,0
                      c0.2,0.1,0.4,0.3,0.6,0.6l6.6,12.5l15.1-3c0.4-0.1,0.6,0,0.9,0.1c0.2,0.1,0.4,0.3,0.4,0.5c0.1,0.2,0.1,0.5-0.1,0.8l-3.2,6.7
                      c-0.2,0.4-0.4,0.6-0.5,0.8s-0.4,0.3-0.7,0.3l-7.9,1.5l3.7,7.1c0.1,0.2,0.2,0.5,0.2,0.7s-0.1,0.5-0.3,0.9l-3.2,6.7
                      C182.6,350.1,182.4,350.3,182.2,350.4z"/>
                  </g>
                </g>
              </g>
            </g>
            </a>
          </g>
          <g id="Capa_5_1_">
            <a href="pages/bestiptrunk.php">
            <g id="Capa_7">
              <g>
                <g>
                  <ellipse class="st0" cx="513.9" cy="750.5" rx="10.5" ry="10.2"/>
                </g>
                <g>
                  <path class="st0" d="M513,767.9h1.1c2.7,0,4.9,2.2,4.9,4.9V832c0,2.7-2.2,4.9-4.9,4.9H513c-2.7,0-4.9-2.2-4.9-4.9v-59.2
                    C508.1,770.1,510.3,767.9,513,767.9z"/>
                </g>
                <g>
                  <ellipse class="st0" cx="517.1" cy="918.3" rx="76.3" ry="74"/>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M572.1,924.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.3,0.4H562
                      c-2.4,0-4.1-0.5-5.2-1.5c-1.1-1-1.7-2.4-1.7-4.2c0-0.8,0.2-1.6,0.6-2.2c0.4-0.7,0.9-1.1,1.5-1.4c-1.7-0.6-2.6-1.9-2.6-3.9
                      c0-1.8,0.6-3.2,1.9-4.3c1.3-1.1,3.2-1.7,5.7-1.7h8.6C571.4,923.9,571.8,924,572.1,924.3z M562.9,928.6c-0.4,0-0.7,0.1-1,0.4
                      c-0.3,0.3-0.4,0.6-0.4,1c0,0.5,0.1,0.8,0.4,1s0.6,0.4,1,0.4h2.7v-2.8L562.9,928.6L562.9,928.6z M563.4,935.8
                      c-0.9,0-1.3,0.4-1.3,1.2s0.4,1.2,1.3,1.2h2.2v-2.5L563.4,935.8L563.4,935.8z"/>
                    <path class="st3" d="M552.7,924.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.3,0.4h-12
                      c-0.6,0-1-0.1-1.3-0.4c-0.2-0.3-0.3-0.7-0.3-1.2v-1.6c0-0.6,0.1-1,0.3-1.2c0.2-0.3,0.6-0.4,1.3-0.4h6.8v-2.4H542
                      c-0.6,0-1-0.1-1.3-0.4c-0.2-0.3-0.3-0.7-0.3-1.2v-1.5c0-0.6,0.1-1,0.3-1.2c0.2-0.3,0.6-0.4,1.3-0.4h4.2v-2.4h-6.8
                      c-0.6,0-1-0.1-1.3-0.4s-0.3-0.7-0.3-1.2v-1.6c0-0.6,0.1-1,0.3-1.2s0.6-0.4,1.3-0.4h12C552,923.9,552.5,924,552.7,924.3z"/>
                    <path class="st3" d="M532.8,924c1.5,0.4,2.7,0.8,3.7,1.5c0.4,0.3,0.6,0.5,0.6,0.8c0,0.2-0.1,0.3-0.2,0.5l-1.7,2.6
                      c-0.2,0.2-0.3,0.4-0.5,0.4s-0.3-0.1-0.5-0.2c-0.7-0.4-1.5-0.7-2.4-1s-1.8-0.3-2.6-0.3c-0.7,0-1.2,0.1-1.5,0.3s-0.5,0.5-0.5,0.9
                      s0.2,0.8,0.6,1c0.4,0.3,1.2,0.6,2.2,1c2,0.7,3.5,1.6,4.6,2.5s1.7,2.2,1.7,3.7c0,2-0.7,3.4-2.1,4.4c-1.4,1-3.3,1.5-5.7,1.5
                      c-1.7,0-3.1-0.1-4.2-0.4c-1.2-0.3-2.2-0.7-3.1-1.3c-0.4-0.3-0.6-0.5-0.6-0.8c0-0.2,0.1-0.3,0.2-0.5l1.7-2.6
                      c0.2-0.3,0.3-0.4,0.5-0.4c0.1,0,0.3,0.1,0.5,0.2c0.5,0.3,1,0.5,1.7,0.7c0.6,0.2,1.3,0.3,2.1,0.3c0.7,0,1.2-0.1,1.5-0.3
                      s0.5-0.5,0.5-0.9c0-0.3-0.1-0.6-0.4-0.8c-0.2-0.2-0.5-0.4-0.9-0.6c-0.4-0.2-1-0.4-1.9-0.8c-1.5-0.6-2.6-1.1-3.4-1.6
                      c-0.8-0.5-1.5-1.1-1.9-1.8s-0.6-1.6-0.6-2.7c0-1.7,0.7-3,2-4.1s3.3-1.6,5.8-1.6C529.7,923.5,531.3,923.6,532.8,924z"/>
                    <path class="st3" d="M514.4,924.3c0.3,0.3,0.4,0.7,0.4,1.2v12.7h4.2c0.6,0,1,0.1,1.3,0.4c0.2,0.3,0.3,0.7,0.3,1.2v1.6
                      c0,0.6-0.1,1-0.3,1.2c-0.2,0.3-0.6,0.4-1.3,0.4h-15.3c-0.6,0-1-0.1-1.3-0.4s-0.3-0.7-0.3-1.2v-1.6c0-0.6,0.1-1,0.3-1.2
                      s0.6-0.4,1.3-0.4h4.2v-12.7c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.4C513.7,923.9,514.2,924,514.4,924.3z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M573,902.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.3,0.4h-3.5
                      c-0.7,0-1.1-0.1-1.4-0.4s-0.4-0.7-0.4-1.2v-15.9c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.5C572.3,901.9,572.8,902,573,902.3z"/>
                    <path class="st3" d="M564,902.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.3,0.4h-6.9c-2.9,0-5-0.6-6.3-1.7
                      s-2-2.8-2-5s0.7-3.9,2-5s3.4-1.7,6.3-1.7h1.7v-4.1c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.5C563.3,901.9,563.8,902,564,902.3z
                       M556.4,912.4c-0.6,0-1.1,0.2-1.5,0.5s-0.5,0.8-0.5,1.4c0,0.7,0.2,1.1,0.5,1.5s0.8,0.5,1.5,0.5h2v-3.8h-2V912.4z"/>
                    <path class="st3" d="M542.3,902.3c0.3,0.3,0.4,0.7,0.4,1.2v12.7h4.2c0.6,0,1,0.1,1.3,0.4c0.2,0.3,0.3,0.7,0.3,1.2v1.6
                      c0,0.6-0.1,1-0.3,1.2c-0.2,0.3-0.6,0.4-1.3,0.4h-15.3c-0.6,0-1-0.1-1.3-0.4c-0.2-0.3-0.3-0.7-0.3-1.2v-1.6c0-0.6,0.1-1,0.3-1.2
                      c0.2-0.3,0.6-0.4,1.3-0.4h4.2v-12.7c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.5C541.6,901.9,542.1,902,542.3,902.3z"/>
                    <path class="st3" d="M528.7,902.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.3,0.4h-6.9
                      c-2.9,0-5-0.6-6.3-1.7s-2-2.8-2-5c0-1.3,0.2-2.5,0.7-3.4s1.2-1.7,2.2-2.2l-2.7-5.6c-0.1-0.2-0.1-0.3-0.1-0.5s0.1-0.4,0.2-0.5
                      s0.3-0.2,0.6-0.2h4.9c0.3,0,0.6,0,0.7,0.1c0.2,0.1,0.3,0.2,0.4,0.4l2.1,5.2h1v-4.2c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.5
                      C528,901.9,528.5,902,528.7,902.3z M521.1,912.4c-0.6,0-1.1,0.2-1.5,0.5s-0.5,0.8-0.5,1.4c0,0.7,0.2,1.1,0.5,1.5
                      s0.8,0.5,1.5,0.5h2v-3.8h-2V912.4z"/>
                    <path class="st3" d="M506.3,902.3c1.4,0.6,2.5,1.4,3.3,2.6c0.8,1.1,1.2,2.4,1.2,4v10.5c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.4,0.4
                      h-3.5c-0.7,0-1.1-0.1-1.4-0.4s-0.4-0.7-0.4-1.2v-10.6c0-0.9-0.2-1.5-0.7-2c-0.5-0.4-1.1-0.7-1.9-0.7s-1.4,0.2-1.9,0.7
                      c-0.5,0.4-0.7,1.1-0.7,2v10.6c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.4,0.4h-3.5c-0.7,0-1.1-0.1-1.4-0.4s-0.4-0.7-0.4-1.2v-10.5
                      c0-1.5,0.4-2.9,1.2-4s1.9-2,3.3-2.6s3.1-0.9,5-0.9S504.9,901.8,506.3,902.3z"/>
                    <path class="st3" d="M489.6,902.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,0.9-0.4,1.2s-0.7,0.4-1.4,0.4h-2.8
                      c-0.4,0-0.7,0-0.9-0.2c-0.2-0.1-0.4-0.3-0.6-0.6l-5.2-7.5v6.7c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.4,0.4h-3.5
                      c-0.7,0-1.1-0.1-1.4-0.4s-0.4-0.7-0.4-1.2v-15.9c0-0.5,0.1-0.9,0.4-1.2s0.7-0.4,1.4-0.4h2.8c0.4,0,0.7,0,0.9,0.2
                      c0.2,0.1,0.4,0.3,0.6,0.6l5.2,7.5v-6.7c0-0.5,0.1-0.9,0.4-1.2s0.7-0.4,1.4-0.4h3.5C488.9,901.9,489.3,902,489.6,902.3z"/>
                    <path class="st3" d="M469.2,902.3c0.3,0.3,0.4,0.7,0.4,1.2v15.9c0,0.5-0.1,1-0.4,1.2s-0.7,0.4-1.4,0.4h-3.5
                      c-0.7,0-1.1-0.1-1.4-0.4s-0.4-0.7-0.4-1.2v-4.6l-3.6,5.8c-0.1,0.2-0.2,0.3-0.4,0.3c-0.1,0.1-0.4,0.1-0.7,0.1h-5.4
                      c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.5s0.1-0.4,0.2-0.6l5.5-8.2l-5.8-8.5c-0.1-0.2-0.2-0.4-0.2-0.6
                      c0-0.2,0.1-0.3,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2h5.4c0.3,0,0.5,0,0.7,0.1c0.1,0.1,0.3,0.2,0.4,0.3l3.9,6v-4.8
                      c0-0.5,0.1-1,0.4-1.2s0.7-0.4,1.4-0.4h3.5C468.5,901.9,469,902,469.2,902.3z"/>
                  </g>
                </g>
              </g>
            </g>
            </a>
          </g>
          <g id="Capa_6_1_">
            <a href="pages/bestdid.php">
            <g id="Capa_6">
              <g>
                <g>
                  <circle class="st1" cx="716.9" cy="625.6" r="10.6"/>
                </g>
                <g>
                  <path class="st1" d="M732.7,634.5l0.5-1.1c1.2-2.4,4.1-3.4,6.5-2.2l55.6,27.6c2.4,1.2,3.4,4.1,2.2,6.5l-0.5,1.1
                    c-1.2,2.4-4.1,3.4-6.5,2.2L734.9,641C732.5,639.8,731.5,636.9,732.7,634.5z"/>
                </g>
                <g>
                  <circle class="st1" cx="874.9" cy="700.3" r="77.1"/>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M896.1,659.1c0.5-0.2,1.1-0.1,1.8,0.3l20.3,10c0.7,0.3,1.1,0.8,1.3,1.3s0.1,1.1-0.3,1.9l-5.4,10.9
                      c-1.4,2.9-3.1,4.8-5,5.5s-4,0.6-6.3-0.6c-1.1-0.5-1.9-1.2-2.5-2.1s-0.9-1.8-0.8-2.7c-1.8,1.8-4,2-6.6,0.7
                      c-2.3-1.1-3.7-2.8-4.3-5.1s-0.2-5,1.4-8l5.3-10.6C895.2,659.7,895.6,659.2,896.1,659.1z M896,673.2c-0.3,0.5-0.3,1-0.1,1.5
                      s0.5,0.8,1.1,1.1s1.1,0.3,1.5,0.2c0.5-0.2,0.8-0.5,1.1-1l1.7-3.3l-3.6-1.8L896,673.2z M905.4,677.1c-0.5,1.1-0.3,1.9,0.8,2.4
                      s1.8,0.2,2.4-0.9l1.3-2.7l-3.2-1.6L905.4,677.1z"/>
                    <path class="st3" d="M884.3,683c0.5-0.2,1.1-0.1,1.8,0.3l20.3,10.1c0.7,0.3,1.1,0.8,1.3,1.3s0.1,1.1-0.3,1.9l-7.3,14.8
                      c-0.4,0.8-0.8,1.2-1.3,1.3s-1,0-1.8-0.4l-2-1c-0.7-0.4-1.2-0.8-1.4-1.2s-0.1-1,0.3-1.8l4.2-8.4l-3.1-1.5l-2.6,5.2
                      c-0.4,0.8-0.8,1.2-1.3,1.3s-1,0-1.8-0.4l-1.9-1c-0.7-0.4-1.2-0.8-1.3-1.2c-0.2-0.4-0.1-1,0.3-1.8l2.6-5.2l-3.1-1.5l-4.1,8.3
                      c-0.4,0.8-0.8,1.2-1.3,1.3s-1,0-1.8-0.4l-2-1c-0.7-0.4-1.2-0.8-1.3-1.2s-0.1-1,0.3-1.8l7.3-14.8
                      C883.3,683.6,883.8,683.2,884.3,683z"/>
                    <path class="st3" d="M871.7,707.5c1.4-1.6,2.8-2.8,4.1-3.6c0.6-0.3,1-0.4,1.3-0.2c0.2,0.1,0.4,0.3,0.6,0.6l2.2,3.7
                      c0.2,0.4,0.3,0.7,0.2,0.9s-0.3,0.4-0.6,0.6c-1,0.6-1.8,1.4-2.7,2.3c-0.8,1-1.5,2-2.1,3c-0.4,0.9-0.6,1.6-0.6,2.1
                      s0.3,0.9,0.8,1.1c0.5,0.3,1.1,0.2,1.7-0.1c0.6-0.4,1.5-1.1,2.6-2.1c2.1-2,4.1-3.3,6-4.1s3.8-0.7,5.7,0.3c2.5,1.2,3.9,3,4.3,5.4
                      c0.4,2.3-0.1,5-1.6,7.9c-1,2-2.1,3.7-3.1,5c-1.1,1.3-2.3,2.3-3.6,3c-0.6,0.3-1,0.4-1.3,0.2c-0.2-0.1-0.4-0.3-0.6-0.6l-2.2-3.7
                      c-0.2-0.4-0.3-0.7-0.2-0.9c0.1-0.1,0.3-0.3,0.6-0.5c0.7-0.4,1.3-0.9,2-1.6c0.6-0.7,1.2-1.5,1.6-2.4c0.4-0.8,0.6-1.5,0.6-2.1
                      c0-0.5-0.3-1-0.8-1.2c-0.4-0.2-0.9-0.2-1.3-0.1c-0.4,0.2-0.9,0.4-1.3,0.8c-0.4,0.3-1.2,1-2.2,1.9c-1.6,1.4-3,2.5-4.2,3.2
                      s-2.3,1.1-3.5,1.2c-1.2,0.1-2.5-0.3-3.9-0.9c-2.2-1.1-3.5-2.7-4-5s0-5,1.6-8.2C869.1,711,870.3,709.1,871.7,707.5z"/>
                    <path class="st3" d="M860.8,730.4c0.5-0.2,1.1-0.1,1.8,0.3l16.2,8l2.6-5.2c0.4-0.8,0.8-1.2,1.3-1.3s1,0,1.8,0.4l2,1
                      c0.7,0.4,1.2,0.8,1.3,1.2c0.2,0.4,0.1,1-0.3,1.8l-9.4,18.9c-0.4,0.8-0.8,1.2-1.3,1.3s-1,0-1.8-0.4l-2-1
                      c-0.7-0.4-1.2-0.8-1.3-1.2c-0.2-0.4-0.1-1,0.3-1.8l2.6-5.2l-16.2-8c-0.7-0.3-1.1-0.8-1.3-1.3s-0.1-1.1,0.3-2l2.1-4.3
                      C859.8,731,860.3,730.6,860.8,730.4z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M862.2,653.9c0.5-0.2,1.1-0.1,1.8,0.3l20.5,10.2c0.7,0.3,1.1,0.8,1.3,1.3s0.1,1.1-0.3,1.9l-4.1,8.3
                      c-4.2,8.5-10.5,10.8-18.7,6.7c-4.1-2-6.6-4.6-7.6-7.8s-0.5-6.9,1.6-11.1l4.1-8.3C861.2,654.6,861.7,654.1,862.2,653.9z
                       M862.7,667.1c-0.7,1.3-0.7,2.5-0.1,3.6c0.6,1,2.1,2.1,4.4,3.3c2.3,1.2,4.1,1.7,5.3,1.5s2.1-0.9,2.8-2.3l1.1-2.1l-12.3-6.1
                      L862.7,667.1z"/>
                    <path class="st3" d="M849.7,679.1c0.5-0.2,1.1-0.1,1.8,0.3l20.5,10.2c0.7,0.3,1.1,0.8,1.3,1.3s0.1,1.1-0.3,1.9l-2.1,4.3
                      c-0.4,0.8-0.9,1.3-1.3,1.5c-0.5,0.2-1.1,0.1-1.8-0.3l-20.5-10.2c-0.7-0.3-1.1-0.8-1.3-1.3s-0.1-1.2,0.3-2l2.1-4.3
                      C848.8,679.7,849.2,679.3,849.7,679.1z"/>
                    <path class="st3" d="M844.1,690.3c0.5-0.2,1.1-0.1,1.8,0.3l20.5,10.2c0.7,0.3,1.1,0.8,1.3,1.3s0.1,1.1-0.3,1.9l-4.1,8.3
                      c-4.2,8.5-10.5,10.8-18.7,6.7c-4.1-2-6.6-4.6-7.6-7.9c-1-3.2-0.5-6.9,1.6-11.1l4.1-8.3C843.2,691,843.6,690.5,844.1,690.3z
                       M844.7,703.5c-0.7,1.4-0.7,2.5-0.1,3.6s2.1,2.1,4.4,3.3c2.3,1.2,4.1,1.7,5.3,1.5s2.1-0.9,2.8-2.3l1.1-2.1l-12.3-6.1
                      L844.7,703.5z"/>
                  </g>
                </g>
              </g>
            </g>
            </a>
          </g>
          <g id="Capa_4_1_">
            <a href="pages/bestcallcenter.php">
            <g id="Capa_3">
              <g>
                <g>
                  <circle class="st2" cx="717.1" cy="412.9" r="10.5"/>
                </g>
                <g>
                  <path class="st2" d="M733.9,406.3l-0.5-1c-1.1-2.4,0-5.3,2.4-6.4l56.1-25.3c2.4-1.1,5.3,0,6.4,2.4l0.5,1c1.1,2.4,0,5.3-2.4,6.4
                    l-56.1,25.3C737.8,409.8,735,408.7,733.9,406.3z"/>
                </g>
                <g>
                  <circle class="st2" cx="874" cy="338.7" r="76.5"/>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M882.3,292.1c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l2.9,6.5
                      c0.8,1.7,1,3.2,0.6,4.3s-1.2,2-2.6,2.6c-0.6,0.3-1.3,0.4-1.9,0.4s-1.1-0.3-1.5-0.6c0.1,1.5-0.6,2.5-2.1,3.3
                      c-1.3,0.6-2.6,0.6-3.9,0c-1.3-0.6-2.3-1.8-3.1-3.6l-2.8-6.3C882.2,292.8,882.2,292.4,882.3,292.1z M888.7,297.4
                      c0.1,0.3,0.3,0.5,0.6,0.6s0.6,0.1,0.9-0.1c0.3-0.1,0.6-0.4,0.7-0.6s0.1-0.5,0-0.9l-0.9-2l-2.1,1L888.7,297.4z M893.9,294.6
                      c0.3,0.7,0.8,0.8,1.4,0.6s0.8-0.8,0.5-1.4l-0.7-1.6l-1.9,0.9L893.9,294.6z"/>
                    <path class="st3" d="M888.7,306.4c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1c0.3,0.1,0.5,0.4,0.8,0.9l4,8.9
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-2.3-5l-1.8,0.8l1.4,3.1
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-1.4-3.1l-1.8,0.8l2.2,5
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-4-8.8
                      C888.7,307,888.6,306.7,888.7,306.4z"/>
                    <path class="st3" d="M895.1,321.2c-0.2-1.2-0.3-2.3-0.1-3.2c0.1-0.4,0.2-0.6,0.4-0.7c0.1-0.1,0.3-0.1,0.5,0l2.5,0.4
                      c0.2,0,0.4,0.1,0.5,0.3c0,0.1,0.1,0.3,0,0.5c-0.1,0.6-0.1,1.4,0.1,2.1c0.1,0.7,0.3,1.4,0.6,2.1c0.2,0.5,0.5,0.9,0.7,1
                      c0.3,0.2,0.5,0.2,0.8,0c0.3-0.1,0.5-0.4,0.6-0.8s0.1-1.1,0-2c-0.1-1.7,0-3.1,0.4-4.3c0.3-1.1,1.1-2,2.3-2.5
                      c1.5-0.7,2.8-0.6,4,0c1.2,0.7,2.2,1.9,3,3.7c0.5,1.2,0.9,2.3,1.1,3.3c0.2,1,0.2,1.9,0,2.7c-0.1,0.4-0.2,0.6-0.4,0.7
                      c-0.1,0.1-0.3,0.1-0.5,0l-2.5-0.4c-0.3,0-0.4-0.1-0.5-0.3c0-0.1,0-0.3,0-0.5c0.1-0.5,0.1-0.9,0-1.5s-0.2-1.1-0.5-1.6
                      c-0.2-0.5-0.5-0.9-0.7-1c-0.3-0.2-0.5-0.2-0.9-0.1c-0.3,0.1-0.4,0.3-0.5,0.6s-0.1,0.5-0.1,0.9c0,0.3,0,0.9,0,1.7
                      c0,1.3,0,2.3-0.1,3.1c-0.1,0.8-0.4,1.5-0.8,2s-1,1-1.9,1.4c-1.3,0.6-2.5,0.6-3.8,0c-1.2-0.6-2.3-1.9-3.1-3.8
                      C895.8,323.7,895.4,322.4,895.1,321.2z"/>
                    <path class="st3" d="M901.5,334.7c0.1-0.3,0.4-0.5,0.8-0.7l9.7-4.4l-1.4-3.1c-0.2-0.5-0.3-0.8-0.1-1.1s0.4-0.5,0.8-0.7l1.2-0.5
                      c0.4-0.2,0.8-0.3,1-0.2c0.3,0.1,0.5,0.3,0.7,0.8l5.1,11.3c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5
                      c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-1.4-3.1l-9.7,4.4c-0.4,0.2-0.8,0.2-1,0.1s-0.5-0.4-0.8-0.9l-1.2-2.5
                      C901.4,335.3,901.3,335,901.5,334.7z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M866.6,298.3c0.6-2,2.2-3.6,4.7-4.7s4.7-1.3,6.6-0.5c1.9,0.8,3.4,2.5,4.6,5.1c0.5,1.2,0.9,2.3,1.1,3.3
                      s0.2,1.9,0.1,2.7c0,0.2-0.2,0.4-0.3,0.5s-0.3,0.1-0.6,0l-2.3-0.2c-0.3,0-0.4-0.1-0.5-0.3c0-0.1-0.1-0.3,0-0.6
                      c0-0.5,0-1-0.1-1.5s-0.3-1-0.5-1.6c-0.5-1.2-1.3-1.9-2.3-2.3s-2.1-0.2-3.4,0.4c-1.3,0.6-2.1,1.4-2.5,2.4s-0.3,2.1,0.2,3.3
                      c0.5,1,1.1,1.9,1.9,2.5c0.2,0.2,0.3,0.3,0.4,0.4c0.1,0.2,0,0.3-0.1,0.5l-1.4,1.9c-0.2,0.2-0.3,0.4-0.5,0.4
                      c-0.2,0.1-0.3,0-0.5-0.1c-0.7-0.4-1.4-1-2-1.9s-1.2-1.8-1.8-3C866.3,302.6,866,300.3,866.6,298.3z"/>
                    <path class="st3" d="M870.8,310.7c0.1-0.1,0.3-0.1,0.5-0.1l15.2-0.4c0.4,0,0.6,0,0.8,0.1s0.4,0.3,0.5,0.6l1,2.3
                      c0.1,0.3,0.2,0.6,0.1,0.8s-0.2,0.5-0.4,0.7l-10.4,11.1c-0.2,0.2-0.3,0.3-0.4,0.3c-0.3,0.1-0.5,0-0.7-0.3l-1.8-4
                      c-0.2-0.4-0.1-0.8,0.2-1.1l1.3-1.2l-1.7-3.8l-1.8,0.2c-0.4,0.1-0.8-0.1-1-0.6l-1.8-4C870.4,311,870.5,310.8,870.8,310.7z
                       M879.8,317l2.3-2l-3,0.4L879.8,317z"/>
                    <path class="st3" d="M878.2,327.6c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l1.2,2.5
                      c0.2,0.5,0.3,0.9,0.2,1.1c-0.1,0.3-0.4,0.5-0.8,0.7l-9.7,4.4l2.2,5c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5
                      c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-4-8.8C878.2,328.2,878.1,327.8,878.2,327.6z"/>
                    <path class="st3" d="M883.6,339.5c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l1.2,2.5
                      c0.2,0.5,0.3,0.9,0.2,1.1c-0.1,0.3-0.4,0.5-0.8,0.7l-9.7,4.4l2.2,5c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5
                      c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-4-8.8C883.5,340.1,883.5,339.8,883.6,339.5z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M849.6,307.8c0.6-2,2.2-3.6,4.7-4.7s4.7-1.3,6.6-0.5c1.9,0.8,3.4,2.5,4.6,5.1c0.5,1.2,0.9,2.3,1.1,3.3
                      c0.2,1,0.2,1.9,0.1,2.7c0,0.2-0.2,0.4-0.3,0.5s-0.3,0.1-0.6,0l-2.3-0.2c-0.3,0-0.4-0.1-0.5-0.3c0-0.1-0.1-0.3,0-0.6
                      c0-0.5,0-1-0.1-1.5s-0.3-1-0.5-1.6c-0.5-1.2-1.3-1.9-2.3-2.3s-2.1-0.2-3.4,0.4c-1.3,0.6-2.1,1.4-2.5,2.4s-0.3,2.1,0.2,3.3
                      c0.5,1,1.1,1.9,1.9,2.5c0.2,0.2,0.3,0.3,0.4,0.4c0.1,0.2,0,0.3-0.1,0.5l-1.4,1.9c-0.2,0.2-0.3,0.4-0.5,0.4
                      c-0.2,0.1-0.3,0-0.5-0.1c-0.7-0.4-1.4-1-2-1.9c-0.7-0.8-1.2-1.8-1.8-3C849.2,312.1,848.9,309.8,849.6,307.8z"/>
                    <path class="st3" d="M854.2,321.5c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l4,8.9
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-2.3-5l-1.8,0.8l1.4,3.1
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-1.4-3.1l-1.8,0.8l2.2,5
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-4-8.8
                      C854.1,322.2,854.1,321.8,854.2,321.5z"/>
                    <path class="st3" d="M859.7,333.8c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1c0.3,0.1,0.5,0.4,0.8,0.9l0.9,2
                      c0.1,0.3,0.2,0.5,0.2,0.8c0,0.2-0.1,0.4-0.2,0.7l-4,6.5l5.1-2.3c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l1.2,2.5
                      c0.2,0.5,0.3,0.9,0.2,1.1c-0.1,0.3-0.4,0.5-0.8,0.7l-12.1,5.5c-0.4,0.2-0.8,0.2-1,0.1c-0.3-0.1-0.5-0.4-0.8-0.9l-0.9-2
                      c-0.1-0.3-0.2-0.5-0.2-0.8s0.1-0.4,0.2-0.7l4-6.5l-5.1,2.3c-0.4,0.2-0.8,0.2-1,0.1c-0.3-0.1-0.5-0.4-0.8-0.9l-1.2-2.5
                      C859.6,334.5,859.6,334.1,859.7,333.8z"/>
                    <path class="st3" d="M868,352.2c0.1-0.3,0.4-0.5,0.8-0.7l9.7-4.4l-1.4-3.1c-0.2-0.5-0.3-0.8-0.1-1.1s0.4-0.5,0.8-0.7l1.2-0.5
                      c0.4-0.2,0.8-0.3,1-0.2c0.3,0.1,0.5,0.3,0.7,0.8l5.1,11.3c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5
                      c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-1.4-3.1l-9.7,4.4c-0.4,0.2-0.8,0.2-1,0.1s-0.5-0.4-0.8-0.9l-1.2-2.5
                      C867.9,352.9,867.9,352.5,868,352.2z"/>
                    <path class="st3" d="M872.5,362.3c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l4,8.9
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-2.3-5l-1.8,0.8l1.4,3.1
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-1.4-3.1l-1.8,0.8l2.2,5
                      c0.2,0.5,0.3,0.8,0.1,1.1s-0.4,0.5-0.8,0.7l-1.2,0.5c-0.4,0.2-0.8,0.3-1,0.2c-0.3-0.1-0.5-0.3-0.7-0.8l-4-8.8
                      C872.4,362.9,872.4,362.5,872.5,362.3z"/>
                    <path class="st3" d="M878,374.5c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l2.3,5.1
                      c1,2.1,1.2,3.9,0.8,5.3s-1.5,2.4-3.2,3.2c-1,0.5-2,0.7-2.8,0.6c-0.9,0-1.7-0.3-2.4-0.9l-3.4,3.9c-0.1,0.1-0.2,0.2-0.3,0.3
                      c-0.2,0.1-0.3,0.1-0.5,0s-0.3-0.2-0.3-0.4l-1.6-3.6c-0.1-0.2-0.2-0.4-0.2-0.6s0.1-0.3,0.2-0.4l3.3-3.4l-0.3-0.7l-3.2,1.4
                      c-0.4,0.2-0.8,0.2-1,0.1s-0.5-0.4-0.8-0.9l-1.2-2.5C878,375.2,877.9,374.8,878,374.5z M888.3,376.7c0.2,0.5,0.5,0.8,0.8,0.9
                      s0.8,0.1,1.3-0.1s0.8-0.5,0.9-0.9c0.1-0.4,0.1-0.8-0.1-1.2l-0.7-1.5l-2.9,1.3L888.3,376.7z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M829.1,317.5c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l2.3,5.1
                      c1,2.1,1.2,3.9,0.8,5.3s-1.5,2.4-3.2,3.2s-3.2,0.9-4.5,0.3s-2.4-2-3.4-4.1l-0.6-1.3l-3.1,1.4c-0.4,0.2-0.8,0.2-1,0.1
                      c-0.3-0.1-0.5-0.4-0.8-0.9l-1.2-2.5C829,318.1,829,317.8,829.1,317.5z M839.3,319.7c0.2,0.5,0.5,0.8,0.8,0.9s0.8,0.1,1.3-0.1
                      s0.8-0.5,0.9-0.9c0.1-0.4,0.1-0.8-0.1-1.2l-0.7-1.5l-2.9,1.3L839.3,319.7z"/>
                    <path class="st3" d="M835,330.7c0.1-0.3,0.4-0.5,0.8-0.7l12.1-5.5c0.4-0.2,0.8-0.2,1-0.1s0.5,0.4,0.8,0.9l2.3,5.1
                      c1,2.1,1.2,3.9,0.8,5.3s-1.5,2.4-3.2,3.2c-1,0.5-2,0.7-2.8,0.6c-0.9,0-1.7-0.3-2.4-0.9l-3.4,3.9c-0.1,0.1-0.2,0.2-0.3,0.3
                      c-0.2,0.1-0.3,0.1-0.5,0s-0.3-0.2-0.3-0.4l-1.6-3.6c-0.1-0.2-0.2-0.4-0.2-0.6s0.1-0.3,0.2-0.4l3.3-3.4l-0.3-0.7l-3.2,1.4
                      c-0.4,0.2-0.8,0.2-1,0.1s-0.5-0.4-0.8-0.9l-1.2-2.5C835,331.3,834.9,331,835,330.7z M845.2,332.9c0.2,0.5,0.5,0.8,0.8,0.9
                      s0.8,0.1,1.3-0.1s0.8-0.5,0.9-0.9c0.1-0.4,0.1-0.8-0.1-1.2l-0.7-1.5l-2.9,1.3L845.2,332.9z"/>
                    <path class="st3" d="M843.1,344.9c0.7-1.9,2.3-3.4,4.7-4.5s4.6-1.3,6.5-0.6s3.4,2.4,4.6,4.9c1.1,2.5,1.3,4.8,0.6,6.7
                      s-2.3,3.4-4.7,4.5s-4.6,1.3-6.5,0.6s-3.4-2.4-4.6-4.9C842.5,349,842.3,346.8,843.1,344.9z M849.2,351.5
                      c0.8,0.1,1.9-0.1,3.3-0.7c1.3-0.6,2.3-1.3,2.7-2c0.5-0.7,0.5-1.5,0.1-2.5c-0.4-0.9-1-1.5-1.9-1.6s-1.9,0.1-3.3,0.7
                      c-1.3,0.6-2.3,1.3-2.7,2s-0.5,1.5-0.1,2.5S848.3,351.4,849.2,351.5z"/>
                  </g>
                </g>
              </g>
            </g>
            </a>
          </g>
          <g id="Capa_3_1_">

            <a href="pages/bestcontactcenter.php">
            <g id="Capa_4">
              <g>
                <g>
                  <circle class="st0" cx="522.9" cy="295.8" r="10.6"/>
                </g>
                <g>
                  <path class="st0" d="M523.8,277.7h-1.2c-2.7,0-4.9-2.2-4.9-4.9V211c0-2.7,2.2-4.9,4.9-4.9h1.2c2.7,0,4.9,2.2,4.9,4.9v61.9
                    C528.7,275.5,526.5,277.7,523.8,277.7z"/>
                </g>
                <g>
                  <circle class="st0" cx="519.6" cy="121.4" r="76.9"/>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M474.2,91.8c-0.2-0.2-0.3-0.6-0.3-1V77.4c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h7.1
                      c1.9,0,3.3,0.4,4.2,1.2c0.9,0.8,1.4,2,1.4,3.5c0,0.7-0.1,1.3-0.5,1.9s-0.7,0.9-1.2,1.1c1.4,0.5,2.1,1.6,2.1,3.3
                      c0,1.5-0.5,2.7-1.6,3.6c-1,0.9-2.6,1.4-4.6,1.4h-7C474.8,92.1,474.4,92,474.2,91.8z M481.3,82.1c0.7,0,1.1-0.3,1.1-1
                      s-0.4-1-1.1-1h-1.8v2.1L481.3,82.1L481.3,82.1z M481.7,88.1c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.3-0.5,0.3-0.9s-0.1-0.7-0.3-0.9
                      c-0.2-0.2-0.5-0.3-0.8-0.3h-2.2v2.4C479.5,88.1,481.7,88.1,481.7,88.1z"/>
                    <path class="st3" d="M490,91.8c-0.2-0.2-0.3-0.6-0.3-1V77.4c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h9.8
                      c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3h-5.5v2h3.4c0.5,0,0.8,0.1,1,0.3
                      c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3h-3.4v2h5.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1
                      v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3h-9.7C490.5,92.1,490.2,92,490,91.8z"/>
                    <path class="st3" d="M506.2,92c-1.2-0.3-2.2-0.7-3-1.3c-0.3-0.2-0.5-0.4-0.5-0.6c0-0.1,0.1-0.3,0.2-0.4l1.4-2.2
                      c0.1-0.2,0.3-0.3,0.4-0.3s0.3,0.1,0.5,0.2c0.6,0.3,1.2,0.6,1.9,0.8c0.7,0.2,1.4,0.3,2.1,0.3c0.6,0,1-0.1,1.3-0.2
                      c0.3-0.2,0.4-0.4,0.4-0.7c0-0.4-0.2-0.7-0.5-0.9c-0.4-0.2-0.9-0.5-1.8-0.8c-1.6-0.6-2.8-1.3-3.8-2.1s-1.4-1.8-1.4-3.1
                      c0-1.6,0.6-2.9,1.7-3.7c1.1-0.8,2.7-1.2,4.6-1.2c1.4,0,2.5,0.1,3.5,0.3c1,0.2,1.8,0.6,2.5,1.1c0.3,0.2,0.5,0.4,0.5,0.6
                      c0,0.1-0.1,0.3-0.2,0.4l-1.4,2.2c-0.1,0.2-0.3,0.3-0.4,0.3c-0.1,0-0.2-0.1-0.5-0.2c-0.4-0.3-0.8-0.5-1.3-0.6
                      c-0.5-0.2-1.1-0.3-1.7-0.3c-0.5,0-1,0.1-1.3,0.2s-0.4,0.4-0.4,0.8c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.5
                      c0.3,0.1,0.8,0.3,1.6,0.7c1.2,0.5,2.1,0.9,2.8,1.4c0.7,0.4,1.2,0.9,1.5,1.6c0.3,0.6,0.5,1.4,0.5,2.3c0,1.4-0.5,2.6-1.6,3.4
                      s-2.6,1.3-4.8,1.3C508.7,92.4,507.4,92.3,506.2,92z"/>
                    <path class="st3" d="M521.2,91.8c-0.2-0.2-0.3-0.6-0.3-1V80.1h-3.4c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.3-1v-1.3
                      c0-0.5,0.1-0.8,0.3-1s0.5-0.3,1-0.3H530c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3
                      h-3.4v10.7c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3h-2.8C521.7,92.1,521.4,92,521.2,91.8z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M473.9,108.7c-1.6-1.4-2.4-3.5-2.4-6.3s0.8-4.9,2.3-6.3s3.7-2.1,6.6-2.1c1.3,0,2.4,0.1,3.4,0.4
                      s1.9,0.6,2.5,1.1c0.2,0.1,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.6l-1.2,2c-0.1,0.2-0.3,0.3-0.5,0.3c-0.1,0-0.3-0.1-0.5-0.2
                      c-0.4-0.2-0.9-0.4-1.4-0.5s-1-0.2-1.7-0.2c-1.3,0-2.3,0.4-3,1.1s-1,1.8-1,3.3c0,1.4,0.4,2.5,1.1,3.3s1.8,1.1,3.1,1.1
                      c1.1,0,2.2-0.2,3.1-0.7c0.3-0.1,0.4-0.2,0.5-0.2c0.2,0,0.3,0.1,0.5,0.3l1.2,2c0.1,0.3,0.2,0.4,0.2,0.6s-0.1,0.3-0.3,0.5
                      c-0.7,0.5-1.5,0.8-2.5,1.1c-1,0.3-2.2,0.4-3.5,0.4C477.7,110.8,475.5,110.1,473.9,108.7z"/>
                    <path class="st3" d="M488.7,108.6c-1.5-1.4-2.2-3.5-2.2-6.2s0.7-4.7,2.2-6.2c1.5-1.4,3.6-2.2,6.4-2.2s4.9,0.7,6.4,2.2
                      s2.2,3.5,2.2,6.2s-0.7,4.7-2.2,6.2s-3.6,2.2-6.4,2.2S490.1,110.1,488.7,108.6z M497.2,105.8c0.5-0.7,0.7-1.8,0.7-3.3
                      s-0.2-2.6-0.7-3.3c-0.5-0.7-1.2-1.1-2.2-1.1s-1.8,0.4-2.2,1.1s-0.7,1.8-0.7,3.3s0.2,2.6,0.7,3.3c0.5,0.7,1.2,1.1,2.2,1.1
                      S496.8,106.5,497.2,105.8z"/>
                    <path class="st3" d="M505.1,110.1c-0.2-0.2-0.3-0.6-0.3-1V95.7c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h2.2
                      c0.3,0,0.6,0,0.8,0.1s0.4,0.3,0.5,0.5l4.3,6.3v-5.6c0-0.5,0.1-0.8,0.3-1s0.6-0.3,1.1-0.3h2.8c0.5,0,0.9,0.1,1.1,0.3
                      s0.3,0.6,0.3,1v13.4c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3H516c-0.3,0-0.6,0-0.8-0.1s-0.4-0.3-0.5-0.5l-4.3-6.3v5.7
                      c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.6,0.3-1.1,0.3h-2.8C505.6,110.4,505.3,110.3,505.1,110.1z"/>
                    <path class="st3" d="M525.3,110.1c-0.2-0.2-0.3-0.6-0.3-1V98.4h-3.4c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.3-1v-1.3
                      c0-0.5,0.1-0.8,0.3-1s0.5-0.3,1-0.3h12.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3
                      h-3.4v10.7c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3h-2.8C525.9,110.4,525.6,110.3,525.3,110.1z"/>
                    <path class="st3" d="M532.7,110c0-0.1,0-0.3,0.1-0.5l5.9-14.1c0.1-0.3,0.3-0.6,0.5-0.7s0.4-0.2,0.8-0.2h2.6
                      c0.3,0,0.6,0.1,0.8,0.2s0.3,0.4,0.5,0.7l5.8,14.1c0.1,0.2,0.1,0.4,0.1,0.5c0,0.3-0.2,0.5-0.5,0.5h-4.4c-0.5,0-0.8-0.2-0.9-0.6
                      l-0.6-1.7h-4.2l-0.5,1.7c-0.1,0.4-0.4,0.6-0.9,0.6h-4.4C532.8,110.4,532.7,110.3,532.7,110z M542.1,104.3l-0.9-2.9l-0.9,2.9
                      H542.1z"/>
                    <path class="st3" d="M551.5,108.7c-1.6-1.4-2.4-3.5-2.4-6.3s0.8-4.9,2.3-6.3s3.7-2.1,6.6-2.1c1.3,0,2.4,0.1,3.4,0.4
                      s1.8,0.6,2.5,1.1c0.2,0.1,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.6l-1.2,2c-0.1,0.2-0.3,0.3-0.5,0.3c-0.1,0-0.3-0.1-0.5-0.2
                      c-0.4-0.2-0.9-0.4-1.4-0.5s-1-0.2-1.7-0.2c-1.3,0-2.3,0.4-3,1.1s-1,1.8-1,3.3c0,1.4,0.4,2.5,1.1,3.3s1.8,1.1,3.1,1.1
                      c1.1,0,2.2-0.2,3.1-0.7c0.3-0.1,0.4-0.2,0.5-0.2c0.2,0,0.3,0.1,0.5,0.3l1.2,2c0.1,0.3,0.2,0.4,0.2,0.6s-0.1,0.3-0.3,0.5
                      c-0.7,0.5-1.5,0.8-2.5,1.1c-1,0.3-2.2,0.4-3.5,0.4C555.3,110.8,553.1,110.1,551.5,108.7z"/>
                    <path class="st3" d="M569.1,110.1c-0.2-0.2-0.3-0.6-0.3-1V98.4h-3.4c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.3-1v-1.3
                      c0-0.5,0.1-0.8,0.3-1s0.5-0.3,1-0.3h12.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3
                      h-3.4v10.7c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3h-2.8C569.7,110.4,569.3,110.3,569.1,110.1z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M474.1,127.8c-1.6-1.4-2.4-3.5-2.4-6.3s0.8-4.9,2.3-6.3s3.7-2.1,6.6-2.1c1.3,0,2.4,0.1,3.4,0.4
                      s1.9,0.6,2.5,1.1c0.2,0.1,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.6l-1.2,2c-0.1,0.2-0.3,0.3-0.5,0.3c-0.1,0-0.3-0.1-0.5-0.2
                      c-0.4-0.2-0.9-0.4-1.4-0.5s-1-0.2-1.7-0.2c-1.3,0-2.3,0.4-3,1.1s-1,1.8-1,3.3c0,1.4,0.4,2.5,1.1,3.3s1.8,1.1,3.1,1.1
                      c1.1,0,2.2-0.2,3.1-0.7c0.3-0.1,0.4-0.2,0.5-0.2c0.2,0,0.3,0.1,0.5,0.3l1.2,2c0.1,0.3,0.2,0.4,0.2,0.6c0,0.2-0.1,0.3-0.3,0.5
                      c-0.7,0.5-1.5,0.8-2.5,1.1s-2.2,0.4-3.5,0.4C477.9,129.9,475.7,129.2,474.1,127.8z"/>
                    <path class="st3" d="M488.6,129.2c-0.2-0.2-0.3-0.6-0.3-1v-13.3c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h9.8
                      c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3H494v2h3.4c0.5,0,0.8,0.1,1,0.3
                      c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3H494v2h5.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1
                      v1.3c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.5,0.3-1,0.3h-9.7C489.1,129.5,488.8,129.4,488.6,129.2z"/>
                    <path class="st3" d="M502.1,129.2c-0.2-0.2-0.3-0.6-0.3-1v-13.4c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h2.2
                      c0.3,0,0.6,0,0.8,0.1s0.4,0.3,0.5,0.5l4.3,6.3v-5.6c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h2.8c0.5,0,0.9,0.1,1.1,0.3
                      s0.3,0.6,0.3,1v13.4c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3H513c-0.3,0-0.6,0-0.8-0.1s-0.4-0.3-0.5-0.5l-4.3-6.3v5.7
                      c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.6,0.3-1.1,0.3h-2.8C502.7,129.5,502.3,129.4,502.1,129.2z"/>
                    <path class="st3" d="M522.4,129.2c-0.2-0.2-0.3-0.6-0.3-1v-10.7h-3.4c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.3-1v-1.3
                      c0-0.5,0.1-0.8,0.3-1s0.5-0.3,1-0.3h12.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3
                      h-3.4v10.7c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3h-2.8C523,129.5,522.6,129.4,522.4,129.2z"/>
                    <path class="st3" d="M533.5,129.2c-0.2-0.2-0.3-0.6-0.3-1v-13.3c0-0.5,0.1-0.8,0.3-1s0.6-0.3,1.1-0.3h9.8c0.5,0,0.8,0.1,1,0.3
                      c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3h-5.5v2h3.4c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3
                      c0,0.5-0.1,0.8-0.3,1s-0.5,0.3-1,0.3h-3.4v2h5.5c0.5,0,0.8,0.1,1,0.3c0.2,0.2,0.3,0.6,0.3,1v1.3c0,0.5-0.1,0.8-0.3,1
                      s-0.5,0.3-1,0.3h-9.7C534,129.5,533.7,129.4,533.5,129.2z"/>
                    <path class="st3" d="M547,129.2c-0.2-0.2-0.3-0.6-0.3-1v-13.3c0-0.5,0.1-0.8,0.3-1s0.6-0.3,1.1-0.3h5.6c2.4,0,4.1,0.5,5.2,1.4
                      c1.1,0.9,1.6,2.3,1.6,4.2c0,1.1-0.2,2.1-0.6,2.9c-0.4,0.8-1,1.4-1.8,1.8l2.2,4.7c0.1,0.1,0.1,0.3,0.1,0.4
                      c0,0.2-0.1,0.3-0.2,0.4s-0.3,0.2-0.5,0.2h-4c-0.3,0-0.5,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.3-0.4l-1.7-4.4h-0.8v3.5
                      c0,0.5-0.1,0.8-0.3,1s-0.6,0.3-1.1,0.3h-2.8C547.6,129.5,547.2,129.4,547,129.2z M553.2,120.7c0.5,0,0.9-0.1,1.2-0.4
                      s0.4-0.7,0.4-1.2c0-0.6-0.2-1-0.4-1.2c-0.3-0.3-0.7-0.4-1.2-0.4h-1.6v3.2H553.2z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st3" d="M474.5,150.5c-0.2-0.2-0.3-0.6-0.3-1v-13.3c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h5.6
                      c2.4,0,4.1,0.5,5.1,1.4c1.1,0.9,1.6,2.4,1.6,4.2s-0.5,3.3-1.6,4.2s-2.8,1.4-5.1,1.4h-1.4v3.4c0,0.5-0.1,0.8-0.3,1
                      c-0.2,0.2-0.6,0.3-1.1,0.3h-2.8C475.1,150.9,474.7,150.8,474.5,150.5z M480.8,142.1c0.5,0,0.9-0.1,1.2-0.4
                      c0.3-0.3,0.4-0.7,0.4-1.2c0-0.6-0.1-1-0.4-1.2c-0.3-0.3-0.7-0.4-1.2-0.4h-1.6v3.2L480.8,142.1L480.8,142.1z"/>
                    <path class="st3" d="M489,150.5c-0.2-0.2-0.3-0.6-0.3-1v-13.3c0-0.5,0.1-0.8,0.3-1c0.2-0.2,0.6-0.3,1.1-0.3h5.6
                      c2.4,0,4.1,0.5,5.1,1.4c1.1,0.9,1.6,2.4,1.6,4.2c0,1.1-0.2,2.1-0.6,2.9c-0.4,0.8-1,1.4-1.8,1.8l2.2,4.7
                      c0.1,0.1,0.1,0.3,0.1,0.4c0,0.2-0.1,0.3-0.2,0.4s-0.3,0.2-0.5,0.2h-4c-0.3,0-0.5,0-0.6-0.1s-0.3-0.2-0.3-0.4L495,146h-0.8v3.5
                      c0,0.5-0.1,0.8-0.3,1c-0.2,0.2-0.6,0.3-1.1,0.3H490C489.6,150.9,489.3,150.8,489,150.5z M495.3,142.1c0.5,0,0.9-0.1,1.2-0.4
                      c0.3-0.3,0.4-0.7,0.4-1.2c0-0.6-0.1-1-0.4-1.2c-0.3-0.3-0.7-0.4-1.2-0.4h-1.6v3.2L495.3,142.1L495.3,142.1z"/>
                    <path class="st3" d="M505.4,149c-1.5-1.4-2.2-3.5-2.2-6.2s0.7-4.7,2.2-6.2c1.5-1.4,3.6-2.2,6.4-2.2s4.9,0.7,6.4,2.2
                      s2.2,3.5,2.2,6.2s-0.7,4.7-2.2,6.2s-3.6,2.2-6.4,2.2S506.9,150.5,505.4,149z M514,146.2c0.5-0.7,0.7-1.8,0.7-3.3
                      s-0.2-2.6-0.7-3.3s-1.2-1.1-2.2-1.1s-1.8,0.4-2.2,1.1s-0.7,1.8-0.7,3.3s0.2,2.6,0.7,3.3s1.2,1.1,2.2,1.1S513.5,146.9,514,146.2
                      z"/>
                  </g>
                </g>
              </g>
            </g>
          </a>
          </g>
          <g id="Capa_2_1_">
            <a href="pages/masivos.php">
            <g id="Capa_2">
              <g>
                <circle class="st1" cx="312.5" cy="631.7" r="10.6"/>
              </g>
              <g>
                <path class="st1" d="M277.9,649.2l0.4,1c1,2.3-0.1,4.9-2.4,5.9l-52.7,22.3c-2.3,1-4.9-0.1-5.9-2.4l-0.4-1c-1-2.3,0.1-4.9,2.4-5.9
                  l52.7-22.3C274.3,645.9,276.9,647,277.9,649.2z"/>
              </g>
              <g>
                <circle class="st1" cx="146.3" cy="709" r="71.1"/>
              </g>
              <g>
                <g>
                  <path class="st3" d="M183.2,751.9c-0.1,0.3-0.4,0.5-0.9,0.7l-13,5.5c-0.4,0.2-0.8,0.2-1.1,0.1c-0.3-0.1-0.6-0.4-0.8-1l-1.1-2.6
                    c-0.1-0.3-0.2-0.6-0.2-0.9c0-0.2,0.1-0.5,0.3-0.7l5.6-5.5l-7.9,0.2c-0.3,0-0.5-0.1-0.7-0.2c-0.2-0.2-0.3-0.4-0.5-0.7l-1.1-2.6
                    c-0.2-0.5-0.3-0.9-0.1-1.2s0.4-0.5,0.8-0.7l13-5.5c0.4-0.2,0.8-0.2,1.1-0.1c0.3,0.1,0.6,0.4,0.8,0.9l0.9,2.2
                    c0.2,0.5,0.3,0.9,0.1,1.2c-0.1,0.3-0.4,0.6-0.8,0.7l-6.3,2.6h3.7c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.5,0.4,0.7,0.9
                    s0.3,0.9,0.2,1.2s-0.3,0.6-0.7,1l-2.5,2.7l6.3-2.6c0.4-0.2,0.8-0.2,1.1-0.1c0.3,0.1,0.6,0.4,0.8,1l0.9,2.2
                    C183.2,751.2,183.3,751.6,183.2,751.9z"/>
                  <path class="st3" d="M176.1,735.7c-0.1,0.1-0.3,0.1-0.6,0.1l-16.2,0.1c-0.4,0-0.7-0.1-0.9-0.2s-0.4-0.3-0.5-0.7l-1.1-2.5
                    c-0.1-0.3-0.2-0.6-0.1-0.8s0.2-0.5,0.5-0.8l11.3-11.5c0.2-0.2,0.3-0.3,0.5-0.3c0.3-0.1,0.6,0,0.7,0.3l1.8,4.3
                    c0.2,0.5,0.1,0.9-0.2,1.2l-1.5,1.3l1.7,4.1l1.9-0.2c0.5-0.1,0.8,0.2,1,0.6l1.8,4.3C176.6,735.4,176.5,735.6,176.1,735.7z
                     M166.8,728.9l-2.5,2.1l3.2-0.3L166.8,728.9z"/>
                  <path class="st3" d="M168.3,716c0.2,1.3,0.2,2.4,0,3.4c-0.1,0.4-0.2,0.6-0.4,0.7c-0.1,0.1-0.3,0.1-0.5,0l-2.7-0.5
                    c-0.3-0.1-0.4-0.1-0.5-0.3c-0.1-0.1-0.1-0.3,0-0.5c0.1-0.7,0.1-1.4,0-2.2s-0.3-1.5-0.6-2.2c-0.2-0.6-0.5-0.9-0.7-1.1
                    c-0.3-0.2-0.6-0.2-0.9-0.1c-0.3,0.1-0.6,0.4-0.6,0.9c-0.1,0.4-0.1,1.1-0.1,2.1c0.1,1.8-0.1,3.3-0.5,4.5s-1.2,2.1-2.5,2.6
                    c-1.6,0.7-3,0.6-4.3-0.1c-1.3-0.8-2.3-2.1-3.1-4c-0.6-1.3-0.9-2.5-1.1-3.5s-0.1-2,0.1-2.9c0.1-0.4,0.2-0.6,0.4-0.7
                    c0.1-0.1,0.3-0.1,0.5,0l2.7,0.5c0.3,0,0.4,0.1,0.5,0.3c0,0.1,0,0.3,0,0.5c-0.1,0.5-0.1,1-0.1,1.6c0.1,0.6,0.2,1.2,0.5,1.7
                    c0.2,0.5,0.5,0.9,0.7,1.1c0.3,0.2,0.6,0.2,0.9,0.1c0.3-0.1,0.5-0.3,0.6-0.6s0.2-0.6,0.2-0.9c0-0.3,0-0.9,0-1.8
                    c0-1.3,0-2.4,0.2-3.3c0.1-0.8,0.4-1.5,0.9-2.1s1.1-1.1,2-1.5c1.4-0.6,2.7-0.5,4,0.1c1.3,0.7,2.4,2,3.2,4.1
                    C167.7,713.3,168,714.7,168.3,716z"/>
                  <path class="st3" d="M163.2,704.6c-0.1,0.3-0.4,0.5-0.9,0.7l-13,5.5c-0.4,0.2-0.8,0.2-1.1,0.1c-0.3-0.1-0.6-0.4-0.8-0.9
                    l-1.2-2.7c-0.2-0.5-0.3-0.9-0.1-1.2c0.1-0.3,0.4-0.5,0.9-0.7l13-5.5c0.4-0.2,0.8-0.2,1.1-0.1c0.3,0.1,0.6,0.4,0.8,1l1.2,2.7
                    C163.3,703.9,163.3,704.3,163.2,704.6z"/>
                  <path class="st3" d="M158.1,692.1c-0.1,0.2-0.2,0.5-0.5,0.7l-11.4,11.3c-0.2,0.2-0.3,0.3-0.5,0.3c-0.3,0.1-0.6,0-0.7-0.3
                    l-1.8-4.3c-0.2-0.5-0.1-0.9,0.2-1.2l6.5-5.5l-8.5,0.8c-0.5,0.1-0.8-0.2-1-0.6l-1.8-4.3c-0.1-0.3-0.1-0.6,0.3-0.7
                    c0.1-0.1,0.3-0.1,0.6-0.1l16.1-0.3c0.4,0,0.7,0,0.9,0.2c0.2,0.1,0.4,0.3,0.5,0.7l1.1,2.5C158.1,691.6,158.1,691.9,158.1,692.1z"
                    />
                  <path class="st3" d="M151.7,681.4c-0.8,2-2.5,3.6-5.1,4.7c-2.6,1.1-4.9,1.2-6.9,0.4s-3.6-2.6-4.7-5.3c-1.2-2.7-1.3-5.1-0.5-7.1
                    s2.5-3.6,5.1-4.7c2.6-1.1,4.9-1.2,6.9-0.4s3.6,2.6,4.7,5.3C152.3,677,152.5,679.4,151.7,681.4z M145.4,674.2
                    c-0.9-0.1-2.1,0.1-3.5,0.7c-1.5,0.6-2.4,1.3-3,2c-0.5,0.7-0.6,1.6-0.1,2.6c0.4,1,1.1,1.6,2,1.7c0.9,0.1,2.1-0.1,3.5-0.7
                    c1.4-0.6,2.4-1.3,2.9-2s0.6-1.6,0.2-2.6C146.9,675,146.3,674.4,145.4,674.2z"/>
                  <path class="st3" d="M146,663.2c0.2,1.3,0.2,2.4,0,3.4c-0.1,0.4-0.2,0.6-0.4,0.7c-0.1,0.1-0.3,0.1-0.5,0l-2.7-0.5
                    c-0.3-0.1-0.4-0.1-0.5-0.3c-0.1-0.1-0.1-0.3,0-0.5c0.1-0.7,0.1-1.4,0-2.2s-0.3-1.5-0.6-2.2c-0.2-0.6-0.5-0.9-0.7-1.1
                    c-0.3-0.2-0.6-0.2-0.9-0.1c-0.3,0.1-0.6,0.4-0.6,0.9c-0.1,0.4-0.1,1.1-0.1,2.1c0.1,1.8-0.1,3.3-0.5,4.5s-1.2,2.1-2.5,2.6
                    c-1.6,0.7-3,0.6-4.3-0.1c-1.3-0.8-2.3-2.1-3.1-4c-0.6-1.3-0.9-2.5-1.1-3.5s-0.1-2,0.1-2.9c0.1-0.4,0.2-0.6,0.4-0.7
                    c0.1-0.1,0.3-0.1,0.5,0l2.7,0.5c0.3,0,0.4,0.1,0.5,0.3c0,0.1,0,0.3,0,0.5c-0.1,0.5-0.1,1-0.1,1.6s0.2,1.2,0.5,1.7
                    c0.2,0.5,0.5,0.9,0.7,1.1c0.3,0.2,0.6,0.2,0.9,0.1c0.3-0.1,0.5-0.3,0.6-0.6s0.2-0.6,0.2-0.9c0-0.3,0-0.9,0-1.8
                    c0-1.3,0-2.4,0.2-3.3c0.1-0.8,0.4-1.5,0.9-2.1s1.1-1.1,2-1.5c1.4-0.6,2.7-0.5,4,0.1c1.3,0.7,2.4,2,3.2,4.1
                    C145.4,660.5,145.8,661.8,146,663.2z"/>
                </g>
              </g>
              <g>
                <path class="st3" d="M158.5,741.1c0.4,2.3,0.4,4.2,0.1,5.8c-0.1,0.7-0.4,1.1-0.7,1.2c-0.2,0.1-0.5,0.1-0.8,0l-4.4-0.8
                  c-0.4-0.1-0.7-0.3-0.8-0.5s-0.1-0.5-0.1-0.9c0.2-1.2,0.1-2.5-0.1-3.8s-0.6-2.6-1.1-3.8c-0.4-1-0.8-1.6-1.3-1.9
                  c-0.4-0.3-0.9-0.4-1.5-0.1c-0.6,0.3-0.9,0.7-1,1.5c-0.1,0.7-0.1,1.9,0,3.6c0.2,3.1-0.1,5.7-0.7,7.7c-0.6,2.1-1.9,3.5-4,4.4
                  c-2.6,1.1-5,1-7.2-0.3s-3.9-3.6-5.3-6.9c-1-2.3-1.6-4.3-1.9-6c-0.3-1.8-0.3-3.4,0-4.9c0.1-0.7,0.4-1.1,0.7-1.2
                  c0.2-0.1,0.5-0.1,0.8,0l4.4,0.8c0.5,0.1,0.7,0.2,0.8,0.5c0.1,0.2,0.1,0.5,0,0.9c-0.1,0.8-0.1,1.7,0,2.7s0.4,2,0.8,3
                  c0.4,0.9,0.8,1.6,1.3,1.9c0.5,0.4,1,0.4,1.5,0.2s0.8-0.5,0.9-1c0.2-0.5,0.2-1,0.2-1.6s0-1.6-0.1-3.1c-0.1-2.3,0-4.2,0.2-5.6
                  c0.2-1.4,0.7-2.6,1.4-3.6s1.8-1.8,3.3-2.5c2.3-1,4.5-0.9,6.7,0.3s4,3.5,5.5,7C157.4,736.5,158.1,738.8,158.5,741.1z"/>
                <path class="st3" d="M149.6,721.4c-0.2,0.5-0.7,0.9-1.4,1.2l-21.6,9.3c-0.7,0.3-1.4,0.4-1.8,0.2c-0.5-0.2-0.9-0.8-1.3-1.7l-2-4.5
                  c-0.2-0.6-0.4-1.1-0.4-1.5s0.2-0.8,0.5-1.1l9.2-9.4l-13.1,0.2c-0.5,0-0.9-0.2-1.2-0.4c-0.3-0.3-0.6-0.7-0.8-1.3l-2-4.5
                  c-0.4-0.9-0.5-1.6-0.3-2.1s0.7-0.9,1.4-1.2l21.6-9.3c0.7-0.3,1.4-0.4,1.9-0.2s0.9,0.7,1.3,1.6l1.6,3.8c0.4,0.9,0.5,1.6,0.3,2.1
                  s-0.7,0.9-1.4,1.3l-10.4,4.5l6.2,0.1c0.9,0,1.5,0.1,2,0.3s0.9,0.8,1.3,1.6c0.4,0.8,0.5,1.5,0.3,2s-0.5,1.1-1.1,1.7l-4.2,4.6
                  l10.4-4.5c0.7-0.3,1.4-0.4,1.9-0.2s1,0.8,1.3,1.6l1.6,3.8C149.7,720.2,149.8,720.9,149.6,721.4z"/>
                <path class="st3" d="M135,686.6c0.4,2.3,0.4,4.2,0.1,5.8c-0.1,0.7-0.4,1.1-0.7,1.2c-0.2,0.1-0.5,0.1-0.8,0l-4.4-0.8
                  c-0.4-0.1-0.7-0.3-0.8-0.5s-0.1-0.5-0.1-0.9c0.2-1.2,0.1-2.5-0.1-3.8c-0.2-1.4-0.6-2.6-1.1-3.8c-0.4-1-0.8-1.6-1.3-1.9
                  c-0.4-0.3-0.9-0.4-1.5-0.1c-0.6,0.3-0.9,0.7-1,1.5c-0.1,0.7-0.1,1.9,0,3.6c0.2,3.1-0.1,5.7-0.7,7.7c-0.6,2.1-1.9,3.5-4,4.4
                  c-2.6,1.1-5,1-7.2-0.3s-3.9-3.6-5.3-6.9c-1-2.3-1.6-4.3-1.9-6c-0.3-1.8-0.3-3.4,0-4.9c0.1-0.7,0.4-1.1,0.7-1.2
                  c0.2-0.1,0.5-0.1,0.8,0l4.4,0.8c0.5,0.1,0.7,0.2,0.8,0.5c0.1,0.2,0.1,0.5,0,0.9c-0.1,0.8-0.1,1.7,0,2.7s0.4,2,0.8,3
                  c0.4,0.9,0.8,1.6,1.3,1.9c0.5,0.4,1,0.4,1.5,0.2s0.8-0.5,0.9-1c0.2-0.5,0.2-1,0.2-1.6s0-1.6-0.1-3.1c-0.1-2.3,0-4.2,0.2-5.6
                  c0.2-1.4,0.7-2.6,1.4-3.6c0.7-1,1.8-1.8,3.3-2.5c2.3-1,4.5-0.9,6.7,0.3s4,3.5,5.5,7C133.9,682,134.6,684.3,135,686.6z"/>
              </g>
            </g>
            </a>
          </g>
          </svg>
        </div>
      </section>
      <!-- Useful features: End -->
  
   <div class="container">
    <div class="contenedorCRM">
      <div class="imagenCRM">
        <img src="assets/img/front-pages/landing-page/juntos.svg" width="100%" alt="Soluciones en comunicaciones para empresas"/>
      </div>
      <div class="descripcionCRM">
        <h1>Creamos soluciones
        </h1>
         <p> en canales de atención para facilitar los medios  de comunicación, y fortalecer la relación entre tu empresa y tus clientes contribuyendo al crecimiento
          de cualquier empresa.</p>
        
      </div>
    </div>
  </div>
   
  <div class="container">
    <div class="contenedorCRM">
      <div class="imagenCRM">
        <img src="assets/img/front-pages/landing-page/con_bestvoiper.svg" alt="soluciones en comunicaciones para empresas" width="100%">
      </div>
      <div class="descripcionCRM">
        <div id="lottie"  style="width: 100%; height: 100%;margin: auto;"></div>
        
      </div>
    </div>
  </div>


  

    
      </section>
      

      <!-- FAQ: Start -->
      <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
          <div class="text-center mb-3 pb-1">
           
          </div>
          <h3 class="text-center mb-1" style="color: #74ac58; font-weight: bolder;">PREGUNTAS FRECUENTES</h3>
          
          <div class="row gy-5">
            <div class="col-lg-5">
              <div class="text-center">
                <img
                  src="assets/img/front-pages/landing-page/ask.png"
                  alt="preguntas frecuentes"
                  class="faq-image"
                  style="width: 100%;" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion" id="accordionExample">
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne"
                      style=" font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;font-size: 1.2rem;">
                      Do you charge for each upgrade?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style=" font-family: 'Montserrat', 'sans-serif'; font-weight: normal;font-size: 1.2rem;">
                      Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                      marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                      soufflé. Wafer gummi bears marshmallow pastry pie.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo"
                      style=" font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;font-size: 1.2rem">
                    
                      Do I need to purchase a license for each website?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style=" font-family: 'Montserrat', 'sans-serif'; font-weight: normal;font-size: 1.2rem;">
                      Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                      dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                      beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree"
                      style=" font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;font-size: 1.2rem">
                      What is regular license?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style=" font-family: 'Montserrat', 'sans-serif'; font-weight: normal;font-size: 1.2rem;">
                      Regular license can be used for end products that do not charge users for access or service(access
                      is free and there will be no monthly subscription fee). Single regular license can be used for
                      single end product and end product can be used by you or your client. If you want to sell end
                      product to multiple clients then you will need to purchase separate license for each client. The
                      same rule applies if you want to use the same end product on multiple domains(unique setup). For
                      more info on regular license you can check official description.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour"
                      style=" font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;font-size: 1.2rem">
                      What is extended license?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style=" font-family: 'Montserrat', 'sans-serif'; font-weight: normal;font-size: 1.2rem;">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                      Mollitia reprehenderit neque repellat delenibx delectus architecto dolorum maxime, blanditiis
                      earum ea, incidunt quam possimus cumque.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive"
                      style=" font-family: 'Montserrat', 'sans-serif'; font-weight: bolder;font-size: 1.2rem">
                      Which license is applicable for SASS application?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" style=" font-family: 'Montserrat', 'sans-serif'; font-weight: normal;font-size: 1.2rem;">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                      nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                      labore enim architecto non!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ: End -->

      <!-- CTA: Start -->
    
      <!-- CTA: End -->

      <!-- Contact Us: Start -->
       <!-- Contact Us: Start -->
       <div style="width: 85%; margin: auto;" id="landingContact">
        <section style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 30px; padding: 0 15px;">
         
         
        
         <div>
          
           <div class="imagenContacto">
            
             <img src="assets/img/front-pages/landing-page/contacto.svg" alt="contactanos"/>
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
                     <a class="text-heading" style="font-size: 1.5vh;">(+57)3330333014 </a>
                     <br/>
                     <a class="text-heading" style="font-size: 1.5vh;">(+57)312 456 0009</a>
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
           <form action="mail/enviarMail.php" method="POST" id="contactForm">
            
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
    
    
   
    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top position-relative overflow-hidden z-1">
    
        <div class="container">
          <div class="row gx-0 gy-4 g-md-5">
            <div class="d-flex justify-content-between align-items-center w-100" >
              
              <!-- Sección de Bestvoiper (al lado derecho) -->
              <a href="/paginaweb/paginaweb/" class="app-brand-link mb-4 d-flex align-items-center">
                <span class="app-brand-logo demo">
                  <img src="assets/img/branding/LOGOBESTVOIPER.png" width="35" alt="Bestvoiper Comunicaciones"/>
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
                  <img src="assets/img/front-pages/icons/github-light.png" alt="github icon" />
                </a>
                <a href="https://www.facebook.com/ThemeSelections/" class="footer-link me-3" target="_blank">
                  <img src="assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" />
                </a>
                <a href="https://twitter.com/Theme_Selection" class="footer-link me-3" target="_blank">
                  <img src="assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" />
                </a>
                <a href="https://www.instagram.com/themeselection/" class="footer-link" target="_blank">
                  <img src="assets/img/front-pages/icons/instagram-light.png" alt="instagram icon" />
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
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="assets/js/front-main.js"></script>
    <script src="assets/js/validacion.js"></script>
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


        // Detecta cuando un elemento está en la vista del usuario
            const sections = document.querySelectorAll('.section');

            function showSectionInView() {
                sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    const isInView = rect.top <= window.innerHeight && rect.bottom >= 0;

                    if (isInView) {
                        section.querySelector('p').classList.add('visible');
                    }
                });
            }

            // Evento de scroll
            window.addEventListener('scroll', showSectionInView);

            // Llamamos a la función de inmediato para que también se aplique cuando cargue la página
            showSectionInView()


    </script>
  </body>
  <style>
    #Capa_1 {
animation-iteration-count: infinite;
animation-timing-function: linear;
animation-duration: 50s;
animation-name: spinner-loading;
animation-duration: 100s; /* Aumentado para hacer la animación más lenta */
transform-origin: center;
transform-box: fill-box;
width: 80%;
}
@keyframes spinner-loading {
0% {
  transform: rotate(0deg);
}
to {
  transform: rotate(1turn);
}
}
#Capa_2,
#Capa_3,
#Capa_4,
#Capa_5,
#Capa_6,
#Capa_7 {
animation-iteration-count: infinite;
animation-timing-function: linear;
animation-duration: 50s;
animation-name: spinner-capas;
animation-duration: 100s; /* Aumentado para hacer la animación más lenta */
transform-origin: center;
cursor: pointer;
}
@keyframes spinner-capas {
0% {
  transform: rotate(0deg);
}
to {
  transform: rotate(1turn);
}
}

.rueda {
width: 45vw;
height: 45vh;
box-sizing: border-box;
}
.st0{fill:#447ab7}.st1{fill:#89b749}.st2{fill:#798eab}.st3{fill:#fff}
.contenedor{
width: 50%;
margin: auto;
display: block;
}
.PList {
    display: none; /* Oculta por defecto */
}

@media (max-width: 1200px) {
  .PList {
    display: block; /* Muestra en pantallas pequeñas */
  }
   

  /* Centrar las imágenes en filas y que hagan wrap */
  .listaProductos {
    display: flex;
    flex-wrap: wrap; /* Permite que los elementos se acomoden en filas */
    justify-content: center; /* Centra las imágenes horizontalmente */
    align-items: center; /* Centra las imágenes verticalmente */
    margin: 0; /* Elimina márgenes por defecto */
  }

  /* Hacer que las imágenes se ajusten al 100% de la pantalla pero en filas */
  .listaProductos img {
    width: 100%; /* Hacer que las imágenes ocupen todo el ancho del contenedor */
    max-width: 300px; /* Limita el tamaño máximo de cada imagen */
    height: auto; /* Mantiene la relación de aspecto */
    margin: 10px; /* Añade un poco de espacio entre las imágenes */
    object-fit: contain; /* Asegura que las imágenes no se distorsionen */
  }

  /* Imagen principal, asegurando que ocupe el 100% del ancho */
  #nuestroProductos {
    width: 100%;
    max-width: 100%; /* Asegura que no exceda el ancho de la pantalla */
    height: auto; /* Mantiene la proporción */
    margin-top: 10%; /* Añade margen superior para separar un poco de la parte superior de la pantalla */
  }

  /* Ajustar las imágenes de los productos (se acomoden en filas) */
  #uno, #dos, #tres, #cuatro, #cinco, #seis {
    width: 100%; /* Las imágenes ocuparán el 100% del ancho disponible */
    max-width: 300px; /* Asegura que las imágenes no sean más grandes de 300px */
    height: auto; /* Mantiene la proporción de la imagen */
    margin-top: 10px; /* Espacio entre las imágenes */
    object-fit: contain; /* Asegura que la imagen mantenga su proporción */
  }
}

  </style>
</html>