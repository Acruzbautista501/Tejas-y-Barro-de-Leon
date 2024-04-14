<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>INICIO</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/Logo.JPG" type="image/">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "283699131654323");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
   <!-- Contador de visitas -->
    <?php 
      $archivo = "contador.txt";
      $contador = intval(trim(file_get_contents($archivo)));

      $file = fopen($archivo, "w");
      fwrite($file, $contador+1 . PHP_EOL);

      $file = fopen($archivo, "r");
      echo '<div style="position:fixed;bottom:20px;z-index:9;left:20px;background: #cca876;padding: 2px 10px;color: #fff;font-size: 30px;border-radius: 20px;">'. fgets($file). '</div>' ;
      fclose($file);
    ?>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>UN MOMENTO...</p>
      </div>
    </div>
    <div class="page">
      <header class="page-head">
        <div class="rd-bar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-aside">
                  <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <ul class="rd-navbar-aside-group list-units">
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="tel:#">(477)-771-6973</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><i class="fab fa-whatsapp"></i></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="https://wa.link/v62pqw">(477)-821-0020</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span></div>
                          <div class="unit-body"><a class="link-dusty-gray" href="mailto:#">tejasybarro@hotmail.com</a></div>
                        </div>
                      </li>
                    </ul>
                    <div class="rd-navbar-aside-group">HACEMOS ENVIOS NACIONALES E INERNACIONALES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <ul class="list-inline list-inline-reset">
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-facebook" href="https://www.facebook.com/TejasyBarrodeLeon/"></a></li>
                        <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-pinterest" href="https://www.pinterest.com.mx/tejasybarro/_saved/"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <nav class="rd-navbar-group">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="index.php"><img class="logobarro" src="images/Logo.JPG" alt="" width="120" height="121"/></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <div class="rd-navbar-btn-wrap"><a class="button button-smaller button-primary-outline" href="contact-us.html">CONTACTO</a></div>
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index.php">INICIO</a></li>
                      <li><a href="about-us.html">NOSOTROS</a></li>
                      <li class="nav-item dropdown">                             
                        <a class="nav-link" href="products.html" id="navbarDropdownMenuLink" data-toggle="dropdown">PRODUCTOS</a>
                        <div class="dropdown-menu menu-vertical" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item txt" href="tejas.html">TEJAS</a>
                          <a class="dropdown-item txt" href="pisos y azulejos.html">PISOS Y AZULEJOS</a>
                          <a class="dropdown-item txt" href="fachaletas y piedras.html">FACHALETAS Y PIEDRAS</a>
                          <a class="dropdown-item txt" href="celosias, sillares y ladrillos.html">CELOSIAS, SILLARES Y LADRILLOS</a>
                          <a class="dropdown-item txt" href="cantera.html">CANTERA</a>
                          <a class="dropdown-item txt" href="accesorios.html">ACCESORIOS</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </nav>
        </div>
      </header>

      <section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500" data-simulate-touch="true">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-1.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">Remodela tu casa.</h3>
                      </div>
                      <h2 class="h2-tejasybarro" data-caption-animate="fadeInUp" data-caption-delay="150">Con Tejas y Barro de León</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">y llena tu vida de ambientes.</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="contact-us.html">Contactanos</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-2.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">Surtimos a todo México</h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">Si deseas atención personalizada...</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250"> </p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="contact-us.html">Llena la forma de contacto.</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/home-slider-slide-3.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary">La mejor forma</h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">De predecir tu futuro...</h2>
                      <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Es construyendolo</p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="contact-us.html">Envianos un mensaje.</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar d-lg-none"></div>
          <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <section class="googlemap"> 
               <div class="visitanos"><center><h3 class="text-normal"><img class="visitanoslocation" src="images/location.png" alt="ubicacion" width="50px" height="50px">Visitanos en</h3></center></div>
               <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119121.10159219704!2d-101.68568652271573!3d21.091249476668622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe47360225c3%3A0x9456856c8dce3114!2sTejas%20y%20Barro%20de%20Le%C3%B3n!5e0!3m2!1ses-419!2smx!4v1637792177719!5m2!1ses-419!2smx" width="1350px" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </section>
      <section class="section-66 section-md-90 section-x3-bottom-100">
        <div class="container">
          <h3 class="text-center">NUESTROS PROVEEDORES</h3>
          <div class="owl-carousel owl-spacing-2 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="3" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
            <div class="item">
              <blockquote class="quote-open">
                <div class="quote-body">
                  <div class="quote-open">
                  </div>
                  <div class="quote-open">
                    <p>
                      <q><img src="images/ElAguilaLogo.png"></q>
                    </p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="quote-open">
                <div class="quote-body">
                  <div class="quote-open">
                  </div>
                  <div class="quote-open">
                    <p>
                      <q><img src="images/PERDURAStoneLogo.jpg"></q>
                    </p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="quote-open">
                <div class="quote-body">
                  <div class="quote-open">
                  </div>
                  <div class="quote-open">
                    <p>
                      <q><img src="images/LOGO_NOVACERAMIC.jpg"></q>
                    </p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="quote-open">
                <div class="quote-body">
                  <div class="quote-open">
                  </div>
                  <div class="quote-open">
                    <p>
                      <q><img src="images/MEXTILE_LOGO.png"></q>
                    </p>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
          
        </div>
      </section>

      <section class="bg-whisper">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-9 col-xl-7">
              </div>
          </div>
        </div>
      </section>
      <footer class="page-foot bg-ebony-clay">
        <div class="section-40 section-md-75">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <div class="row row-50">

                  <div class="col-md-6">
                    <p>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray material-icons-phone"></span></div>
                        <div class="unit-body"><a class="link-white" href="tel:#">(477)-771-6973</a></div>
                      </div>
                     </p>
                     <p>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                       <div class="unit-left"><span><i class="fa-brands fa-whatsapp"></i></span></div>
                       <div class="unit-body"><a class="link-white" href="https://wa.link/v62pqw">(477)-821-0020</a></div>
                     </div>
                     </p>
                     <p>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                       <div class="unit-left"><span class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-pinterest" href="https://www.pinterest.com.mx/tejasybarro/_saved/"></span></div>
                       <div class="unit-body"><a class="link-white" href="https://www.pinterest.com.mx/tejasybarro/_saved/">@tejasybarro</a></div>
                      </div>
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook" href="https://www.facebook.com/TejasyBarrodeLeon/"></a></div>
                        <div class="unit-body"><a class="link-white" href="https://www.facebook.com/TejasyBarrodeLeon/">Tejas y Barro de León</a></div>
                      </div>
                     </p>
                     <p>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                       <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span></div>
                       <div class="unit-body"><a class="link-white" href="tejasybarro@hotmail.com">tejasybarro@hotmail.com</a></div>
                     </div>
                     </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container" style="padding-top: 1.5rem;">
          <hr>
        </div>
        <div class="section-35">
          <div class="container">
            <div class="row flex-md-row-reverse justify-content-md-between align-items-md-center">
              <div class="col-md-4 text-md-right">
                <div class="group-sm group-middle">
                  <p class="font-italic text-white">Follow Us:</p>
                  <ul class="list-inline list-inline-reset">
                    <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook" href="https://www.facebook.com/Impulso-Digital-MKT-112694053820061"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8 text-md-left">
                <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span >Tejas y Barro.&nbsp; Todos los derechos reservados.</span> Diseño&nbsp;Por&nbsp;<a href="https://impulsodigitalmkt.com/">ImpulsoDigitalMKT</a></p>
              </div>             
            </div>
            </div>
        </div>
      </footer>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>