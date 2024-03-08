<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <title>success</title>
</head>

<body>
    <?php include_once __DIR__ . '/parts/header.php' ?>
    <?php session_start(); ?>
    <?php $tempPword = $_SESSION['newpword']; ?>

    <div class="container">
        <div class="row justify-content-center my-5">
            <?php if (isset($tempPword) && !empty($tempPword)) : ?>
                <h2 class="text-center text-white ">Your password is <?php echo $_SESSION['newpword']; ?></h2>
            <?php endif; ?>
        </div>
    </div>
</body>

<?php session_unset() ?>

<style>
    header {
        border-bottom: solid 1px white !important;
    }

    .container {
        min-height: calc(100vh - 150px);
    }
</style>

</html>