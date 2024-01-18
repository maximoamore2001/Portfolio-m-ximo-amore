<?php

if(isset($_POST["email"]) && isset($_POST["texto"])){

  $email = ($_POST["email"]);
  $texto = ($_POST["texto"]);
  
  $destinatario = 'maxiamorerc88@gmail.com';
  $asunto = 'Email de prueba';

  $cuerpo = '

        <html>
            <head>
            <title>Prueba de correo</title>
            </head>
            <body>
            <h1 style="color: blue;" >Email de: <br> ' . $email . '</h1>
            <h2> mensaje: <br> ' . $texto . ' </h2>
            </body>
        </html>
        ';

  //para el envio
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "content-type: text/html; charset=utf-8\r\n";

  //direccion del remitente

  $headers .= "From: $email\r\n";

  //ruta del mensaje desde origen a destino
  $headers .= "Return-path: $destinatario\r\n";

  mail($destinatario, $asunto, $cuerpo, $headers);

  $msg =  " <p class='form__sendmail'>  ¡enviado con éxito!  </p>";
}
 else {
  echo "";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&display=swap" rel="stylesheet">
  <title>Portfolio</title>
</head>

<body class="dark">
  <header class="header">
    <div id="toggle-theme" class="switches">
      <div class="toggle-theme">
        <img id="toggle-icon" src="assets/icons/moon.svg" alt="icon-theme" class="toggle-theme__icon">
        <p id="toggle-text" class="toggle-theme__text">Modo oscuro</p>
      </div>
    </div>

    <div id="flags" class="flags">
      <!--<div class="flags__item" data-language="es">
         <img class="flags__img" src="./assets/icons/Flag_of_Argentina.svg.png">
      </div>
      <div class="flags__item" data-language="en">
        <img class="flags__img" src="./assets/icons/Flag_of_the_United_States.svg.png">
      </div>
      -->
    </div>

    <div id="toggle-colors" class="colors">

      <div data-color="hsl(198, 100%, 43%)" class="colors__item
       colors__item--blue"></div>

      <div data-color="hsl(311, 93%, 43%)" class="colors__item
       colors__item--green"></div>

      <div data-color="hsl(30, 96%, 51%)" class="colors__item
       colors__item--purple"></div>

      <div data-color="hsl(65,94%,68%)" class="colors__item
       colors__item--orange"></div>
    </div>
  </header>

  <main class="main">
    <section class="column column--left">
      <!-- Tarejeta del perfil -->
      <article class="card card--profile">
        <div class="card__image-container">
          <img src="./assets/images/Portfolio-img.jpg" alt="">
        </div>
        <div class="card__header">
          <h2 class="card__title--name">Máximo Amore</h2>
          <p class="card__subtitle">Desarrollador Web Full-Stack</p>
        </div>
        <div class="card__body">
          <div class="card__link">
            <i class="fas fa-envelope icon"></i>
            <a href="mailto:maxiamorerc@gmail.com">Maxiamorerc@gmail.com</a>
          </div>
          <div class="card__link">
            <i class="fas fa-phone-alt icon"></i>
            <a href="tel:3412297991">+54 341-2297991</a>
          </div>
          <div class="card__link " style="margin-left: 2px;">
            <i class="fas fa-file-arrow-down icon"></i>
            <a href="./Files/2021082507083343.pdf" download="Curriculum">Descargar CV</a>
          </div>
          <h3 class="card__h3">Biografía:</h3>
          <p class="card__text">
            Hola, mi nombre es Máximo y soy desarrollador web. <br>
            Tengo 22 años y resido en la ciudad de Rosario, Argentina. <br>
            A mis 19 años me recibí como técnico maestro mayor de obras,
            pero siempre fui un apasionado de la computación, lo que hizo que descubriera el mundo de la
            programación.<br>
          </p>
          <h3 class="card__h3">¿Qué empleo estoy buscando?</h3>
          <p class="card__text">Estoy buscando un trabajo de manera remota en lo posible,
            donde pueda seguir trabajando en proyectos, tanto en front-end como en back-end. <br>
            Además me encuentro aprendiendo Java para seguir creciendo en la industria.
          </p>


        </div>
        <div class="card__btns">
          <a href="https://github.com/maximoamore2001/Portfolio-m-ximo-amore.git" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-github"></i></button></a>
          <a href="https://www.instagram.com/maxi.amore?igsh=bmRzYTR1ZjBzaTdr&utm_source=qr" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-instagram"></i></button></a>
          <a href="#"><button class="btn__social" type="submit" target="_blank"><i class="fa-brands fa-linkedin"></i></button></a>
          <a href="https://wa.me/3412297991" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-whatsapp"></i></button></a>
        </div>
      </article>

    </section>

    <section class="column column--right">
      <article class="card">
        <h2 class="card__title">Habilidades</h2>
        <small>Tiempo dedicado</small>
        <div class="skills">
          <div class="skills__header">
            <span class="skills__start-level">0</span>
            <span class="skills__start-level">100</span>
          </div>
          <div class="skills">
            <div class="skills__item">
              <p class="skills__tech">Html</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">Css</p>
              <div class="skills__bar skills__bar--50"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">JavaScrypt</p>
              <div class="skills__bar skills__bar--60"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">Php</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">Laravel</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">Jquery</p>
              <div class="skills__bar skills__bar--40"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">Git</p>
              <div class="skills__bar skills__bar--70"></div>
            </div>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title">Experiencia</h2>
        <small>2 Años de experiencia</small>
        <div class="second">
          <div class="second__info">
            <p class="second__time">2022 - Ahora</p>
            <h3 class="second__job">Full-stack developer</h3>
            <p class="second__description">
              Mi experiencia de trabajo se destaca en mis projectos como desarrollador, donde empleo todos mis
              conocimientos aprendidos.
              <br> Realizando un sistema de ventas y una tienda online completamente hecha por mí. <br> Por el momento
              no
              cuento con experiencia en una empresa.
            </p>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title">Idiomas</h2>
        <small>Castellano (nativo) - Inglés (estudiando)</small>
        <div class="second">
          <div class="second__info">
            <p class="second__time">Feb 2017 - Ahora</p>
            <h3 class="second__job">Nivel actual A2 - B1</h3>
            <p class="second__description">
              Llevo varios años practicando el inglés, actualmente estudio en una academia. <br>
              Puedo tener conversaciones cotidianas, interpretar textos, redactar y entender conversaciones sin muchas
              complicaciones. <br>Mi objetivo es seguir aprendiendo hasta hablar fluidamente.
            </p>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title--projects">Proyecto &#8544;</h2>
        <div class="card_projects">

          <div class="second__info">
            <p class="second__time">dic 2023 - ene 2024</p>
            <h3 class="second__job">Restaurante</h3>
            <p class="second__description--projects">Local de hamburguesas con carrito de compras, sistema de
              administración, formularios y MercadoPago.</p>
            <a href="https://github.com/maximoamore2001/Burgers_2023.git" target="_blank" class="second__link">abrir enlace</a>
            <div class="image-card">
              <img src="./assets/images/Captura.PNG" alt="Imagen 1">
              <div class="overlay">
                <div class="text">E-commerce - Hamburguesería</div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title--projects">Proyecto &#8544;&#8544;</h2>
        <div class="card_projects">
          <div class="second__info">
            <p class="second__time">marzo 2023 - abril 2023</p>
            <h3 class="second__job">Sistema gestionable de ventas</h3>
            <p class="second__description--projects">sistema de gestion de clientes, productos y ventas. realizado en PHP, MVC, js, ajax, jquery y MYSQL.</p>
            <a href="https://github.com/maximoamore2001/sistema_ventas.git" target="_blank" class="second__link">abrir enlace</a>
            <div class="image-card">
              <img src="./assets/images/abmventas.png" alt="Imagen 1">
              <div class="overlay">
                <div class="text">Sistema de ventas</div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title--projects">Proyecto &#8544;&#8544;&#8544;</h2>
        <div class="card_projects">
          <div class="second__info">
            <p class="second__time">enero 2023 - febrero 2023</p>
            <h3 class="second__job">ABM clientes</h3>
            <p class="second__description--projects">alta, baja y modificacion de un registro de clientes. realizado en
              Html, Css, Php, Bootstrap y Json.</p>
            <a href="https://github.com/maximoamore2001/abmclientes.git" target="_blank" class="second__link">abrir enlace</a>
            <div class="image-card">
              <img src="./assets/images/abmclientes.png" alt="Imagen 1">
              <div class="overlay">
                <div class="text">Alta, Baja y Modificación de clientes</div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title">Más Proyectos</h2>
        <div class="card_projects">
          <div class="second__info">
            <div>
              <h3 class="second__more--projects"><a href="https://github.com/maximoamore2001/Funenses-aberturas.git" target="_blank" class="projects__link">Fuenenses Aberturas</a> <i class="fa-solid arrow fa-up-right-from-square"></i></h3>
              <p class="second__description--more--projects">Landing page acerca de una empresa de aberturas,
                en la cual utilizé HTML, CSS y PHP.
            </div>
            <div>
              <h3 class="second__more--projects"><a href="https://github.com/maximoamore2001/Digitex.git" target="_blank" class="projects__link">Digitex</a> <i class="fa-solid arrow fa-up-right-from-square"></i></h3>
              <p class="second__description--more--projects">Sitio web sobre la creación de páginas web
                personalizadas y desarrollos en Wordpress.
            </div>
            <div>
              <h3 class="second__more--projects"><a href="https://github.com/maximoamore2001/Portfolio-m-ximo-amore.git" target="_blank" class="projects__link">Portfolio - 2024</a> <i class="fa-solid arrow fa-up-right-from-square"></i></h3>
              <p class="second__description--more--projects">Este mismo portfolio, creado en 2024 donde utilizé HTML,
                JAVASCRYPT, CSS Y PHP.
            </div>
            <div>
              <h3 class="second__more--projects"><a href="https://github.com/maximoamore2001/prottech.git" target="_blank" class="projects__link">Prottech Mantenimientos</a> <i class="fa-solid arrow fa-up-right-from-square"></i></h3>
              <p class="second__description--more--projects">Empresa de mantenimientos de galpones industriales,
                donde usé HTML, CSS, PHP Y JAVASCRYPT.
            </div>
          </div>
        </div>
      </article>


      <article class="card card--third">
        <h2 class="card__title">Sobre mí</h2>
        <div class="third">
          <ul class="third__about-me">
            <h3 class="third__subtitle">Habilidades:</h3>
            <li>
              <h5><i class="fa-solid fa-image"></i> &nbsp;Editor de videos y fotografías</h5>
            </li>
            <li>
              <h5><i class="fa-solid fa-microchip"></i> &nbsp;Ensamblado de hardware</h5>
            </li>
            <li>
              <h5><i class="fa-brands fa-unity"></i> &nbsp;Desarrollo en Wordpress</h5>
            </li>
            <h3 class="third__subtitle">Hobbies:</h3>
            <li>
              <h5><i class="fa-regular fa-futbol"></i> &nbsp;Ejercicio físico y Fútbol</h5>
            </li>
            <li>
              <h5><i class="fa-solid fa-book"></i> &nbsp;Lectura de libros</h5>
            </li>
            <li>
              <h5><i class="fa-solid fa-earth-americas"></i> &nbsp;Astronomía y Geografía</h5>
            </li>
          </ul>

        </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title card__title--contacto">Contacto</h2>
        <div class="card__form">
          <div class="form__container">
            <form class="form" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="textarea">Cómo puedo ayudarte?</label>
                <textarea name="texto" id="texto" rows="10" cols="50" required></textarea>
              </div>
              <button class="form-submit-btn" type="submit">Submit</button>
            </form>
            <?php if (isset($msg)) {
              echo $msg;
            } ?>
          </div>
        </div>
        </div>
      </article>




    </section>

  </main>

  <script src="js/scripts.js"></script>
</body>

</html>