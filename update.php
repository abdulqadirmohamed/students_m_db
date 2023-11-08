<?php
  include "conn.php";

  $id = $_GET['id_update'];

  $sql = "SELECT * FROM students WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  if($result){
    while($row = mysqli_fetch_assoc($result)){?>

<body>
<div class="my-10 w-[50%] mx-auto">
  <?php  include "header.php";?>
        <form action="" method="POST" class="flex flex-col" autocomplete="off">
            <input type="text" placeholder="Student Name" value="<?php echo $row['name']?>" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" autoComplate="false">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <select id="" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none w-full" value="<?php echo $row['class']?>" name="class">
                        <option value="form1">Form 1</option>
                        <option value="form2">Form 2</option>
                        <option value="form3">Form 3</option>
                        <option value="form4">Form 4</option>
                    </select>
                </div>
                <input type="text" value="<?php echo $row['phone']?>" placeholder="Phone Number" name="phone" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
            </div>
            <button type="submit" name="updateBtn" class="bg-blue-500 px-4 py-2 rounded-md">Submit</button>
        </form>
    </div>

    <?php
    if(isset($_POST['updateBtn'])){
      $name = $_POST['name'];
      $class = $_POST['class'];
      $phone = $_POST['phone'];

      $sql = "UPDATE students SET name='$name', class='$class', phone='$phone' WHERE id=$id";
      $query = mysqli_query($conn, $sql);
      if($query){
        header('Location:index.php');
      }else{
        echo 'Update Error'.mysqli_error($conn);
      }
    }
    
    
    ?>
</body>
</html>
<?php }
  }
?>