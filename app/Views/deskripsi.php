<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Deskripsi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --black: #333;
            --white: #fff;
        }

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            transition: .2s linear;
            text-transform: capitalize;
            text-decoration: none;
            border: none;
            outline: none;
        }

        html {
            font-size: 62.5%;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #789ECD;
            top: 0;
            left: 0;
            right: 0;
            color: #333;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
            height: 40px; 
        }

        header .logo {
            position: absolute;
            left: 9%;
        }

        .logo img {
            width: 180px; 
        }

        header nav {
            display: flex;
            gap: 2rem;
        }

        header nav a {
            padding: 0 10px;
            font-size: 2rem; 
            color: var(--black);
            font-weight: 500;
        }

        header nav a:hover {
            color: var(--black);
        }

        .box-containers {
            margin-top: -30px;
            padding: 120px;
        }


        .box {
            background: #fff;
            padding: 20px;
            margin-bottom: -50px;
            display: flex;
            align-items: center;
            text-align: center;
            border-radius: 6px;
        }

        .box img {
            max-width: 100%;
            margin-right: 25px;
        }

        .box-containers .box img {
            max-width: 40%;
        }

        .box-containers .box-content h3 {
            font-size: 4rem;
            margin-bottom: 20px;
            margin-top: 25px;
        }

        .box-containers .box-content p {
            font-size: 2rem;
            margin-bottom: 20px;
            margin-top: 10px;

        }


        .box-content {
            flex-grow: 1;
            text-align: left;
            padding: 20px;
        }

        .box button {
            padding: 10px 40px;
            background-color: #C8AC7F;
            color: #333;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .box button:hover {
            background-color: #fff;
        }

        .footer {
            background-color: rgba(120, 158, 205, 0.1);
            padding-top: 20px;
            padding-right: 30px;

        }

        .footer .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            margin: 0 auto;
            max-width: 1200px;
        }

        .get-in-touch {
            flex: 1 1 100%;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .get-in-touch h2 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer .box-container .boxs {
            flex: 1 1 25rem;
        }

        .footer .box-container .boxs h3 {
            color: #333;
            font-size: 1.8rem;
            padding: 1rem 0;
        }

        .footer .box-container .boxs a {
            display: block;
            color: #666;
            font-size: 1.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .boxs a:hover {
            color: var(--black);
            text-decoration: underline;
        }


        .footer .credit {
            text-align: center;
            padding: 1.5rem;
            font-size: 1.5rem;
            color: #333;
            background-color: #789ECD;
            border-top: .1rem solid rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            width: 100%;
            margin-top: 30px;

        }

        .box-content .color-options {
            display: flex;
            margin-top: 10px;
            margin-right: 50px;
            margin-bottom: 20px;
            margin-left: 40px;

        }


        .box-content .color-option {
            width: 70px;
            height: 30px;
            border: 1px solid #333;
            cursor: pointer;
            margin: 0 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
        }

        .box-content .color-option:hover {
            border-width: 3px;
        }
    </style>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="<?= base_url() ?>/img/logo_sabhi.png"></a>

        <nav>
            <a href=<?= base_url('home') ?>>Home</a>
            <a href=<?= base_url('about') ?>>About Us</a>
            <a href=<?= base_url('katalog') ?>>Catalogue</a>
            <a href=<?= base_url('blog') ?>>Blog</a>
        </nav>
    </header>

    <div class="box-containers">

        <div class="box">

            <img src="/img/<?= $deskripsi['foto'] ?>" alt="Foto Deskripsi">
            <div class="box-content">
                <h3> <?= $jenis['namajenis'] ?></h3>
                <p>Warna : </p>


                <div class="color-options">
                    <?php foreach ($warna as $index => $w) : ?>
                        <a href="/deskripsi/<?= $deskripsi['id_jenis'] ?>/<?= $w['warna'] ?>" class="color-option" style="background-color: #fff; color: black;"><?= $w['warna'] ?></a>
                    <?php endforeach ?>
                </div>

                <div class="box-contents">
                    <textarea name="" id="" style="width: 100%;" rows="10"><?= $deskripsi['deskripsi'] ?></textarea>
                </div>
            </div>
        </div>
    </div>
    </div>
    <td>

    </td>

    </div>

    <section class="footer">
        <div class="box-container">
            <div class="get-in-touch">
                <h2>GET IN TOUCH</h2>
            </div>
            <div class="boxs">
                <h3>ADDRESS</h3>
                <a href='#'>Desa Raguklampitan RT/RW 12/03 Batealit<br>
                    Jepara, Indonesia</a>
            </div>
            <div class="boxs">
                <h3>TELEPHONE</h3>
                <a href='#'>+62 858-7094-4120</a>
            </div>
            <div class="boxs">
                <h3>EMAIL</h3>
                <a href="shovishabrina123@gmail.com">shovishabrina123@gmail.com</a>
            </div>
            <div class="boxs">
                <h3>FOLLOW US</h3>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        <div class="credit">&copy; 2024 Tatul. All rights reserved.</div>
    </section>

</body>

</html