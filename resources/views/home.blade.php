@extends('layouts/main')

@section('container')
    <div class="container">
        <div class="row pb-3 border-bottom border-dark">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://source.unsplash.com/800x300?plane" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://source.unsplash.com/800x300?food" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://source.unsplash.com/800x300?food" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="row">
            <article class="mb-5 pt-3 text-center">
                <h2>E-Learning News</h2>
                <h5></h5>
                @include('partials.card-news')
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo aliquid quis aperiam voluptatum beatae. Consequatur, cum. Pariatur voluptatum dolor veritatis deleniti natus nobis nulla! Asperiores labore explicabo aperiam! Debitis minus optio quas, pariatur non expedita obcaecati ad repudiandae quasi voluptas. Fugiat vel, quod praesentium quaerat omnis sequi, tempore iusto quasi, esse voluptate dolor similique cumque repellendus veritatis quia perferendis suscipit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore a nihil quam harum enim libero. Illo porro beatae asperiores quas voluptas velit neque doloremque necessitatibus commodi at quia animi perspiciatis iure soluta, praesentium itaque eveniet placeat ullam odio provident. Sequi sunt dolor rem placeat architecto consectetur quaerat aspernatur adipisci cumque.</p>
            </article>
        </div>

        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col col-lg-5">
              <img src="https://learning-aic.aerofood.co.id/Elegantic/images/ALS.png" class="float-md-end my-4" alt="" width="180">
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">About Aerofood ACS</h5>
      
              <p>
                PT Aerofood Indonesia, is the holding company of Aerowisata Group which is also a holding company of Garuda Indonesia Group. Aerofood is a company that serves 
                the procurement of products and logistics needs in flight with domestic and international sizes.
              </p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
  </div>
@endsection