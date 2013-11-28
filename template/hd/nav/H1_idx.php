<!-- BODY IDX -->

<body id="bdy_idx">

    <!-- HEADER -->

    <header id="hdr_abs">

        <!-- MENU -->

        <div id="nav_B2" class="AN_TR-TB1">

            <nav id="nav_all" class="CLR">
                <?php include ("template/menu.php"); ?>
            </nav>

        </div>

        <!-- SUB-MENU -->

        <nav id="tit_all" class="SUB_M AN_OP3 CLR">

            <h1>Bienvenue</h1>
            <ul>
                <?
                if (empty($_SESSION["user"]["is_actif"])) {
                    ?>
                    <li><a href="index.php?page=registrer">Créer un compte</a></li>
                    <?
                } else {
                    echo "<li>" . $_SESSION["user"]["fname"] . " " . ucfirst($_SESSION["user"]["name"]) . "</li>";
                }

                if (empty($_SESSION["user"]["is_actif"])) {
                    ?>
                    <li><a href="index.php?page=connection">Connexion</a></li>
                    <?
                } else {
                    ?>
                    <li><a href="index.php?page=logout">Déconnexion</a></li>
                    <?
                }
                ?>
            </ul>

        </nav>

    </header>

    <!-- CONTENT -->