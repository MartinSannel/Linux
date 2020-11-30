  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  
  <title> StroggeBloggen.tk </title>  
  
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
         <a href="ÖvrigaRecept.php" style="color: orange; "><h1> StroggeBloggen </h1></a>
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
        	<a href="ÖvrigaRecept.php" class="active">Övriga Recept</a>
        	<a href="KontaktaOss.php">Kontakta Oss</a>
          <div class="dropdown">
          </div> 
          <a href="javascript:void(0);" style="font-size:14px;" class="icon" onclick="myFunction()">&#127789;</a>
        </div>
      </div>
	
	<div class="start">
      <article>
        
        <h2> Mediokra recept</h2>
        
        <p> Det finns garanterat inget som är så smakfullt som falukorv men för att kunna njuta maximalt av falukorven behöver man ibland växla med andra mindre upphetsande maträtter. Dessa banala anrättningar delger du här. </p>';

        if(isset($_SESSION['username'])){
           echo '
        <form action="InskickOvrigaRecept.php" method="POST">

          <textarea type="text" class="RecNamn" placeholder="Namnge ditt recept" name="NamnRec" ></textarea>
          
          <textarea type="text" class="RecBeskr" placeholder="Beskriv ditt recept lite kort" name="Beskri" ></textarea>

          <textarea type="text" class="RecIngred" placeholder="Ingredienser" name="Ingred" ></textarea>

          <textarea type="text" class="RecInstruk" placeholder="Instruktioner" name="Instruk" ></textarea>

          <textarea type="text" class="RecSkapare" placeholder="Vem är ägare för detta recept?" name="Skapare" ></textarea>

          <button class="VisaKnapp" type="submit"> Lägg upp </button>
          
        </form>';
      } else{
        echo '
            Som en icke inloggad individ kan man inte ladda upp stroggerecept, var vänlig att skapa ett konto eller logga in uppe till höger.
        ';
      }

      echo '

        <form action="HamtaOvrigaRecept.php" method="POST">

          <input type="submit" value="Visa uppladdade recept" >
          
        </form>

      </article>

		  </article>
    <script src="script.js"></script>
</body>
</html>'
?>