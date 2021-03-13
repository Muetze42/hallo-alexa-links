<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo_alexa Links</title>
    <link href="/css/app.css?t=<?= filemtime('css/app.css'); ?>" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#3e1a57">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#3e1a57">
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
        <a href="<?= $item['link'] ?>" class="custom-link focus:outline-none text-lg text-gray-100 py-4 px-5 rounded-xl border border-gray-100 hover:bg-purple-900 block w-full text-center" target="_blank" rel="noopener">
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