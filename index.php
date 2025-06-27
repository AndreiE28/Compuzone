
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Compuzone</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Compuzone</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Acasă</a></li>
          <li><a href="index.php#about">Despre</a></li>
	  <li><a href="#faq-2">FAQ</a></li>
	  <li><a href="#quiz">Quiz</a></li>
          <li class="dropdown"><a href="#"><span>Componente</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="Procesoare.html">Procesoare</a></li>
              <li><a href="Plăci video.html">Plăci video</a></li>
              <li><a href="Plăci de bază.html">Plăci de bază</a></li>
              <li><a href="Stocare.html">Stocare</a></li>
              <li class="dropdown"><a href="Periferice.html"><span>Periferice</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="Periferice.html#Tastatura">Tastatura</a></li>
                  <li><a href="Periferice.html#Mouse-ul">Mouse-ul</a></li>
                  <li><a href="Periferice.html#Monitorul">Monitorul</a></li>
                  <li><a href="Periferice.html#Imprimanta">Imprimanta</a></li>
                  <li><a href="Periferice.html#Scannerul">Scannerul</a></li>
          <li><a href="Periferice.html#Căștile și Boxele">Căștile și Boxele</a></li>
          <li><a href="Periferice.html#Webcam-ul">Webcam-ul</a></li>
          <li><a href="Periferice.html#Hard Disk Extern și Stick USB">Hard Disk Extern și Stick USB</a></li>
                </ul>
              </li>
            </ul>
          </li>
	  
          <li><a href="#contact">Feedback</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Începe</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Totul despre calculatoare</h1>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Începe</a>
              <a href="Every Computer Component Explained in 3 Minutes.mp4"
                class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Vizionează tutorialul</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.intel.com/" target="_blank"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.amd.com/en.html" target="_blank"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.asus.com/" target="_blank"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.corsair.com/us/en" target="_blank"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.gigabyte.com/" target="_blank"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.msi.com/index.php" target="_blank"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.xfxforce.com/" target="_blank"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.aorus.com/" target="_blank"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></a></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Ce este un calculator?</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content">
            <p>
              Calculatorul este un dispozitiv electronic care poate procesa și stoca informații. Acesta poate fi utilizat în scopul îndeplinirii multor activități, precum: 
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>editarea documentelor sau a videoclipurilor;</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>navigarea internetului;</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>activități recreaționale (jocuri video, ascultarea muzicii, vizionarea filmelor, etc.).</span></li>
            </ul>
          </div>

          <div class="col-lg-6">
            <p>Prin eficiența și flexibilitatea pe care le oferă, calculatorul este o unealtă puternică, prezentă în majoritatea caselor și folosită în toate domeniile de activitate. </p>
            <a href="https://ro.wikipedia.org/wiki/Calculator" target="_blank" class="read-more"><span>Citește mai mult (Wikipedia)</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Întrebări frecvente</h2>
        <p>Această secțiune cuprinde întrebări generale, des întâlnite în mediul on-line, cu privire la computere.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Care este diferența dintre calculator și laptop?</h3>
                <div class="faq-content">
                  <p>Diferențe cheie sunt portabilitatea, sursa de alimentare, dimensiunea, capacitatea de stocare și numărul de porturi. Laptopurile sunt portabile, funcționează pe baterii și au un spațiu de stocare redus. Computerele de birou sunt staționare, funcționează la rețea, au o capacitate de stocare mai mare și mai multe porturi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Calculatorul nu funcționează așa cum ar trebui. Ce pot să fac?</h3>
                <div class="faq-content">
                  <p>Această problemă poate apărea din multe cauze. Primul lucru care trebuie făcut este găsirea problemei, însă poți încerca următoarele rezolvări: închide programele și filele inutile, repornește computerul, șterge fișierele cache și fișierele temporare, instalează un program antivirus, efectuează un update de sistem sau oprește programele care pornesc odată cu calculatorul.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Care este diferența dintre sistemele de operare pe 32 și 64 de biți?</h3>
                <div class="faq-content">
                  <p>Un calculator pe 32 de biți procesează datele în bucăți mai mici, ceea ce poate limita performanța și compatibilitatea software-ului. Un PC pe 64 de biți procesează bucăți mai mari de date, ceea ce duce adesea la o performanță mai bună. La fel ca pantofii de mărimea potrivită, versiunea corectă de biți asigură funcționarea fără probleme a software-ului pe calculatorul dvs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>De ce produce calculatorul un sunet anormal?</h3>
                <div class="faq-content">
                  <p>Cauzele producerii unor sunete neobișnuite de către calculator pot fi diverse, cele mai frecvente fiind: acumularea prafului (în special în jurul ventilatoarelor), ventilatoare sau sursă defectate, utilizarea unui tip tradițional de stocare (ex:HDD) sau supraîncălzirea. În acest caz, este recomandată repararea sau înlocuirea componentelor de către un specialist.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Cum îmi actualizez driverele?</h3>
                <div class="faq-content">
                  <p>Actualizarea driverelor nu este un proces complicat, însă necesită răbdare. Caută driverele pentru fiecare componentă în parte și asigură-te că acestea sunt distribuite de producătorii componentelor. Apoi, urmați instrucțiunile oferite de producători pentru a instala driverele. ATENȚIE! Evită programele care descarcă automat drivere pentru toate componentele, întrucât nu găsesc întotdeauna driverele potrivite, fapt ce poate duce la erori de sistem și chiar coruperea sistemului.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->
	
	<!-- Quiz Section -->
