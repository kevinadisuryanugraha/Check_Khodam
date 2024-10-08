<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam</title>
</head>
<style>
    body {
        background-color: brown;
    }
    .card {
        background-color: rgb(155, 87, 87);
        text-align: center;
        width: 50%;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        border-radius: 10px;
        border: 2px solid orange;
        font-family: sans-serif;
    }

    .card h1 {
        color: rgb(255, 208, 0);
    }

    .card p {
        color: rgb(255, 208, 0);
    }

    .card #nama {
        width: 80%;
        height: 2rem;
        padding: 10px;
        font-size: 18px;
        text-align: center;
        border-radius: 20px;
        background: none;
        color: white;
        font-weight: bold;
        border: 2px solid yellow;
    }

    input::placeholder{
        color: white;
    }

    input:focus{
        outline: none;
    }

    .card #submit {
        height: 3rem;
        width: 10rem;
        margin-top: 2rem;
        background-color: rgb(40, 216, 216);
        border-radius: 20px;
        font-size: 15px;
        font-weight: bold;
        color: white;
        border: none;
        cursor: pointer;
    }

    .card #submit:hover {
        background-color: #00CCDD;
    }
</style>
<body>
    <div class="card">
        <h1>Cek Khodam</h1>
        <p>Masukkan nama untuk mengetahui khodam</p>
        <form action="" method="post">
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama"><br>
            <input type="submit" id="submit" value="Cek Khodam">
        </form>
            
    <?php 
        ini_set('display_errors', false);

        $nama = $_POST['nama'];

        $nama_khodam = array(
            "dika" => array(
                "khodam" => "Belut Jawa",
                "deskripsi" => "Kamu yang paling licin dan gelap 🧑🏿."
            ),
            "salman" => array(
                "khodam" => "Zionis",
                "deskripsi" => "Mau jadi nabi katanya 👳🏿‍♂️."
            ),
            "rafif" => array(
                "khodam" => "Ahok Sunda",
                "deskripsi" => "Anda adalah seorang china yang bijaksana 😑."
            ),
            "rifai" => array(
                "khodam" => "Lutung Sumatera",
                "deskripsi" => "Orang yang sangat tamvan dan memiliki 1000 aura 😎."
            ),
            "ali" => array(
                "khodam" => "Seblak Kalibata",
                "deskripsi" => "Kamu Lezat dan pedas 🥵."
            ),
            "firman" => array(
                "khodam" => "Duyung Cawang",
                "deskripsi" => "Udah petakilan, nggk bisa diem pulak 🦶🏽."
            ),
            "abdulloh" => array(
                "khodam" => "Professor Cars",
                "deskripsi" => "Anda adalah seorang yang sangat jenius 🧠."
            ),
            "khaidir" => array(
                "khodam" => "Ular Depok",
                "deskripsi" => "Anda adalah seorang yang sangat aktif 🐍."
            ),
            "khabib" => array(
                "khodam" => "Belalang Laut",
                "deskripsi" => "Anda adalah seorang yang sangat misterius 🙀."
            ),
        );

        if (isset($nama_khodam[$nama])) {
            echo "<h3>Nama: " . $nama . "</h3>";
            echo "<p>Khodam: " . $nama_khodam[$nama]['khodam'] . "</p>";
            echo "<p>Deskripsinya: " . $nama_khodam[$nama]['deskripsi'] . "</p>";
        } else {
            echo "<p>Nama tidak ditemukan! Silakan masukkan nama yang benar.</p>";
        }
    ?>
</div>
</body>
</html>
