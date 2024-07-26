<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
}
html,
body {
  background: #303030;
  color: #303030;
  height: 100%;
  width: 100%;
  positon: absolute;
  font: normal 1em "Arial";
}
nav {
  padding: 10px;
  position: relative;
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
  width: 300px;
  height: 100%;
  background: #383838;
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
  display: block;
  padding: 1.2rem;
  text-decoration: none;
  font-size: 1rem;
  color: #818181;
  border-bottom: 1px solid #414141;
}
.toggle-wrap {
  padding: 10px;
  position: relative;
  cursor: pointer;
  float: left;

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
  border-top: 6px solid #303030;
  display: block;
}
.toggle-bar::before,
.toggle-bar::after {
  content: "";
  display: block;
  background: #303030;
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

    </style>
</head>
<body>
<nav>
  <div class="toggle-wrap" onclick="toggleMenu(this)">
    <span class="toggle-bar"></span>
  </div>
  
</nav>
<aside>
  <a href="mobile.php">Mobile</a>
  <a href="shirt.php">shirt</a>
  <a href="#">About</a>
</aside>

<script>

function toggleMenu(e) {
  e.classList.toggle("active");
  document.querySelector("aside").classList.toggle("active");
}

</script>
</body>
</html>