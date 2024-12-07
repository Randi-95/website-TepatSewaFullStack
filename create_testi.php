<?php
  session_start(); 
  
  include "./service/database.php";
  
  if(isset($_POST["create"]) ) {
    $name = $_POST['name'];
    $message = $_POST['testimonial'];

    $sql = "INSERT INTO testimonial (name, message) VALUES ('$name', '$message')";
    
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
<body class=" bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- header navbar start -->
    <header class="bg-white fixed top-0 left-0 w-full flex items-center z-50 shadow-xl">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="navbar-logo px-4">
            <a href="#" class="font-[700] text-[#000] block py-3 lg:text-[20px]">Tepat<span class="text-[#0284c7]">Sewa.</span></a>
          </div>

        

          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4">
              
              <span class="sm:text-[1.5rem] ">=</span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-[4rem]">
              <ul class="block">
                  <div class="flex justify-center">
                    <a href="sewa.php">
                      <button type="submit" name="logout" class="bg-[#0284c7] mt-[30px] text-[12px] px-[14px] py-[5px] rounded-[5px] text-[#fff] font-[600] hover:bg-[#0285c76b]"><i class="fa-solid fa-right-from-bracket"></i></button>
                    </a>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- header navbar end -->


  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Form Testimonial</h1>
    
    <form action="create_testi.php" method="POST" class="space-y-4">
      <!-- Input Nama -->
      <div>
        <label for="name" class="block text-gray-600 font-medium mb-2">Nama</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Masukkan nama Anda"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          required
        />
      </div>

      <!-- Input Artikel Testimonial -->
      <div>
        <label for="testimonial" class="block text-gray-600 font-medium mb-2">Artikel Testimonial</label>
        <textarea 
          id="testimonial" 
          name="testimonial" 
          rows="4" 
          placeholder="Tulis testimonial Anda di sini..."
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          required
        ></textarea>
      </div>

      <!-- Button Create -->
      <div class="text-center">
        <button 
          type="submit" 
          name="create" 
          class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          Create
        </button>
      </div>
    </form>
  </div>


    <script src="script.js"></script>
</body>
</html>