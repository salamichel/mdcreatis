<?php
include ("template/hd/log/H_cnt.php");
?>

<!-- CONNECT -->

<section class="SH">
    <div id="SC_cnt" class="BK0 R4 M20 CLR">

        <article class="SHl">

            <h2>Connexion à votre compte MDcreatis.com</h2>
            <p>Afin de vous connecter sur votre espace personnel MDcreatis :</p>
            <p>Veuillez saisir votre email et votre mot de passe.</p>

        </article>

        <article class="SHr">

            <h2>Veuillez saisir votre e-mail et mot de passe.</h2>
            <form action="index.php" method="post" >
                <input type="hidden" name="src" value="connection">
                <input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
                <input type="password"	name="cnx_pass" id="cnx_pass" placeholder="Mot de passe" required="required">

                <p>
                    <a href="index.php?page=registrer">Créer un compte</a> | 
                    <a href="index.php?page=lostpass">Mot de passe perdu ?</a>
                </p>
                <div>
                    <button type="submit" class="BT2 BLUE2 R4" name="valid" title="Valider">Valider</button>
                </div>
            </form>
        </article>

    </div>
</section>

<?php
include ("template/ft/F1_wht.php");
?>