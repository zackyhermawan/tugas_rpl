<?php
require "konek.php";
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM user WHERE email = '$email' and password = '$password'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password === $user['password']) { 
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role']; 
            if($user['role'] === 'admin' ) {
              header("Location: dashboard.php");
            } else {
              header('location:index.php');
            }
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
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
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Masuk</h2>
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
      <button type="submit" name="login"
        class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">
        Masuk
      </button>
      <a href="daftar.php"
        class="w-full flex py-2 px-4 justify-center bg-[#89F2B0] text-white font-semibold rounded-lg hover:bg-[#72d998] transition duration-200">
        Daftar
      </a>
    </form>
  </div>

</body>
</html>
