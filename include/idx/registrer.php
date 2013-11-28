<!-- IDX REGISTRER -->

<section>
    <div id="SC_idx_rg" class="BK0 R4 CLR AN_OP2">

        <article class="SHl">

            <h2>ME CONNECTER</h2>    
            <?
            if (!$formCorrect) {
                echo '<div id="pass_error">' . $msg . '</div> ';
            }
            ?>
            <form action="index.php" method="post">

                <input type="hidden" name="src" value="connection">

                <div>
                    <input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
                </div>

                <div>
                    <input type="password"	name="cnx_pass" id="cnx_pass" placeholder="Mot de passe" required="required">
                </div>

                <div>
                    <a href="index.php?page=lostpass">Mot de passe oublié ?</a>
                </div>

                <div>
                    <button type="submit" class="BT4 BLACK R4" name="valid" title="Se connecter">Se connecter
                    	<span><img class="BTfl2" src="css/all/ico.gif"></span>
                    </button>
                </div>

            </form>

        </article>

        <article class="SHr">

            <h2>DEVENIR MEMBRE</h2>
            <p>Inscrivez-vous gratuitement dès maintenant et profitez de nos prestations en design, communication, vidéos, retouches et photographies.<br>Pour particuliers et professionnels.</p>

            <form action="index.php?page=registrer" method="post">

                <div>
                    <label for="reg_id">Adresse email</label>
                    <input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
                </div>

                <div>
                    <label for="reg_pass">Mot de passe</label>
                    <input id="regPW" name="cnx_pass" type="password" placeholder="******" required="required">
                </div>

                <div>
                    <button type="submit" class="BT4 GREY R4" name="valid" title="S'inscrire">S'inscrire
                    	<span><img class="BTfl1" src="css/all/ico.gif"></span>
                    </button>
                </div>

            </form>

        </article>

    </div>
</section>