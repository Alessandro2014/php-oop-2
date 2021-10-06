<?php require_once __DIR__ . '/models/User.php' ?>
<?php require_once __DIR__ . '/models/Prime.php' ?>
<?php require_once __DIR__ . '/models/Occasional.php' ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- SEZIONE USER PRIME -->
        <section>
            <?php $prime = new Prime('Antonio', 'Verdi', 'a.verdi@email.it', 45, 20, '46372 3838 3939'); ?>
            <h2><?= $prime->getWelcome() ?></h2>
            <p><?= $prime->getDiscount() ?></p>
            <p>Hai registrato la carta di credito n: <?= $prime->getCreditCard() ?></p>


        </section>
        <!-- SEZIONE USER OCCASIONALE -->
        <section>
            <?php $occasional = new Occasional('Fabio', 'Bianchi', 'f.bianchi@email.it', 32, 60, 'Standard'); ?>
            <h2><?= $occasional->getWelcome() ?></h2>
            <p><?= $occasional->getExpedition() ?></p>
            <p><?= $occasional->getAmount() ?></p>


        </section>
    </main>
</body>

</html>