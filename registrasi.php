<?php
  
  include "./service/database.php";
  
  if(isset($_POST["register"]) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if($db->query($sql)){

    }else{
      echo "data gagal masuk";
    }
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tailwind Css -->
     <script src="https://cdn.tailwindcss.com"></script>

     <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Document</title>
</head>
<body>


<section class="bg-white">
  <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
    <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6 bg-[#0284c7]">
     
    </aside>

    <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
      <div class="max-w-xl lg:max-w-3xl">

        <div class="left-5 top-5 fixed ">
            <a href="masuk.php"><button class="bg-[#0284c7] text-[12px]  px-[14px] py-[5px] rounded-[5px] text-[#fff] font-[600] hover:bg-[#4dbcf4] duration-[0.4s] ease-in-out"><i class="fa-solid fa-x"></i></button></a>
        </div>

        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">Datar Akun</h1>

        <p class="mt-4 leading-relaxed text-gray-500"> Bergabung dengan Tepat Sewa Daftar sekarang untuk akses mudah ke layanan sewa mobil kami.</p>

        <form action="registrasi.php" method="post" class="mt-8 grid grid-cols-6 gap-6">
          
          <div class="col-span-6 sm:col-span-3">
            <label for="Username" class="block text-sm font-medium text-gray-700">
              Username
            </label>

            <input
              type="text"
              id="Username"
              name="username"
              class="mt-1 w-full rounded-md border-[1.5px] border-black  bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

            <input
              type="password"
              id="Password"
              name="password"
              class="mt-1 w-full rounded-md border-[1.5px] border-black bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>


          <div class="col-span-6">
            <p class="text-sm text-gray-500">
                Dengan membuat akun, Anda menyetujui 
              <a href="#" class="text-gray-700 underline"> syarat </a>
              dan
              <a href="#" class="text-gray-700 underline">ketentuan</a>.
              serta 
              <a href="#" class="text-gray-700 underline">kebijakan privasi kami.</a>.
            </p>
          </div>

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500" type="submit" name="register">
              Buat Akun
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Sudah punya akun? Silahkan
              <a href="login.php" class="text-gray-700 underline">Log in</a>.
            </p>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>
</body>
</html>