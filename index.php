<?php 

require 'Db.php';

$db = new Db();
$data = $db->viewData();

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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        </head>

        <body>

            <?php require 'header.php'; ?>
            

            <main>
                
                <div class="searchbar">
                    <form action="search.php" method="POST">
                    <input type="text" placeholder="Search..." id="searchbar" name="title" oninput=search(this.value)>
                    <button type="submit"><span class="material-symbols-outlined">search</span></button>
                    </form>
                </div>

   
                <section class="products" id="products">

                    <div class="box-container">
                        
                        
                            
                      
                        
                    </div> 

                </section>

            </main>

            <script src="index.js"></script>
        </body>
    </html>
