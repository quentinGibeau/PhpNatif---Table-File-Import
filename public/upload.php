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


            <?php

                if(($_FILES['file']['name'] != "")){
                    // création variable pour récupérer le chemin du dossier upload
                    $uploadFolder = 'upload/';
                    $file = $_FILES['file']['name'];
                    
                    $path = pathinfo($file);
                    $exten = $path['extension'];

                    $filename = $path['filename'];

                    $temp_name = $_FILES['file']['tmp_name'];
                    $path_filename_ext = $uploadFolder.$filename.'.'.$exten;

                        if(file_exists($path_filename_ext)){
                            echo "<header><div class='jumbotron text-center'>
                            <div class='container'>
                                <h3>Vous avez déjà uploader ce fichier</h3></div></div></header>";
                        } else {
                            move_uploaded_file($temp_name,$path_filename_ext);
                            echo "<header><div class='jumbotron text-center'>
                            <div class='container'>
                                <h3>Upload Réussi!</h3></div></div><header>";
                        }
                }

            ?>

            <div class="container mg-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Dossier</th>
                            <th scope="col">Extension</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // méthode scandir() pour lister les fichiers et dossier dans un dossier et retourne un tableau
                            $files = scandir('upload/');
                            // on liste les fichiers trouvé 
                            foreach($files as $key => $value){
                                ?>
                        <tr>
                            <td><?php echo $value; ?></td>
                            <td><?php echo $path_filename_ext; ?></td>
                            <td><?php echo $exten ?><td>
                            <td></td>
                        </tr>                          
                        
                        <?php   
                            } ?>                        

                    </tbody>
                </table>
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