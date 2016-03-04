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

            <a href="register.php">Dont’ Have an Account? Click Here To Create One!</a>
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


        <section id="register">
            <div class="sectioncontent">
                <h1>Register an Account.</h1>
                <h2>One Account. All Games.</h2>
                <form method="GET">
                    <input type="text" name="firstname" placeholder="first name">
                    <input type="text" name="lastname" placeholder="last name">
                    <input type="email" name="email" placeholder="email">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <input id="btn" type="submit" value="Register Account">
                </form>
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