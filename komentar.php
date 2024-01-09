<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Indonesia</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/style komentar.css">

</head>
<body>
    <div class="form">
    <div class="header">
            <ul>
                <li><a href="index.html">Halaman Utama</a></li>
                <li><a href="budaya sunda.html">Budaya Sunda</a></li>
                <li><a href="budaya jawa.html">Budaya Jawa</a></li>
                <li><a href="datadiri_mhs.php">Informasi Kelompok</a></li>
            </ul>
        </div>
        <center><h2>Silahkan Tinggalkan Pesan Anda :)</h2></center>
        <form method="post" action="proses_pesan.php">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" id="fullname" name="fullname" placeholder="Nama Lengkapmu.." required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Emailmu.." required>

            <label for="phone">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" placeholder="Nomor Teleponmu.." required>

            <label for="pesan">Pesan Anda</label>
            <textarea name="pesan" id="pesan" placeholder="Pesan.." required></textarea>

            <input type="submit" name="submit" value="Submit">
        </form>
        <div style="text-align: center; margin-top: 20px;">
        <a href="index.html">
            <button style="padding: 10px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                Kembali ke Halaman Utama
            </button>
        </a>
    </div>
    </div>
</body>
</html>
