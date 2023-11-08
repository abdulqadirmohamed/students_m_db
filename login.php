<?php
    include 'conn.php';
$msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $password = ($_POST['password']);

    $sql = "SELECT * FROM users WHERE name='$name' AND password='password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    if($row['role'] == '1'){
        $_SESSION['name'] = $name;
        header('Location:index.php');
    }else{
        $msg = '<div class="text-red-500">Username or Password incorrect</div>';
    }
}
    // if(isset($_POST['login'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $sql = "INSERT INTO users VALUES('','$name','$email','$password')";
    //     $query = mysqli_query($conn, $sql);

    // }

?>

<div class="w-[50%] mx-auto">
<?php
    include 'header.php';
?>
<h1>Login</h1>
<form action="" method="POST" class="flex flex-col" autocomplete="off">
<?php echo $msg; ?>
    <input type="text" placeholder="Username" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" required>
    <input type="password" placeholder="Password" name="password" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" required>
    <button type="submit" name="login" class="bg-blue-500 px-4 py-2 rounded-md">Submit</button>
</form>
</div>