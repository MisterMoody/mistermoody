/* HTML */
/* 
    <!-- // HTML Global NAVIGATION *** -->
    <!--<header class="topnav" id="myTopnav">
      <a href="index" class="active"><i class="fa fa-home"></i> Mister Moody</a>
      <a href="about">About</a>
      <a href="portfolio">Portfolio</a>
      <a href="contact">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="topNav()"><i class="fa fa-bars responsive"></i></a>
    </header>-->
    
    
    <!-- \\\\ Top <nav> Script ******* -->
    <script src="js/topNav.js"></script>
*/


/* CSS */   
/*    <!-- // Global NAV CSS ********* -->
.topnav {overflow: hidden;}
.topnav a {
  display: inline-block;
  color: #fff;
  text-align: center;
  margin: 8px 0;
  padding: 0 0.2em;
  text-decoration: none;
  font-size: 1.5em;
  border-bottom: none;
}
.topnav a:first-child {float: right;}
.topnav a:hover {
	transition-duration: 0.8s;
}
header {
  margin: 0; padding: 0 5em;
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  z-index: 100;
}
header.topnav > .active {
  color: white;
}
.topnav .icon {display: none;}
fa-home {padding-right: 75px;}
@media screen and (max-width: 800px) {
  header {padding: 0 1em;}
  .topnav a {font-size: 1em;}
  .topnav a:first-child {float: left;}
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .fa-home, .fa-bars {color: #fff;}
}
*/


/* JavaScript */
/*    <!-- // Global NAV <script> *** -->
function topNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
*/