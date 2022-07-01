<?php 
 
$koneksi = mysqli_connect("localhost","root","","renflix");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function signup($data)
{
    global $koneksi;

    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $passwordConfirmation = htmlspecialchars($data["passwordConfirmation"]);


    //cek apakah username sudah ada di database sebelumnya atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('Username yang anda pilih telah terdaftar!<br>Silahkan Pilih Username Yang Lain');
            </script>";
        return false;
    } else {
        mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', 'user')");
    }
    return mysqli_affected_rows($koneksi);
}

function find($keyword)
{
    $query = "SELECT * FROM user 
                WHERE
            username LIKE '%$keyword%' OR
            level LIKE '%$keyword%'
            ";
    return query($query);
}

function tambah($data)
{
    global $koneksi;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    //cek apakah username sudah ada di database sebelumnya atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('Username is Already Taken!<br>Please Choose Another Username');
            </script>";
        return false;
    } else {
        mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', '$level')");
        return mysqli_affected_rows($koneksi);
    }

    return mysqli_affected_rows($koneksi);
}