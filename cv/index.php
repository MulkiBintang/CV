<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Curriculum Vitae</h1>
      <a class="btn btn-primary" href="admin.php">Update</a>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <h5>Alamat</h5>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <h5>Telepon</h5>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <h5>Email</h5>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <h5>Web</h5>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h5>Pendidikan</h5>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h5>Pengalaman Kerja</h5>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h5>Keterampilan</h5>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div>
</body>

</html>