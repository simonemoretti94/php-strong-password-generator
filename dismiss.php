<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <title>dismiss</title>
</head>

<body>

    <?php include_once  __DIR__ . '/parts/header.php' ?>

    <main>
        <div class="container">
            <h1>Session dismissed by the user</h1>
        </div>
    </main>

    <?php include_once __DIR__ . '/parts/footer.php' ?>

</body>
<style>
    header {
        border-bottom: solid 1px white !important;
    }

    main {
        min-height: calc(100vh - 200px);

        & h1 {
            margin-top: 3rem;
            color: white;
            text-align: center;
        }
    }
</style>

</html>