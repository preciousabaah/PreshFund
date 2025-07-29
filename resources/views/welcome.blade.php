@extends('layouts.master')

@section('content')




<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1>Your Financial Journey Starts Here</h1>
          <p>At MORE blessing food and health ventures, we help you save smarter, invest wiser,
            and live better. Join us today and unlock a world of possibilities.</p>
          <div class="d-flex">
            <a href="{{ route('index') }}" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
          <img src="/img/offic.webp" class="img-fluid animated" alt="" style="border-radius: 30px;">
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section">

    <div class="container">
      <div class="row gy-4">

        <!-- Card 1 -->
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-piggy-bank-fill"></i></div>
            <h4><a href="#" class="stretched-link">Flexible Savings Plans</a></h4>
            <p>Choose from daily, weekly, or monthly saving options tailored to your lifestyle.</p>
          </div>
        </div><!-- End Service Item -->

        <!-- Card 2 -->
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-lock-fill"></i></div>
            <h4><a href="#" class="stretched-link">Safe & Secure</a></h4>
            <p>Your savings are protected with bank-grade encryption and security protocols.</p>
          </div>
        </div><!-- End Service Item -->

        <!-- Card 3 -->
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-bar-chart-fill"></i></div>
            <h4><a href="#" class="stretched-link">Track Your Progress</a></h4>
            <p>Get real-time insights and monitor your financial growth with our dashboard.</p>
          </div>
        </div><!-- End Service Item -->

      </div>
    </div>

  </section><!-- /Featured Services Section -->


  <!-- /Featured Services Section -->



  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2>About</h2>
      <p></p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="/img/office1.webp" class="img-fluid" alt="img" style="border-radius: 30px;">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>At MORE BLESSING FOOD AND HEALTH Ventures, we believe everyone deserves the opportunity to achieve financial freedom and security.</h3>
          <p class="fst-italic">
            That’s why we created a simple, flexible, and reliable platform to help you save consistently and grow your wealth over time.
            Our monthly savings plan is designed to make it easy for you to set aside funds for your goals—whether it’s for education,
            a dream vacation, emergency funds, or building long-term investments. With us, you can:.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>Save at your own pace with tailored plans</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Enjoy peace of mind knowing your funds are secure.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Watch your savings grow with transparency and ease.</span></li>
          </ul>
          <p>
            We are more than just a savings platform—we’re your partner in financial growth.
            Start today and take the first step towards achieving your dreams.
          </p>
          <!-- Start Now Button -->
          <a href="#get-started"
            class="btn fw-bold mt-3"
            style="background-color: rgba(13, 209, 253, 0.93); color: #fff; border-radius: 50px; padding: 10px 30px;">
            Start Saving
          </a>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Active Months</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Services Section -->
  <section id="services" class="services section" style="background: #f7fbfc;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up" style="text-align: center; margin-bottom: 50px;">
      <span style="letter-spacing: 1px;">Our Services</span>
      <h2 style="font-size: 34px;">Services</h2>
      <p style="color: #555; max-width: 700px; margin: auto;">Empowering you with smarter ways to save, secure, and grow your finances effortlessly.</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">

        <!-- Service Card 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div style="background: #f9fafa; border-radius: 15px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); padding: 30px; text-align: center; transition: all 0.3s ease;">
            <div style="background: #0db4dc; width: 70px; height: 70px; line-height: 70px; margin: 0 auto 20px; color: #fff; font-size: 28px; border-radius: 50%;">
              <i class="bi bi-wallet-fill"></i>
            </div>
            <h3 style="font-size: 20px; font-weight: 600; color: #0db4dc;">Smart Savings</h3>
            <p style="color: #666;">Create flexible plans and achieve your goals with ease.</p>
            <a href="#" style="color: #0db4dc; font-weight: 500; text-decoration: none;">Learn More →</a>
          </div>
        </div>

        <!-- Service Card 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div style="background: #f9fafa; border-radius: 15px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); padding: 30px; text-align: center; transition: all 0.3s ease;">
            <div style="background: #0db4dc; width: 70px; height: 70px; line-height: 70px; margin: 0 auto 20px; color: #fff; font-size: 28px; border-radius: 50%;">
              <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h3 style="font-size: 20px; font-weight: 600; color: #0db4dc;">Safe & Secure</h3>
            <p style="color: #666;">Your funds are protected with enterprise-grade security.</p>
            <a href="#" style="color: #0db4dc; font-weight: 500; text-decoration: none;">Learn More →</a>
          </div>
        </div>

        <!-- Service Card 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div style="background: #f9fafa; border-radius: 15px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); padding: 30px; text-align: center; transition: all 0.3s ease;">
            <div style="background: #0db4dc; width: 70px; height: 70px; line-height: 70px; margin: 0 auto 20px; color: #fff; font-size: 28px; border-radius: 50%;">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <h3 style="font-size: 20px; font-weight: 600; color: #0db4dc;">Track Growth</h3>
            <p style="color: #666;">Monitor your savings progress with real-time analytics.</p>
            <a href="#" style="color: #0db4dc; font-weight: 500; text-decoration: none;">Learn More →</a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- /Services Section -->




  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Start Saving Smarter Today</h3>
            <p>Take control of your finances with flexible savings plans designed to help you achieve your goals faster. Build your future, one smart step at a time.</p>
            <a class="cta-btn" href="#">Get Started Now</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->





  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Testimonials</span>
      <h2>Testimonials</h2>
      <p>Discover Why Our Clients Keep Coming Back and Referring Others</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <!-- Testimonial 1 -->
          <div
            class="swiper-slide p-4 rounded shadow text-center bg-white animate__animated">
            <img
              src="https://randomuser.me/api/portraits/women/44.jpg"
              class="rounded-circle mb-3 shadow"
              alt="Client"
              width="80"
              height="80" />
            <h5 class="fw-bold mb-1">Sarah Williams</h5>
            <p class="text-muted small mb-3">Investor</p>
            <p class="fst-italic">
              “Investa made my portfolio grow faster than I imagined. I trust
              them fully with my investments.”
            </p>
            <div class="text-warning fs-5">★★★★★</div>
          </div>

          <div class="swiper-slide">
            <!-- Testimonial 2 -->
            <div
              class="swiper-slide p-4 rounded shadow text-center bg-white animate__animated">
              <img
                src="https://randomuser.me/api/portraits/men/35.jpg"
                class="rounded-circle mb-3 shadow"
                alt="Client"
                width="80"
                height="80" />
              <h5 class="fw-bold mb-1">James Smith</h5>
              <p class="text-muted small mb-3">Entrepreneur</p>
              <p class="fst-italic">
                “Professional, transparent, and incredibly effective. They helped
                me secure my financial future.”
              </p>
              <div class="text-warning fs-5">★★★★☆</div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <!-- Testimonial 2 -->
            <div
              class="swiper-slide p-4 rounded shadow text-center bg-white animate__animated">
              <img
                src="https://randomuser.me/api/portraits/men/35.jpg"
                class="rounded-circle mb-3 shadow"
                alt="Client"
                width="80"
                height="80" />
              <h5 class="fw-bold mb-1">James Smith</h5>
              <p class="text-muted small mb-3">Entrepreneur</p>
              <p class="fst-italic">
                “Professional, transparent, and incredibly effective. They helped
                me secure my financial future.”
              </p>
              <div class="text-warning fs-5">★★★★☆</div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <!-- Testimonial 2 -->
            <div
              class="swiper-slide p-4 rounded shadow text-center bg-white animate__animated">
              <img
                src="https://randomuser.me/api/portraits/men/35.jpg"
                class="rounded-circle mb-3 shadow"
                alt="Client"
                width="80"
                height="80" />
              <h5 class="fw-bold mb-1">James Smith</h5>
              <p class="text-muted small mb-3">Entrepreneur</p>
              <p class="fst-italic">
                “Professional, transparent, and incredibly effective. They helped
                me secure my financial future.”
              </p>
              <div class="text-warning fs-5">★★★★☆</div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <!-- Testimonial 2 -->
            <div
              class="swiper-slide p-4 rounded shadow text-center bg-white animate__animated">
              <img
                src="https://randomuser.me/api/portraits/men/35.jpg"
                class="rounded-circle mb-3 shadow"
                alt="Client"
                width="80"
                height="80" />
              <h5 class="fw-bold mb-1">James Smith</h5>
              <p class="text-muted small mb-3">Entrepreneur</p>
              <p class="fst-italic">
                “Professional, transparent, and incredibly effective. They helped
                me secure my financial future.”
              </p>
              <div class="text-warning fs-5">★★★★☆</div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->




  <!-- Team Section -->
  <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Team</span>
      <h2>Team</h2>
      <p>Passionate minds building solutions that empower you.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->



  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Contact</span>
      <h2>Contact</h2>
      <p>We’d love to hear from you! Reach out with your questions, feedback, or suggestions and our team will respond promptly.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">






        <div class="col-lg-7">
          <form action="{{ route('contact.store') }}" method="POST" class="php-email-form" >
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->





        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>
                <p>3 Lawal street tedi market ojo lagos</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>07036212146</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15856.630114790763!2d3.1660006658910973!3d6.501733085931665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b840cf58e6b3b%3A0x9f105748c104def8!2s3%20Najeem%20Lawal%20St%2C%20Ojo%2C%20Lagos%20102101%2C%20Lagos!5e0!3m2!1sen!2sng!4v1752281240812!5m2!1sen!2sng" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>



      </div>

    </div>

  </section><!-- /Contact Section -->

</main>


@endsection