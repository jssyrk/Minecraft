<!doctype html>
<html>

<head>
    
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Minecraft is a game about building and destroying anything you can imagine. Be weary, at night monsters come out, make sure you build a shelter to survive.">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, minimal-ui">

	<title>Minecraft</title>

    <link rel="shortcut icon" href="images/icon.png">
    <link rel="apple-touch-icon" href="images/icon.png">
    <link rel="stylesheet"  href="css/base.css">

    <!-- Fallback Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300' rel='stylesheet' type='text/css'>
    
    <!-- LOCAL --><script src="//use.typekit.net/fvt0epo.js"></script>
    <!-- LIVE --><script src="//use.typekit.net/dxc5teu.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

</head>

<body>
<?php
    include('scripts/tracking.php');
?>


    <!-- Start Wrapper -->
    <div id="wrapper">
        
        <div id="overlay"></div>

        <div id="signinmodal">
            <form method="GET">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input id="btn" type="submit" value="Sign In">
            </form>

            <a href="#">Dont’ Have an Account? Click Here To Create One!</a>
        </div>


        <section id="topnav">
            <nav>
                <div id="games">
                    <ul>
                        <li id="active">
                            <a href="index.php">minecraft</a>
                        </li>
                        <li>
                            <a href="http://playcobalt.com/" target="_blank">cobalt</a>
                        </li>
                        <li>
                            <a href="https://scrolls.com/" target="_blank">scrolls</a>
                        </li> 
                    </ul>
                </div>
                <div id="signin">
                    <ul>
                        <li>
                            <a href="register.php">register</a>
                        </li>

                        <li>
                            <a id="signinbtn" href="#">sign in</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>


        <section id="hero" style="height: 190px; min-height: 190px; margin-bottom: 75px;">
            <nav id="mainnav">
                <ul>
                    <li>
                        <a href="index.php">home</a>
                    </li>

                    <li>
                        <a href="game.php">game</a>
                    </li> 

                    <li>
                            <img id="logo" src="images/logo.png">
                    </li> 

                    <li>
                        <a href="https://minecraft.net/store" target="_blank">store</a>
                    </li>

                    <li>
                        <a href="https://help.mojang.com/" target="_blank">help</a>
                    </li> 
                </ul>
            </nav>
        </section>


        <section id="gameinfo">
            <div class="sectioncontent">
                <div id="video">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/WdsEGZvd6z4" frameborder="0" allowfullscreen></iframe>
                </div>

                <h1>Who made this thing?</h1>
                <p>Minecraft was originally created by Markus Persson, who you might know as Notch. On November 19th, 2011, Jens Bergensten, who you might know as Jeb, took over creative control so Markus could concentrate on new things.</p>
                <p>Thanks to Minecraft’s success, Markus formed his own company in 2009. Mojang AB currently has two titles in development. Scrolls and Markus’ newest project, 0x10c, are both getting cooked up. Mojang AB is also publishing Oxeye Studio’s latest game, Cobalt.</p>

                <h1>A longer history</h1>
                <p>June 1st, 2009. Stockholm. Markus Persson quits his job at an established games developer to create his own game. Unemployed, but enthusiastic, Markus was looking for inspiration, and it came from indie game development blog, Tigsource. Thanks to the resource, the man you probably know as "Notch" ended up playing Zachtronic Industries' Infiniminer: an innovative indie which tasked players with collecting resources while cutting into a randomly generated landscape. It was a simple game at heart, but Markus realised potential for something great. He began work on a new project a few weeks after Infiniminer was discontinued.</p>
                <p>Though Markus’ original idea wasn’t as fully featured as the Minecraft you’ll play today, "Cave Game" was created from the same DNA. This was a game about placing and breaking blocks in a 3D world. The primary motivation was to create an experience where each individual component felt fun. A game that could be both accessible and emergent.</p>
                <p>On November 19th 2011, Jens Bergensten, who you might know as Jeb, took over creative control of Minecraft so Markus could concentrate on his new project, 0x10c. They’d been working together for over a year so Markus wasn’t concerned about handing over the reins. Jeb has been in control since, updating Minecraft with Weekly Snapshots. Tameable animals, maps, pistons, elephantine NPCs, and The End followed. And it’s still evolving.</p>
                <p>Minecraft Xbox 360 edition was released in May 2012, giving console players opportunity to experience Minecraft for themselves. It broke more records, selling a staggering four million copies in just five months. 4J Studios are responsible for the port, and are dedicating their time to create the most fully featured experience possible. You can track the updates on all forms of Minecraft by following the team on twitter, or by checking mojang.com, where we regularly post about recent happenings.</p>
                <p>The rest is in the future! And there’s a lot more to come.</p>
            </div>
        </section>


        <footer>
            <div class="sectioncontent">
                <div class="col2">
                    <h1>Mojang © 2009-2015. "Minecraft" is a trademark of Mojang AB </h1>
                </div>

                <div class="col2">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://account.mojang.com/documents/minecraft_eula" target="_blank">Terms of Use</a>
                            </li>

                            <li>
                                <a href="https://account.mojang.com/terms#privacy" target="_blank">Privacy Policy</a>
                            </li>

                            <li>
                                <a href="https://mojang.com/" target="_blank">Mojang</a>
                            </li> 

                            <li>
                                <a href="http://www.microsoft.com/games/" target="_blank">Microsoft</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>

<script src="scripts/app.js"></script>
<script>

</script>
</body>
</html>