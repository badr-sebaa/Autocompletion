<?php 

require 'Db.php';

$db = new Db();

$id_manga = $_GET['id_manga'];



$data = $db->searchDataById($id_manga);

?>


<!DOCTYPE html>

    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>autocompletion</title>
            <link rel="stylesheet" href="css/header.css">
            <link rel="stylesheet" href="css/index.css">
            <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        </head>

        <body>

            <?php require 'header.php'; ?>
            

            <main style="margin-top:5%;">
				<button  style="margin-left:40%;width:20%" onclick="window.location.href='index.php'">BACK !</button>
				
                <section class="products" id="products">

                    <div class="box-container">
                        
						<?php foreach($data as $datum){?>
                        
                        <div class="box">
                                <div class="image">
                                   <img src="<?= $datum["main_picturemedium"];?>"alt="">
                                </div>

                                <div class="content">
                                    <h3> <?= $datum["title"];?></h3>
                                    <div class="price"><?= $datum["mean"];?></div>
									<div> <p style="color:white;"> <?= $datum["synopsis"];?> </p> </div>
                                </div>
                            </div>
						
                      <?php ;}?>
                        
                    </div> 

                </section>

            </main>

            <script src="index.js"></script>
        </body>
    </html>
