<?php
   try{
       $pdo = new PDO("mysql:host=localhost;dbname=informacion", "root", '741852');
       echo "Connet Successfully.";
   }catch(PDOException $e){
       die("Deu ruim." . $e->getMessage());
   }
   ?>