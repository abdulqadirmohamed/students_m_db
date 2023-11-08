<?php
    include 'conn.php';

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users VALUES('','$name','$email','$password')";
        $query = mysqli_query($conn, $sql);

    }

?>

<div class="w-[50%] mx-auto">
<?php
    include 'header.php';
?>

<h1>Register</h1>
<form action="" method="POST" class="flex flex-col" autocomplete="off">
    <input type="text" placeholder="Name" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
    <input type="text" placeholder="Email" name="email" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
    <input type="password" placeholder="Password" name="password" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none">
    <button type="submit" name="register" class="bg-blue-500 px-4 py-2 rounded-md">Submit</button>
</form>
</div>