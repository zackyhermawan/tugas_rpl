<?php
require "konek.php";
if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'user';

    $tambahusers = mysqli_query($conn, "insert into user (email, password, role) values ('$email','$password', '$role')");
    if($tambahusers){
        header("Location: masuk.php");
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'users berhasil ditambahkan.',
                        showConfirmButton: false,
                        timer: 1000
                    });
                });
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-xl w-full max-w-sm p-8">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
    <form method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="text" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" name="register"
        class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">
        Daftar
      </button>
      <a href="masuk.php"
        class="w-full flex py-2 px-4 justify-center bg-[#89F2B0] text-white font-semibold rounded-lg hover:bg-[#72d998] transition duration-200">
        Masuk
      </a>
    </form>
  </div>

</body>
</html>
