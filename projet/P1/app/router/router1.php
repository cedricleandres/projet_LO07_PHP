
<!-- ----- debut Router1 -->
<?php
require ('/home/etu/tamgnoce/www/lo07_tp/projet/P1/app/controller/ControllerVin.php');
require ('/home/etu/tamgnoce/www/lo07_tp/projet/P1/app/controller/ControllerProducteur.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
 case "vinReadAll" :  

 case "vinReadOne" : 
     
 case "vinReadId" :  

 case "vinCreate" : 

 case "vinCreated" : 
 
 case "proposition":
     ControllerVin::$action();
  break;

 // Tache par défaut
 default:
     
        switch ($action) {
            case "producteurReadAll": 

            case "producteurReadId": 
                
            case "producteurReadOne": 

            case "producteurCreate": 

            case "producteurCreated":

            case "producteurReadRegion":
                         ControllerProducteur::$action();
        break;

        default:
                             
                 $action = "caveAccueil";
                 ControllerVin::$action();
                           
                           }
}

// --- Liste des méthodes autorisées



 


?>
<!-- ----- Fin Router1 -->

