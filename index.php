<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/querys.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Language Ambassadors</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <div class="sidebar-nav">
                    <a class="js--close_general"><i class="ion-close-round close_quote"></i></a>
                    <div class="container-fluid"> 
                        <h1>Get a Quote</h1>
                        <div id="tabsDiv">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Translation</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Interpretation</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Terminology</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content" id="form">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="container container-form">
                                        <form method="post" action="php/phpMailerForms/translationMailerV2.php" id="translation" enctype="multipart/form-data">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">First &amp; Last Name</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Phone Number</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="subject_div">
                                                 <label class="formLabel" for="subject">Subject Matter</label>
                                                <input type="text" name="subject" id="subject" maxlength="30"  required>
                                           </div>
                                           <div class="source_div">
                                                <label class="formLabel" for="source">Source Language</label>
                                                <input type="text" name="source" id="source" maxlength="40" required>
                                            </div>
                                            <div class="target_div">
                                                <label class="formLabel" for="target">Target Language</label>
                                                <input type="text" name="target" id="target" >
                                            </div>
                                            <div class="file_div">
                                                <label class="formLabel">Choose File</label>
                                                <input type="file" name="file">
                                            </div>
                                            <div class="moreInfo_div">
                                                <label class="formLabel">Comments</label>
                                                <textarea name="comments"></textarea> 
                                            </div>

                                            <?php 
                                                if($_GET['tsuccess'] == 1){
                                                    echo "<div class=\"form-messages sucess\">Thank you! Your message has been sent.</div>";  
                                                }
                                                if($_GET['tsuccess'] == -1){
                                                    echo "<div class=\"form-messages error\">Something went wrong.</div> ";
                                                }
                                            ?>

                                            <div class="submitBtnDiv">
                                                <input id="translationSubmitBtn" class="submitQuoteBtn" type="submit" value="Get a Quote">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="container container-form">
                                        <form method="post" action="php/interpretationMailer.php" id="interpretation">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">First &amp; Last Name</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Phone Number</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="interp_type_div">
                                                <input id="consec" type="radio" name="interpType" value="consecutive"><span class="formLabel interp_span">Consecutive</span>
                                                <input id="simul" type="radio" name="interpType" value="simultaneous"><span class="formLabel interp_span">Simultaneous</span>
                                                <input id="court" type="radio" name="interpType" value="conference"><span class="formLabel interp_span">Court</span>
                                            </div>
                                            <div class="interp_subject_div">
                                                 <label class="formLabel" for="interp_subject">Subject Matter</label>
                                                <input type="text" name="interp_subject" id="interp_subject" maxlength="30" required>
                                           </div>
                                           <div class="interp_language_div">
                                                <label class="formLabel" for="language_pairs">Language Pairs</label>
                                                <input type="text" name="language_pairs" id="language_pairs" maxlength="40" required>
                                            </div>
                                            <div class="interp_location_div">
                                                <label class="formLabel" for="location">Location</label>
                                                <input type="text" name="location" id="location">
                                            </div>
                                            <div id="cDate" class="interp_date_div">
                                                <label class="formLabel" >Service Date</label>
                                                <input type="date" name="date">
                                            </div>
                                            <div class="interp_date_div js-date-invisible sDate">
                                                <label class="formLabel" >Starting Date</label>
                                                <input type="date" name="startingDate">
                                            </div>
                                            <div class="interp_date_div js-date-invisible sDate">
                                                <label class="formLabel" >Ending Date</label>
                                                <input type="date" name="endingDate">
                                            </div>
                                            <div class="moreInfo_div">
                                                <label class="formLabel">Comments</label>
                                                <textarea name="comments"></textarea> 
                                            </div>
                                            <?php 
                                                if($_GET['isuccess'] == 1){
                                                    echo "<div class=\"form-messages sucess\">Thank you! Your message has been sent.</div>";  
                                                }
                                                if($_GET['isuccess'] == -1){
                                                    echo "<div class=\"form-messages error\">Something went wrong.</div> ";
                                                }
                                            ?>
                                            <div class="submitBtnDiv">
                                                <input id="interpretationSubmitBtn" class="submitQuoteBtn" type="submit" value="Get a Quote">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="container container-form">
                                        <form method="post" id="terminology" action="php/terminologyMailer.php">
                                            <div class="quote_name_div">
                                                <label class="formLabel" for="name">First &amp; Last Name</label>
                                                <input type="text" name="name" id="name" maxlength="40" required>
                                            </div>
                                            <div class="quote_email_div">
                                                <label class="formLabel" for="email">Email</label>
                                                <input type="email" name="email" id="email" maxlength="40" required>
                                            </div>
                                            <div class="quote_number_div">
                                                <label class="formLabel" for="number">Phone Number</label>
                                                <input type="text" name="number" id="number">
                                            </div>
                                            <div class="lineDiv"></div>
                                            <div class="term_div">
                                                <label class="formLabel">Provide a brief description of your terminology needs:</label>
                                                <textarea name="terminology" cols="60" rows="7"></textarea> 
                                            </div>
                                            <?php 
                                                if($_GET['tersuccess'] == 1){
                                                    echo "<div class=\"form-messages sucess\">Thank you! Your message has been sent.</div>";  
                                                }
                                                if($_GET['tersuccess'] == -1){
                                                    echo "<div class=\"form-messages error\">Something went wrong.</div> ";
                                                }
                                            ?>
                                            <div class="submitBtnDiv">
                                                <input id="terminologySubmitBtn" class="submitQuoteBtn" type="submit" value="Get a Quote">
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
                    <li><a href="#" class="js--nav-home">Home</a></li>
                    <li><a  class="js--nav-services" href="#" >Services</a></li>
                    <li><a  class="js--nav-management" href="#">Management</a></li>
                    <li><a href="#" class="js--nav-contact">Contact Us</a></li>
                    <li><a class="nav_quote_btn js--nav-quote">Quote Request</a></li>
                </ul>
            
                <ul class="mobileNavbar">
                    <li><a href="#" class="js--nav-home">Home</a></li>
                    <li><a  class="js--nav-services" href="#" >Services</a></li>
                    <li><a  class="js--nav-management" href="#">Management</a></li>
                    <li><a href="#" class="js--nav-contact">Contact Us</a></li>
                    <li><a class="nav_quote_btn js--nav-quote">Quote Request</a></li>
                </ul>

            <div class="needHelp_div">
                <h3>Need Help?</h3>
                <p>1-832-606-9729</p>
                <img class="logoSmall" src="images/logo%20(1).png" alt="L.A. logo">
                <img class="logoLarge" src="images/logoQualityLong.png" alt="L.A logo large">
            </div>
        </div>
        <!-- header -->
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
                <h2>Services</h2>
                <p>Language Ambassadors, LLC works with a select group of seasoned professionals who will assist you in your multilingual communication needs.</p>
            </div>
            <div class="container serviceCol">
                <div class="col-sm-4 ts">
                    <i class="ion-ios-compose-outline"></i>
                    <h3>Translation Services</h3>
                    <p>We offer translation services in Italian, Spanish, French and Portuguese, using outstanding, highly qualified professional translators, all of whom work into their mother languages.</p>
                    <div class="service_info_div">
                        <a class="info js--info-translation">More Info</a>
                    </div>
                </div>
                <div class="col-sm-4 is">
                    <i class="ion-ios-people-outline"></i>
                    <h3>Interpretation Services</h3>
                    <p>Consecutive interpretation, for depositions, trials, small meeting, press conferences; Simultaneous interpretation, for seminars, conferences; Liason for introduction, presentation meetings, audits… And so much more.</p>   <!-- TEXT TO BE REVISED -->
                    <div class="service_info_div">
                        <a class="info js--info-interpretation">More Info</a>
                    </div>
                </div>
                <div class="col-sm-4 ter">
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h3 class="service_col_termTitle">Terminology</h3>
                    <p>Language Ambassadors is one of the few translation and interpretation companies that offers terminology services to help your company manage terminological resources for specific purposes.</p>
                </div>
            </div>
        </section>
            <section class="container translation js--translation-service">
                <h3>Translation Services</h3>
                <img src="css/images/Translation-100.png" alt="Translation Icon">
                <p class="disclousure">Translations are usually priced on a per-word basis. Minimum charges may apply for some projects.</p>
                <p class="after">We translate legal, technical, personal, and medical documents promptly, accurately, and confidentially. If you are in the oil &amp; gas business, this is your company; we rely on translators with over 15 years of experience in the field. We pride ourselves on providing great quality work always on time. We also accept rush jobs to help you accomplish urgent business deadlines. Official translations can be delivered with a Certification of Translation, and notarized if required. Registered at the Italian Consulate in Houston and in Caracas-Venezuela.</p>
            </section>
            <section class="container interpretation js--interpretation-service">
                <h3>Interpretation Services</h3>
                <p class="disclousure">Interpretations are usually priced on a per-hour or daily basis.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Consecutive Interpretation</h4>
                        <img src="css/images/Edit%20Property-50.png" alt="Consecutive Interpretation Icon" class="paper">
                        <p class="consecInt">The preferred type for legal, medical, and some business settings. Language Ambassadors entrusts this task only to seasoned and certified interpreters. In a bilingual working environment it is important to ensure proper and efficient communication. Our interpreters can help you overcome any language and cultural barrier for a seamless exchange of information.</p>
                    </div>
                    <div class="col-sm-6">
                        <h4>Simultaneous Interpretation</h4>
                        <img src="css/images/Assistant-50.png" alt="Simultaneous Interpretation Icon" class="headset">
                        <p class="simulInt">Simultaneous interpretation is the right choice for conferences, conventions, seminars, workshops, and some legal settings. The number of interpreters and languages vary according to the specifics of each meeting. Only professionals with solid knowledge of the topic at hand and years of proven experience will be assigned to your event. Necessary equipment can be supplied upon request.</p>
                    </div>
                </div>
            </section>
        <section class="management js--management">
            <div class="management_container">
                <h2>Our Language Ambassador Expert</h2>
                <div class="profile-p">
                    <img src="images/perfil1aa.jpg" alt="Rosanna Andreoli profile picture" class="profile">
                    <p><span class="rosannaName">Rosanna Andreoli</span> has been a free-lance professional translator and consecutive/ simultaneous interpreter since 1985. She has worked for numerous companies and institutions from Venezuela, the Caribbean        and Europe, both in the public and private sectors, in various areas specializing in oil &amp; gas, and medicine and healthcare.

                        She is a Texas-licensed Court Interpreter and an ATA-certified English to Spanish translator holding an undergraduate degree in Translation and Interpretation from the Universidad Central de Venezuela in Caracas and a Master’s Degree in Specialized English-Italian Translation from the University of Pisa – Italy. Besides attending several continuing education courses in areas such as health and healthcare, specialized translation, and Computer-Assisted Tools, she has recently completed a Healthcare Interpreter Training Program and a course on Clinical Terminology.

                        Rosanna has solid experience in political/diplomatic translation and interpretation, having worked for the Italian Embassy and Consulate in Caracas for over 20 years, especially for high-level Italian delegations. She is a Sworn Italian-Spanish Translator and has extensive experience translating legal documents and interpreting for Venezuelan courts and the Tribunal Supremo de Justicia. Rosanna has taught legal and technical translation and interpretation courses at Universidad Central de Venezuela. <span class="management_more"><i class="ion-plus-round"></i> more</span>
                    </p>
                    <div id="moreInfo">
                        <ul>
                            <li>3rd International Congress on Labor Law and Welfare Policies</li>
                            <li>V Summit of the Americas</li>
                            <li>XLII Venezuelan Congress on Cardiology</li>
                            <li>VIII Venezuelan Congress on Hypertension</li>
                            <li>Physical/chemical Properties of Hydrocarbons and Petroleum Cuts</li>
                            <li>Official visit of the Italian Minister of Infrastructure, On. Matteoli</li>
                            <li>International Refining Economics</li>
                            <li>Rotating Machines in the Oil Industry: Compressors and Turbines</li>
                            <li>Global Economic &amp; Financial Market Outlook</li>
                            <li>Official visit of the Italian Minister of Foreign Affairs, On. Franco Frattini</li>
                            <li>Official visit Secretary General of Interpol, Ronald Noble</li>
                            <li>II Summit of the Community of Latin-American &amp; Caribbean States</li>
                            <li>SPE Latin America &amp; Caribbean Petroleum Engineering Conference (LACPEC)</li>
                            <li>II Heavy Oil Latin American Congress</li>
                            <li>XII National Congress on Physical Medicine and Rehabilitation</li>
                        </ul>
                    </div>
                    
                    <h4 class="organizations_title">A Member of:</h4>
                    <div class="logos">
                        <img src="css/images/fit_logo.jpg" class="fit_logo" alt="FIT logo" title="International Federation of Translators (FIT)">
                        <img src="css/images/Logo_320x240_ATA.png" class="ata_logo" alt="ATA logo" title="American Translators Association (ATA)">
                        <img src="css/images/NAJIT-MEMBER-NEW-LOGO2017.jpg" class="najit_logo" alt="najit logo" title="National Association of Judiciary Interpreters and Translators (NAJIT)">
                        <img src="css/images/HITA.png" class="hita_logo" alt="hita logo" title="Houston Interpreters and Translators Association (HITA)">
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
                            <h3>Contact Us</h3>
                        </div>    
                        <form method="post" id="contact" action="php/contact.php">
                            <fieldset class="contact_fieldset">
                                <div class="contact_name_div">
                                    <label for="name">First &amp; Last Name</label>
                                    <input type="text" name="name" maxlength="40" required>
                                </div>
                                <div class="contact_email_div">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="contact_subject_div">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject">
                                </div>
                                <div class="contact_message_div">
                                    <label for="message">Message</label>
                                    <textarea name="message" cols="25" rows="5"></textarea>
                                </div>
                                <?php 
                                    if($_GET['csuccess'] == 1){
                                        echo "<div class=\"form-messages sucess\">Thank you! Your message has been sent.</div>";  
                                    }
                                    if($_GET['csuccess'] == -1){
                                        echo "<div class=\"form-messages error\">Something went wrong.</div> ";
                                    }
                                ?>
                                <input class="submit_contact" type="submit" name="submit" value="Submit"> 
                            </fieldset>
                        </form>
                    </div>
            </div>
        </section>
        <footer>
            <div class="backTop_div js--backTop">
                <div>
                    <span>Back to top</span>
                </div>
            </div>
            <div class="footer_inner">
                <div class="footer_logo_div">
                    <img src="images/logoQuality.png" alt="L.A logo">
                </div>
                <div class="btn-group dropup">
                  <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-globe"></i>English</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="spanish.php">Español</a></li>
                  </ul>
                </div>
                <h4>&#169; Language Ambassadors, LLC</h4>
            </div>
        </footer>
        
        <!--         AIzaSyBOfedoN7izjpStKRlEwnO5UpINSB5uJPw  */ -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOfedoN7izjpStKRlEwnO5UpINSB5uJPw&callback=initMap"></script>
        <script src="JS/gmaps.js"></script>
        <script src="JS/typed.js"></script>
        <script src="JS/jquery.waypoints.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="JS/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="JS/script.js"></script>
    </body>
</html>

