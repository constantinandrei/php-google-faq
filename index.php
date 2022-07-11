<?php
$linksInNav = ['Introduzione', 'Norme sulla privacy', 'Termini di servizio', 'Tecnologie', 'Domande frequenti'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domande frequenti - Privacy e termini - Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="py-3">
        <div class="logo-container ms-3">
            <img src="google.svg" alt="">
        </div>
        <h3 class="ms-2"><a class="text-muted" href="#">Privacy e termini</a></h3>
        <ul class="nav">
            <?php foreach ($linksInNav as $i => $link){ ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo $i === count($linksInNav) - 1 ? "active" : "disabled" ?>" aria-current="page" href="#"><?php echo $link ?></a>
                </li>
            <?php } ?>
        </ul>
        <hr class="m-0">
    </nav>
    
</body>
</html>