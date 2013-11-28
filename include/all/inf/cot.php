<?php
include ("template/hd/inf/H_cot.php");
?>

<section id="SC_inf" class="SH">
    <div class="BK0 R4 M20 CLR">

        <nav class="SH2l NAV_0">
            <ul class="tabs CLR">
                <li><a href="#cot_tab1">Site internet</a></li>
                <li><a href="#cot_tab2">Par courrier</a></li>
                <li><a href="#cot_tab3">Par e-mail</a></li>
                <li><a href="#cot_tab4">Par téléphone</a></li>
            </ul>
        </nav>

        <article id="cot_tab1" class="SH2r">

            <div>

                <h2>Sur le site</h2>
                <h3>Ecrivez-nous directement à partir du site MDcreatis.com</h3>
                <form action="index.php?send" method="post">
                    <input type="hidden" name="src" value="contact">

                    <div>
                        <label>
                            <strong>Type de demande :</strong>
                            <select name="cont_req" id="cont_req">
                                <option value="J'aimerai...">J'aimerai...</option>
                                <option value="Poser une question">Poser une question</option>
                                <option value="Faire une remarque">Faire une remarque</option>
                                <option value="Donner mon avis">Donner mon avis</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email" placeholder="Votre email…" required="true" value="<?= @$_SESSION["user"]["email"] ?>" />
                        </label>
                    </div>
                    <div>
                        <label>
                            <textarea name="comment" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="BT2 BLUE2 R4" name="valid" title="Envoyer">Envoyer</button>
                    </div>

                </form>

            </div>

        </article>

        <article id="cot_tab2" class="SH2r">

            <div>

                <h2>Par courrier</h2>
                <h3>Vous pouvez contacter le service client MDcreatis par courrier à l'adresse suivante :</h3>
                <ul>
                    <li>Service Client MDcreatis</li>
                    <li>44 Chemin des Garniers</li>
                    <li>44300 - NANTES</li>
                </ul>

            </div>

        </article>

        <article id="cot_tab3" class="SH2r">

            <div>

                <h2>Par e-mail</h2>
                <h3>Contactez le service MDcreatis par e-mail 24h/24, 7jours/7. Nous prendrons le temps de répondre 			à vos questions et remarques.</h3>
                <ul>
                    <li><a href="mailto:infos@mdcreatis.com">infos@mdcreatis.com</a></li>
                    <li><a href="mailto:mdcreatis@gmail.com">mdcreatis@gmail.com</a></li>
                </ul>

            </div>

        </article>

        <article id="cot_tab4" class="SH2r">

            <div>

                <h2>Par téléphone</h2>
                <h3>Ce service est momentanément indisponible</h3>

            </div>

        </article>

    </div>
</section>

<?php
include ("template/ft/F1_wht.php");
?>