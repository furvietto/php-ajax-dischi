<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Passate a questa solo dopo aver fatto la prima milestone
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
Fate prima un diagramma come abbiamo visto assieme e poi solo dopo passate a creare i file che vi servono, provate prima ad includere anche con un banale echo pippo nel file, poi inserite i dati necessari -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>php-ajax-dischi</title>
</head>
<body>
    <!-- header -->
   <?php include_once __DIR__. "/partial/header.php" ?>
    <!-- main -->
    <?php include_once __DIR__. "/partial/main.php" ?>
    
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>