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
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    
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

function ubah($data) {
    global $conn;
    //Ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
        nim = '$nim',
        nama = '$nama',
        email = '$email',
        jurusan = '$jurusan',
        gambar = '$gambar'
        WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn, );
}
function cari ($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
                nim LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

//cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('Username sudah terdaftar!')
        </script>
        ";
        return false;
    }

    //cek apakah password sudah sesuai
    if($password !== $password2) {
        echo "
        <script>
        alert('Password tidak sesuai!')
        </script>
        ";
        return false;
    }

//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

return mysqli_affected_rows($conn);

}
?>