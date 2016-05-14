<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/app/templates/css/bootstrap.css">
    <link rel="stylesheet" href="/app/templates/css/styles.css">
    <link href="/app/templates/css/jquery-ui.css" rel="stylesheet">
    <script src="/app/templates/js/jquery-1.10.2.js"></script>
    <script src="/app/templates/js/bootstrap.js"></script>
    <script src="/app/templates/js/scripts.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false"
                        aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">News</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/admin">Admin</a></li>

                    <!-- <?php /*if(logged_in()):*/ ?>
                        <li><a href="logout.php">Log Out</a></li>
                    --><?php /*endif*/ ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clear"></div>
    <?= $content ?>
</div>
</body>
</html>
