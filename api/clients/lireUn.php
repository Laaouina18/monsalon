<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie que la méthode utilisée est correcte
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/database.php';
    include_once '../model/clients.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les clients
    $c = new client($db);

    // On récupère l'identifiant du client
    $c->CustomerID = $_GET['id'] ;

    // On set l'identifiant du client dans l'objet client
  

    // On récupère les données du client
    $stmt = $c->lireUn();

    // On vérifie si le client existe
    if($stmt->rowCount() > 0){
        // On récupère les données du client
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);

        // On initialise un tableau associatif
        $client = [
            "FirstName" => $FirstName,
            "LastName" => $LastName,
            "Email" => $Email,
            "Adress" => $Address,
            "City" => $City,
            "State" => $State,
            "PhoneNumber" => $PhoneNumber,
            "Customer_reference" => $Customer_reference
        ];

        // On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($client);
    } else {
        // On envoie le code réponse 404 Not found
        http_response_code(404);

        // On informe l'utilisateur que le client n'existe pas
        echo json_encode(array("message" => "Le client n'existe pas."));
    }

}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}