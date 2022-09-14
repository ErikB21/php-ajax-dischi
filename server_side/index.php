<!-- Prima Versione:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della pagina 
ci saranno tutti i dischi. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image/favicon.ico">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Disc Music</title>
</head>
<body>
    <section class="eb_heig">
        <header class="container-fluid p-0">
            <nav class="d-flex align-items-center">
                <div class="square mx-2">
                    <img src="../image/logo_spotify_icon_143182.ico" alt="">
                </div>
            </nav>
        </header>

        


        <main class="container-fluid px-0 m-auto d-flex flex-wrap justify-content-center">
            <?php
                include __DIR__ . "/../database.php";//includo il mio Array presente in un altro file
               foreach($database as $disc){//applico un ciclo
                   
                    // che stamperà la mia card dei dischi in modo dinamico
                    echo '
                    <div class="card">' .
                        '<img src="'. $disc['poster'] . '" class="card-img-top"/>' . 
                        
                        '<div class="card-body d-flex flex-column justify-content-center">' . 
                            '<h5 class="text-light card-title">' . $disc["title"] . '</h5>' .
                            '<span class="text-secondary card-text">' . $disc["author"] . '</span>' .
                            '<span class="text-secondary card-text">' . $disc["year"] . '</span>' .
                        '</div>' .
                    '</div>';
                }
            ?>
            
        </main>
    </section>


    
</body>
</html>