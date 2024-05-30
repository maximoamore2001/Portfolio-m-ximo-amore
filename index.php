

<?php

//Envío de email

if (isset($_POST["email"]) && isset($_POST["texto"])) {

  $email = ($_POST["email"]);
  $texto = ($_POST["texto"]);

  $receptor = 'maxiamorerc88@gmail.com';
  $asunto = 'Email';

  $cuerpo = '

        <html>
            <head>
            <title>Prueba de correo</title>
            </head>
            <body>
            <h1 style="color: black;" >Email de: <br> ' . $email . '</h1>
            <h2 style="color: grey;"> mensaje: <br> ' . $texto . ' </h2>
            </body>
        </html>
        ';

  //para el envio
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "content-type: text/html; charset=utf-8\r\n";

  //direccion del remitente

  $headers .= "From: $email\r\n";

  //ruta del mensaje desde origen a destino
  $headers .= "Return-path: $receptor\r\n";

  mail($receptor, $asunto, $cuerpo, $headers);

  $msg =  " <p class='form__sendmail' style='background-color: var(--bg-card-color); text-align: center; border: solid 2px var(--primary-color); width: 100vw; font-size: 1.1em; padding: 1em; color: var(--primary-color);' >  Gracias por contactarme! <br> Pronto me pondré en contacto contigo.  </p>";
} else {
  echo "";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css" />
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
      <!--
      -Proximamente será incluida la siguiente sección de cambio de idioma-

      <div class="flags__item" data-language="es">
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
  <?php if (isset($msg)) {
    echo $msg;
  } //ejecuta el mensaje 
  ?>
  <main class="main">
    <section class="column column--left">
      <!-- Tarejeta del perfil -->
      <article class="card card--profile">
        <div class="card__image-container">
          <img src="./assets/images/FullSizeRender.jpg" alt="">
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
          <h3 class="card__h3">Empleo:</h3>
          <p class="card__text">Estoy buscando un trabajo de manera remota en lo posible,
            donde pueda seguir trabajando en proyectos, tanto en front-end como en back-end. <br>
            Además me encuentro aprendiendo Java para seguir expandiendo mis conocimientos en el desarrollo de software.
          </p>


        </div>
        <div class="card__btns">
          <a href="https://github.com/maximoamore2001/maximoamore2001" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-github"></i></button></a>
          <a href="https://www.instagram.com/maxi.amore?igsh=bmRzYTR1ZjBzaTdr&utm_source=qr" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-instagram"></i></button></a>
          <a href="#"><button class="btn__social" type="submit" target="_blank"><i class="fa-brands fa-linkedin"></i></button></a>
          <a href="https://wa.me/3412297991" target="_blank"><button class="btn__social" type="submit"><i class="fa-brands fa-whatsapp"></i></button></a>
        </div>
      </article>

    </section>

    <section class="column column--right">
      <article class="card">
        <h2 class="card__title">Habilidades</h2>
        <small>Tiempo Invertido</small>
        <div class="skills">
          <div class="skills__header">
            <span class="skills__start-level">0</span>
            <span class="skills__start-level">100</span>
          </div>
          <div class="skills">
            <div class="skills__item">
              <p class="skills__tech">CSS</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">JAVASCRIPT</p>
              <div class="skills__bar skills__bar--50"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">PHP</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">LARAVEL</p>
              <div class="skills__bar skills__bar--90"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">JQUERY</p>
              <div class="skills__bar skills__bar--40"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">GIT</p>
              <div class="skills__bar skills__bar--80"></div>
            </div>
            <div class="skills__item">
              <p class="skills__tech">MYSQL</p>
              <div class="skills__bar skills__bar--60"></div>
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
              Mi experiencia de trabajo se destaca en mis proyectos como desarrollador, donde empleo todos mis
              conocimientos aprendidos.
              <br> Realizando un sistema de ventas y una tienda online completamente creada por mí. <br> Por el momento
              no cuento con experiencia en una empresa.
            </p>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title">Idiomas</h2>
        <small>Castellano - Inglés</small>
        <div class="second">
          <div class="second__info">
            <p class="second__time">Feb 2017 - Ahora</p>
            <h3 class="second__job">Nivel actual B1</h3>
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
            <p class="second__time">nov 2023 - dic 2023</p>
            <h3 class="second__job">Restaurante <i style="color: var(--primary-color); font-size: 16px;" class="fa-solid fa-star"></i></h3>
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
            <p class="second__time">ene 2024 - feb 2024</p>
            <h3 class="second__job">Inmobiliaria</h3>
            <p class="second__description--projects">sistema autogestionable de ventas inmobiliarias con Php, Laravel, Js, Ajax, Jquery, Mysql y Bootstrap.</p>
            <a href="https://github.com/maximoamore2001/inmobiliaria" target="_blank" class="second__link">abrir enlace</a>
            <div class="image-card">
              <img src="./files/Captura.png" alt="Imagen 1">
              <div class="overlay">
                <div class="text">Inmobiliaria Terranova</div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="card card--second">
        <h2 class="card__title--projects">Proyecto &#8544;&#8544;&#8544;</h2>
        <div class="card_projects">
          <div class="second__info">
            <p class="second__time">dic 2023 - ene 2024</p>
            <h3 class="second__job">Cafetería</h3>
            <p class="second__description--projects">Alta, Baja y Modificación de productos. realizado en Php, Laravel, Js, Mysql y Bootstrap.</p>
            <a href="https://github.com/maximoamore2001/cafeteria" target="_blank" class="second__link">abrir enlace</a>
            <div class="image-card">
              <img src="./assets/images/cafe.PNG" alt="Imagen 1">
              <div class="overlay">
                <div class="text">Café Veneto</div>
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
            <h3 class="third__subtitle">Hobbies & habilidades:</h3>
            <li>
              <h5><i class="fa-solid fa-image"></i> &nbsp;Editor de videos y fotografías</h5>
            </li>
            <li>
              <h5><i class="fa-solid fa-microchip"></i> &nbsp;Ensamblado de hardware</h5>
            </li>
            <li>
              <h5><i class="fa-brands fa-wordpress"></i></i> &nbsp;Desarrollo en Wordpress</h5>
            </li>
            <li>
              <h5><i class="fa-regular fa-futbol"></i> &nbsp;Ejercicio físico y Fútbol</h5>
            </li>
            <li>
              <h5><i class="fa-solid fa-book"></i> &nbsp;Lectura de libros</h5>
            </li>
            <li>
              <h5><i class="fa-brands fa-unity"></i> &nbsp;Modelado 3D</h5>
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
                <label for="email">tu correo electrónico</label>
                <input style="color: var(--text-color);" type="text" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="textarea">Cómo puedo ayudarte?</label>
                <textarea name="texto" id="texto" rows="10" cols="50" required></textarea>
              </div>
              <div style="display: flex;"><button class="form-submit-btn" type="submit">Enviar</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </article> 
    </section>

  </main>
  <script src="js/scripts.js"></script>
</body>

</html>