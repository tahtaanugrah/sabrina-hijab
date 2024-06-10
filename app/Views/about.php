<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
            height: 80px; 
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
            text-decoration: none;
        }

        header nav a:hover {
            color: var(--black);
        }

        .py-3.py-md-5 {
            font-size: 1.6rem;
            line-height: 2.4rem;
            padding: 3rem 0;
        }

        .py-3.py-md-5 h2,
        .py-3.py-md-5 p,
        .py-3.py-md-5 h4,
        .py-3.py-md-5 a {
            margin-bottom: 1.5rem;
        }

        .col-12 .col-xl-11 {
            padding-left: 5rem;
        }

        .col-12 .col-xl-11 h2 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-top: 40px;
            margin-right: 100px;
        }

        .col-12 .col-xl-11 {
            margin-top: 60px;
        }

        .h4 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .footer {
            background-color: rgba(120, 158, 205, 0.1);
            padding-top: 20px;
            padding-right: -20px;

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

        .footer .box-container .box h6 {
            color: #333;
            font-size: 1.8rem;
            padding: 1rem 0;
            font-weight: bold;
        }

        .footer .box-container .box a {
            display: block;
            color: #666;
            font-size: 1.5rem;
            padding: 1rem 0;
            text-decoration: none;
        }

        .footer .box-container .box a:hover {
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
    </style>
</head>

<body>
    <header>
        <a href="<?php echo base_url('home') ?>" class="logo"><img src="<?= base_url() ?>/img/logo_sabhi.png"></a>



        <nav>
            <a href=<?= base_url('home') ?>>Home</a>
            <a href=<?= base_url('about') ?>>About Us</a>
            <a href=<?= base_url('katalog') ?>>Catalogue</a>
            <a href=<?= base_url('blog') ?>>Blog</a>
        </nav>
    </header>


    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <?php foreach ($about as $key => $post) : ?>
            <div class="container">
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <img class="img-fluid rounded" <?php echo $post['foto'] ?>loading="lazy" src="/img/<?php echo $post['foto'] ?>" alt="About 1">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="row justify-content-xl-start">
                            <div class="col-12 col-xl-11">
                                <h2 class="mb-3"><?php echo $post['judul'] ?></h2>
                                <p class="mb-5"><?php echo $post['isi'] ?></p>
                                <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                                <i class="fas fa-user-tie fa-2x"></i>
                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="h4 mb-3"><?php echo $post['reseller'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                                <i class="fas fa-user-plus fa-2x"></i>
                                                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h5 class="h4 mb-3"><?php echo $post['kontak'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                <?php endforeach ?>
                </div>
            </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="get-in-touch">
                <h2>GET IN TOUCH</h2>
            </div>
            <div class="box">
                <h6>ADDRESS</h6>
                <a href='#'>Desa Raguklampitan RT/RW 12/03 Batealit<br>
                    Jepara, Indonesia</a>
            </div>
            <div class="box">
                <h6>TELEPHONE</h6>
                <a href='#'>+62 858-7094-4120</a>
            </div>
            <div class="box">
                <h6>EMAIL</h6>
                <a href="shovishabrina123@gmail.com">shovishabrina123@gmail.com</a>
            </div>
            <div class="box">
                <h6>FOLLOW US</h6>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        <div class="credit">&copy; 2024 Tatul. All rights reserved.</div>
    </section>

</body>

</html>