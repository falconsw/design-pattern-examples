<?php

$arrFiles = array();

$handle = opendir(__DIR__ );
if ($handle) {
    while (($entry = readdir($handle)) !== false) {
        if($entry !== '.' && $entry !== '..' && preg_match('/\.php$/', $entry)){
            $arrFiles[] = str_replace('.php', '', $entry);
        }
    }
}

$path = $_GET['path'] ?? 'index';
if (!in_array($path, $arrFiles, true)) {
    $path = 'index';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Base Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Base Template Page</h1>
        <hr>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-title text-center">Navigation</h5>
                        <hr>
                        <div class="list-group">
                            <?php foreach ($arrFiles as $file) { ?>
                                <a class="list-group-item <?=$path === $file ? 'active' : '' ?>"  href="?path=<?php echo $file; ?>"><?php echo $file; ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5 class="text-center"><?= ucfirst($path) ?> Page</h5>
                        <hr>
                        <h6>File Path: <?=__DIR__ . '/' . $path . '.php'?></h6>
                        <hr>
                        <?php
                        if(file_exists(__DIR__ . '/' . $path . '.php') && $path !== 'index') {
                            include __DIR__ . '/' . $path . '.php';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
</body>
</html>
