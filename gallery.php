<?php
    include 'conn.php';
    if(isset($_POST['upload'])){
        $image = $_FILES['image']['name'];
        $fileTempName = $_FILES['image']['tmp_name'];

        $sql = "INSERT INTO gallery(image) VALUES('$image')";
        $query = mysqli_query($conn, $sql);
        if($query){
            move_uploaded_file($fileTempName, "./images/".$image);
        }else{
            echo 'quary error'.mysqli_error($conn);
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" name="upload" value="Upload">
</form>

<div>
    <?php
       $sql = "SELECT * FROM gallery";
       $query = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($query)){?>
            <image  src="./images/<?php echo $row['image']?>" style="width:300px"/>
   <?php    }
    ?>   
</div>
</body>
</html>