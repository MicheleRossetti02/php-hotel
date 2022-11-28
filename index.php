<?php
// Stampare tutti i nostri hotel con tutti i dati disponibili.
// Iniziate in modo graduale. 
// Prima stampate in pagina i dati, senza preoccuparvi dello stile.
// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

// Bonus: 1
// Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
// Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <title>Document</title>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <link rel='stylesheet' href=''>
    <style>
        .output {

            flex-direction: column;
        }

        .red {
            color: red;
        }

        .green {
            color: green;
        }
    </style>
</head>

<body>


    <header id="site_header"></header>
    <!-- /#site_header -->
    <main id="site_main">
        <div class="container">
            <div class="row">
                <div class="col-2 output d-flex">
                    <h4>name</h4>
                    <h4>description</h4>
                    <h4>vote</h4>
                    <h4>distance to center</h4>

                </div>
                <div class="col">
                    <h3><?= $hotel['name'] ?> </h3>
                    <h3><?= $hotel['description'] ?> </h3>
                    <div class="parking">
                        <?php if ($hotel['parking']) { ?>
                            <h3 class="green">avaible</h3>
                        <?php } else { ?>
                            <h3 class="red">not avaible</h3>
                        <?php } ?>

                    </div>
                    <h3><?= $hotel['distance_to_center'] ?> </h3>

                </div>
            </div>
        </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"> </footer>
    <!-- /#site_footer -->


    <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script>
    <script src=''></script>
</body>

</html>