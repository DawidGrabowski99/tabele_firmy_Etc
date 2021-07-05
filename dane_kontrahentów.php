<!DOCTYPE html>
<html lang="pl">
    <head>
       <meta charset="utf-8" >
       <meta name="descripion" content="zadanie" />
       <link rel="stylesheet" href="style.css" />
       <title>Zadanie zdalne e-MSI</title>
   
     </head>
     <body>
         

         <div id="content">
         <div id="lewy">
            <ul>
                <li><a href="index.html">Różne kontrolki HTML </a>
                <li><a href="tabela_pracowników.html">Tabela Pracowników </a>
                <li><a href="tabela_faktur.html">Tabela Faktur VAT </a>
                <li><a href="tabela_delegacji_db.php">Tabela Delegacji BD </a>
                <li><a href="dane_kontrahentów.php">Dane kontrahentów</a>
              </ul>


         </div>
         <div id="prawy">
         
         <form action="dane_kontrahentów.php" method="post" autocomplete="off">
         <table id="taxCalc">
         <thead>
                <tr>
                    <th>NIP</th>
                    <th>REGON</th>
                    <th>NAZWA</th>
                    <th>CZY PŁATNIK VAT</th>
                    <th>ULICA</th>
                    <th>NUMER DOMU</th>
                    <th>NUMER MIESZKANIA</th>
                    
                </tr>
            </thead>
            <tr>
        
                <td>
                  
                    <input name="NIP" type="text"  autofocus="true">
                </td>
                <td>
                    <input name="REGON" type="text" >
                </td>
                <td><input name="NAZWA" type="text"></td>
                <td><input name="CzyplatnikVat" type="checkbox" value="Tak"></td>
                <td><input name="ULICA" type="text"></td>
                <td><input name="NUMERDOMU" type="text"></td>
                <td><input name="NUMERMIESZKANIA" type="text"></td>
              

              
                </tr>
                <input type="submit" value="wyślij" />
            </form>
            
                
                 </div>
                 <div id="panel">
            
                 <?php
                $servname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "zadanie_emsi";
                
                $conn = new mysqli($servname, $username, $password, $dbname);
                if ($conn->connect_error) {
                   die("Błąd połącznia". $conn->connect_error);
                }
                
                $NIP = $_POST['NIP'];
                $REGON = $_POST['REGON'];
                $NAZWA = $_POST['NAZWA'];
                $CZY = $_POST['CzyplatnikVat'];
                $ULICA = $_POST['ULICA'];
                $NUMERD = $_POST['NUMERDOMU'];
                $NUMERM = $_POST['NUMERMIESZKANIA'];
              
    
                $sql = "INSERT INTO danek (Lp, NIP, REGON, NAZWA, Czy_platnik_Vat, ULICA, NUMER_DOMU, NUMER_MIESZKANIA) VALUES ('','$NIP','$REGON','$NAZWA','$CZY','$ULICA','$NUMERD','$NUMERM')";
                $result = $conn->query($sql);
              

                $conn->close();
                 ?>


                 </div>
             
               
               
             
         </div>
                 
        
         <div id="stopka">

            
         </div>

        
     




     </body>










</html>