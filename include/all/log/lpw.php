<?php
include ("template/hd/log/H_lpw.php");
?>

<!-- LOSTPASS -->

<section class="SH">
    <div id="SC_lpw" class="BK0 R4 M20 CLR">

        <article class="SHl">

            <h2>Réinitialiser votre mot de passe MDcreatis.com</h2>
            <p>Un e-mail vous sera envoyé contenant un nouveau mot de passe.</p>
            <p>Vous pourrez par la suite modifier votre mot de passe.</p>

        </article>

        <article class="SHr">

            <h2>Veuillez saisir votre e-mail (identifiant MDcreatis).</h2>
            <form action="index.php?page=lostpass_send" method="post">
                <input type="email"	name="lpw_id" id="lpw_id" placeholder="Identifiant MDcreatis" required="required">

                <p>
                    <a href="index.php?page=registrer">Créer un compte</a> | 
                    <a href="index.php?page=connection">Se connecter</a>
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