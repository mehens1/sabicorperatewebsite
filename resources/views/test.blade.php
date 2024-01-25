@extends('layout.app')
@section("title", 'Login :: SABI CORPORATE LIMTED')


@section('main')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data</h2>
          {{-- <p>Thank you for considering Sabi Corporate as your trusted partner in corporate registration and compliance. To learn more about our services or discuss your specific requirements, please contact us today!</p> --}}
        </div>

        {{ $data }}

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection