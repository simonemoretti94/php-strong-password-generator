<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <title>error</title>
</head>

<body>
    <?php include_once __DIR__ . '/parts/header.php' ?>

    <div class="container">
        <div class="row justify-content-center my-5">
            <h1 class="text-white text-center ">Whoops, an error occurred!</h1>
        </div>
    </div>

    <?php include_once __DIR__ . '/parts/footer.php'; ?>
</body>

<style>
    header {
        border-bottom: solid 1px white !important;
    }

    .container {
        min-height: calc(100vh - 150px);
    }
</style>

</html>