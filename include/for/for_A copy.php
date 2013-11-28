<?php
include ("template/hd/nav/H4_for.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/for/for_A.php");

$pack1 = $md_page->getSubPage("for_home_1");
$pack2 = $md_page->getSubPage("for_home_2");
$pack3 = $md_page->getSubPage("for_home_3");
?>

<!-- A1 -->

<section id="SC_for1A">

    <div class="T_BK1r">
        <h2>Formation à Domicile<span>Ou comment se former chez soi.</span></h2>
        <p>Une envie ou un besoin d'apprendre les techniques de retouche en photographie installé confortablement chez vous ? C'est tout à fait réalisable sur mdcreatis.<br>Choisissez votre leçon parmi nos formations proposées<br>spécialement pour l'initiation et le perfectionnement<br>de la retouche photo.</p>
        <a class="BT4 BLUE1 R4" href="index.php?page=formation_devis">
        Personnalisez votre Formation<span><img class="BTfor" src="css/all/ico.gif"></span></a>
    </div>

</section>

<!-- A2 -->

<section id="SC_for1B" class="LSt">

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
                    <h2>Les bases de la retouche photo</h2>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Blue Bottle Coffee does it. Nest does it. RetailMeNot, 23andMe, and Google do it. It’s UX 					research, a secret weapon used by successful companies to design better products.</p>
                    <p>As a UX Research Partner at Google Ventures, I’ve conducted hundreds of customer interviews 					with startups in our portfolio. Time and again we see that user studies are a key ingredient for 				great design. Through quick, scrappy user studies we’ve discovered ways to boost conversion, 					found usability issues before launch, figured out why users were behaving in certain ways, and 					resolved nagging internal product debates.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack1["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack1["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm1" name = "cart" action="index.php?page=formation_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm1').submit();">
                            Faire une Demande<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>8h</div><p>Durée<span>de Formation</span></p></li>
                        <li><div>2</div><p>Nombre<span>de Jours</span></p></li>
                        <li><div>4h</div><p>Heures<span>par Cours</span></p></li>
                    </ul>

                    <h3>Description de la formation :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>à votre Domicile</span></li>
                        <li>A disposition :<span>MAC, Photoshop CS6, Tablette</span></li>
                        <li>Matériel requis :<span>Ordinateur (PC ou MAC)</span></li>
                    </ul>

                    <h3>Leçons dans cette formation :</h3>
                    <ul>
                        <li>Présentation de l'interface<span>0:20</span></li>
                        <li>Sélection et détourage<span>0:15</span></li>
                        <li>Détourage avancé<span>0:10</span></li>
                        <li>Correction d'une image<span>0:20</span></li>
                        <li>Correction des couleurs<span>0:15</span></li>
                    </ul>

                </aside>

            </div>

            <div id="tab_pic2" class="tab_pic CLR">

                <article>

                    <h1><?= $pack2["nom"] ?></h1>
                    <h2>Les bases de la retouche photo</h2>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Blue Bottle Coffee does it. Nest does it. RetailMeNot, 23andMe, and Google do it. It’s UX 					research, a secret weapon used by successful companies to design better products.</p>
                    <p>As a UX Research Partner at Google Ventures, I’ve conducted hundreds of customer interviews 					with startups in our portfolio. Time and again we see that user studies are a key ingredient for 				great design. Through quick, scrappy user studies we’ve discovered ways to boost conversion, 					found usability issues before launch, figured out why users were behaving in certain ways, and 					resolved nagging internal product debates.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack2["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack2["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm2" name = "cart" action="index.php?page=formation_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack2["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm2').submit();">
                            Faire une Demande<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>8h</div><p>Durée<span>de Formation</span></p></li>
                        <li><div>2</div><p>Nombre<span>de Jours</span></p></li>
                        <li><div>4h</div><p>Heures<span>par Cours</span></p></li>
                    </ul>

                    <h3>Description de la formation :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>à votre Domicile</span></li>
                        <li>A disposition :<span>MAC, Photoshop CS6, Tablette</span></li>
                        <li>Matériel requis :<span>Ordinateur (PC ou MAC)</span></li>
                    </ul>

                    <h3>Leçons dans cette formation :</h3>
                    <ul>
                        <li>Présentation de l'interface<span>0:20</span></li>
                        <li>Sélection et détourage<span>0:15</span></li>
                        <li>Détourage avancé<span>0:10</span></li>
                        <li>Correction d'une image<span>0:20</span></li>
                        <li>Correction des couleurs<span>0:15</span></li>
                    </ul>

                </aside>

            </div>

            <div id="tab_pic3" class="tab_pic CLR">

                <article>

                    <h1><?= $pack3["nom"] ?></h1>
                    <h2>Les bases de la retouche photo</h2>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Blue Bottle Coffee does it. Nest does it. RetailMeNot, 23andMe, and Google do it. It’s UX 					research, a secret weapon used by successful companies to design better products.</p>
                    <p>As a UX Research Partner at Google Ventures, I’ve conducted hundreds of customer interviews 					with startups in our portfolio. Time and again we see that user studies are a key ingredient for 				great design. Through quick, scrappy user studies we’ve discovered ways to boost conversion, 					found usability issues before launch, figured out why users were behaving in certain ways, and 					resolved nagging internal product debates.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack3["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack3["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm3" name = "cart" action="index.php?page=formation_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack3["produit_id"] ?>">
                            <button class="BT4 OR R4" onclick="document.getElementById('frm3').submit();">
                            Faire une Demande<span><img class="BTcad" src="css/all/ico.gif"></span></button>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>8h</div><p>Durée<span>de Formation</span></p></li>
                        <li><div>2</div><p>Nombre<span>de Jours</span></p></li>
                        <li><div>4h</div><p>Heures<span>par Cours</span></p></li>
                    </ul>

                    <h3>Description de la formation :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>à votre Domicile</span></li>
                        <li>A disposition :<span>MAC, Photoshop CS6, Tablette</span></li>
                        <li>Matériel requis :<span>Ordinateur (PC ou MAC)</span></li>
                    </ul>

                    <h3>Leçons dans cette formation :</h3>
                    <ul>
                        <li>Présentation de l'interface<span>0:20</span></li>
                        <li>Sélection et détourage<span>0:15</span></li>
                        <li>Détourage avancé<span>0:10</span></li>
                        <li>Correction d'une image<span>0:20</span></li>
                        <li>Correction des couleurs<span>0:15</span></li>
                    </ul>

                </aside>

            </div>

        </div>
    </div>

</section>

</div>

<?php
include ("template/ft/F1_wht.php");
?>