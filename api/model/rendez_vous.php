<?php
class rendez_vous{
    // Connexion
    private $connexion;
    private $table = "rendez_vous";

    // object properties
    public $idr ;
    public $idclient;
    public $dater;
    public $temp;
   

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
     *
     * Créer un produit
     *
     * @return void
     */
    public function creer():bool{

        // Ecriture de la requête SQL en y insérant le nom de la table
        $sql = "INSERT INTO " . $this->table . " SET dater=:dater,temp=:temp,idclient=:idclient";

        // Préparation de la requête
        $query = $this->connexion->prepare($sql);

        // Protection contre les injections
        $this->temp=htmlspecialchars(strip_tags($this->temp));
        $this->dater=htmlspecialchars(strip_tags($this->dater));
        $this->idclient=htmlspecialchars(strip_tags($this->idclient));


        // Ajout des données protégées
        $query->bindParam(":dater", $this->dater);
        $query->bindParam(":temp", $this->temp);
        $query->bindParam(":idclient", $this->idclient);
       

        

        // Exécution de la requête
        if($query->execute()){
            return true;
        }
        return false;
    }
    public function lire(){
        // On écrit la requête
        $sql = "SELECT * FROM " . $this->table . " inner join customer on rendez_vous.idclient=customer.CustomerID where rendez_vous.idclient=:CustomerID";
      
     
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        $query->bindParam(':CustomerID', $this->idclient);
        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }
    /**
     * Lire un produit
     *
     * @return void
     */
    public function lireUn(){
        // On écrit la requête
        $sql = "SELECT *
     FROM " . $this->table . " Where rendez_vous.dater=:dater";
        // On prépare la requête
     
        $query = $this->connexion->prepare($sql);
       
        $query->bindParam(':dater', $this->dater);
     
    
        // On retourne le résultat
        $query->execute();
       
            return $query;
          
        
    }

    /**
     * Supprimer un produit
     *
     * @return void
     */
  public function supprimer():bool{
    // On écrit la requête
    $sql = "DELETE FROM " . $this->table . " WHERE rendez_vous.idr=:idr";

    // On prépare la requête
    $query = $this->connexion->prepare( $sql );

    // On attache l'id
    $query->bindParam(':idr', $this->idr);
 
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
        $sql = "UPDATE " . $this->table . " SET rendez_vous.dater=:dater,rendez_vous.temp=:temp
         WHERE idr =:idr";
        
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        
        // On sécurise les données
        $this->temp=htmlspecialchars(strip_tags($this->temp));
        $this->dater=htmlspecialchars(strip_tags($this->dater));
        $this->idr=htmlspecialchars(strip_tags($this->idr));
        
        // On attache les variables
        $query->bindParam(":temp", $this->temp);
        $query->bindParam(":dater", $this->dater);
        $query->bindParam(":idr", $this->idr);
   

        
        // On exécute
        if($query->execute()){
            return true;
        }
        
        return false;
    }

}