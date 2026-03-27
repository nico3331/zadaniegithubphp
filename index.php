<?php
    $conn = new mysqli("localhost", "root", "", "bazamyk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 200px;
            height: 100px;
        }
        table{
            border-collapse: collapse;
        }

        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Gromady id</th>
            <th>Odzywianie id</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
            <th>Czy zagrożony</th>
            <th>Obraz</th>
        </tr>
        <?php
            $sql = "SELECT * FROM zwierzeta";
            $result = $conn->query($sql);
            while($row = $result->fetch_row()){
                echo
                "
                <tr>
                    <td>{$row[0]}</td>
                    <td>{$row[1]}</td>
                    <td>{$row[2]}</td>
                    <td>{$row[3]}</td>
                    <td>{$row[4]}</td>
                    <td>{$row[5]}</td>
                    <td><img src='{$row[6]}'></td>
                </tr>
                ";
            }
        ?>

    </table>
</body>
</html>

<?php
    $conn -> close();
?>