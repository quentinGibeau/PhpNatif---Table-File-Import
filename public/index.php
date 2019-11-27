<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Php Natif</title>

            <meta charset="UTF-8">
            <meta name="description" content=" ">
            <meta name="keywords" content=" ">
        <!-- Link Css Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" 
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        </head>
            <body>

                <!-- Template NavBar -->
                <?php
                    $pageParent = "index";
                    require('../app/template/nav.php');                  
                ?>

            <header>
                <div class="jumbotron text-center">
                    <div class="container">
                        <h1>Welcome</h1>
                        <h4>Connect with a fake nickname and password<br>To import your files</h4>
                    </div>
                </div>
            </header>

            <div class="container" style="margin-top: 5em">
                <div class="row">
                    <div class="col-sm">
                        <h3>Connectez-vous</h3>      
                        <hr>              
                    </div>
                    <div class="col-sm">
                        <form method="POST" action="accueil.php">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="pseudoHelp" placeholder="Entrer votre pseudo">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de Passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de Passe">
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                        </form>

                    </div>
                </div>
            </div>




            <footer class="page-footer font-small white pt-4" style="margin-top: 5em">
            <hr>
                <!-- Template Footer -->
                <?php
                    require('../app/template/footer.php');
                ?>
            </footer>

            
                <?php

                    
                    /* Fonction Tableau 
                            > array_push()
                            > array_pop() ou array_shift()
                            > in_array()
                    

                    // tableau simple / liste
                    $classe = [];
                    
                    // tableau complexe
                    $eleve = ['prenom' => 'Quentin',
                              'nom' => 'Gibeau',
                            ];

                    $eleve2 = ['prenom' => 'Laura',
                            'nom' => 'Pastorelli',
                            'notes' => [
                                10,20,15
                            ]
                          ];

                          $classe = [$eleve, $eleve2];

                          foreach($eleve2 as $key => $value){
                              var_dump("$key:$value\n");
                          }

                   var_dump($classe);

                    echo $classe[0]['prenom'] . "<br>";
                          $classe[0]['notes'][] = 3;
                          $classe[0]['notes'][] = 5;
                          $classe[0]['notes'][] = 18;
                    var_dump($classe[0]['notes']);

                    foreach($eleve as $key => $value)
                        echo '<p>'.$key. ' / ' . $value . '</p>';
                    
                    
                    $fichier = "/dossier/fichiers/fichier.jpg";
                    $nom_fichier = array_pop(explode('/', $fichier));

                    $nom_extension = pathinfo($fichier, PATHINFO_EXTENSION);
                    echo $nom_extension;

                    echo '<br>' . $nom_fichier . '<br>';

                    $nom_dossier = dirname($fichier);
                    echo $nom_dossier . '<br>';*/


                ?>




            <!-- Script Js BootStrap -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
            </body>
    </html>