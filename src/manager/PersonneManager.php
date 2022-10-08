<?php
    
    namespace App\Demo\manager;

    use Faker\Factory;

    class PersonneManager{

        private $faker;

        public function __construct(){
            
        }
        
        public static function manage($nombre){

            $faker = Factory::create();

            $tab = array();

            for($i = 0; $i<$nombre; $i++){

                $tab[$i]["nom"]            = $faker->firstName(); //Prénom
                $tab[$i]["prenom"]         = $faker->lastName(); //Nom
                $tab[$i]["adresse"]        = $faker->address();
                $tab[$i]["codepostal"]     = $faker->postcode();
                $tab[$i]["pays"]           = $faker->country();
                $tab[$i]["societe"]        = $faker->company();

            }

            return $tab;

        }
    }

