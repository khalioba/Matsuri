<?php
include('include/inscription_header.php')
?>
<br>


<center>
    <div class="welcome_text space">
        <p class="inscription_text space">Entrez le code reçu par SMS</p>
        <br>
    </div>

    <div class="informations space">
        <div class="inscription_box">
            <form action="signup.php" id="contactForm">
                <div class="inscription_box">
                    <input class="prenom" type="text" name="prenom" id="nom" placeholder="Entrer le code reçu par SMS"
                        required>
                </div>

                <input type="submit" value="Connexion">
            </form>
        </div>
    </div>

</center>