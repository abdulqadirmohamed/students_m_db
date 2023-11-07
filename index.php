<?php
include 'conn.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="form-container">
        <form action="register.php" method="POST">
            <input type="text" placeholder="Fullname" name="name">
            <input type="text" placeholder="class" name="class">
            <input type="text" placeholder="phone" name="phone">
            <button type="submit" name="register">Submit</button>
        </form>
    </div>
    <h1>Students</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['class']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                        </td>
                    </tr>
              <?php  }?>
            
        </tbody>
    </table>
</body>
</html>