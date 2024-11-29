<?php
require 'admin/inc/koneksi.php'; // Menghubungkan ke database

// Tangkap ID dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Query data berdasarkan ID dengan MySQLi
    $stmt = $koneksi->prepare("SELECT title_aboutus, detail_aboutus, pict_aboutus FROM tbl_aboutus WHERE id_aboutus = ?");

    if ($stmt) {
        $stmt->bind_param("i", $id); // Bind parameter ID sebagai integer
        $stmt->execute();
        $result = $stmt->get_result();
        $about = $result->fetch_assoc();

        if ($about) {
            $title = htmlspecialchars($about['title_aboutus']);
            $detail = nl2br(htmlspecialchars($about['detail_aboutus']));
            $image = htmlspecialchars($about['pict_aboutus']);
        } else {
            $title = 'Data Tidak Ditemukan';
            $detail = 'Halaman yang Anda cari tidak tersedia.';
            $image = '';
        }
        $stmt->close();
    } else {
        die("Query gagal: " . $koneksi->error);
    }
} else {
    $title = 'ID Tidak Valid';
    $detail = 'Permintaan tidak valid.';
    $image = '';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1><?php echo $title; ?></h1>

        <?php if ($image) : ?>
            <img src="img/<?php echo $image; ?>" alt="<?php echo $title; ?>" style="max-width: 100%; height: auto;">
        <?php endif; ?>

        <p><?php echo $detail; ?></p>

        <a href="about_list.php" class="btn">Kembali ke Daftar</a>
    </div>

</body>

</html>