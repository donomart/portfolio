<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Donovan Martire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="assets/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("assets/laptop.jpg");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">Accueil</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="#parcours" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap"></i> Parcours</a>
                <a href="#competences" class="w3-bar-item w3-button"><i class="fa fa-folder-open"></i> Compétences</a>
                <!--<a href="#work" class="w3-bar-item w3-button"><i class="fa fa-image"></i> Réalisations</a>-->
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Me contacter</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Fermer
            ×</a>
        <a href="#parcours" onclick="w3_close()" class="w3-bar-item w3-button">Parcours</a>
        <a href="#competences" onclick="w3_close()" class="w3-bar-item w3-button">Compétences</a>
        <!--<a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Réalisations</a>-->
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Me contacter</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Donovan Martire</span>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Donovan Martire</span>
            <br>
            <span class="w3-large">Développeur Web junior.</span>
            <br>
            <br>
            <p><a href="#parcours" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">
                    Voir mon parcours</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <a href="https://www.linkedin.com/in/donovan-martire-510084224" target="_blank"><i class="fa fa-linkedin w3-hover-opacity" style="color: white"></i></a>
        </div>
    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="parcours">
        <h3 class="w3-center">Mon parcours</h3>
        <div class="w3-row-padding w3-center" style="margin-top:64px">

            <div class="w3-third">
                <i class="fa fa-graduation-cap w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">2017<br>
                    Baccalauréat Sciences<br>et Technologies Industrielles (STI2D)<br>
                    <i class="w3-text-gray">Lycée Pierre et Marie Curie</i>
                </p>

                <p></p>
            </div>

            <div class="w3-third">
                <i class="fa fa-code w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">2021 (en cours)<br>
                    Formation Développement Web<br>et Applications Mobiles<br>
                    <i class="w3-text-gray">GRETA de Nice</i>
                </p>

                <p></p>
            </div>

            <div class="w3-third">
                <i class="fa fa-calendar w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Actuellement<br>
                    Suite et fin de ma formation<br>
                    <i class="w3-text-gray">GRETA de Nice</i>
                </p>

                <p> </p>
            </div>

        </div>
    </div>


    <!-- Skills Section -->
    <div class="w3-container w3-light-grey w3-padding-64" id="competences">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Mes compétences</h3>
                <p>Je m'appelle Donovan, j'ai 22 ans, et ma passion par les nouvelles technologies m'a tourné vers le développement.</p>
                <p>Ma connaissance de l'Anglais me permet de me documenter sans problème <br> sur divers langages,
                    outils et Frameworks.</p>
                <p>Aujourd'hui, je travaille sous VS Code avec des connaissances sur les logiciels de bureautiques <br>
                    tels que Word ou Excel, et Photoshop.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-code w3-margin-right"></i>JavaScript, Node.JS</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">&nbsp;</div>
                </div>
                <p class="w3-wide"><i class="fa fa-database w3-margin-right"></i>PHP, MySQL</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:80%">&nbsp;</div>
                </div>
                <p class="w3-wide"><i class="fa fa-html5 w3-margin-right"></i>HTML, CSS</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:70%">&nbsp;</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:60%">&nbsp;</div>
                </div>
            </div>

            <p class="w3-padding-8"><i><br></i></p>
            <a href="files/CV_Donovan_Martire.pdf" type="application/pdf" target="_blank" class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"><i class="fa fa-download"></i> Télécharger mon CV</a>
        </div>
    </div>


    <!-- Contact Section -->
    <div class="w3-container " style="padding:128px 16px" id="contact">
        <h3 class="w3-center">Me contacter</h3>
        <div style="margin-top:48px">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 06500 Menton, France</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Tél: 06 42 16 43 20</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i> Email: dono.mart@live.fr</p>
            <br>
            <form id="contactForm" action="./contact.php" method="POST">
                <p><input class="w3-input w3-border" type="text" placeholder="Nom" required="" name="name"></p>
                <p><input class="w3-input w3-border" type="email" placeholder="Email" required="" name="email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Sujet" required="" name="subject"></p>
                <!--<p><input class="w3-input w3-border" type="text" placeholder="Message" required="" name="message"></p>-->
                <p><textarea rows="5" form="contactForm" placeholder="Message" style="box-sizing: border-box; width: 100%; resize: vertical;" required="" name="message"></textarea></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> Envoyer</button>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-32">
        <div class="w3-xlarge w3-section">
            <a href="https://www.linkedin.com/in/donovan-martire-510084224" target="_blank"><i class="fa fa-linkedin w3-xxlarge w3-hover-opacity"></i></a>
        </div>
    </footer>

    <script>
        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>


</body>

</html>