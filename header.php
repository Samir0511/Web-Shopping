<style>
* {
        margin: 0;
        padding: 0;
        
    }

    html,
    body {
        background: white;
        height: 100%;
        width: 100%;
        position: absolute;
        font: normal 1em "Arial";
overflow-x: hidden;
    }

    nav {
        padding: 10px;
        position: absolute;
        background: #4deb5a;
        z-index: 1;
        
        
    }

    nav::after {
        content: "";
        display: block;
        clear: both;
    }

    hgroup {
        float: left;
        margin: 2px 2px 2px 10px;
    }

    aside {
        position: absolute;
        width: 150px;
        height: 100%;
        background: transparent;
        left: -300px;
        top: 0;
        bottom: 0;
        box-sizing: border-box;
        padding-top: 70px;
        transition: all 0.4s ease;
    }

    aside.active {
        left: 0;
    }

    aside a {
        bottom: 300px;
        height: auto;
        margin-top: 1%;
        display: block;
        padding: 1.2rem;
        text-decoration: none;
        font-size: 1rem;
        color:black;
        border-bottom: 1px solid #414141;
        text-decoration: none;
        font-weight: bolder;
    }

    .toggle-wrap {
        padding: 10px;
        position: absolute;
        cursor: pointer;
        float: left;
        margin-left: -150px;
        margin-top: -45px;

        /*disable selection*/
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .toggle-bar,
    .toggle-bar::before,
    .toggle-bar::after,
    .toggle-wrap.active .toggle-bar,
    .toggle-wrap.active .toggle-bar::before,
    .toggle-wrap.active .toggle-bar::after {
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .toggle-bar {
        width: 38px;
        margin: 10px 0;
        position: relative;
        border-top: 6px solid white;
        display: block;
    }

    .toggle-bar::before,
    .toggle-bar::after {
        content: "";
        display: block;
        background: white;
        height: 6px;
        width: 38px;
        position: absolute;
        top: -16px;
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -ms-transform-origin: 13%;
        -webkit-transform-origin: 13%;
        transform-origin: 13%;
    }

    .toggle-bar::after {
        top: 4px;
    }

    .toggle-wrap.active .toggle-bar {
        border-top: 6px solid transparent;
    }

    .toggle-wrap.active .toggle-bar::before {
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .toggle-wrap.active .toggle-bar::after {
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    nav{
        background-color: #414141;
    }
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<nav class="navbar navbar-inverse navabar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="admin/login.php" class="navbar-brand"><span class="glyphicon glyphicon-user"></span><strong> ADMIN &nbsp; &nbsp; &nbsp;</strong></a>
            <a href=" " class="navbar-brand"><span class="glyphicon glyphicon-shopping-cart "></span> <strong>ONLINE SHOPPING</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <?php
                if (isset($_SESSION['email'])) {
                ?>

                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php
                } else {
                ?>


                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                }
                ?>

                <li><a href="feedback.php"><span class="glyphicon glyphicon-remove"></span> Feedback</a></li>
                <li><a href="contect_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
        </div>
        <div class="toggle-wrap" onclick="toggleMenu(this)">
            <span class="toggle-bar"></span>
            
        </div>

    </div>


</nav>


    <aside>
        <a href="mobile.php">Mobile</a>
        <a href="shirt.php">shirt</a>
        <a href="televition.php">TV</a>
        <a href="refrigrater.php">Home Appliences</a>
        <a href="watch.php">Watch</a>
        <a href="goggles.php">Goggles</a>
        <a href="camera.php">Camera</a>
        <a href="shoes.php">Shoes</a>
        <a href="computer.php">Computer</a>
    </aside>

    <script>
        function toggleMenu(e) {
            e.classList.toggle("active");
            document.querySelector("aside").classList.toggle("active");
        }
    </script>
</body>

</html>