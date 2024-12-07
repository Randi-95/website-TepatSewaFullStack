 <?php
// Koneksi ke database
include './service/database.php';

// Query untuk mendapatkan semua data testimonial
$sql = "SELECT * FROM testimonial ORDER BY created_at DESC";
$result = mysqli_query($db, $sql);
?> 


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Tepat Sewa</title>
</head>
<body class=" scroll-smooth" >
  <div class="right-4 bottom-0 fixed ">
    <a href="create_testi.php"><button class="bg-[#0284c7] text-[10px]  px-[10px] py-[8px] rounded-t-[6px] text-[#fff] font-[600] hover:bg-[#4dbcf4]  duration-[0.4s] ease-in-out z-50"><i class="fa-brands fa-rocketchat"></i> Kirim Testi</button></a>
  </div>

    <!-- header navbar start -->
    <header class="bg-white fixed top-0 left-0 w-full flex items-center z-50 shadow-xl">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="navbar-logo px-4">
            <a href="#" class="font-[700] text-[#000] block py-3 lg:text-[20px]">Tepat<span class="text-[#0284c7]">Sewa.</span></a>
          </div>

        

          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="w-[30px] h-[2px] my-[7px] block bg-black"></span>
              <span class="w-[30px] h-[2px] my-[7px] block bg-black"></span>
              <span class="w-[30px] h-[2px] my-[7px] block bg-black"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-[4rem] lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#branda" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2 flex mx-8">Beranda</a>
                </li>

                <li class="group">
                  <a href="#about" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2 flex mx-8">Tentang Kami</a>
                </li>

                <li class="group">
                  <a href="#layanan" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2  flex mx-8">Layanan Kami</a>
                </li>
                <li class="group">
                  <a href="#tutorial" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2 flex mx-8">Cara Sewa</a>
                </li>
                <li class="group">
                  <a href="#kendaraan" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2 flex mx-8">Kendaraan</a>
                </li>

                <li class="group">
                  <a href="#testimonial" class="font-[600] text-[0.8rem] text-[#000] hover:text-[#0284c7] py-2 flex mx-8">Testimonial</a>
                </li>
                
                <div class="flex justify-center">
                  <a href="masuk.php"><button class="bg-[#0284c7] text-[12px] px-[14px] py-[5px] rounded-[5px] text-[#fff] font-[600] hover:bg-[#0285c76b]"><i class="fa-solid fa-cart-shopping "></i>  Sewa</button></a>
                </div>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header navbar end -->


    <!-- hero section start -->
    <section id="branda" class="pt-20 lg:pt-[0] lg:px-[5rem] bg-white">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full self-center px-4 sm:w-1/2">
                <h1 class="font-[700] text-[10px] text-[#000] sm:text-[15px]">Selamat Datang di <br> <span class="text-[#0284c7] font-[800] text-[20px]">Tepat Sewa!👌</span></h1>
                <h2 class="font-[500] text-[12px] text-[#000] sm:text-[17px]">Tempat Sewa Mobil || Terbaik</h2>
                <p class="font-[200] w-[50%] text-[10px] sm:text-[15px] text-[#000] leading-[1.2rem] mb-2">Sewa mobil terbaik dengan layanan cepat, kendaraan berkualitas, dan harga bersahabat. Mulai perjalanan Anda bersama kami hari ini!</p>
                <a href="#" class="text-[#fff] text-[10px]  font-[600] bg-[#0284c7] px-3 py-2 rounded-[20px] hover:bg-[#6eaecb] duration-[0.3s] ease-in">Selengkapnya</a>
            </div>
            <div class="w-full self-end px-4 sm:w-1/2">
              <div class="mt-10">
                <img src="./assets/foto.png" alt="" class="max-w-full mx-auto">
              </div>
            </div>
          </div>
        </div>


      </section>
    <!-- hero section end  -->


    <!-- about section start -->
    <section id="about" class="lg:px-[5rem] bg-[#e1e0e0] sm:h-screen">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4">
            <div class="judul-about">
              <h1 class="flex justify-center pt-[60px] font-[800] text-[1rem] text-[#0284c7] sm:text-[1.5rem] lg:text-[1.8rem] sm:pt-[90px]">Tentang Kami</h1>
              <p class="font-[600] text-[8px]  flex justify-center sm:text-[12px]">Tepat Sewa Solusi Kendaraan terbaik</p>
            </div>
              <p class="font-[400] text-[10px] text-[#000] leading-[1rem] mt-4 pb-10 sm:text-[15px] sm:leading-[1.4rem]">Selamat datang di TepatSewa, platform penyewaan kendaraan terpercaya yang dirancang untuk memenuhi kebutuhan transportasi Anda. Kami memahami pentingnya mobilitas yang aman, nyaman, dan efisien, sehingga kami hadir sebagai solusi terbaik bagi Anda yang membutuhkan kendaraan untuk berbagai keperluan, mulai dari perjalanan bisnis, liburan keluarga, hingga kebutuhan mendesak lainnya.

                Kami menawarkan berbagai pilihan kendaraan berkualitas, mulai dari mobil ekonomis hingga kendaraan premium, yang selalu dalam kondisi prima dan siap digunakan. Dengan proses pemesanan yang cepat dan mudah, kami memastikan Anda dapat menemukan kendaraan yang sesuai dengan kebutuhan Anda hanya dengan beberapa klik.
                <br>
                <br>
                <span class="text-[0.8rem] font-[700] text-[#0284c7]">Visi Kami : </span>
                <br>
                Menjadi platform penyewaan kendaraan terkemuka di Indonesia yang mengutamakan kemudahan, kualitas, dan kepuasan pelanggan.
                <br>
                <br>
                <span class="text-[0.8rem] font-[700] text-[#0284c7]">Misi Kami: </span>
                <br>
                Memberikan layanan penyewaan kendaraan yang terpercaya dan transparan.
                
                Menyediakan kendaraan dengan perawatan terbaik untuk menjamin keselamatan dan kenyamanan pelanggan.
                
                Memanfaatkan teknologi untuk memberikan pengalaman penyewaan yang cepat, mudah, dan efisien.
                
                Membangun hubungan jangka panjang dengan pelanggan melalui layanan yang ramah dan profesional.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->


    <!-- layanan kami section start -->
    <section class="bg-white pb-[10rem]"  id="layanan">
      <div class="contiainer-layanan">
        <div class="judul-layanan">
          <h1 class="flex justify-center pt-[60px] font-[800] text-[1rem] text-[#0284c7] sm:text-[1.5rem] lg:text-[1.8rem] sm:pt-[90px]">Layanan Kami</h1>
          <p class="font-[600] text-[8px]  flex justify-center sm:text-[12px]">TepatSewa hadir untuk menjadi solusi bagi kamu</p>
        </div>

        <div class="card-layanan sm:flex sm:flex-wrap sm:mt-[2rem] ">
          <div class="card-layanan-1 bg-white w-[12rem] h-[12rem] mx-auto mt-[2rem] shadow-xl rounded-[6px] hover:scale-[1.1] duration-[0.2s] ease-in-out ">
            <div class="card-layanan-1-content text-center ">
              <div class="flex justify-center pt-[10px]">
                <div class="bg-[#0284c7] w-[4rem] flex h-[4rem] rounded-[50%] ">
                  <img src="./assets/harian.png" alt="" class="p-[15px]">
                </div>
              </div>
              <h2 class="text-[15px] font-[700] text-[#0284c7]">Sewa Harian</h2>
              <p class="text-[10px]">Layanan untuk penyewaan mobil dengan sistem harian (ideal untuk perjalanan singkat).</p>
            </div>
          </div>

          <div class="card-layanan-1 bg-[#0284c7] w-[12rem] h-[12rem] mx-auto mt-[2rem] shadow-xl rounded-[6px] hover:translate-y-4 hover:scale-[1.1] duration-[0.2s] ease-in-out">
            <div class="card-layanan-1-content text-center">
              <div class="flex justify-center pt-[10px]">
                <div class="bg-[#fff] w-[4rem] flex h-[4rem] rounded-[50%] ">
                  <img src="./assets/bulanan.png" alt="" class="p-[15px]">
                </div>
              </div>
              <h2 class="text-[15px] font-[700] text-[#fff]">Sewa Bulanan</h2>
              <p class="text-[10px] text-[#fff]">Layanan untuk pelanggan yang butuh mobil dalam jangka waktu yang lebih panjang, seperti wisatawan atau pekerjaan proyek.</p>
            </div>
          </div>

          <div class="card-layanan-1 bg-white w-[12rem] h-[12rem] mx-auto mt-[2rem] shadow-xl rounded-[6px] hover:scale-[1.1] duration-[0.2s] ease-in-out">
            <div class="card-layanan-1-content text-center ">
              <div class="flex justify-center pt-[10px]">
                <div class="bg-[#0284c7] w-[4rem] flex h-[4rem] rounded-[50%] ">
                  <img src="./assets/supir.png" alt="" class="p-[15px]">
                </div>
              </div>
              <h2 class="text-[15px] font-[700] text-[#0284c7]">Supir Profesional</h2>
              <p class="text-[10px]">Pilihan terbaik untuk menyewa mobil lengkap dengan sopir profesional yang ramah, berpengalaman, dan siap menemani perjalanan Anda dengan aman dan nyaman.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- layanan kami section end -->

    <!-- cara sewa section start -->
    <section class= "bg-[#e1e0e0] h-[60rem] lg:h-screen" id="tutorial">
      <div class="container-tutorial">
        <div class="judul-tutorial mx-auto">
          <h1 class="flex justify-center pt-[70px] font-[800] text-[1rem] text-[#0284c7] sm:text-[1.5rem] lg:text-[1.8rem] sm:pt-[90px]">Cara Pesan</h1>
          <p class="font-[600] text-[8px]  flex justify-center sm:text-[12px]">Ikuti langkah berikut untuk memesan layanan kami</p>
        </div>

        <div class="card-tutorial lg:flex sm:mt-[5rem]">
          <div class="card-tutorial-1 bg-[#e8e7e7] w-[14rem] sm:w-[27rem] lg:w-[14rem] h-[10rem] p-[10px] mx-auto mt-[20px] shadow-lg">
            <div class="card-layanan-1-content">
              <div class="bg-[#0284c7] w-[40px] h-[40px] flex justify-center items-center rounded-[50%] mt-[15px]">
                <h1 class="font-[400] text-[#6ec1ea]">1</h1>
              </div>
              <div class="">
                <h1 class="font-[600] mt-[10px]">Search TepatSewa.</h1>
                <p class="text-[11px] font-[400] ">Cari Website Tepat Sewa di Google atau melalui aplikasi browser Anda.</p>
              </div>
            </div>
          </div>

          <div class="card-tutorial-1 bg-[#e8e7e7] w-[14rem] sm:w-[27rem] lg:w-[14rem] h-[10rem] p-[10px] mx-auto mt-[20px] shadow-lg">
            <div class="card-layanan-1-content">
              <div class="bg-[#0284c7] w-[40px] h-[40px] flex justify-center items-center rounded-[50%] mt-[15px]">
                <h1 class="font-[400] text-[#6ec1ea]">2</h1>
              </div>
              <div class="">
                <h1 class="font-[600] mt-[10px]">Daftar akun.</h1>
                <p class="text-[11px] font-[400] ">Tekan Sewa Lalu Daftar akun jika belum punya akun.</p>
              </div>
            </div>
          </div>

          <div class="card-tutorial-1 bg-[#e8e7e7] w-[14rem] sm:w-[27rem] lg:w-[14rem] h-[10rem] p-[10px] mx-auto mt-[20px] shadow-lg">
            <div class="card-tutorial-1-content">
              <div class="bg-[#0284c7] w-[40px] h-[40px] flex justify-center items-center rounded-[50%] mt-[15px]">
                <h1 class="font-[400] text-[#6ec1ea]">3</h1>
              </div>
              <div class="">
                <h1 class="font-[600] mt-[10px]">Masuk ke Akun.</h1>
                <p class="text-[11px] font-[400] ">Jika sudah daftar akun kembali dan masuk menggunakan akun yang sudah didaftarkan.</p>
              </div>
            </div>
          </div>

          <div class="card-tutorial-1 bg-[#e8e7e7] w-[14rem] sm:w-[27rem] lg:w-[14rem] h-[10rem] p-[10px] mx-auto mt-[20px] shadow-lg">
            <div class="card-tutorial-1-content">
              <div class="bg-[#0284c7] w-[40px] h-[40px] flex justify-center items-center rounded-[50%] mt-[15px]">
                <h1 class="font-[400] text-[#6ec1ea]">4</h1>
              </div>
              <div class="">
                <h1 class="font-[600] mt-[10px]">Isi Formulir.</h1>
                <p class="text-[11px] font-[400] ">Isi formulir penyewaan mobil di TepatSewa Sesuai dengan keinginan Anda dan data tanggal sewa dengan benar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cara sewa section end -->

    <!-- kendaraan section start -->
    <section id="kendaraan" class="bg-white">
      <div class="pb-11">
        <div class="container-kendaraan">
            <div class="judul-kendaraan mx-auto">
              <h1 class="flex justify-center pt-[70px] font-[800] text-[1rem] text-[#0284c7] sm:text-[1.5rem] lg:text-[1.8rem] sm:pt-[90px]">Kendaraan</h1>
              <p class="font-[600] text-[8px]  flex justify-center sm:text-[12px]">Jelajahi berbagai pilihan kendaraan yang kami sediakan.</p>
            </div>

            <div class="card-kendaraan">
              <div class="flex flex-wrap justify-center gap-[20px]">
                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/toyota.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">Toyota New Venturer</p>
                    <p class="text-[8px]">Transmisi : Automatic</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/calya.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Calya</p>
                    <p class="text-[8px]">Transmisi : Manual</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/fortuner.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Fortuner</p>
                    <p class="text-[8px]">Transmisi : Automatic</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/voxy.jpg" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Voxy</p>
                    <p class="text-[8px]">Transmisi : Automatic</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/veloz.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Veloz</p>
                    <p class="text-[8px]">Transmisi : Automatic</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/innova.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Innova</p>
                    <p class="text-[8px]">Transmisi : Manual</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/agya.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Agya</p>
                    <p class="text-[8px]">Transmisi : Manual</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>

                <div class="card-kendaraan-content shadow-lg w-[9rem] sm:w-[10rem] lg:w-[16rem] flex flex-wrap justify-center mt-[20px]  hover:grayscale-[0.8] hover:scale-[1.1] duration-[0.2s]">
                  <img src="./assets/sienta.webp" alt="" class="w-[8rem] sm:w-[10rem] lg:w-[15rem] ">
                  <div class="lg:w-[12rem] px-auto">    
                    <p class="text-[12px] font-[600] mt-[20px] text-[#0284c7] md:text-[14]">New Sienta</p>
                    <p class="text-[8px]">Transmisi : Manual</p>
                    <p class="text-[8px]">Harga Sewa : Rp 1.000.000/Hari</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- kendaraan section end -->


    <!-- testimonial section start -->
      <section id="testimonial ">
        <div class= "bg-[#e1e0e0] flex flex-col pb-[5rem]" id="testimonial">
          <div class="container-testimonial">
            <div class="judul-testimonial mx-auto">
              <h1 class="flex justify-center pt-[70px] font-[800] text-[1rem] text-[#0284c7] sm:text-[1.5rem] lg:text-[1.8rem] sm:pt-[90px]">Testimonial</h1>
              <p class="font-[600] text-[8px]  flex justify-center sm:text-[12px]"> Cerita pengalaman pelanggan kami.</p>
            </div>

            
                <div class="card-testimonial mt-[20px]">
                 <div class="flex flex-wrap gap-9">
                     <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <div class="card-testimonial-content bg-white shadow-lg w-[15rem] mx-auto">
                          <div class="flex space-x-4">
                              <p class="w-[40px] mt-[10px] flex justify-center items-center rounded-[50%] h-[40px] ml-[10px] bg-[#0284c7] text-[20px]">👨🏻</p>
                              <h1 class=" flex items-center  font-[700] text-[#0284c7]"><?php echo htmlspecialchars($row['name']); ?></h1>
                          </div>
                          <div class="flex justify-center pb-[20px]">
                              <p class="text-[10px] w-[10rem]  px-[10px]  break-words"><?php echo htmlspecialchars($row['message']); ?></p>
                          </div>
                        </div>
                        <?php endwhile; ?> 
                  </div>
              </div>
          </div>
        </div>
      </section>

    <!-- testimonial section start -->


    <footer class="bg-white">
  <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="text-[#0284c7]">
          <h1 class="text-[1.2rem] font-[600]" >TepatSewa!</h1>
        </div>

        <p class="mt-4 max-w-xs text-gray-500">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
          molestias.
        </p>

        <ul class="mt-8 flex gap-6">
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Facebook</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Instagram</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"clip-rule="evenodd"/>
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Twitter</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>

          <li><a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
              <span class="sr-only">GitHub</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Dribbble</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
        <div>
          <p class="font-medium text-gray-900">Navbar</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-gray-700 transition hover:opacity-75"> Branda </a>
            </li>

            <li>
              <a href="#layanan" class="text-gray-700 transition hover:opacity-75"> Layanan Kami </a>
            </li>

            <li>
              <a href="#tutorial" class="text-gray-700 transition hover:opacity-75"> Cara Sewa </a>
            </li>

            <li>
              <a href="#kendaraan" class="text-gray-700 transition hover:opacity-75"> Kendaraan </a>
            </li>

            <li>
              <a href="#testimonial" class="text-gray-700 transition hover:opacity-75"> Testimonial </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="font-medium text-gray-900">Layanan</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="pemesanan.php" class="text-gray-700 transition hover:opacity-75"> SewaMobil </a>
            </li>

            <li>
              <a href="create_testi.php" class="text-gray-700 transition hover:opacity-75"> Testimonial </a>
            </li>

          </ul>
        </div>

        


      </div>
    </div>

    <p class="text-xs text-gray-500">&copy; 2024. TepatSewa. All rights reserved.</p>
  </div>
</footer>

    <script src="script.js"></script>
</body>
</html>