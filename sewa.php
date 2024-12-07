<?php
session_start();


if (!isset($_SESSION['username']) || !isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}


$id = $_SESSION['id'];
$username = $_SESSION['username'];
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
<body class=" bg-white h-[999px]">
    <!-- header navbar start -->
    <header class="bg-white fixed top-0 left-0 w-full flex items-center z-50 shadow-xl">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="navbar-logo px-4">
            <a href="#" class="font-[700] text-[#000] block py-3 lg:text-[20px]">Tepat<span class="text-[#0284c7]">Sewa.</span></a>
          </div>

        

          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4">
              
              <span class="sm:text-[1.5rem] "><i class="fa-regular fa-user"></i></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-[4rem]">
              <ul class="block">
                <li class="group">
                  <p class="font-[600] text-[0.8rem] text-[#000] py-2  flex mx-8"><i class="fa-solid fa-user flex items-center mr-[10px]"></i> Username : <?php echo htmlspecialchars($username); ?></p>
                </li>
               
                <li class="group">
                    <p class="font-[600] text-[0.8rem] text-[#000] flex mx-8"><i class="fa-regular fa-id-card flex items-center mr-[10px]"></i> Id : <?php echo htmlspecialchars($id);?></p>
                </li>

  

                <li class="group">
                  <a href="create_testi.php"><p class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2  flex mx-8"><i class="fa-brands fa-rocketchat flex items-center mx-[10px]"></i>  Beri Testimonial</p></a>
                </li>

                  

                  <div class="flex justify-center">
                    <a href="logout.php">
                      <button type="submit" name="logout" class="bg-[#0284c7] mt-[30px] text-[12px] px-[14px] py-[5px] rounded-[5px] text-[#fff] font-[600] hover:bg-[#0285c76b]"><i class="fa-solid fa-right-from-bracket"></i>  Logout</button>
                    </a>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- header navbar end -->

      <!-- hero section start -->
       <section class="">
            <div class="hero-sewa">
                    <img src="./assets/banner.png" alt="" class="translate-y-16 px-2 border-none rounded-[2rem] max-w-[100%] sm:mx-auto">
            </div>
       </section>
      <!-- hero section end -->

      <!-- produk section start -->
       <section class="bg-white pt-[6rem]">
            <div class="produk">
                <div class="container-produk flex mx-auto flex-wrap justify-center md:justify-between">
                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/harian.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Sewa Harian</p>
                    </div>
                    </a>

                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/bulanan.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Sewa Bulanan</p> 
                    </div>
                    </a>

                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/supir.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Supir Profesional</p> 
                    </div>
                    </a>

                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/wisata.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Paket Wisata</p> 
                    </div>
                    </a>

                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/premium.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Mobil Premium</p> 
                    </div>
                    </a>

                    <a href="pemesanan.php" class="hover:shadow-lg"><div class="produk  w-[100px] flex flex-wrap justify-center mt-[1rem] sm:w-[120px]">
                        <img src="./assets/antarjemput.png" alt="" class="w-[50px] sm:w-[100px]">
                        <p class="text-[12px] font-[700] text-[#676868]">Antar Jemput</p> 
                    </div>
                    </a>
                </div>
            </div>

            <div class="">
                <p class="font-[700] text-[#0284c7] text-[15px] pt-[20px] pl-[20px]"> <i class="fa-solid fa-car"></i> Layanan Kami</p>
            </div>
       </section>
       <!-- produk section end -->



    <script src="script.js"></script>
</body>
</html>