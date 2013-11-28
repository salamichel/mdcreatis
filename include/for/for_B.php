<?php
include ("template/hd/nav/H2_for.php");
?>

<!-- B1 -->

<section id="SC_for2A" class="F1 R4">

    <div class="FM_T1">
        <h2>Formation sur Internet</h2>
        <h3>La liberté de choisir</h3>
        <p>Un besoin particulier d'apprendre ? Envie de découvrir les secrets des techniques de retouche ? Puisez dans notre base de formations individuelles pour sélectionner les techniques que vous aimeriez maîtriser à travers des vidéos explicatives.</p>
    </div>

    <img src="css/all/ico.gif">

</section>


<!-- B2 -->

<section id="SC_for2B" class="CLR">

    <article class="F1 R4">

        <div>

            <div class="SH">
                <h3 class="BK0 R4t">Ouverture DIAPHRAGME</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_A1">Portrait<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_A1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_A1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_A2">Personnalisé<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_A2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_A2') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

        <div>

            <div class="SH">
                <h3 class="BK0">Correction COLORIMÉTRIE</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_B1">Chromatique<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_B1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_B1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_B2">Dé Saturation<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_B2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_B2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_B3">Dé Saturation Contrasté<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_B3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_B3') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_B4">Dé Saturation Partielle<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_B4') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_B4') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

        <div>

            <div class="SH">
                <h3 class="BK0">Réglage LUMINOSITÉ</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_C1">Augmentation Lumineuse<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_C1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_C1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_C2">Réduction Lumineuse<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_C2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_C2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_C3">Correction Flash<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_C3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_C3') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_C4">Contre Jour<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_C4') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_C4') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

        <div>

            <div class="SH">
                <h3 class="BK0">Gommage IMPERFECTIONS</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_D1">Yeux Rouges<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D2">Yeux Personnalisés<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D3">Suppression Acné<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D3') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D4">Lissage de Peau<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D4') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D4') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D5">Blanchiment des Dents<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D5') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D5') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D6">Réduction du Bruit<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D6') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D6') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_D7">Réglage Netteté<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_D7') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_D7') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

    </article>

    <article class="F1 R4">

        <div>

            <div class="SH">
                <h3 class="BK0 R4t">Modification ENVIRONNEMENT</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_E1">Retouche du Ciel<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_E1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_E1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_E2">Personnalisation Légère<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_E2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_E2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_E3">Personnalisation (Niveau 1)<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_E3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_E3') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_E4">Personnalisation (Niveau 2)<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_E4') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_E4') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

        <div>

            <div class="SH">
                <h3 class="BK0">Transformation PHYSIQUE</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_F1">Yeux<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F2">Nez<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F3">Bouche<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F3') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F4">Poitrine<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F4') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F4') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F5">Hanches<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F5') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F5') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F6">Fesses<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F6') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F6') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_F7">Taille<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_F7') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_F7') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

        <div>

            <div class="SH">
                <h3 class="BK0">Restauration PHOTO</h3>
            </div>

            <ul>
                <li><a href="index.php?page=retouch_G1">Restauration Légère<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_G1') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_G1') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_G2">Restauration (Niveau 1)<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_G2') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_G2') ?> €</button>
                            </form>
                        </span></a></li>

                <li><a href="index.php?page=retouch_G3">Restauration (Niveau 2)<span>
                            <form action="index.php?page=cad" method="post">
                                <input type="hidden" name="prestation" value ="formation">
                                <input type="hidden" name="tec[][]" value="<?= getTechniqueIdbyCode('retouch_G3') ?>">
                                <button type="submit"><?= getTechniquePricebyCode('retouch_G3') ?> €</button>
                            </form>
                        </span></a></li>
            </ul>

        </div>

    </article>

</section>

<?php
include ("template/ft/F1_wht.php");
?>