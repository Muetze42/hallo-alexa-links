<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo_alexa Links</title>
    <link href="/css/app.css?t=<?= filemtime('css/app.css'); ?>" rel="stylesheet">
</head>
<body class="flex flex-col h-full">
<header class="text-center p-2">
    <h1 class="text-gray-100 text-3xl font-bold">
        hallo_alexa Links
    </h1>
</header>
<div id="content" class="flex-1 mx-auto p-4 max-w-3xl w-full">
    <?php

    $items = json_decode(file_get_contents(__DIR__.'/../config/links.json'), true);

    foreach ($items as $item) {
        ?>
        <a href="<?= $item['link'] ?>" class="custom-link focus:outline-none text-lg text-gray-100 py-4 px-5 rounded-xl border border-gray-100 hover:bg-purple-900 block w-full text-center" style="margin-bottom: 1rem" target="_blank" rel="noopener">
            <i class="fab <?= $item['icon'] ?>"></i>
            <?= $item['text'] ?>
        </a>
        <?php
    }

    ?>
</div>
<footer class="w-full text-center p-4 ">
<!--    <a href="https://hallo-alexa.de/" target="_blank">-->
        <img src="/img/logo-base-500px.png" alt="log" class="object-contain mx-auto mt-4" width="500" height="246">
<!--    </a>-->
</footer>
</body>
</html>