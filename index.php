<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script src="./assets/js/script.js" rel="script" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <?php include_once __DIR__ . '/parts/header.php'; ?>
    <?php $tempPword = $_SESSION['newpword1']; ?>

    <div class="container col-10 p-0 ">
        <?php if (!isset($tempPword) || !empty($tempPword)) : ?>
            <p id="p_parameters" class="mt-1">Nessun parametro valido inserito</p>
        <?php endif; ?>
    </div>

    <div class="container col-10 bg-light bg-gradient border border-3 d-flex flex-column  align-items-center justify-content-center">



        <form class="col-12" action="./server.php" method="get">
            <div id="first_wrapper" class="wrapper col-12 d-flex justify-content-start">
                <label class="col-8 text-text-capitalize me-1" for="passwordL">Lunghezza password:</label>
                <input id="input_password" class="col border border-1 text-center border rounded-1 " type="number" name="passwordL" id="passwordL" placeholder="write here your password" required value="">
            </div>

            <div id="second_wrapper" class="wrapper mt-3 d-flex justify-content-between ">
                <label class="col-8" for="y/n">Consenti ripetizioni di uno o più caratteri:</label>
                <div class="col-4" class="wrapper d-flex flex-column justify-content-between align-items-start ">
                    <div id="input_check_wrapper" class="wrapper d-flex flex-column justify-content-between ">

                        <div class="wrapper d-flex ">
                            <input class="form-check-input" type="radio" name="si" id="check_si" value="si">
                            <label class="ms-1" for="si">Sì</label>
                        </div>

                        <div class="wrapper d-flex ">
                            <input class="form-check-input" type="radio" name="no" id="check_no" value="no">
                            <label class="ms-1" for="No">No</label>
                        </div>

                    </div>

                    <div id="input_roundcheck_wrapper" class="wrapper mt-3 d-flex flex-column justify-content-evenly align-items-start">
                        <div class="wrapper d-flex ">
                            <input type="checkbox" id="lettere" name="lettere">
                            <label class="ms-1" for="lettere">Lettere</label>
                        </div>

                        <div class="wrapper d-flex ">
                            <input type="checkbox" id="numeri" name="numeri">
                            <label class="ms-1" for="Numeri">Numeri</label>
                        </div>

                        <div class="wrapper d-flex ">
                            <input type="checkbox" id="simboli" name="simboli">
                            <label class="ms-1" for="Simboli">Simboli</label>
                        </div>
                    </div>

                </div>

            </div>
            <div class="wrapper">
                <button class="btn btn-sm btn-primary ms-1">Invia</button>
                <button id="button_dismiss" class="btn btn-sm btn-secondary ms-1"><a href="./dismiss.php">Annulla</a></button>

            </div>
        </form>

    </div>
    <?php include_once __DIR__ . '/parts/footer.php'; ?>

    <?php session_unset() ?>
</body>

<style>
    button a {
        color: white;
        text-decoration: none;
    }

    #first_wrapper,
    #second_wrapper {
        flex-direction: row;
    }

    @media screen and (max-width: 776px) {

        #first_wrapper,
        #second_wrapper {
            flex-direction: column;
        }

        #input_roundcheck_wrapper {
            margin-bottom: .5rem;
        }
    }
</style>

</html>