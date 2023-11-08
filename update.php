<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<div class="my-10 w-[50%] mx-auto">
        <form action="register.php" method="POST" class="flex flex-col" autocomplete="off">
            <input type="text" placeholder="Student Name" name="name" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none" autoComplate="false">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <select name="" id="" class="border-[1px] border-black my-2 px-4 py-2 rounded-md outline-none w-full" name="class">
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
</body>
</html>