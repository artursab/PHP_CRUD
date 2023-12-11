<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="btn btn-primary" href="./create.php" role="button">New Client</a><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "myshop";

                $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("". $conn->connect_error);
                    }

                $sql = "SELECT * FROM clients";
                $result = $con->query($sql);
                
                if (!$result) {
                    die("". $con->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo" 
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                        <a class='btn btn-primary btn-sm' 
                        href='./edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' 
                        href='./delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>";
                }


                ?>
                <tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>bill.asda@gmail.com</td>
                    <td>+23212313213</td>
                    <td>New Ypur, Usa</td>
                    <td>18/05/2020</td>
                    <td>
                        <a href="btn btn-primary btn-sm" href="./edit.php">Edit</a>
                        <a href="btn btn-primary btn-sm" href="./delete.php">Delete</a>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>
</body>
</html>