﻿<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Ubuntu:300,300i,400,500" rel="stylesheet">
        <link href="css/ihover.css" rel="stylesheet">
        <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
        <link  rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
        <link href="css/jquery-ui.theme.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/ionicons.css">
        <link rel="apple-touch-icon" sizes="152x152" href="fav-icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="fav-icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="fav-icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="fav-icons/manifest.json">
        <link rel="mask-icon" href="fav-icons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" type="text/css" href="css/styleSpanish.css">
        <link rel="stylesheet" type="text/css" href="css/querysSpanish.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Language Ambassadors</title>
    </head>
    <body>
        <div id="non-dynamic">
            <?php
            if($_GET['tsuccess'] == 1 || $_GET['isuccess'] == 1 || $_GET['tersuccess'] == 1){
                echo " <div class=\"opacityOuter\">
                    <div class=\"generalSuccess alert alert-success alert-dismissable\">
                      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                      <strong>Su mensaje ha sido enviado!</strong>
                    </div>
                </div>";  
            }
            if($_GET['tsuccess'] == -1 || $_GET['isuccess'] == -1 || $_GET['tersuccess'] == -1){
                echo " <div class=\"opacityOuter\">
                    <div class=\"generalSuccess alert alert-danger alert-dismissable\">
                      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                      <strong>Su mensaje no ha podido ser enviado!</strong>
                    </div>
                </div>";
            }
            ?>
        </div>
       <div id="wrapper">
            <div id="sidebar-wrapper">
                <div class="sidebar-nav">
                    <a class="js--close_general"><i class="ion-close-round close_quote"></i></a>
                    <div class="container-fluid"> 
                        <h1>Cotización</h1>
                        <div id="tabsDiv">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Traducción</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Interpretación</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Terminología</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="container container-form">
                                        <form method="post" action="php/phpMailerForms/translationMailerV2.php" id="translation" enctype="multipart/form-data">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">Nombre y Apellido</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Teléfono</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="subject_div">
                                                 <label class="formLabel" for="subject">Tema</label>
                                                <input type="text" name="subject" id="subject" maxlength="30"  required>
                                           </div>
                                           <div class="source_div">
                                                <label class="formLabel" for="source">Idioma de partida</label>
                                                <input type="text" name="source" id="source" maxlength="40" required>
                                            </div>
                                            <div class="target_div">
                                                <label class="formLabel" for="target">Idioma de llegada</label>
                                                <input type="text" name="target" id="target" >
                                            </div>
                                            <div class="file_div">
                                                <label class="formLabel">Archivo</label>
                                                <input type="file" name="file">
                                            </div>
                                            <div class="moreInfo_div">
                                                <label class="formLabel">Comentarios</label>
                                                <textarea name="comments"></textarea> 
                                            </div>
                                            <div class="submitBtnDiv">
                                                <input id="translationSubmitBtn" class="submitQuoteBtn" type="submit" value="Enviar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="container container-form">
                                        <form method="post" action="php/phpMailerForms/interpretationMailer.php" id="interpretation">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">Nombre y Apellido</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Teléfono</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="interp_type_div">
                                                <input id="consec" type="radio" name="interpType" value="consecutive"><span class="formLabel interp_span">Consecutiva</span>
                                                <input id="simul" type="radio" name="interpType" value="simultaneous"><span class="formLabel interp_span">Simultánea</span>
                                                <input id="court" type="radio" name="interpType" value="conference"><span class="formLabel interp_span">Legal</span>
                                            </div>
                                            <div class="interp_subject_div">
                                                 <label class="formLabel" for="interp_subject">Tema</label>
                                                <input type="text" name="interp_subject" id="interp_subject" maxlength="30" required>
                                           </div>
                                           <div class="interp_language_div">
                                                <label class="formLabel" for="language_pairs">Idiomas</label>
                                                <input type="text" name="language_pairs" id="language_pairs" maxlength="40" required>
                                            </div>
                                            <div class="interp_location_div">
                                                <label class="formLabel" for="location">Ubicación</label>
                                                <input type="text" name="location" id="location">
                                            </div>
                                            <div id="cDate" class="interp_date_div">
                                                <label class="formLabel" >Fecha</label>
                                                <input type="date" name="date">
                                            </div>
                                            <div class="interp_date_div js-date-invisible sDate">
                                                <label class="formLabel" >Fecha de Inicio</label>
                                                <input type="date" name="startingDate">
                                            </div>
                                            <div class="interp_date_div js-date-invisible sDate">
                                                <label class="formLabel" >Fecha de Culminación</label>
                                                <input type="date" name="endingDate">
                                            </div>
                                            <div class="moreInfo_div">
                                                <label class="formLabel">Comentarios</label>
                                                <textarea name="comments"></textarea> 
                                            </div>
                                            <div class="submitBtnDiv">
                                                <input id="interpretationSubmitBtn" class="submitQuoteBtn" type="submit" value="Enviar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="container container-form">
                                        <form method="post" id="terminology" action="php/phpMailerForms/terminologyMailer.php">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">Nombre y Apellido</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Telefono</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="term_div">
                                                <label class="formLabel">Proporcione una breve descripción de sus necesidades terminológicas:</label>
                                                <textarea name="terminology" cols="60" rows="7"></textarea> 
                                            </div>
                                            <div class="submitBtnDiv">
                                                <input id="terminologySubmitBtn" class="submitQuoteBtn" type="submit" value="Enviar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rowM">
                <a  rel="mobileNavbar" class="mobile_nav_icon"><i class="ion-android-menu"></i></a>
                <ul class="navbar">
                    <li><a href="#" class="js--nav-home">Inicio</a></li>
                    <li><a  class="js--nav-services" href="#" >Servicios</a></li>
                    <li><a  class="js--nav-management" href="#">Gerencia</a></li>
                    <li><a href="#" class="js--nav-contact">Contáctenos</a></li>
                    <li><a class="nav_quote_btn js--nav-quote">Cotización</a></li>
                </ul>
            
                <ul class="mobileNavbar">
                    <li><a href="#" class="js--nav-home">Inicio</a></li>
                    <li><a  class="js--nav-services" href="#" >Servicios</a></li>
                    <li><a  class="js--nav-management" href="#">Gerencia</a></li>
                    <li><a href="#" class="js--nav-contact">Contáctenos</a></li>
                    <li><a class="nav_quote_btn js--nav-quote">Cotización</a></li>
                </ul>
            
            <div class="needHelp_div">
                <h3>¿Necesita Ayuda?</h3>
                <p>1-832-606-9729</p>
                <img class="logoSmall" src="images/logo%20(1).png" alt="L.A. logo">
                <img class="logoLarge" src="images/logoQualityLong.png" alt="L.A logo large">
            </div>
        </div>
        <header class="mainmsg js--home">
            <div class="wrap">
                <h1>Language<span class="ambassadors">Ambassadors <span class="llc">LLC</span></span></h1>
                <div class="typed_div">
                    <span class="typed"></span>
                </div>
            </div>
        </header>
        <section class="servicesCont js--services">
            <div class="container services">
                <h2>Servicios</h2>
                <p>Language Ambassadors, LLC cuenta con la colaboración de un selecto grupo de experimentados profesionales que harán que sus productos y servicios hablen como locales el idioma que usted necesita.</p>
            </div>
            <div class="container serviceCol">
                <div class="col-sm-4 ts">
                    <i class="ion-ios-compose-outline"></i>
                    <h3>Servicios de Traducción</h3>
                    <p class="hyphenate">Ofrecemos servicios de traducción en inglés, italiano, español, francés y portugués, con la colaboración de excelentes traductores, altamente calificados, quienes traducen solo a su idioma materno.</p>
                    <div class="service_info_div">
                        <a class="info js--info-translation">Información</a>
                    </div>
                </div>
                <div class="col-sm-4 is">
                    <i class="ion-ios-people-outline"></i>
                    <h3>Servicios de Interpretación</h3>
                    <p class="hyphenate">Interpretación consecutiva para declaraciones juradas, juicios, pequeñas reuniones, ruedas de prensa; Simultánea para seminarios, conferencias; Enlace para presentaciones, primeros encuentros, auditorías… Y mucho más.</p>   <!-- TEXT TO BE REVISED -->
                    <div class="service_info_div">
                        <a class="info js--info-interpretation">Información</a>
                    </div>
                </div>
                <div class="col-sm-4 ter">
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h3 class="service_col_termTitle">Terminología</h3>
                    <p>Language Ambassadors es una de las pocas empresas de traducción e interpretación que ofrece servicios para ayudarle a manejar recursos terminológicos para fines específicos.</p>
                </div>
            </div>
        </section>
       <!-- <section class="wrap_2 js--translation-service"> -->
            <section class="container translation js--translation-service">
                <h3>Servicios de Traducción</h3>
                <img src="css/images/Translation-100.png">
                <p class="after">Nos especializamos en documentos legales, técnicos y médicos, entregando un producto final impecable en contenido y presentación, siempre a tiempo y preservando en todo momento la confidencialidad de los contenidos. Si está en el negocio del petróleo o del gas, sin duda somos la empresa que está buscando: contamos con traductores que por más de 15 años han trabajado en este campo. También realizamos trabajos urgentes, adaptándonos a sus fechas de entrega, sin menoscabo de la calidad, permitiéndole alcanzar sus objetivos comerciales. Las traducciones legales se pueden entregar acompañadas de su correspondiente Certificado de traducción, y notariadas en caso de que se requiera. Estamos inscritos en el Consulado General de Italia en Houston y en Caracas - Venezuela</p>
            </section>
       <!-- </section>  -->
            <section class="container interpretation js--interpretation-service">
                <h3>Servicios de Interpretación</h3>
                <div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Interpretación Consecutiva</h4>
                        <img src="css/images/Edit%20Property-50.png" class="paper">
                        <p class="consecInt">Es la modalidad preferida para el entorno legal, médico y algunas reuniones de negocios. Language Ambassadors confía esta tarea solamente a inérpretes experimentados y debidamente certificados. En un ambiente de trabajo bilingüe es importante garantizar una comunicación adecuada y eficiente. Nuestros intérpretes le pueden ayudar a olvidarse de las barreras lingüísticas y culturales para que la información fluya sin sobresaltos.</p>
                    </div>
                    <div class="col-sm-6">
                        <h4>Interpretación Simultánea</h4>
                        <img src="css/images/Assistant-50.png" class="headset">
                        <p class="simulInt">Esta modalidad de interpretación es sin duda la elección correcta para conferencias, convenciones, seminarios, talleres y algunos entornos legales. El número de intérpretes y de idiomas dependen de las características de cada reunión. A su evento solamente se asignarán profesionales con un sólido conocimiento del tema específico y años de probada experiencia. También podemos proporcionarle los equipos de interpretación, si los necesita.</p>
                    </div>
                </div>
            </section>
        <section class="management js--management">
            <div class="management_container">
                <h2>Nuestro Experto en Language Ambassador</h2>
                <div class="profile-p">
                    <img src="images/perfil1aa.jpg" class="profile">
                    <p><span class="rosannaName">Rosanna Andreoli</span> ha sido traductora e intérprete simultánea y consecutiva desde 1985, habiendo trabajado para numerosas empresas e instituciones en Venezuela, el Caribe y Europa, tanto en el sector público como privado, en sus áreas de especialización: petróleo y gas, medicina, ciencias de la salud y diplomacia. Rosanna es intérprete de tribunales con licencia de Texas y traductor certificado ATA de inglés a español. Tiene una licenciatura en traducción e interpretación de la Universidad Central de Venezuela en Caracas y una maestría en traducción especializada inglés – italiano de la Universidad de Pisa – Italia. A lo largo de los años ha asistido a numerosos cursos de capacitación profesional y educación continua, en áreas como salud, traducción especializada y herramientas para la traducción asistida por computadora. Recientemente, ha culminado un Programa de capacitación como intérprete en ambiente hospitalario, un curso sobre Terminología clínica, uno sobre Terminología penal y uno de Introducción a conceptos constitucionales clave y casos de la Corte Suprema de los Estados Unidos. Rosanna cuenta con una sólida experiencia en traducción e interpretación en el campo político/diplomático, habiendo trabajado para el Consulado y Embajada de Italia en Caracas por más de 20 años, en especial para delegaciones de alto nivel, como la visita del Presidente de Italia. Es intérprete público español-italiano con una dilatada experiencia en la traducción de documentos legales e interpretación en los juzgados y en el Tribunal Supremo de Justicia de Venezuela. Ha sido docente de traducción legal y técnica, y de interpretación simultánea y consecutiva en la Universidad Central de Venezuela. <span class="management_more"><i class="ion-plus-round"></i> más</span>
                    </p>
                    <div id="moreInfo">
                        <ul>
                            <li>3er Congreso Internacional de Derecho Laboral y Políticas de Asistencia Social</li>
                            <li>V Cumbre de las Américas</li>
                            <li>XLII Congreso Venezolano de Cardiología</li>
                            <li>VIII Congreso Venezolano de Hipertensión</li>
                            <li>Propiedades físico-química de los hidrocarburos y cortes de crudos</li>
                            <li>Visita oficial del Ministro de Infraestructura de Italia, On. Matteoli</li>
                            <li>Principios económicos internacionales de la refinación</li>
                            <li>Máquinas rotativas en la industria petrolera: Compresores y turbinas</li>
                            <li>Panorama de la economía global y los mercados financieros</li>
                            <li>Visita oficial del Ministro de Relaciones Exteriores de Italia, On. Franco Frattini</li>
                            <li>Visita oficial del Secretario General de Interpol, Ronald Noble</li>
                            <li>II Cumbre de la Comunidad de Estados Latinoamericanos y del Caribe</li>
                            <li>Conferencia de Ingeniería Petrolera de América Latina y el Caribe &amp; SPE (LACPEC)</li>
                            <li>II Congreso Latinoamericano de Crudo Pesado</li>
                            <li>XII Congreso Nacional de Medicina física y rehabilitación</li>
                        </ul>
                    </div>
                    
                    <h4 class="organizations_title">Miembro de:</h4>
                    <div class="logos">
                        <img src="css/images/fit_logo.jpg" class="fit_logo" alt="FIT logo" title="Federación Internacional de Traductores (FIT)">
                        <img src="css/images/Logo_320x240_ATA.png" class="ata_logo" alt="ATA logo" title="Asociación de Traductores de los Estados Unidos(ATA)">
                        <img src="css/images/NAJIT-MEMBER-NEW-LOGO2017.jpg" class="najit_logo" alt="najit logo" title="Asociación Nacional de Intérpretes y Traductores Judiciales (NAJIT)">
                        <img src="css/images/HITA.png" class="hita_logo" alt="hita logo" title="Asociación de Intérpretes y Traductores de Houston (HITA)">
                        <img src="css/images/conalti.png" class="conalti_logo" alt="conalti logo" title="Colegio Nacional de Traductores e Intérpretes (CONALTI) Venezuela"> 
                        <img src="css/images/tajitlogo.png" class="tajit_logo" alt="tajit logo" title="Texas Association of Judiciary Interpreters and Translators (TAJIT)">
                    </div>
                </div>
            </div>
        </section>
        <section class="contact js--contact">
            <div class="wrap_4">
                    <div class="map"></div>
                    <div class="contact_div">
                        <div class="form_title">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Contáctenos</h3>
                        </div>    
                       <form method="post" id="contact" action="php/phpMailerForms/contactMailer.php">
                            <fieldset class="contact_fieldset">
                                <div class="contact_name_div">
                                    <label for="name">Nombre y Apellido</label>
                                    <input type="text" name="name" maxlength="40" required>
                                </div>
                                <div class="contact_email_div">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="contact_subject_div">
                                    <label for="subject">Tema</label>
                                    <input type="text" name="subject">
                                </div>
                                <div class="contact_message_div">
                                    <label for="message">Mensaje</label>
                                    <textarea name="message" cols="25" rows="5"></textarea>
                                </div>
                                <?php
                                    if($_GET['csuccess'] == 1){
                                        echo "<div class=\"alert alert-success alert-dismissable\">
                                              <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                              <strong>Su mensaje ha sido enviado!</strong>
                                            </div>";  
                                    }
                                    if($_GET['csuccess'] == -1){
                                        echo "<div class=\"alert alert-danger alert-dismissable\">
                                              <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                              <strong>Su mensaje no ha podido ser enviado!</strong>
                                            </div>";
                                    }
                                ?>
                                <input class="submit_contact" type="submit" name="submit" value="Enviar"> 
                            </fieldset>
                        </form>
                    </div>
            </div>
        </section>
        <footer>
            <div class="backTop_div js--backTop">
                <div>
                    <span>De vuelta al inicio</span>
                </div>
            </div>
            <div class="footer_inner">
                <div class="footer_logo_div">
                    <img src="images/logoQuality.png" alt="L.A logo">
                </div>
                <div class="btn-group dropup">
                  <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-globe"></i>Español</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="index.php">English</a></li>
                  </ul>
                </div>
                <h4>&#169; Language Ambassadors, LLC</h4>
            </div>
        </footer>
        
        <!--         AIzaSyBOfedoN7izjpStKRlEwnO5UpINSB5uJPw  */ -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOfedoN7izjpStKRlEwnO5UpINSB5uJPw&callback=initMap"></script>
        <script src="JS/Hyphenator-5.1.0/Hyphenator.js" type="text/javascript"></script>
        <script src="JS/gmaps.js"></script>
        <script src="JS/typed.js"></script>
        <script src="JS/jquery.waypoints.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="JS/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="JS/scriptSpanish.js"></script>
    </body>
</html>



