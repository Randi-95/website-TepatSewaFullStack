<?php 
  include "./service/database.php";
  
  if(isset($_POST["pesan"]) ) {
    $nama = $_POST['nama'];
    $mobil = $_POST['mobil'];
    $alamat = $_POST['alamat'];
    $tanggalpesan = $_POST['tanggal'];
    $durasi = $_POST['durasi'];

    $sql = "INSERT INTO pemesanan (nama, mobil, alamat,tanggalpesan, durasi ) VALUES ('$nama', '$mobil', '$alamat', '$tanggalpesan', '$durasi')";
    
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
    <title>Form Pemesanan - Tepat Sewa</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">

         <div class="left-5 top-5 fixed ">
            <a href="sewa.php"><button class="bg-[#0284c7] text-[12px]  px-[14px] py-[5px] rounded-[5px] text-[#fff] font-[600] hover:bg-[#4dbcf4] duration-[0.4s] ease-in-out"><i class="fa-solid fa-x"></i></button></a>
        </div>

        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Form Pemesanan - Tepat Sewa</h2>
        <form action="pemesanan.php" method="POST">
            <!-- Nama Anda -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Anda</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan nama Anda" required>
            </div>
            <!-- Pilih Mobil -->
            <div class="mb-4">
                <label for="mobil" class="block text-sm font-medium text-gray-700">Pilih Mobil</label>
                <select id="mobil" name="mobil" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <option value="">Pilih Mobil</option>
                    <option value="toyota-avanza">New Calya</option>
                    <option value="honda-brio">Toyota New Venturer</option>
                    <option value="mitsubishi-xpander">New Fortuner</option>
                    <option value="suzuki-ertiga">New Voxy</option>
                    <option value="suzuki-ertiga">New Veloz</option>
                    <option value="suzuki-ertiga">New Innova</option>
                    <option value="suzuki-ertiga">New Agya</option>
                    <option value="suzuki-ertiga">New Sienta</option>
                </select>
            </div>
            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan alamat Anda" required></textarea>
            </div>
            <!-- Tanggal Pemesanan -->
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Pemesanan</label>
                <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <!-- Durasi Pemesanan -->
            <div class="mb-4">
                <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi Pemesanan (Hari)</label>
                <input type="number" id="durasi" name="durasi" min="1" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan durasi dalam hari" required>
            </div>
            <!-- Tombol Submit -->
            <div>
                <button type="submit" name="pesan" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Pesan Sekarang
                </button>
            </div>
        </form>
    </div>
</body>
</html>
