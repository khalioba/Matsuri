<?php
include('include/inscription_header.php')
?>
<br>

<center>
    <div class="welcome_text space">

        <p class="welcom_text1">Plus qu’une etape à franchir ajoutez vos informations</p>
        <br>


        <br>
    </div>

    <div class="informations space">
        <div class="inscription_box">
            <form action="index.php" id="contactForm">

                <input class="prenom" type="text" name="prenom" id="nom" placeholder="Numéro de téléphone" required>
                <input class="mail" type="email" name="mail" id="mail" placeholder="Adresse mail" required>
                <input class="city" type="text" name="ville" id="ville" placeholder="Votre ville">
                <input type="submit" value="Recevoir le code">
            </form>
        </div>
    </div>

</center>