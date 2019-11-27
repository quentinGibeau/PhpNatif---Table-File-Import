<?php
    // on récupére le name space pour récupérer l'objet créer plus bas 
    use App\User;
?>
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

                    $pageParent = 'profil';
                    require('../app/template/nav.php');
                ?>

            <header>
                <?php
                    require '../app/class/User.class.php';

                    $pseudo = htmlentities(trim($_POST['pseudo']));
                    $password = htmlentities($_POST['password']);

                    // on test déclaration des variables , méthode isset() détermine sur la variable est null ou pas
                    if($pseudo == null && $password == null) {
                        header('Location: index.php');
                    } else {                             
                        // Nouvelle instance de l'objet User
                        $user = new User();
    
                        $user->setPseudo($pseudo);
                        $user->setPassword($password);
    
                        echo var_dump($user) . "<div class='jumbotron text-center'>
                            <div class='container'>
                                <h1> Welcome " . $user->getPseudo() ."</h1></div></div>";
                    }
                
                ?>
            </header>

            <div class="container text-center">
                    <form enctype="multipart/form-data" action="upload.php" method="POST">
                        <div class="input-group">
                            <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                            <input name="file" type="file" class="custom-file-input"/>
                            <label class="custom-file-label" for="file">Envoyez votre fichier </label>
                        </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" >Upload</button>
                            </div>                      
                    </form>
                      <!--  <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="file">
                                    <input type="hidden" class="custom-file-input" name="MAX_FILE_SIZE" value="20000">
                                    <label class="custom-file-label" for="file">Votre fichier</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="upload">Upload</button>
                                </div>
                            </div>
                        </form> -->
            </div>
            


            <footer class="page-footer font-small white pt-4" style="margin-top: 5em">
            <hr>
                <!-- Template Footer -->
                <?php
                    require('../app/template/footer.php');
                ?>
            </footer>




            <!-- Script Js BootStrap -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
            </body>
    </html>