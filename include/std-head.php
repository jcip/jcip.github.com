<?php
    $isLocal = isset($_GET["local"]);
    $prefix = $isLocal ? "" : "/";

    $minified = $debug ? "" : ".min";
    $syAnalyticsId = "UA-2333911-2";
    // Outdented line below is to get correct indentation
    // in the file that includes this file.
?>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="Seat Yourself">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

    <link rel="stylesheet" href="/css/bootstrap<?= $minified ?>.css">
    <link rel="stylesheet" href="/css/bootstrap-theme<?= $minified ?>.css">
    <link rel="stylesheet" href="<?= $prefix ?>css/sy-theme.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv<?= $minified ?>.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond<?= $minified ?>.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?= $syAnalyticsId ?>', 'auto');
      ga('send', 'pageview');
    </script>
