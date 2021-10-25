<?php
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Document</title>
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

        footer {
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div style="min-height: calc(100vh - 150px); position:relative;">
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-white w3-card" id="myNavbar">
                <a href="./" class="w3-bar-item w3-button w3-wide">Accueil</a>
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="./#parcours" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap"></i> Parcours</a>
                    <a href="./#competences" class="w3-bar-item w3-button"><i class="fa fa-folder-open"></i> Compétences</a>
                    <!--<a href="#work" class="w3-bar-item w3-button"><i class="fa fa-image"></i> Réalisations</a>-->
                    <a href="./#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Me contacter</a>
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
            <a href="./#parcours" onclick="w3_close()" class="w3-bar-item w3-button">Parcours</a>
            <a href="./#competences" onclick="w3_close()" class="w3-bar-item w3-button">Compétences</a>
            <!--<a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Réalisations</a>-->
            <a href="./#contact" onclick="w3_close()" class="w3-bar-item w3-button">Me contacter</a>
        </nav>

        <!-- About Section -->
        <div class="w3-container" style="padding:128px 16px" id="parcours">

            <?php
            $EMAIL_RETRIES_COUNT = 3;


            // Extract inputs
            $_POST = array_map('strip_tags', $_POST);
            $_POST = array_map('trim', $_POST);
            extract($_POST);


            // Sanatize inputs
            $clean_email = validate_email($email);

            if (is_null($clean_email)) {
                displayErrorMessage('Adresse email invalide: ' . $email . '<br><br>');
            } else {

                // Send email
                $to_email = 'donovan@alwaysdata.net';
                $headers = 'From: ' . $name . ' <' . $clean_email . '>';

                $res = sendEmail($to_email, $subject, $message, $headers);


                // Retry if fails
                if ($res)
                    displayConfirmationMessage();
                else {
                    for ($i = 0; $i < $EMAIL_RETRIES_COUNT; $i++) {
                        sleep(2 * $i);
                        $res = sendEmail($to_email, $subject, $message, $headers);

                        if ($res)
                            break;
                    }

                    if ($res)
                        displayConfirmationMessage();
                    else
                        displayErrorMessage(null);
                }
            }


            function validate_email($email)
            {
                $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);

                if (filter_var($clean_email, FILTER_VALIDATE_EMAIL))
                    return $clean_email;
                else
                    return null;
            }


            function sendEmail($to_email, $subject, $message, $headers)
            {
                return mail($to_email, $subject, $message, $headers);
            }


            function displayErrorMessage($message)
            {
                echo '<h3 class="w3-center">Erreur</h3>';
                echo '<div class="w3-row-padding w3-center" style="margin-top:32px">';
                echo '<div class="w3-col">';
                echo '<i class="w3-margin-bottom w3-jumbo"></i>';
                echo '<p class="w3-large">';

                echo !empty($message) ? $message :
                    'Une erreur de serveur est survenue.<br>' .
                    'Veuillez réessayer plus tard.<br><br>';
                echo '<a href="./#contact">Retourner au formulaire</a>';
            }


            function displayConfirmationMessage()
            {
                echo '<h3 class="w3-center">Merci <i class="fa fa-heart"></i></h3>';
                echo '<div class="w3-row-padding w3-center" style="margin-top:32px">';
                echo '<div class="w3-col">';
                echo '<i class="w3-margin-bottom w3-jumbo"></i>';
                echo '<p class="w3-large">';

                echo 'Votre email a bien été envoyé!<br><br>';
                echo '<a href="./#contact">Retourner à l\'accueil</a>';
            }
            ?>

            <!--<h3 class="w3-center">Merci</h3>
        div class="w3-row-padding w3-center" style="margin-top:32px">

            <div class="w3-col">
                <i class="w3-margin-bottom w3-jumbo"></i>

                <p class="w3-large">-->

            <!--<p class="w3-large">Votre email a bien été envoyé!<br></p>-->

            </p>
            <p></p>
        </div>

    </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-32" style="height:150px">
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