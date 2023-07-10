<?php

   function diffdate($ini, $end)
   {
      $yearini  = (int)\substr($ini, 0, 4);
      $monthini = (float)\substr($ini, 4, 2);
      $monthini = $monthini * 10/12;

      $yearend  = (int)\substr($end, 0, 4);
      $monthend = (float)\substr($end, 4, 2);
      $monthend = $monthend * 10/12;

      $yeardiff  = $yearend - $yearini;
      $monthdiff = $monthend - $monthini;
      if ($monthdiff < 0.0) {
         $monthdiff = 10.0 + $monthdiff;
         $yeardiff--;
      }
      $monthdiff = (int)round($monthdiff * 12/10);

      $yearsliteral = ($yeardiff === 1 ? 'año' : 'años');
      $monthsliteral = ($monthdiff === 1 ? 'mes' : 'meses');

      if ($yeardiff) {
         if ($monthdiff) {
            return $yeardiff . ' ' . $yearsliteral . ' ' . 'y' . ' ' . $monthdiff . ' ' . $monthsliteral;
         } else {
            return $yeardiff . ' ' . $yearsliteral;
         }
      } else {
         return $monthdiff . ' ' . $monthsliteral;
      }
   }

?>
<html lang="es">

   <head>

      <!-- METAS -->

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- FAVICON -->

      <link rel="icon" href="images/favicon-richi.png" type="image/png" />

      <!-- TITLE -->

      <title>CV Ricardo Ruiz Martínez</title>

      <!-- CSS -->

      <link rel="stylesheet" href="css/styles.css" />

   </head>

   <body>

      <main>

         <div class="section photo">
            <img class="photo" src="images/photo-w500.jpg" alt="Photo" />
         </div>

         <div class="section name">
            <h1>
               <big>CV Ricardo Ruiz Martínez</big>
            </h1>
            <h2>
               Richi RM<br />
               PHP developer
            </h2>
            <p>
               <small>Última actualización de este CV:</small><br />
               <small>2023-07-10-15-11-34-pm-cest</small>
            </p>
         </div>

         <div class="section">
            <h1>Presentación</h1>
            ¡Hola!<br />
            <br />
            Soy un desarrollador de software especializado en PHP puro,
            actualmente teletrabajando desde Córdoba ciudad (España) como
            empleado a jornada completa para la empresa
            <a target="_blank" href="https://nateevo.com">NATEEVO</a>.<br />
            <br />
            Llevo <?= diffdate('199711', \date('Ym')) ?> (desde 1997)
            entretenido con el software, la programación y el desarrollo en
            general 👨‍💻<br />
            <br />
            Actualmente estoy también en vías de montar mi propia empresa de
            software 🚀
         </div>

         <div class="section">
            <h1>Lemas</h1>
            <ul>
               <li>
                  <i>
                     "Do what you love and success will follow.
                     Passion is the fuel behind a successful career."
                  </i><br />
                  &nbsp;<a target="_blank" href="https://en.wikipedia.org/wiki/Meg_Whitman">Meg Whitman</a>
               </li>
               <li>
                  <i>
                     "Patience & Perseverance."
                  </i><br />
                  &nbsp;<a href="#">Richi RM</a>
               </li>
            </ul>
         </div>

         <div class="section">
            <h1>Formación</h1>
            <table cellpadding="10">
               <tbody>
                  <tr>
                     <td valign="top">
                        <big><big><big><big>🎓</big></big></big></big>
                     </td>
                     <td>
                        <b>Ingeniero Técnico en Informática de Sistemas</b>
                        por la
                        <a target="_blank" href="https://www.uco.es/eps">Escuela
                        Politécnica Superior de la Universidad de Córdoba</a>.
                        Septiembre 2003 - Octubre 2008 (<?= diffdate('200309', '200810') ?>)
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        <big><big><big><big>🎓</big></big></big></big>
                     </td>
                     <td>
                        Curso de <b>Symfony 4 Experto</b> impartido por
                        <a target="_blank" href="https://www.trainingit.es">Training IT</a>.
                        Noviembre 2018 - Diciembre 2018 (<?= diffdate('201811', '201812') ?>)
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>

         <div class="section">

            <h1>Experiencia trabajando para empresas</h1>

            <div class="experience current">
               <div class="position current">
                  PHP developer<br />
                  actualmente ⭐
               </div>
               <div>
                  <a target="_blank" href="https://nateevo.com">NATEEVO (Grupo VASS)</a><br />
                  <small>Empleado a jornada completa</small><br />
                  <small>Madrid, España, Septiembre 2015 - Actualidad (<?= diffdate('201509', \date('Ym')) ?>)</small><br />
                  <br />
                  Desarrollo de y colaboración en proyectos dockerizados usando
                  frameworks y CMSs basados en PHP.<br />
                  <br />
                  <b>PHP, MySQL, Drupal, WordPress, Symfony, Docker, git,
                  ChatGPT.</b><br />
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  Webapp Analyst
               </div>
               <div>
                  <a target="_blank" href="https://www.smsglb.com">Grupo SMS</a><br />
                  <small>Empleado a jornada completa</small><br />
                  <small>Madrid, España, Noviembre 2014 - Abril 2015 (<?= diffdate('201411', '201504') ?>)</small><br />
                  <br />
                  Diseño de la arquitectura de una aplicación web para gestionar
                  las líneas telefónicas y de datos de Telefónica en los
                  colegios y hospitales públicos de la Comunidad de Madrid.
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  Symfony 2 Developer
               </div>
               <div>
                  <a target="_blank" href="https://gruposermicro.com">Grupo SERMICRO</a><br />
                  <small>Empleado a jornada completa</small><br />
                  <small>Madrid, España, Junio 2013 - Julio 2014 (<?= diffdate('201306', '201407') ?>)</small><br />
                  <br />
                  Ayuda en la creación de un dashboard, construido sobre Symfony 2, para medir
                  las ventas de teléfonos móviles en todas las tiendas de Telecor.<br />
                  <br />
                  <b>PHP, MySQL, Symfony 2, git.</b>
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  Zend Framework 1 Developer
               </div>
               <div>
                  <a target="_blank" href="https://www.bilbomatica.es">Bilbomática</a><br />
                  <small>Empleado a jornada completa</small><br />
                  <small>Madrid, España, Junio 2010 - Abril 2013 (<?= diffdate('201006', '201304') ?>)</small><br />
                  <br />
                  Corrección de bugs, desarrollo de evolutivos, usando Zend Framework 1 y
                  subversion, para el Ministerio de Hacienda y Administraciones Públicas.<br />
                  <br />
                  <b>PHP, MySQL, Zend Framework 1, subversion.</b>
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  PHP Developer
               </div>
               <div>
                  <a target="blank" href="https://www.uco.es/estudios/idep">
                  Universidad de Córdoba, Instituto de Estudios de Postgrado</a><br />
                  <small>Empleado en jornada de mañana</small><br />
                  <small>Córdoba, España, Junio 2006 - Abril 2010 (<?= diffdate('200606', '201004') ?>)</small><br />
                  <br />
                  Desarrollo de una aplicación web construida con PHP y MySQL
                  para que los profesores de la Universidad de Córdoba pudiesen
                  ofertar sus cursos extraacadémicos.<br />
                  <br />
                  <b>PHP, MySQL.</b>
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  ASP | C Developer
               </div>
               <div>
                  <a target="blank" href="https://www.infoindustrias.com">King Silver</a><br />
                  <small>Empleado en jornada de mañana</small><br />
                  <small>Córdoba, España, Junio 1998 - Junio 2003 (<?= diffdate('199806', '200306') ?>)</small><br />
                  <br />
                  Desarrollo de un portal web en lenguaje ASP y Microsoft Access
                  como base de datos, guía on-line de todas las empresas de
                  España. Construcción de recolectores de datos de Internet, en C.<br />
                  <br />
                  <b>ASP, C, Microsoft Access.</b>
               </div>
            </div>

            <div class="experience">
               <div class="position">
                  C Developer
               </div>
               <div>
                  <a target="blank" href="https://proasa.org">PROASA</a><br />
                  <small>Becario en jornada de mañana</small><br />
                  <small>Córdoba, España, Noviembre 1997 - Enero 1998 (<?= diffdate('199711', '199801') ?>)</small><br />
                  <br />
                  Programación de una calculadora gráfica en Borland Turbo C
                  para MS-DOS. Gestión de bases de datos Microsoft Access.<br />
                  <br />
                  <b>C, Microsoft Access.</b>
               </div>
            </div>

         </div>

         <div class="section">
            <h1>Un resumen de mi vida profesional</h1>
            <b>Me gustan los ordenadores y el software desde que era
            pequeño.</b> Mi "tito Manolín", hermano de mi padre, que trabajaba
            en Suiza 🇨🇭, nos regaló a mi familia, <b>allá por el año 1985</b>
            (hace <?= diffdate('198507', \date('Ym')) ?>), un
             <a target="_blank" href="https://en.wikipedia.org/wiki/Commodore_64">Commodore 64</a> 🖥️,
            ordenador que compró en ese país. Con este ordenador aprendí a
            programar en lenguaje BASIC. Posteriormente mi madre me compró un
            IBM PS / 1 - 286, con el que me inicié en la programación en
            ensamblador 80x86 y lenguaje C. Con los años cambié de PC y me
            compré un sobremesa "de esos clónicos", gracias a los ahorros que
            conseguí trabajando para la empresa King Silver, empresa con sede en
            Córdoba dedicada a promocionar en Internet a otras empresas. En King
            Silver ayudé en el desarrollo ASP y C del portal
            <a target="_blank" href="https://www.infoindustrias.com">Infoindustrias.com</a>,
            directorio on-line con todas las empresas de España clasificadas por
            actividad profesional, y ayudé construyendo recolectores de
            información de Internet (visitadores de webs y parseadores de texto
            construidos en lenguaje C).<br />
            <br />
            <b>En septiembre de 2003
            (hace <?= diffdate('200309', \date('Ym')) ?>) comencé la carrera de
            Ingeniero Técnico en Informática de Sistemas</b>; la estudié en la
            Escuela Politécnica Superior de la Universidad de Córdoba (UCO). Al
            terminarla, en octubre de 2008, decidí independizarme de casa de mi
            madre e irme a vivir con mi nuevo amigo, mi gatito "Chiquito" 🐱, a
            un apartamento en el barrio de Ciudad Jardín, cerca de mi trabajo en
            el Rectorado de la Universidad 🎓<br />
            <br />
            En la UCO tuve varios empleos: como becario en el Servicio de
            Gestión de Estudiantes, ayudando en el Servicio de Tratamiento de
            Imagen de la Facultad de Filosofía y Letras, también como becario en
            el Servicio de Informática, asignado como Ayudante de Operador de
            Centro de Cálculo de la Facultad de Medicina, y por último, en el
            Secretariado de Estudios Propios (SEP), entidad perteneciente al
            Instituto de Estudios de PostGrado de la Universidad (IdEP). En el
            SEP, ahora Secretariado de Formación Permanente (SFP) desarrollé una
            aplicación web, con PHP y MySQL, para que los profesores de la
            Universidad pudiesen dar de alta y gestionar sus cursos
            extraacadémicos.<br />
            <br />
            <b>En Mayo de 2010 (hace <?= diffdate('201005', \date('Ym')) ?>)
            decidí buscar un empleo a jornada completa en Madrid capital</b>,
            por lo que me trasladé allí. Durante los
            <?= diffdate('201005', '202104') ?> que he estado en Madrid (desde
            mayo de 2010 hasta marzo de 2021) he trabajado como desarrollador
            PHP para varias empresas: NATEEVO, Bilbomática, SERMICRO y Grupo
            SMS, siempre usando PHP como lenguaje de programación base, más
            frameworks y CMSs relacionados: Symfony, Zend Framework, Drupal,
            WordPress, etc.<br />
            <br />
            <b>Desde abril de 2021 (hace <?= diffdate('202104', \date('Ym')) ?>)
            teletrabajo desde Córdoba</b> para
            <a target="_blank" href="https://nateevo.com">NATEEVO</a>. Llevo
            <?= diffdate('201509', \date('Ym')) ?> en esta empresa TOP 🔝 del
            sector, perteneciente a la empresa matriz
            <a target="_blank" href="https://vasscompany.com">VASS</a>, y me
            encuentro a gusto en ella.<br />
         </div>

         <div class="section">
            <h1>Skills actuales</h1>
            <a target="_blank" href="https://fedoraproject.org">#Fedora</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://ubuntu.com">#Ubuntu</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.sublimetext.com">#SublimeText</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.sublimemerge.com">#SublimeMerge</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://git-scm.com">#git</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://es.wikipedia.org/wiki/DevOps">#DevOps</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.gnu.org/software/bash">#bash</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.nginx.com">#nginx</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.php.net/manual/en/install.fpm.php">#PHP-FPM</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.php.net">#PHP</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://symfony.com">#Symfony</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://mariadb.org">#MariaDB</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://html.spec.whatwg.org">#HTML5</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.w3.org/TR/2001/WD-css3-roadmap-20010523">#CSS3</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://inkscape.org">#Inkscape</a>&nbsp;&nbsp;&nbsp;
            <a target="_blank" href="https://www.gimp.org">#Gimp</a>&nbsp;&nbsp;&nbsp;
            <br />
            <br />
            Y algunas otras herramientas y lenguajes más 🖥️<br />
         </div>

         <div class="section">

            <h1>Más sobre mí</h1>

            <b>Nacimiento:</b> 👶<br />
            17 de enero de 1977 (46 primaveras), en Córdoba capital (Hospital Reina Sofía), España.<br />
            <br />

            <b>GitHub:</b><br />
            <a target="_blank" href="https://github.com/richi-rm">https://github.com/richi-rm</a><br />
            <br />

            <b>Facebook:</b><br />
            <a target="_blank" href="https://www.facebook.com/richi.ruiz.martinez.1977">@richi.ruiz.martinez.1977</a><br />
            <br />

            <b>Email personal y de trabajo:</b><br />
            <a target="_blank" href="mailto:richiruizmartinez@gmail.com">📩</a> <a target="_blank" href="mailto:richiruizmartinez@gmail.com">richiruizmartinez@gmail.com</a><br />
            <br />

            <b>Móvil personal y de trabajo:</b><br />
            <a target="_blank" href="tel:744653072">📱</a> <a target="_blank" href="https://wa.me/34744653072"><img align="absmiddle" src="images/whatsapp-w20.png" width="20" alt="WhatsApp" /></a> <a target="_blank" href="tel:744653072">+34 744 653 072</a><br />
            <br />

            <b>Música que me gusta:</b> 🎧<br />
            Boris Brejcha, The Prodigy<br />
            <br />

            <b>Medio de transporte que uso:</b><br />
            Autobús 🚌, metro 🚇, tren 🚆, barco 🚢, avión ✈️, ovni 🛸, lo que
            sea con tal de llegar a mi destino. Permiso de conducir de clase B,
            pero sin coche actualmente.<br />
            <br />

            <b>Vivo en:</b><br />
            Calle Conquistador Ordoño Álvarez, 6, 1, 1, 2 🏡,
            Barrio de la Fuensanta, 14010, Córdoba, Córdoba, España 🇪🇸
            Vivo actualmente con mi madre y mi hermano en la casa familiar.<br />
            <br />

            <b>Discapacidad:</b><br />
            Sufro de trastorno bipolar, un problema de salud mental que te hace
            alternar entre períodos de euforia y períodos depresivos. Estoy a la
            espera de que me valore un Tribunal Médico, para obtener el
            Certificado de Discapacidad.

         </div>

      </main>

   </body>

</html>
