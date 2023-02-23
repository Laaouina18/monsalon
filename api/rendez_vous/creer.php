<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie la méthode
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/Database.php';
    include_once '../model/Rendez_vous.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les rendez-vous
    $rendezVous = new Rendez_vous($db);

    // On récupère les informations envoyées
    $donnees = json_decode(file_get_contents("php://input"));
   
    // On vérifie que toutes les données ont été fournies
    if(!empty($donnees->dater) && !empty($donnees->temp)){
        // On hydrate notre objet
        $rendezVous->dater = $donnees->dater;
        $rendezVous->temp = $donnees->temp;
        $rendezVous->idclient=$donnees->idclient;

        if($rendezVous->creer()){
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "Le rendez-vous a été pris", "data" => $rendezVous]);
        }else{
            // Ici la création n'a pas fonctionné
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "Le rendez-vous n'a pas pu être pris"]);         
        }
    } else {
        // Ici toutes les données n'ont pas été fournies
        // On envoie un code 400
        http_response_code(400);
        echo json_encode(["message" => "Toutes les données sont nécessaires pour prendre un rendez-vous"]);
    }
}