<section id="quiz" class="quiz section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Quiz</h2>
    <p>Testează-ți cunoștințele despre calculatoare.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="quiz-container">
          <iframe src="php-quiz/quiz.php" frameborder="0" style="width:100%; height:800px;"></iframe>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Quiz Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Feedback</h2>
        <p>În caz că aveți sugestii pentru înbunătățirea paginii sau întrebări, nu ezitați să ne scrieți! În plus, dacă o întrebare este populară, aceasta poate ajunge în secțiunea "Întrebări frecvente".</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-5">
			
            <div class="info-wrap">
				<div class="info-item d-flex">
               <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><a href= "mailto:help.compuzone@gmail.com">help.compuzone@gmail.com</a></p>
				  <p><a href= "mailto:help.compuzone@yahoo.com">help.compuzone@yahoo.com</a></p>
                </div>
			  </div>
			  <div class="info-item d-flex">
                <i class="bi bi-bar-chart-line flex-shrink-0"></i>
				<div>
                  <h3>Statistici</h3>
                  <p><?php include 'php-fb/count-feedback.php'; ?></p>
                </div>
			  </div>
			  </div>
          </div>

          <div class="col-lg-7">
            <form action="php-fb/insert.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Numele</label>
                  <input type="text" name="nume" id="nume" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Adresa de email</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>

				<div class="col-md-6">
					<label for="tip-feedback" class="pb-2">Tip feedback</label>
					<select class="form-control" name="tip_feedback" id="tip-feedback" required>
						<option value="">-- Alegeți --</option>
						<option value="Îmbunătățire">Îmbunătățire</option>
						<option value="Reparare">Reparare</option>
					</select>
				</div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subiect</label>
                  <input type="text" class="form-control" name="subiect" id="subject" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Mesaj</label>
                  <textarea class="form-control" name="mesaj" rows="10" id="mesaj" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Se încarcă...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Mesajul a fost trimis. Mulțumim!</div>

                  <button type="submit">Trimite mesajul</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

   <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">CompuZone</span>
          </a>
          <div class="footer-contact pt-3">
            <p><strong>Email:</strong>
			<ul>
			<li><a id="foremail" href= "mailto:help.compuzone@gmail.com"><span>help.compuzone@gmail.com</span></a></li>
			<li><a id="foremail" href= "mailto:help.compuzone@yahoo.com"><span>help.compuzone@yahoo.com</span></a></li>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Pagini utile</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Acasă</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php#faq-2">FAQ</a></li>
          </ul>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>