<?php
include 'conn.php';
include_once 'header.php';

?>
<head>
<!-- <link rel="stylesheet" href="styles.css"> -->
<link href="/dist/output.css" rel="stylesheet">
</head>

<body class="w-[50%] mx-auto">
    <div class="my-10">
        <form action="register.php" method="POST" class="flex flex-col" autocomplete="off">
            <input type="text" placeholder="Student Name" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" autoComplate="false">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <select class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none w-full" name="class">
                        <option value="form1">Form 1</option>
                        <option value="form2">Form 2</option>
                        <option value="form3">Form 3</option>
                        <option value="form4">Form 4</option>
                    </select>
                </div>
                <input type="text" placeholder="Phone Number" name="phone" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
            </div>
            <button type="submit" name="register" class="bg-blue-500 px-4 py-2 rounded-md">Submit</button>
        </form>
    </div>
    <h1>Students</h1>


    <table  class="w-full text-sm text-left text-gray-500 dark:text-gray-400 p-10" cellspacing="0" width="100%">
        <thead class="bg-black text-white rounded-md px-4 py-2 text-left rounded-full">
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Parent Name</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // $sql = "SELECT * FROM students";
                $sql = "SELECT students.student_id, students.student_name, parents.parent_id, parents.parent_name FROM students INNER JOIN parents ON students.parent_id=parents.parent_id";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo $row['student_id']?></td>
                        <td><?php echo $row['student_name']?></td>
                        <td><?php echo $row['parent_name']?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['student_id']?>">Delete</a>
                        </td>
                        <td>
                            <form action="update.php" method="GET">
                                <input type="hidden" name="id_update" value="<?php echo $row['student_id']?>"/>
                                <button name="id">Update</button>
                            </form>
                            <!-- <a href="update.php?id">Edit</a> -->
                        </td>
                    </tr>
              <?php  }?>
            
        </tbody>
    </table>


</body>
</html>