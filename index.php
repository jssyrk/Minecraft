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

        <section id="hero">
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
            <div class="sectioncontent">
                <h1><span>Minecraft</span> is a game about breaking and placing blocks. At first, people built structures to protect against nocturnal monsters, but as the game grew players worked together to create wonderful, imaginative worlds.</h1>
            </div>

            <section id="statstab">
                <h1>players worldwide</h1>
                <div class="col3">
                    <h2 id="pccounter">18,594,193</h2>
                    <h3>PC/MAC</h3>
                </div>
                <div class="col3">
                    <h2 id="pscounter">24,735,932</h2>
                    <h3>Playstation 3/4</h3>
                </div>
                <div class="col3">
                    <h2 id="xbcounter">26,090,143</h2>
                    <h3>Xbox 360/One</h3>
                </div>
            </section> 
        </section>


        <section id="playgame">
            <div class="col3">
                <a href="https://minecraft.net/demo" target="_blank">Play the Demo Version</a>
            </div>

            <div class="col3">
                <a href="#" id="btn">Purchase Minecraft!</a>
            </div>

            <div class="col3">
                <a href="https://minecraft.net/demo" target="_blank">Play the Classic Version</a>
            </div>
        </section>


        <section id="gamebio">
            <div class="col3">
                <h1><span>Unlimited</span> Sandbox Adventure.</h1>
                <p>Minecraft, a sandbox adventure game with unlimited procedural possibilities. Your imagination is literally the limit. Explore the vast world containing multi environmental biomes. Meet civilised NPC’s, pet exotic animals, and slay demonic creatures of the night and enderworld. Mine resources needed to build a hut, house, or fortress to protect your keep. Be wary, not everyone you meet throughout the world of Minecraft is what they seem.</p>
            </div>

            <div class="col3">
                <h1><span>Gripping</span> Online Multiplayer.</h1>
                <p>Take your adventure further, and play with 1 to 128 people online. Play on vanilla servers, kick back, and adventure with friends in a relaxed world, setting your own rules. We have also released a sever client for Windows, so you can create your very own online world. Online servers also offer the ability to play through customer story modes and quests! Or, for the more adventurous, download one of the many server mods and expand ever further.</p>
            </div>

            <div class="col3">
                <h1><span>Community</span> Mods & Support.</h1>
                <p>Mods are the best way to fully explore other peoples imaginations, whilst harnessing the power of Minecraft. Using mods can allow you to build far more complex systems, such as a red stone computer, an alarm clock, or the ever favourite, a TNT cannon! You can literally blast away the competition. Minecraft mods have become so popular, there are even small branched communities releasing new and exciting mods each and every week.</p>
            </div>
        </section>


        <section id="socialbio">
            <div class="col3" id="facebook">
                <h1>Like us on <span>Facebook</span>.</h1>
                <h2>Join the Minecraft community by liking us on Facebook.</h2>

                <img src="images/fbstatic.png" alt="Static Facebook Likes">
            </div>

            <div class="col3" id="tumblr">
                <h1>Read our <span>Tumblr</span>.</h1>
                <h2>Get up to date updates on new Minecraft news and patches.</h2>

                <div class="post">
                    <h1>Minecraft 2.0 Incoming!</h1>
                    <h2>About 45 Mins Ago</h2>
                </div>
                <div class="post">
                    <h1>Minecon 2015!</h1>
                    <h2>About 3 Days Ago</h2>
                </div>
                <div class="post">
                    <h1>Server GUI update.</h1>
                    <h2>About 1 Week Ago</h2>
                </div>
                <div class="post">
                    <h1>Update for Playstation & Xbox.</h1>
                    <h2>About 2 Weeks Ago</h2>
                </div>
                <div class="post">
                    <h1>Farwell, Notch.</h1>
                    <h2>About 1 Month Ago</h2>
                </div>

            </div>

            <div class="col3" id="twitter">
                <h1>Follow us on <span>Twitter</span>.</h1>
                <h2>Follow Jeb on Twitter, and ask him questions about anything.</h2>

                <div class="post">
                    <h1>Ori and the Blind Forest is an amazing game. Many tears and sore thumbs required to escape the Ginzo Tree, though.</h1>
                    <h2>About 3 Mins Ago</h2>
                </div>
                <div class="post">
                    <h1>Aww... The site crashed again. I was told they had prevented that, plus I thought most people wouldn't go back  find the real link.</h1>
                    <h2>About 1 Hour Ago</h2>
                </div>
                <div class="post">
                    <h1>The link I shared yesterday is up and running again. I obviously don't learn from my mistakes, so here you go <a href="#">http://bit.ly/IqT6zt</a>.</h1>
                    <h2>About 1 Hour Ago</h2>
                </div>
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