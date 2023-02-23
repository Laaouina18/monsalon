<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
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

    // On instancie les produits
    $c = new client($db);
  
    
    if(!empty($_GET)){
      
        $c->Customer_reference = $_GET['Customer_refrence'];

        // On récupère les données
        $stmt = $c->getref();
    }
    // On vérifie si on a au moins 1 produit
    if($stmt->rowCount() > 0){
        // On initialise un tableau associatif
        $tableauClient = [];
        $tableauClient['client'] = [];

        // On parcourt les produits
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $client = [
                "FirstName" => $FirstName,
                "LastName" => $LastName,
                "Email" => $Email,
                "Address" => $Address,
                "City" => $City,
                "State"=>$State,
                "PhoneNumber"=>$PhoneNumber,
                "Customer_reference"=>$Customer_reference
            ];

            $tableauClient['client'][] = $client;
        }

        // On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($tableauClient);
    }

}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}