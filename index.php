<?php
require_once 'config.php';
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
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <form action="" method="post" class="d-flex">
                <input class="form-control  me-2 mb-3" type="text" name="search"  placeholder="Search" >

                <div class="d-grid gap-2 col-2 ">
                <button class="btn btn-outline-success btn-sm btn_h" type="submit" >Search</button>
                </div>
            </form>
            <?php
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $query = "SELECT * FROM `fruts` WHERE `name` LIKE '%$searchKey%'";
            }else
                $query = "SELECT * FROM `fruts`";
                $results = mysqli_query($db, $query);

            ?>
            <a class="btn btn-success mb-3 btn_l" href="page.php"><i class="far fa-plus"></i></a>
            <table class="table shadow">
                <thead class="thead-dark">
                <tr>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Производитель</th>
                    <th>Стоимость</th>
                    <th>Действие</th>
                    <?php while($row = mysqli_fetch_object($results)){?>
                <tr>
                    <td><?=$row->id ?></td>
                    <td><?=$row->name ?></td>
                    <td><?=$row->country ?></td>
                    <td><?=$row->price ?></td>
                    <td>
                        <a href="page_edit.php?up_value=<?=$row->id ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="delete.php?id_value=<?=$row->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr> <?php } ?>
                </thead>
            </table>
        </div>
    </div>
</div>
<script rel="stylesheet" href="js/bootstrap.bundle.min.js"></script>
</body>
</html>