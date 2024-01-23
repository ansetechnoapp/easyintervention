<?php

namespace App\Config_connect;

use PDO;
use PDOException;
use dataConfig;

require "../config/dataConfig.php";


class database extends dataConfig{

    protected $pdo_Connect;
    
    public function __construct(){

      if (!isset($this->pdo_Connect)) {
        try {
              $link = new PDO('mysql:host='.$this->host.';port=3306;dbname='.$this->database.'',$this->user, $this->password,
              array(PDO::ATTR_PERSISTENT=>true));
              $link->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
              $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
              $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
              $link->exec("SET CHARACTER SET utf8");
              $this->pdo_Connect  =  $link;
            } 
        catch (PDOException $e) {
                    echo "Erreur: ".$e->getMessage()."<br/><br/>" ;
                    die("Connection error...".$e->getMessage());
                                 }
                }                
        }

        public function requete(string $sql, array $attributs = null)
{

    // On vérifie si on a des attributs
    if($attributs !== null){
        // Requête préparée
        $query = $this->pdo_Connect->prepare($sql);
        $query->execute($attributs);
        return $query;
    }else{
        // Requête simple
        return $this->pdo_Connect->query($sql);
    }
}   
        public function dd($variable) {
          echo '<pre>';
          var_dump($variable);
          echo '<pre>';
          die();
        }


         /* protected function returnResult($result) {
          if ($result) {
           return $result;
           }else {
           echo "Erreur : <br>" .$result->getMessage()."<br/><br/>";
           }}
           protected function executeFetchPDO($result) {
            $result = $result->execute();
            $result = $result->fetchAll();
            return $this->returnResult($result);
           }

         protected function executePDO($sqlQuery) {
         $result =  $this->pdo_Connect->prepare($sqlQuery);
         $result = $result->execute();
         return $this->returnResult($result,$sqlQuery);
         }
        protected function executeParamPDO($result,$sqlQuery) {
         $result = $result->execute();
         return $this->returnResult($result,$sqlQuery);
        }  */  

  }
    ?>

