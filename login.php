<?php
include('include/inscription_header.php')
?>
<br>
<center>
    <div class="welcome_text space">

        <p class="welcom_text1">Vous êtes le Bienvenue👋 sur Matsuri</p>
        <br>
        <p class="welcom_text2 space">Le site pour acheter les tickets et se faire plaisir</p>
        <br>
        <br>
        <br>
        <p class="inscription_text space">Pour commencer votre aventure, inscrivez-vous en entrant votre numéro de
            téléphone</p>
        <br>
    </div>

    <div class="informations space">

        <div class="inscription_box">
            <form action="otp.php" id="contactForm">

                <input class="number" type="text" name="number" id="number" placeholder="Numéro de téléphone">
                <input type="submit" value="Recevoir le code">
            </form>
        </div>
    </div>

</center>