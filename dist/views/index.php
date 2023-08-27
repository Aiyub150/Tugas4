<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  


    <title>Pemandian</title>
</head>
<body>
    <header class="header">
        <img class="logo" src="../../public/img/logo_pemandian_transparant.png" alt="">

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#review">Review</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h4>Selamat datang di Web</h4>
            <h1 style="width: 200%;">Pemandian.</h1>
            <p>Nikmati Keindahan Alam dan Ketenangan di Pemandian Kami.</p>
            <a href="register.php" class="btn">Daftar Sekarang</a>
        </div>  

        <div class="icon-apk">
            <h3>Kunjungi kami di :</h3>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-tiktok"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="public/img/logo.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Pemandian.</span></h2>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla sint, magnam minus quaerat ut sed, est consectetur laudantium, cumque animi numquam? Rerum repudiandae vel eius accusamus quas natus similique nostrum iusto adipisci sunt consectetur, illum eveniet quo asperiores ab nihil?</p>
            <a href="#" class="btn">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <section class="review" id="review">
        <div class="testimonial-container">
            <h2 class="heading">Ulasan <span>Para pengunjung</span></h2>

            <div class="testimonial-wrapper">
                <div class="testimonial-box mySwiper">
                    <div class="testimonial-content swiper-wrapper">
                        <div class="testimonial-slider swiper-slide">
                            <img src="../../public/img/orang.png" alt="">
                            <h3>Mas Faiz</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus numquam atque quo alias minima possimus nostrum? Cupiditate deserunt blanditiis ab praesentium ratione, a possimus, ipsam adipisci architecto dolorum vero, vitae totam nisi necessitatibus quasi repudiandae iure quae perferendis incidunt distinctio voluptatem explicabo. Dicta sint impedit facere nam reiciendis eaque possimus repellat veritatis numquam earum laboriosam officia quis aliquid, delectus dolor?</p>
                        </div>
                        <div class="testimonial-slider swiper-slide">
                            <img src="../../public/img/orang2.png" alt="">
                            <h3>Spongebob Kang Gacor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus numquam atque quo alias minima possimus nostrum? Cupiditate deserunt blanditiis ab praesentium ratione, a possimus, ipsam adipisci architecto dolorum vero, vitae totam nisi necessitatibus quasi repudiandae iure quae perferendis incidunt distinctio voluptatem explicabo. Dicta sint impedit facere nam reiciendis eaque possimus repellat veritatis numquam earum laboriosam officia quis aliquid, delectus dolor?</p>
                        </div>
                        <div class="testimonial-slider swiper-slide">
                            <img src="../../public/img/orang3.png" alt="">
                            <h3>Mister Waduh</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus numquam atque quo alias minima possimus nostrum? Cupiditate deserunt blanditiis ab praesentium ratione, a possimus, ipsam adipisci architecto dolorum vero, vitae totam nisi necessitatibus quasi repudiandae iure quae perferendis incidunt distinctio voluptatem explicabo. Dicta sint impedit facere nam reiciendis eaque possimus repellat veritatis numquam earum laboriosam officia quis aliquid, delectus dolor?</p>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>

    <div id="loginPopup" class="popup">
        <div class="popup-content">
          <span class="close" id="closePopupBtn">&times;</span>
          <h2>Login</h2>
          <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
          </form>
        </div>
      </div>

<script src="../../public/js/style.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>