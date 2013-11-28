<?php
include ("template/hd/nav/H2_pic.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/pic/pic1.php");

$pack1 = $md_page->getSubPage("open_studio");
$pack2 = $md_page->getSubPage("prem_studio");
$pack3 = $md_page->getSubPage("gold_studio");
?>

<!-- PIC1 -->

<section id="SC_pic1">

    <div id="slider-wrapper" class="LSb">
        <div id="SLD2">
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A1.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A2.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A3.jpg" alt=""></a>
        </div>
    </div>

    <div class="T_BK1 LSt">
        <h2>Shooting Studio<span>Le cliché au goût professionnel.</span></h2>
        <p class="P30_1">Envie d'un souvenir, seul ou à plusieurs ? Profitez le temps d'une journée, demi-journée ou d'un évènement pour graver des souvenirs tout en images pour le plaisir ou développer votre book.</p>
        <a class="BT4 BLACK R4" href="index.php?page=picture_devis">
        Personnalisez votre Séance<span><img class="BTpic" src="css/all/ico.gif"></span></a>
    </div>

</section>

<!-- PIC2 -->

<section id="SC_pic2">

    <nav class="NAV_3"> 
        <ul class="tabs CLR">
            <li><a href="#tab_pic1" class="R5t"><?= $pack1["nom"] ?></a></li>
            <li><a href="#tab_pic2" class="R5t"><?= $pack2["nom"] ?></a></li>
            <li><a href="#tab_pic3" class="R5t"><?= $pack3["nom"] ?></a></li>
        </ul>
    </nav>

    <div>  
        <div class="T_3 LSt">

            <div id="tab_pic1" class="tab_pic CLR">

                <article>

                    <h1><?= $pack1["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>
                    <div id="pk-picA1" class="pk-pic"></div>
                    <p>Découvrez le fonctionnement d'une séance photo en Studio. Simple et efficace, ce pack <span>OPEN Studio</span> vous guidera à travers votre shooting.</p>
                    <br><p><span>• La durée du shooting</span> correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p><span>• Le nombre de photos</span> comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p><span>• Les photos filtres</span> sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack1["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack1["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm1" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm1').submit();">
                            Ajouter au Panier<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>1h</div><p>Durée<span>Shooting</span></p></li>
                        <li><div>5</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+1</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Studio</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>4288 x 2848</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack1["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

            <div id="tab_pic2" class="tab_pic CLR">

                <article>

                    <h1><?= $pack2["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picA2" class="pk-pic"></div>
                    <p>Aller toujours plus loin, c'est ce que vous offre ce pack <span>PREMIUM Studio</span>. Pour profiter au maximum de votre séance et prendre le temps de profiter de chaque instants.</p>
                    <br><p><span>• La durée du shooting</span> correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p><span>• Le nombre de photos</span> comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p><span>• Les photos filtres</span> sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack2["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack2["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id="frm2" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack2["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm2').submit();">
                            Ajouter au Panier<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>2h</div><p>Durée<span>Shooting</span></p></li>
                        <li><div>10</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+2</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Studio</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>4288 x 2848</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack2["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

            <div id="tab_pic3" class="tab_pic CLR">

                <article>

                    <h1><?= $pack3["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picA3" class="pk-pic"></div>
                    <p>Le pack <span>GOLD Studio</span> est l'ultime solution pour profiter d'une séance à la fois posée et efficace. Pour un projet de Book ou simplement faire plaisir, ou se faire plaisir. Il répondra à toutes vos attentes.</p>
                    <br><p><span>• La durée du shooting</span> correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p><span>• Le nombre de photos</span> comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p><span>• Les photos filtres</span> sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack3["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack3["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm3" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack3["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm3').submit();">
                            Ajouter au Panier<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>3h</div><p>Durée<span>Shooting</span></p></li>
                        <li><div>20</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+4</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Studio</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>4288 x 2848</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack3["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

        </div>
    </div>

</section>

</div>

<?php
include ("js/inc/SLD2.js");
include ("template/ft/F1_wht.php");
?>