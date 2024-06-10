<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog</title>
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

        .blog-posts {
    max-width: 800px;
    margin: 20px auto;
}

.post {
    margin-bottom: 3px;
}

.post-title {
    margin-top: 10rem;
    font-size: 3.3rem;
    margin-bottom: 5px;
    color: #333;
    word-wrap: break-word; 
    overflow-wrap: break-word;
}

.post-content {
    font-size: 1.8rem;
    line-height: 1.6;
    margin-bottom: 5px;
    color: #555;
    word-wrap: break-word; 
    overflow-wrap: break-word; 
}

.post-image {
    width: 800px;
    max-height: auto;
    object-fit: cover;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
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

            <main class="blog-posts">
    <?php foreach($blog as $key => $post) : ?>
    <article class="post">
        <h2 class="post-title"><?php echo $post['judul'] ?></h2>
        <div class="post-content"><?php echo $post['isi'] ?></div>
        <img src="/img/<?= $post['foto'] ?>" alt="<?php echo $post['judul'] ?>" class="post-image">
    </article>
<br>

    <?php endforeach ?>
</main>


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