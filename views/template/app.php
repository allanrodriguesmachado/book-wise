<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Wise</title>
</head>
<body class="bg-stone-950 text-stone-200">

<?php require "views/template/header.php" ?>

<main class="mx-auto max-w-screen-lg space-x-7 p-4">
    <?php require "views/{$view}.php" ?>
</main>

</body>
</html>