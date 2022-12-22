<?php
require_once 'edit.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD приложение на PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/23cc510106.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" id="page_edit">
    <div class="row">
        <div class="col mt-5">
            <h5 class="title mt-5 mb-3">Редактировать</h5>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="" placeholder="Наименование">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="country" value="" placeholder="Производитель">
                </div>
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="price" value="" placeholder="Стоимость">
                </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <button type="submit" name="submit" class="btn btn-success">Обновить</button>
        </div>
        </form>
        </div>
    </div>
</div>
<script rel="stylesheet" href="js/bootstrap.bundle.min.js"></script>
</body>
</html>