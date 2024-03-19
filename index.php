<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// if (isset($_SESSION['password'])) {;

//     header('Location: ./result.php');
// }


if (isset($_GET['pwLength'])) {

    $array = [];

    include "./functions.php";

    for ($i = 0; $i < $_GET['pwLength']; $i++) {
        $num = rand(1, 4);

        if ($num == 1) {
            $array[] = chrRandom();
        } else if ($num == 2) {
            $array[] = chrRandomMin();
        } else if ($num == 3) {
            $array[] = numRandom();
        } else if ($num == 4) {
            $array[] = chrRandomSpec();
        }
    };

    $password = "";

    foreach ($array as $item) {
        $password .= $item;
    }

    session_start();
    $_SESSION['password'] = $password;

    if (isset($_SESSION['password'])) {;
        header('Location: ./result.php');
    }
} else {
    $array = [];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- bootsrtap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-4">

        <form action="" method="GET">

            <h1 class="pt-4">Password Generator</h1>

            <div class="mb-3">
                <label for="pw-length" class="form-label">Inserire lunghezza password</label>
                <input type="number" name="pwLength" class="form-control" id="pw-length" placeholder="Lunghezza">
            </div>

            <input type="submit" class="btn btn-danger">


        </form>


    </div>





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>