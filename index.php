<?php
include __DIR__.'/partials/functions.php';
$response= '';

if(isset($_GET['passwordLength']) && $_GET['passwordLength'] !== ''){
    $response= generatePassword(intval($_GET['passwordLength']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-6">
                <div class="form-content input-group w-100">
                    <form class='d-flex flex-column w-100' action="index.php" method="get">
                        <label for="passwordLength">
                            <strong>Scegli la lunghezza della password da generare</strong>
                            <input class='form-control my-3' type="number" name="passwordLength" id="passwordLength">
                        </label>
                        <input class='align-self-center btn btn-primary' type="submit" value="Genera password">
                    </form>
                </div>
                <div class="response my-5">
                    <strong>La tua password è :</strong> <?php echo $response ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>