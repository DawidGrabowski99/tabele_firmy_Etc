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
         <?php
         $servname = "localhost";
         $username = "root";
         $password = "";
         $dbname = "zadanie_emsi";
         
         $conn = new mysqli($servname, $username, $password, $dbname);
         if ($conn->connect_error) {
            die("Błąd połącznia". $conn->connect_error);
         
         }
         $sql = "SELECT * FROM `delegacje db` ";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
             echo  "<table>
               <thead>
               <tr> <th>Lp. <th> Imię i Nazwisko <th>Data od <th> Data do <th>Miejsce wyjazdu <th>Miejsce przyjazdu
               <tbody>".
               "<tr> <th>" .$row["Lp."]. "<td>".$row["Imię i Nazwisko"].  "<td>".$row["Data od"]. "<td>" .$row["Data do"]."<td>".$row["Miejsce wyjazdu"]."<td>".$row["Miejsce przyjazdu"]."
              
               </table> <style> table, td { border: 1px solid black; } </style>";
              
            }
         }
       
          $conn->close();
         ?>
         </div>
        </div>
        
         <div id="stopka">

           
         </div>

        





     </body>










</html>