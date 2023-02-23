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
    include_once '../model/clients.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $client = new client($db);

    // On récupère les informations envoyées
    $donnees = json_decode(file_get_contents("php://input"));
    
        // Ici on a reçu les données
        // On hydrate notre objet
       
        $client->FirstName= $donnees->FirstName;
        $client->LastName = $donnees->LastName;
        $client->Address = $donnees->Address;
        $client->City= $donnees->City;
        $client->Customer_reference=$donnees->Customer_reference;
        $client->Email = $donnees->Email;
        $client->State=$donnees->State;
        $client->Address = $donnees->Address;
        $client->PhoneNumber = $donnees->PhoneNumber;

        if($client->creer()){
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "L'ajout a été effectué", "data" => $client]);
        }else{
            // Ici la création n'a pas fonctionné
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "L'ajout n'a pas été effectué"]);         
        }
    }
