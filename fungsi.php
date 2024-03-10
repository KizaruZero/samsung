<?php
// fungsi koneksi php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'samsung';

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {  // cek koneksi ke database
    die('Tidak bisa konek ke database');
}

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row; // row untuk menyimpan data
    }
    return $rows;
}

// Fungsi Upload Gambar HP
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'dimg/' . $namaFileBaru);

    return $namaFileBaru;
}

// Fungsi Upload Gambar HP
function uploadacc()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'accimg/' . $namaFileBaru);

    return $namaFileBaru;
}

// Fungsi tambah data HP
function tambah($data)
{
    global $koneksi;
    $sukses = false;
    $merk = htmlspecialchars($data["merk"]);
    $nama = htmlspecialchars($data["nama"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $warna = htmlspecialchars($data["warna"]);
    $ram = htmlspecialchars($data["ram"]);
    $rom = htmlspecialchars($data["rom"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = upload();
    $deskripsi = htmlspecialchars($data["desc"]);



    $query = "INSERT INTO produkhp VALUES ('', '$merk', '$nama', '$tipe', '$warna', '$ram', '$rom','$harga', '$gambar', '$deskripsi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        return $sukses = true;
    } else {
        return $sukses = false;
    }
}


// Fungsi tambah data Acc
function tambahacc($data)
{
    global $koneksi;
    $sukses = false;
    $nama = htmlspecialchars($data["nama"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $warna = htmlspecialchars($data["warna"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = upload();
    $deskripsi = htmlspecialchars($data["desc"]);



    $query = "INSERT INTO aksesoris VALUES ('',  '$nama', '$jenis', '$warna', '$harga', '$gambar', '$deskripsi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        return $sukses = true;
    } else {
        return $sukses = false;
    }
}

//Fungsi hapus data HP
function hapus($id)
{
    global $koneksi;
    $query = "DELETE FROM produkhp where id = $id";
    $sukses = mysqli_query($koneksi, $query);
    return $sukses;
}


//Fungsi hapus data acc
function hapusacc($id)
{
    global $koneksi;
    $query = "DELETE FROM aksesoris where id = $id";
    $sukses = mysqli_query($koneksi, $query);
    return $sukses;
}
?>