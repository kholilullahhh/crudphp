<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar</title>
</head>

<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "mahasiswa"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $database);
?>
<?php
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jurusan = $_POST["jurusan"];

$sql = "INSERT INTO tablemahasiswa (nama, nim,jurusan) VALUES ('$nama', '$nim','$jurusan')";

$conn->query($sql);

?>
<body>
    <a href="tambah.php">tambah data</a>
<table>
    <thead>
        <tr>
            <th>NO.</th>
            <th>NAMA</th>
            <th>nim</th>
            <th>JURUSAN</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no = 1;
        $query = mysqli_query($conn,SELECT * FROM "tablemahasiswa");
        if($query)
        while($row = mysqli_fetch_array($query)){
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['nim'] ?></td>
            <td><?php echo $row['jurusan'] ?></td>
            <td>
                <a href="">EDIT</a>
                <a href="">HAPUS</a>
            </td>
        </tr>

    <?php } ?>
    </tbody>
</table>
</body>
</html>