<?
session_start();
    if (!$_SESSION['user']) {    
        header('Location: Auth.php');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th,
    td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
        text-align: center;
    }
</style>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Discipline</th>
            <th>Score</th>
        </tr>

        <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'pupils');
        $products = mysqli_query($connect, "SELECT * FROM `pupils`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product) {
        ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3>Add new product</h3>
    <form action="vendor/create.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Discipline</p>
        <input type="text" name="discipline">
        <p>Score</p>
        <input type="number" name="score"> <br> <br>
        <button type="submit">Add new score</button>
    </form>
    <br>
    <a href="vendor/logout.php">Log Out</a>
</body>

</html>