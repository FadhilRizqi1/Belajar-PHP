<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa3");


function query($query) {
    global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
return $rows;
}

function tambah($data) {
    global $conn;
    //Ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $gambar = htmlspecialchars($_POST["gambar"]);
    
        //query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>