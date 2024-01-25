@extends('layout.app')
@section("title", 'Login :: SABI CORPORATE LIMTED')


@section('main')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Login</h2>
          {{-- <p>Thank you for considering Sabi Corporate as your trusted partner in corporate registration and compliance. To learn more about our services or discuss your specific requirements, please contact us today!</p> --}}
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-6 m-auto">
            <form action="/auth/login" method="post" role="form" class="php-email-form">
              @csrf

              @if($errors->any())
                  <div class="my-3">
                    <div class="error-message">{{ $errors->first() }}</div>
                  </div>
              @enderror

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Email or phone Number" required>
              </div>

              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>

              <div class="form-group mt-3">
                <p>Forgot password? <a href="/auth/reset-password">Reset Password</a></p>
              </div>              

              <div class="text-center"><button type="submit">Login</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection