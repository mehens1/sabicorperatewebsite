@extends('layout.app')
@section("title", 'Reset Password :: SABI CORPORATE LIMTED')


@section('main')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Reset Password</h2>
          {{-- <p>Thank you for considering Sabi Corporate as your trusted partner in corporate registration and compliance. To learn more about our services or discuss your specific requirements, please contact us today!</p> --}}
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-6 m-auto">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Registered Email Address" required>
              </div>

              <div class="form-group mt-3">
                <p>Remembered Login Credentials? <a href="/auth/login">Login</a></p>
                {{-- <input type="password" class="form-control" name="password" id="password" placeholder="Password" required> --}}
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection