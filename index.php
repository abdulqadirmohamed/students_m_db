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
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
</head>
<body class="w-[50%] mx-auto">
    <div class="my-10">
        <form action="register.php" method="POST" class="flex flex-col" autocomplete="off">
            <input type="text" placeholder="Student Name" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" autoComplate="false">
            <div class="grid grid-cols-2 gap-6">
                <input type="text" placeholder="Student Class" name="class" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
                <input type="text" placeholder="Phone Number" name="phone" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
            </div>
            <button type="submit" name="register" class="bg-blue-500 px-4 py-2 rounded-md">Submit</button>
        </form>
    </div>
    <h1>Students</h1>
    <table id="tab" class="table table-striped stripe row-border order-column" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Update</th>
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
                        <td>
                            <a href="">Edit</a>
                        </td>
                    </tr>
              <?php  }?>
            
        </tbody>
    </table>

    <script type="text/javascript">
$(document).ready(function() {
    var table = $('#tab').DataTable( {
        scrollY:        "400px",
        scrollX:        true,
        scrollCollapse: false,
        paging:         false,
        fixedColumns:   {
            leftColumns: 1,
        }
    } );
});
</script>
</body>
</html>