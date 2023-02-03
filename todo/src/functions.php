<?php $conn = mysqli_connect("localhost", "root", "", "web_todo");

// Menyiapkan / mengumpulkan isi database dalam 1 tempat dan siap dipanggil sewaktu-waktu
function query($query)
{
    // memanggil variable db dari scope global
    global $conn;
    // digunakan menginisialisasi query
    $data = mysqli_query($conn, $query);
    // membuat array untuk menyusun query dalam satu wadah
    $rows = [];
    // $rows akan menampung data dari $data saat di looping, dan $row akan dimasukan kedalam
    // $rows, berulang seperti itu sampai $data selesai di looping
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;
    }
    return $rows;
}

// create
function tambah($add)
{
    global $conn;
    $tugas = $add['tugas'];
    $waktu = $add['waktu'];
    $keterangan = $add['keterangan'];
    $query = "INSERT INTO todo VALUES('','$tugas','$waktu','$keterangan')";
    mysqli_query($conn, $query);
}

// delete
function delete($data)
{
    global $conn;
    $data = $_GET['id'];
    $query = "DELETE FROM todo WHERE id = '$data'";
    mysqli_query($conn, $query);
}

// update
function update($data)
{
    global $conn;
    $id = $data['id'];
    $tugas = htmlspecialchars($data['tugas']);
    $waktu = htmlspecialchars($data['waktu']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $query = "UPDATE todo SET tugas='$tugas',waktu='$waktu',keterangan='$keterangan'WHERE id='$id'";
    mysqli_query($conn, $query);
}

// search
function search($keyword)
{
    $query = "SELECT * FROM todo WHERE tugas LIKE '%$keyword%'";
    return query($query);
}
