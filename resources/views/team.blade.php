@extends('layout.app')
@section("title", 'Team :: SABI CORPORATE LIMTED')


@section('main')
  <main id="main">




     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ $team_detail['full_name'] }}</h2>
          <p></p>
        </div>

        <div class="row gy-4 posts-list">
            <div class="col-xl-2 col-md-6">
                <div class="member">
                    <img src="{{ asset('assets/img/team/advisory-board/'. $team_detail['image']) }}" class="img-fluid" alt="{{ $team_detail['full_name'] }}">

                </div>
            </div><!-- End post list item -->
            <div class="col-xl-10 col-md-6">
                <p>{{ $team_detail['description'] }}</p>
            </div><!-- End post list item -->

        </div><!-- End blog posts list -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
