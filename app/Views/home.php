<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
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

        .btn {
            display: inline-block;
            margin-top: 1rem;
            border-radius: 1rem;
            background: #C8AC7F;
            color: #333;
            padding: 1rem 2.5rem;
            cursor: pointer;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .btn:hover {
            background: var(--white);
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


        .banner {
            margin-top: 200px;
            display: flex;
            align-items: flex-start;
            min-height: 100vh;
            margin-left: 100px;
            position: relative;
        }

        .banner .ban {
            max-width: 50rem;
            margin-top: 60px;
        }

        .banner .ban h1 {
            font-size: 4.2rem;
            font-style: italic;
        }

        .banner .ban span {
            font-size: 4.2rem;
            padding: 0.5rem 0;
            line-height: 1.1;
            font-weight: bold;
            font-style: italic;
        }

        .banner .ban p {
            font-size: 1.8rem;
            padding: 0.5rem 0;
            line-height: 1.5;
        }

        .banner .banner-images {
            position: absolute;
            top: -100px;
            right: 0;
            display: flex;
            flex-direction: column;
        }

        .banner .banner-images .banner-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .banner .banner-images .banner-rows img {
            width: 320px;
            height: 320px;
            margin-right: 10px;
            margin-bottom: 1px;
            margin-left: -70px;
            padding-right: 70px;
        }

        .banner .banner-images .banner-row img {
            width: 320px;
            height: 320px;
            margin-right: 10px;
            margin-bottom: 1px;
            margin-left: 10px;
            margin-top: -8px;
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 100px;
        }

        .container {
            background-color: #F9F4EB;
            max-width: 100%;
            background-color: #F9F4EB;
            margin-left: auto;
            margin-right: auto;
        }

        .container h1 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 70px;
            margin-top: 50px;
            text-align: center;
            font-style: italic;
        }

        .content-item {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content-item h2 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            position: relative;
            text-align: left;
            margin-top: 30px;
        }

        .content-item .fas {
            font-size: 3.5rem;
            position: absolute;
            left: 90px;
            top: 50%;
            transform: translateY(-50%);
        }

        .content-item p {
            text-align: left;
            font-size: 1.5rem;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .content-item h2 .dollar-icon {
            margin-left: 2.5rem;
        }

        .best h1 {
            font-size: 4rem;
            font-style: italic;
        }

        .best p {
            font-size: 2rem;
        }

        .best-images-container {
    position: relative;
    overflow-x: scroll;
    user-select: none;
    -webkit-user-drag: none;
    -moz-user-select: none;
    -ms-user-select: none;
}

.best-images {
    display: flex;
    flex-wrap: nowrap;
    gap: 10px;
    margin-top: 20px;
    transition: transform 0.2s ease-in-out;
}

.best-images img {
    width: 400px;
    height: auto;
    margin: 5px;
    cursor: default;
    display: inline-block;
}


        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #fff;
            border: none;
            color: #333;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .scroll-left {
            left: 0;
        }

        .scroll-right {
            right: 0;
        }

        .footer {
            background-color: rgba(120, 158, 205, 0.1);
            padding-top: 20px;
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

        .footer .box-container .box {
            flex: 1 1 25rem;
        }

        .footer .box-container .box h3 {
            color: #333;
            font-size: 1.8rem;
            padding: 1rem 0;
        }

        .footer .box-container .box a {
            display: block;
            color: #666;
            font-size: 1.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .box a:hover {
            color: var(--black);
            text-decoration: underline;
        }

        .banner-content {
            margin-top: 50px;
            margin-right: 50px;
        }

        .best h1,
        .best p {
            margin: 0;
            text-align: center;
            margin-left: 50px;
            margin-top: 50px;
        }

        .find {
            display: flex;
            align-items: center;
            justify-content: left;
            margin-top: 70px;
            background-color: rgba(249, 244, 235, 0.9);
            margin-bottom: 80px;
        }

        .find-content {
            text-align: center;
        }

        .find-images {
            position: relative;
        }

        .find-images img {
            width: 400px;
            height: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 200px;
        }

        .image-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .find-us h1 {
            font-size: 3rem;
            font-style: italic;
            font-weight: bold;
            margin-bottom: 1rem;
            margin-left: 70px;
            margin-top: -150px;
        }

        .find-us p {
            font-size: 1.6rem;
            margin-left: 70px;
        }

        .social-links {
            display: flex;
            align-items: center;
            margin-top: 40px;
            margin-left: 65px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-right: 100px;
            font-size: 24px;
            color: black;
        }

        .social-links i {
            margin-right: 5px;
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
    </style>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="<?= base_url() ?>/img/logo_sabhi.png" style=""></a>

        <nav>
            <a href=<?= base_url('home') ?>>Home</a>
            <a href=<?= base_url('about') ?>>About Us</a>
            <a href=<?= base_url('katalog') ?>>Catalogue</a>
            <a href=<?= base_url('blog') ?>>Blog</a>
        </nav>
    </header>

    <section class="banner" id="banner">
        <div class="ban">
            <h1><?= $home['section1_judul']; ?></h1>
            <p style="padding-right: 50px;"><?= $home['section1_deskripsi']; ?></p>
            <a href="<?= base_url('katalog') ?>" class="btn">Lihat Katalog > </a>

            <div class="banner-images">
                <div class="banner-rows">
                    <img src="<?= base_url() ?>/img/<?= $home['section1_gambar1']; ?>" alt="Image 1">
                    <img src="<?= base_url() ?>/img/<?= $home['section1_gambar2']; ?>" alt="Image 2">
                </div>
                <div class="banner-row">
                    <img src="<?= base_url() ?>/img/<?= $home['section1_gambar3']; ?>" alt="Image 3">
                    <img src="<?= base_url() ?>/img/<?= $home['section1_gambar4']; ?>" alt="Image 4">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h1>WHY CHOOSE US?</h1>
        <div class="content">
            <div class="content-item">
                <h2>Quality <br> Product <i class="fas fa-certificate"></i></h2>
                <p>We offer high-quality <br> hijabs made from premium <br> materials, ensuring <br> durability and comfort</p>
            </div>
            <div class="content-item">
                <h2>Modern <br> Designs <i class="fas fa-paint-brush"></i></h2>
                <p>Our collection features <br> modern and stylish <br> designs, keeping you up- <br> to-date with the latest <br> trends in hijab fashion</p>
            </div>
            <div class="content-item">
                <h2>Affordable <br> Prices <i class="fas fa-dollar-sign dollar-icon"></i></h2>
                <p>We believe that everyone <br> deserves to look and feel <br> great without breaking the <br> bank, so we offer <br> competitive prices for our <br> products</p>
            </div>
        </div>
    </div>

    <div class="best-seller">
        <div class="best">
            <h1><?= $home['section2_judul']; ?></h1>
            <p style="padding: 0px 200px;"><?= $home['section2_deskripsi']; ?></p>
        </div>
        <div class="best-images-container">
    <div class="best-images">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar1']; ?>" alt="Image 5">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar2']; ?>" alt="Image 6">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar3']; ?>" alt="Image 7">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar4']; ?>" alt="Image 8">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar5']; ?>" alt="Image 9">
        <img src="<?= base_url() ?>/img/<?= $home['section2_gambar6']; ?>" alt="Image 10">
    </div>
</div>



    <div class="find">
        <div class="find-images">
            <img src="<?= base_url() ?>/img/home7.png" alt="Image 11">
        </div>
        <div class="find-us">
            <h1>Let's Find Your Best Hijab!</h1>
            <p>Tingkatkan keanggunan Anda dengan koleksi hijab kami <br> yang eksklusif! Tambahkan gaya Anda dan nikmati mode <br> yang sopan dengan mudah. Temukan keindahan kesopanan <br> dengan koleksi hijab premium kami hari ini!</p>
            <div class="social-links">
                <a href="https://www.tiktok.com/"><i class="fab fa-tiktok"></i> TikTok</a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://shopee.co.id/"><i class="fas fa-shopping-bag"></i> Shopee</a>
            </div>
        </div>
    </div>


    <section class="footer">
        <div class="box-container">
            <div class="get-in-touch">
                <h2>GET IN TOUCH</h2>
            </div>
            <div class="box">
                <h3>ADDRESS</h3>
                <a href='#'>Desa Raguklampitan RT/RW 12/03 Batealit<br>
                    Jepara, Indonesia</a>
            </div>
            <div class="box">
                <h3>TELEPHONE</h3>
                <a href='#'>+62 858-7094-4120</a>
            </div>
            <div class="box">
                <h3>EMAIL</h3>
                <a href="shovishabrina123@gmail.com">shovishabrina123@gmail.com</a>
            </div>
            <div class="box">
                <h3>FOLLOW US</h3>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        <div class="credit">&copy; 2024 Tatul. All rights reserved.</div>
    </section>
</body>

</html>

<script>
        const leftButton = document.querySelector('.scroll-left');
const rightButton = document.querySelector('.scroll-right');
const bestImages = document.querySelector('.best-images-container'); // Ganti .best-images dengan .best-images-container

leftButton.addEventListener('click', () => {
    bestImages.scrollBy({
        left: -400, // Adjust this value if necessary
        behavior: 'smooth'
    });
});

rightButton.addEventListener('click', () => {
    bestImages.scrollBy({
        left: 400, // Adjust this value if necessary
        behavior: 'smooth'
    });
});
    </script>