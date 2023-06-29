<!DOCTYPE html>
<html>
  <?php
  $nama       = 'Alvian Nur Romadhoni';
  $impian     = 'Web Developer!';

  $link_wa    = 'https://wa.me/+62895397733636';
  $link_dc    = 'https://discord.gg/';
  $link_ig    = 'https://www.instagram.com/';

  $about      = ' Tolong bantu saya untuk mengembangkan skill yang saya sekarang agar dapat bersaing di dunia kerja. Disini berisi kecemasan saya. 
                  Berikan masukan kepada saya, Terimakasih. Tolong bantu saya untuk mengembangkan skill yang saya sekarang agar dapat bersaing di dunia kerja. Disini berisi kecemasan saya.
                  Berikan masukan kepada saya, Terimakasih. Tolong bantu saya untuk mengembangkan skill yang saya sekarang agar dapat bersaing di dunia kerja. Disini berisi kecemasan saya.
                  Berikan masukan kepada saya, Terimakasih. Tolong bantu saya untuk mengembangkan skill yang saya sekarang agar dapat bersaing di dunia kerja. Disini berisi kecemasan saya.
                ';
  ?>

  <head>
    <link href="css/main.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script>
      // Mendapatkan elemen navbar
      const navbar = document.querySelector(".navbar");

      // Mendapatkan daftar item navbar
      const navbarItems = navbar.querySelectorAll("li");

      // Menambahkan event listener untuk setiap item navbar
      navbarItems.forEach((item) => {
        item.addEventListener("click", scrollToSection);
      });

      // Fungsi untuk menggulir ke bagian yang diklik
      function scrollToSection(event) {
        event.preventDefault();

        // Mendapatkan id dari target yang diklik
        const targetId = event.target.getAttribute("href");

        // Mendapatkan elemen target
        const targetElement = document.querySelector(targetId);

        // Menggulir ke elemen target menggunakan metode scrollIntoView
        targetElement.scrollIntoView({
          behavior: "smooth", // Efek scroll yang halus
          block: "start", // Posisi awal elemen target di jendela tampilan
        });
      }

      // Untuk memulai efek ketikan setelah halaman dimuat
      window.addEventListener("DOMContentLoaded", () => {
        const textElement = document.querySelector(".big-text");
        const text = textElement.innerHTML;
        textElement.innerHTML = "";

        let i = 0;
        const typingEffect = setInterval(() => {
          textElement.innerHTML += text[i];
          i++;

          if (i === text.length) {
            clearInterval(typingEffect);
          }
        }, 100);
      });
    </script>
    <title>Document</title>
  </head>
  <body>
    <div id="home">
      <nav>
        <div class="logo">
          <img src="images/logo.png" alt="Logo" />
          <span>Portofolio.</span>
        </div>
        <ul class="navbar">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#portfolio">Portofolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="content">
        <div class="text">
          <p>Hallo, saya</p>
          <p class="big-text"><?php echo $nama; ?></p>
          <p>Saya adalah <span class="color-red"><?php echo $impian; ?></span></p>
          <p class="small-text">
            Jika kalian berminat dengan jasa saya sebagai UI/UX dan Developer,
            bisa hubungi saya.
          </p>
          <div class="contact-icons">
            <a
              href="<?php echo $link_wa; ?>"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fab fa-whatsapp"></i
            ></a>
            <a
              href="<?php echo $link_dc; ?>"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fab fa-discord"></i
            ></a>
            <a
              href="<?php echo $link_ig; ?>"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
          <div class="contact-buttons">
            <a href="<?php echo $link_wa; ?>" class="whatsapp-button"
              >Hubungi Saya</a
            >
          </div>
        </div>
        <div class="img-container">
          <img src="images/foto.svg" alt="Foto" />
        </div>
      </div>
    </div>

    <div id="about">
      <div class="content-about">
        <div class="img-container">
          <img src="images/foto.svg" alt="Foto" />
        </div>
        <div class="text">
          <p class="big-text">About <span class="color-red">Me</span></p>
          <p><?php echo $impian; ?></p>
          <p class="small-text">
          <?php echo $about; ?>
          </p>
          <div class="contact-buttons">
            <a href="" class="next-button">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <div id="service">
      <div class="service">
        <div class="text">
          <p class="big-text"><span class="color-red">Our</span> Services</p>
        </div>
        <div class="services">
          <div class="service">
            <i class="fas fa-code"></i>
            <h3>Web Development</h3>
            <p>Specializing in creating modern and responsive websites.</p>
          </div>
          <div class="service">
            <i class="fas fa-palette"></i>
            <h3>Graphic Design</h3>
            <p>Providing visually appealing and creative graphic designs.</p>
          </div>
          <div class="service">
            <i class="fas fa-chart-line"></i>
            <h3>Digital Marketing</h3>
            <p>
              Helping businesses grow through effective digital marketing
              strategies.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="portfolio">
      <div class="content-projects">
        <p class="section-title">
          Projects & <span class="color-red">certificate</span>
        </p>
        <div class="project-grid">
          <div class="project-item">
            <img src="images/cyber.svg" alt="Project 1" class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Project Cyber</h3>
                <p class="project-description">
                  Cyber adalah karakter pertama yang saya buat dan memiliki
                  sikap yang dingin dan ambisius.
                </p>
              </div>
            </div>
          </div>
          <div class="project-item">
            <img src="images/foto.svg" alt="Project 2" class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Project Aliana</h3>
                <p class="project-description">
                  Aliana adalah karakter yang memiliki kreativitas tinggi dan
                  menyukai sebuah tantangan.
                </p>
              </div>
            </div>
          </div>
          <div class="project-item">
            <img src="images/kue.svg" alt="Project 3" class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Project Kue</h3>
                <p class="project-description">
                  Kue adalah karakter yang menyukai ketenangan.
                </p>
              </div>
            </div>
          </div>
          <div class="project-item">
            <img src="images/html.png" alt="Project 4" class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Certificate HTML</h3>
              </div>
            </div>
          </div>
          <div class="project-item">
            <img
              src="images/back-end.png"
              alt="Project 5"
              class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Certificate Back-End</h3>
              </div>
            </div>
          </div>
          <div class="project-item">
            <img src="images/css.png" alt="Project 6" class="project-image" />
            <div class="project-overlay">
              <div class="project-overlay-content">
                <h3 class="project-title">Certificate CSS</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="contact">
      <div class="content-contact">
        <h2 class="section-title">Contact Me</h2>
        <div class="whatsapp-icon">
          <a href="<?php echo $link_wa; ?>" class="fab fa-whatsapp"></a>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <p class="footer-text">© 2023 Hak Cipta Alvian Nur Romadhoni - 202122011</p>
  </footer>
</html>
