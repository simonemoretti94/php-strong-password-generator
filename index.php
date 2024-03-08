<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body class="bg-secondary bg-gradient">



    <div class="container min-vh-100 d-flex align-items-center justify-content-center">

        <form action="./server.php" method="get">
            <div class="wrapper d-flex  flex-row justify-content-center">
                <label class="text-text-capitalize me-1" for="password">password:</label>
                <input class="border border-1 text-center border rounded-1 " type="number" name="password" id="password" placeholder="write here your password" required value="5">
                <button class="btn btn-sm btn-primary ms-1">submit</button>
            </div>
        </form>

        <?php $tempPword = $_SESSION['newpword']; ?>

        <?php if (isset($tempPword) && !empty($tempPword)) : ?>
            <h2>Your password is <?php echo $_SESSION['newpword']; ?></h2>
        <?php endif; ?>

        <?php session_unset($_SESSION['newpword']) ?>
    </div>
</body>

</html>