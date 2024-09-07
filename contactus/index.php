<?php
include 'koneksi1.php';

if (isset($_POST['simpan'])) {
    $nama_lengkap = mysqli_real_escape_string($koneksi1, $_POST['nama_lengkap']);
    $nim = mysqli_real_escape_string($koneksi1, $_POST['nim']);
    $alamat_email = mysqli_real_escape_string($koneksi1, $_POST['alamat_email']);
    $prodi = mysqli_real_escape_string($koneksi1, $_POST['prodi']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi1, $_POST['jenis_kelamin']);
    $kelas = mysqli_real_escape_string($koneksi1, $_POST['kelas']);
    $pesan_saran = mysqli_real_escape_string($koneksi1, $_POST['pesan_saran']);

    mysqli_query($koneksi1,"INSERT INTO db_contactus (nama_lengkap, nim, alamat_email, prodi, jenis_kelamin, kelas, pesan_saran) 
        VALUES ('$nama_lengkap', '$nim', '$alamat_email', '$prodi', '$jenis_kelamin', '$kelas', '$pesan_saran')");

    echo "<script>
        window.alert('Data berhasil diinputkan...');
        window.location.href='index.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Contact Us</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
    <div class="container">
        <div class="text">Contact Us</div>
        <form action="" method="POST">
            <div class="identitas">
                <div class="input-data">
                    <input type="text" name="nama_lengkap" required> 
                    <label>Nama Lengkap:</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nim" required> 
                    <label>NIM:</label>
                </div>
                <div class="input-data">
                    <input type="text"name="alamat_email" required> 
                    <label>Alamat Email:</label>
                </div>
                <div class="input-data">
                    <input type="text" name="prodi"required>
                    <label>Prodi:</label>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="jenis-kelamin">
                <label for="jenis-kelamin">Jenis Kelamin:</label>
                <div class="gender-options">
                    <input type="radio" name="jenis_kelamin" id="male" value="male">
                    <label for="male">Laki-Laki</label>
                    <span class="custom-radio"></span>
                    <input type="radio" name="jenis_kelamin" id="female" value="female">
                    <label for="female">Perempuan</label>
                    <span class="custom-radio"></span>
                    <input type="radio" name="jenis_kelamin" id="other" value="other">
                    <label for="other">Lainnya</label>
                     <span class="custom-radio"></span>
                </div>
            </div>

            <!-- Kelas -->
            <div class="kelas">
                <label for="kelas">Kelas:</label>
                <div class="macamkelas">
                   
                    <select id="kelas" name="kelas">
                        <option value="T3A">T3A</option>
                        <option value="T3B">T3B</option>
                        <option value="T3C">T3C</option>
                        <option value="T3D">T3D</option>
                        <option value="T3E">T3E</option>
                        <option value="T3F">T3F</option>
                        <option value="T3G">T3G</option>
                        <option value="T3H">T3H</option>
                        <option value="T3I">T3I</option>
                        <option value="T3J">T3J</option>
                    </select>
                </div>
            </div>

            <!-- Pesan dan Saran -->
            <div class="textarea">
                <label for="pesan">Pesan dan Saran:</label> <!-- Tambahkan label di atas textarea -->
                <textarea id="pesan" name="pesan_saran" cols="30" rows="10" required></textarea>
            </div>
            
            <!-- Tombol Kirim -->
            <div class="tombol-kirim">
          
                <button type="submit"  name="simpan">Kirim</button>
                

            </div>
        </form>
    </div>
</body>
</html>
