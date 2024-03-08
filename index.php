<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <?php include_once __DIR__ . '/parts/header.php'; ?>
    <?php $tempPword = $_SESSION['newpword']; ?>

    <div class="container col-10">
        <?php if (!isset($tempPword) || !empty($tempPword)) : ?>
            <p id="p_parameters">Nessun parametro valido inserito</p>
        <?php endif; ?>
    </div>

    <div class="container col-10 bg-light bg-gradient border border-3 d-flex flex-column  align-items-center justify-content-center">



        <form class="col-12" action="./server.php" method="get">
            <div class="wrapper col-12 d-flex  flex-row justify-content-between">
                <label class="text-text-capitalize me-1" for="password">password:</label>
                <input class="border border-1 text-center border rounded-1 " type="number" name="password" id="password" placeholder="write here your password" required value="5">
            </div>
            <button class="btn btn-sm btn-primary ms-1">submit</button>
        </form>



    </div>

    <div class="container">
        <?php if (isset($tempPword) && !empty($tempPword)) : ?>
            <h2 class="text-center text-white ">Your password is <?php echo $_SESSION['newpword']; ?></h2>
        <?php endif; ?>
    </div>

    <?php session_unset($_SESSION['newpword']) ?>
</body>

<style>
    /* body {
        background-color: #001632;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;

        & .container {
            >p#p_parameters {
                min-height: 30px;
                background-color: #cff4fc;
                color: #46aee3;

                text-align: left;
            }
        }
    } */
</style>

</html>