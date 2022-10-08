<?php 

    include 'vendor/autoload.php';

    use App\Demo\classes\Personne;
    use App\Demo\manager\PersonneManager;
?>
 
<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
   </head>
   <body>

        <h2 style="text-align: center">Tableau de personnes generées</h2>

        <div class="container-fluid">
            <table style="margin: 5% auto; width: 80%" class="table table-bordered table-striped">
                <thead class="table-success">
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Pays</th>
                    <th>Société</th>
                </thead>
                <tbody>
                    <?php

                        $Personnes = "";
                        $Personnes = PersonneManager::manage(3);

                        foreach($Personnes as $Personne){

                            $Personne = new Personne($Personne);

                            $lastname = $Personne->getNom();
                            $firstname = $Personne->getPrenom();
                            $adress = $Personne->getAdresse();
                            $postcode = $Personne->getCodepostal();
                            $country = $Personne->getPays();
                            $society = $Personne->getSociete();

                            echo "<tr>";

                            echo "<td>".$lastname."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$adress."</td>";
                            echo "<td>".$postcode."</td>";
                            echo "<td>".$country."</td>";
                            echo "<td>".$society."</td>";
                            
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
   </body>
   </html>

