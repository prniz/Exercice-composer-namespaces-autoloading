<?php

    namespace App\Demo\classes;

    class Personne{

        private $nom;
        private $prenom;
        private $adresse;
        private $codepostal;
        private $pays;
        private $societe;


        public function __construct($data){

            $this->nom = $data["nom"];
            $this->prenom = $data["prenom"];
            $this->adresse = $data["adresse"];
            $this->codepostal = $data["codepostal"];
            $this->pays = $data["pays"];
            $this->societe = $data["societe"];
        }
        
        public function setNom($nom){
            $this-> nom = $nom;
        }
    
        public function getNom(){
            return $this-> nom ;
        }
    
        public function setPrenom($prenom){
            $this-> prenom = $prenom;
        }
    
        public function getPrenom(){
            return $this-> prenom ;
        }

        public function setAdresse($adresse){
            $this-> adresse = $adresse;
        }
    
        public function getAdresse(){
            return $this-> adresse ;
        }
    
        public function setCodepostal($cp){
            $this-> codepostal = $codepostal;
        }
    
        public function getCodepostal(){
            return $this-> codepostal ;
        }
    
    
        public function setPays($pays){
            $this-> pays = $pays;
        }
    
        public function getPays(){
            return $this-> pays;
        }

        public function setSociete($societe){
            $this-> societe = $societe;
        }
    
        public function getSociete(){
            return $this-> societe;
        }
    
        // public function setId($id){
        //     $this-> id = $id;
        // }
    
        // public function getId(){
        //     return $this-> id;
        // }
    }
?>