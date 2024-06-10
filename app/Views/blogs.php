<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
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
            padding: 1rem 9%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            z-index: 1000;
            box-shadow: 0 .5rem 1 rem rgba(0, 0, 0, 0.1);
        }

        .logo img {
            width: 110px;
        }

        .header h1 {
            margin: 10px;
            margin-right: 20px;
        }

        header nav a {
            padding: 0 15px;
            font-size: 2rem;
            color: #333;
            font-weight: 200;

        }

        header .nav a:hover {
            color: var(#333);
        }

        header .search-icon a {
            font-size: 2.5rem;
            color: #333;
            margin-left: 1.5rem;
        }

        header .search-icon a:hover {
            color: #fff;
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
                <a href="#" class="logo"><img src="logo sabhi.png"></a>
        
                <nav>
                    <a href=<?= base_url('home') ?>>Home</a>
                    <a href=<?= base_url('about') ?>>About Us</a>
                    <a href=<?= base_url('katalog') ?>>Catalogue</a>
                    <a href=<?= base_url('blogs') ?>>Blog</a>
                </nav>
        
                <div class="search-icon">
                    <a href="#" class="fas fa-search"> </a>
                </div> 
            </header>

            <?php foreach($blogs as $key => $post) : ?>

            <?php echo $post['judul'] ?>

            <?php echo $post['isi'] ?>



<?php endforeach ?>

            <section class="footer">
                <div class="box-container">
                    <div class="get-in-touch">
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="box">
                        <h3>ADDRESS</h3>
                        <a href ='#'>Desa Raguklampitan RT/RW 12/03 Batealit<br>
                        Jepara, Indonesia</a>
                    </div>
                    <div class="box">
                        <h3>TELEPHONE</h3>
                        <a href ='#'>+62 858-7094-4120</a>
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