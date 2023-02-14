<?php
class client{
    // Connexion
    private $connexion;
    private $table = "customer";

    // object properties
    public $CustomerID ;
    public $FirstName;
    public $LastName;
    public $Email;
    public $PhoneNumber;
    public $Address;
    public $City;
    public $State;
    public $Customer_reference;

    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }

    /**
     * Lecture des produits
     *
     * @return void
     */
    public function lire(){
        // On écrit la requête
        $sql = "SELECT customer.FirstName,customer.LastName,customer.Email,customer.PhoneNumber,
        customer.Address,customer.City,customer.State,customer.Customer_reference,customer.State
     FROM " . $this->table . " ";

        // On prépare la requête
        $query = $this->connexion->query($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }

    /**
     * Créer un produit
     *
     * @return void
     */
    public function creer():bool{

        // Ecriture de la requête SQL en y insérant le nom de la table
        $sql = "INSERT INTO " . $this->table . " SET LastName=:LastName,
         FirstName=:FirstName, Address=:Address, City=:City,
          Customer_reference=:Customer_reference,State=:State,
          PhoneNumber=:PhoneNumber,Email=:Email ";

        // Préparation de la requête
        $query = $this->connexion->prepare($sql);

        // Protection contre les injections
        $this->FirstName=htmlspecialchars(strip_tags($this->FirstName));
        $this->LastName=htmlspecialchars(strip_tags($this->LastName));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->PhoneNumber=htmlspecialchars(strip_tags($this->PhoneNumber));
        $this->Address=htmlspecialchars(strip_tags($this->Address));
        $this->City = htmlspecialchars(strip_tags($this->City));
        $this->Customer_reference = htmlspecialchars(strip_tags($this->Customer_reference));
        $this->State = htmlspecialchars(strip_tags($this->State));

        // Ajout des données protégées
        $query->bindParam(":FirstName", $this->FirstName);
        $query->bindParam(":LastName", $this->LastName);
        $query->bindParam(":Email", $this->Email);
        $query->bindParam(":PhoneNumber", $this->PhoneNumber);
        $query->bindParam(":Address", $this->Address);
        $query->bindParam(":City", $this->City);
        $query->bindParam(":Customer_reference", $this->Customer_reference);
        $query->bindParam(":State", $this->State);

        

        // Exécution de la requête
        if($query->execute()){
            return true;
        }
        return false;
    }

    /**
     * Lire un produit
     *
     * @return void
     */
    public function lireUn(){
        // On écrit la requête
        $sql = "SELECT * FROM " . $this->table ;

        // On prépare la requête
        $query = $this->connexion->prepare( $sql );

        // On attache l'id
        $query->bindParam(1, $this->CustomerID);

        // On exécute la requête
        $query->execute();

        // on récupère la ligne
        $row = $query->fetch(PDO::FETCH_ASSOC);

        // On hydrate l'objet
        $this->FirstName = $row['FirstName'];
        $this->LastName = $row['LastName'];
        $this->Email = $row['Email'];
        $this->State = $row['State'];
        $this->Address= $row['Adress'];
        $this->City = $row['City'];
        $this->PhoneNumber = $row['categories_id'];
        $this->Customer_reference = $row['Customer_reference '];
        
    }

    /**
     * Supprimer un produit
     *
     * @return void
     */
  public function supprimer():bool{
    // On écrit la requête
    $sql = "DELETE FROM " . $this->table . " WHERE id = :id";

    // On prépare la requête
    $query = $this->connexion->prepare( $sql );

    // On attache l'id
    $query->bindParam(':id', $this->CustomerID);

    // On exécute la requête
    if($query->execute()){
        return true;
    }

    return false;
}

    /**
     * Mettre à jour un produit
     *
     * @return void
     */
    public function modifier():bool{
        // On écrit la requête
        $sql = "UPDATE " . $this->table . " SET FirstName = :Firstname, LastName = :LastName,  Address= :Address,    
         PhoneNumber= :PhoneNumber, City=:City,State=:State,
         Customer_reference=:Customer_reference,Email=:Email WHERE CustomerID = :CustomerID";
        
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        
        // On sécurise les données
        $this->FirstName=htmlspecialchars(strip_tags($this->FirstName));
        $this->LastName=htmlspecialchars(strip_tags($this->LastName));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->Address=htmlspecialchars(strip_tags($this->Address));
        $this->PhoneNumber=htmlspecialchars(strip_tags($this->PhoneNumber));
        $this->City=htmlspecialchars(strip_tags($this->City));
        $this->State=htmlspecialchars(strip_tags($this->State));
        $this->Customer_reference=htmlspecialchars(strip_tags($this->Customer_reference));
        $this->CustomerID=htmlspecialchars(strip_tags($this->CustomerID));
        
        // On attache les variables
        $query->bindParam(":CustomerID", $this->CustomerID);
        $query->bindParam(":FirstName", $this->FirstName);
        $query->bindParam(":LastName", $this->LastName);
        $query->bindParam(":Email", $this->Email);
        $query->bindParam(":PhoneNumber", $this->PhoneNumber);
        $query->bindParam(":Address", $this->Address);
        $query->bindParam(":City", $this->City);
        $query->bindParam(":Customer_reference", $this->Customer_reference);
        $query->bindParam(":State", $this->State);

        
        // On exécute
        if($query->execute()){
            return true;
        }
        
        return false;
    }

}