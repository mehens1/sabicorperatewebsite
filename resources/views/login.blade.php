@extends('layout.app')
@section("title", 'Login :: SABI CORPORATE LIMTED')


@section('main')
  <main id="main">

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="login" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Login</h2>
            <p></p>
          </div>

          <div class="row gy-4">

            <div class="col-xl-4 col-md-6 col-sm-12 m-auto">
              <article>

                <p class="post-category">Politics</p>

                <h2 class="title">
                  <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->


          </div><!-- End recent posts list -->

        </div>
      </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->
@endsection