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

        .container{
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

        .best p{
            font-size: 2rem;
        }

        .best-images-container {
  position: relative;
  overflow-x: hidden;
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
    margin-top: 50px;
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
    margin-bottom: 150px;
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
        margin-top: 10px;
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

    <section class="banner" id="banner">
        <div class="ban">
            <h1>KEINDAHAN DAN KESOPANAN</h1>
            <span>BERTEMU DALAM SETIAP JAHITAN</span>
            <p>Temukan koleksi hijab Sabrina terbaru yang dirancang untuk menambahkan sentuhan <br> elegan pada gaya Anda.</p>
            <a href ="#" class="btn">Lihat Katalog > </a>

            <div class="banner-images">
                <div class="banner-rows">
                    <img src="3.jpg" alt="Image 1">
                    <img src="3.jpg" alt="Image 2">
                </div>
                <div class="banner-row">
                    <img src="3.jpg" alt="Image 3">
                    <img src="3.jpg" alt="Image 4">
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
          <h1>Best Seller Product</h1>
          <p>Produk terlaris yang wajib dibeli! Temukan keajaiban produk andalan kami yang <br> sangat digemari. Segera dapatkan dan tingkatkan gaya Anda dengan mudah!</p>
        </div>
        <div class="best-images-container">
          <div class="best-images">
            <img src="3.jpg" alt="Image 5">
            <img src="3.jpg" alt="Image 6">
            <img src="3.jpg" alt="Image 7">
            <img src="3.jpg" alt="Image 8">
            <img src="3.jpg" alt="Image 9">
            <img src="3.jpg" alt="Image 10">
          </div>
          <button class="scroll-button scroll-left">Left</button>
          <button class="scroll-button scroll-right">Right</button>
        </div>
      </div>

    
      <div class="find">
        <div class="find-images">
            <img src="3.jpg" alt="Image 11">
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

<script>
const bestImages = document.querySelector('.best-images');
const scrollButtons = document.querySelectorAll('.scroll-button');

console.log(bestImages); // Check if .best-images is selected
console.log(scrollButtons); // Check if scroll buttons are selected

scrollButtons.forEach(button => {
  button.addEventListener('click', () => {
    const scrollAmount = button.classList.contains('scroll-left') ? -400 : 400;
    console.log('Scroll amount:', scrollAmount); // Check if scroll amount is correct
    bestImages.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  });
});


</script>
