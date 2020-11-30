  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  
  <title> StroggeBloggen </title>  
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

<?php
session_start();
echo '<html>
      <head>
  
      </head>
      <body>
       
      <img src="https://media.giphy.com/media/IzRjm4uLSPmcosdq6F/giphy.gif" style="position: absolute; top: 0px; height: 120px; width: 300px; z-index: -10">
      <a href="GurkIndex.html"><div style="position: absolute; height: 130px; width: 100px; top: 0%; left: 5.2%">  </div></a>

       <div class="rubrik">
         <a href="KontaktaOss.php" style="color: orange; "><h1> StroggeBloggen </h1></a>
       </div>';
  
    if(isset($_SESSION['username'])){
      echo '
        <div class="Knapplådatvå">
          <div class="LogUt">
            <form action="LoggaUt.php" method="POST">
              
              <button id="LoggaUtKnapp" type="submit" class="LogRegKnapp"> Logga ut </button>
          
            </form>
          </div>
        </div>
        ';
    } else{
      echo '
          <div class="Knapplåda">
        <div class="Log">
          
          <button id="LoggaInKnapp" onclick="funcLog()" class="LogRegKnapp"> Logga in </button>

        
          <form action="LoginCheck.php" method="POST">
                      
            <div id="LogList">
            <input type="text" id="user" placeholder="Användarnamn" name="user">
            <br>
            <input type="password" id="pass" placeholder="Lösenord" name="pass">
            <br>
            <input type="submit" class="LogKnapp" value="Logga in">
            </div>
            
          </form>
        </div>

        <div class="Reg">

          <button id="RegistreraKnapp" onclick="funcReg()" class="LogRegKnapp"> Registrera </button>

          <form action="RegistrerCheck.php" method="POST">
          
            <div id="RegList">
            <input type="text" id="user" placeholder="Användarnamn" name="user">
            <br>
            <input type="password" id="pass" placeholder="Lösenord" name="pass">
            <br>
            <input type="submit" class="RegKnapp" value="Registrera">
            </div>
          
          </form>
        </div>
      </div>';
      }
	
echo '<div id="navbar">
        <div class="topnav" id="myTopnav">
          <a href="index.php" style="margin-left: 20%">Startsida</a>
			    <a href="Recept.php">Recept</a>
        	<a href="ÖvrigaRecept.php">Övriga Recept</a>
        	<a href="KontaktaOss.php" class="active">Kontakta Oss</a>
          <div class="dropdown">
          </div> 
          <a href="javascript:void(0);" style="font-size:14px;" class="icon" onclick="myFunction()">&#127789;</a>
        </div>
      </div>

	    <div class="start">
      <article>
        
        <h2> Om du har synpunkter tveka inte på att kontakta oss! </h2>
        
        <p> Tel. 072 276 11 57 </p> 
        <p> <a id="mail" href="mailto:StroggeHjalp@gmail.com"> Mail: StroggeHjalp@gmail.com </a> </p> 
        <p> Fax: +1 466 371 7462 </p>

        <img src="https://cdn.discordapp.com/attachments/238004614618677249/621729834326032404/Picture_1.jpg" alt="tech_support" height="350" width="100%">
        <i>Support: Youtubestjärnan "gurkaN"</i>
        
		  </article>
    <script src="script.js"></script>
</body>
</html>'
?>