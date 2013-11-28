<!DOCTYPE html>
<html>
    <head>
        <title>Retouche photo professionnelles et grand public, photographie, creation graphique - MDcreatis.com</title>

        <meta charset="utf-8">
        <meta name="keywords" content="retouche, retoucher, photo, photos, images, création graphique, affiche, foyer">
        <meta name="description" content="Bienvenue sur le site Internet de MDCreatis">
        <link rel="shortcut icon" href="css/all/favicon.ico">
        <link rel="icon" type="image/x-icon" href="css/all/favicon.ico">

        <link rel="stylesheet" type="text/css" href="css/style_reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style_mod.css">
        <link rel="stylesheet" type="text/css" href="css/style_main.css">
        <link rel="stylesheet" type="text/css" href="css/style_frame.css">
        <link href="css/main.css" rel="stylesheet" type="text/css" />

        <style>
            #holder { border: 10px dashed #ccc; width: 850px; min-height: 300px; margin: 20px auto;}
            #holder.hover { border: 10px dashed #0c0; }
            #holder img {  margin: 10px auto; }
            #holder p { margin: 10px; font-size: 14px; }
            progress { width: 100%; }
            progress:after { content: '%'; }
            .fail { background: #c00; padding: 2px; color: #fff; }
            .hidden { display: none !important;}
        </style>
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Courgette' rel='stylesheet' type='text/css'>

        <!-- NoScript -->
        <noscript><link rel="stylesheet" href="css/noscript.css"></noscript>

        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
        <script type="text/javascript" src="js/jquery.chained.js"></script>

        <!-- IDX NEWS -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'index' || 'retouch_svc1') { ?>
            <script type="text/javascript" src="js/jquery.slitslider.js"></script> <?php }
        ?>

        <!-- RET (uCompare) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'index' || 'retouch') { ?>
            <script type="text/javascript" src="js/jquery.ucompare.js"></script> <?php }
        ?>

        <!-- RET (liteAccordion) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'retouch' || 'retouch_svc1') { ?>
            <script type="text/javascript" src="js/liteaccordion.jquery.min.js"></script> <?php }
        ?>
        <?php if (isset($_GET['page']) && $_GET['page'] == 'index' || 'retouch' || 'test') { ?>
            <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> <?php }
        ?>

        <!--[if lt IE 9]>
        <script>
        document.createElement('figure');
        document.createElement('figcaption');           
        </script>
        <![endif]-->

        <!-- MOV (Video) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'movie') { ?>
            <script type="text/javascript" src="js/init.js"></script> <?php }
        ?>

        <?php if (isset($_GET['page']) && $_GET['page'] == 'movie') { ?>
            <script src="http://www.google.com/jsapi" type="text/javascript"></script> <?php }
        ?>

        <!-- RET (Accordeon) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'test' || 'retouch') { ?>
            <script type="text/javascript" src="js/jquery.contentcarousel.js"></script> <?php }
        ?>

        <!-- ALL (Slide) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'retouch' || 'design' || 'formation') { ?>
            <script type="text/javascript" src="js/jquery.nivo.slider.js"></script> <?php }
        ?>


        <!-- ALL (Tab) -->
        <?php if (isset($_GET['page']) && $_GET['page'] == 'picture' || 'formation') { ?>
            <script type="text/javascript" src="js/tabbed.layout.js"></script> <?php }
        ?>

        <?
        /*
          ?>
          <!-- ALL (Form) -->
          <?php if($_GET['page']=='picture' || 'formation'){ ?>
          <script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script> <?php
          } ?>
          <?php if($_GET['page']=='picture' || 'formation'){ ?>
          <script type="text/javascript" src="js/jquery.main.js"></script> <?php
          } ?>
          ?
         */
        ?>

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <style>
            p.result {
                margin: 0px;
                padding: 0px;
            }
            fieldset {
                width: 100%;           
                margin: 15px 0px 25px 0px;
                padding: 15px;
            }     

            legend {
                font-weight: bold;
            }
            .button {
                text-align: right;
            }
            .button input {
                font-weight: bold;
            }

            #dnd_drag {
                display: none;
                text-align: center;
                padding: 1em 0;
                margin: 1em 0;
                color: #555;
                border: 2px dashed #888;
                border-radius: 7px;
                cursor: default;
            }
            #dnd_drag.hover {
                border: 2px dashed #000;
            }

            #xhr_status, #dnd_status {
                font-size: 90%;
                font-style: italic;
            }
        </style>
    </head>
    <!-- ALL (Scroll) -->
    <script type="text/javascript">
        $(function() {
            $('a').bind('click', function(event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                /*
                 if you don't want to use the easing effects:
                 $('html, body').stop().animate({
                 scrollTop: $($anchor.attr('href')).offset().top
                 }, 1000);
                 */
                event.preventDefault();
            });
        });
    </script>
    <!-- ALL (facebook like) -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=416231255075676";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- ALL (twitter like) -->
    <script>!function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");</script>
    <?php include("script/google_mov.php"); ?>