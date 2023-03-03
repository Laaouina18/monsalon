<?php
// Headers requis
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie que la méthode utilisée est correcte
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/Database.php';
    include_once '../model/rendez_vous.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $rendez = new rendez_vous($db);

    // On récupère l'id du produit
    $rendez->idr=$_GET['idr'];
   

    if(!empty($rendez->idr)){
       
        if($rendez->supprimer()){
            // Ici la suppression a fonctionné
            // On envoie un code 200
            http_response_code(503);
        
            echo json_encode(["message" => "La suppression a été effectuée","data" => $rendez]);
        }else{
            // Ici la création n'a pas fonctionné
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "La suppression n'a pas été effectuée"]);         
        }
    }
}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}