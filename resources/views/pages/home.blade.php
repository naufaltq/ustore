@extends('layouts.app')

@section('title')
    UStore Homepage
@endsection

@section('content')
     <!-- Page Content -->
    <!-- Carousel -->
    <div class="page-content page-home">
        <section class="store-carousel">
          <div class="container">
            <div class="row">
              <div class="col-lg-12" data-aos="zoom-in">
                <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                    <li data-target="#storeCarousel" data-slide-to="1"></li>
                    <li data-target="#storeCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/images/image 4.jpg" alt="Carousel Image" class="d-block w-100" />
                    </div>
                    <div class="carousel-item">
                      <img src="/images/keren.png" alt="Carousel Image" class="d-block w-100" />
                    </div>
                    <div class="carousel-item">
                      <img src="/images/gambar dana.jpeg" alt="Carousel Image" class="d-block w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Carousel End -->

        <!-- Trend Categories -->
        <section class="store-trend-categories">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-up">
                <h5>Trend Categories</h5>
              </div>
            </div>
            <!-- Input Gambar Trend Categories -->
            <div class="row">
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-furniture.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Furniture</p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-sneaker.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Sneaker</p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-gadgets.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Gadgets</p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-baby.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Baby</p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-tools.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Tools</p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="/images/categories-makeup.svg" alt="" class="w-100" />
                  </div>
                  <p class="categories-text">Makeup</p>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Trend Categories End -->

        <!-- New Products -->
        <section class="store-new-products">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-up">
                <h5>New Products</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <a href="/details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('/images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">&90000</div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- New Products End -->
    </div>
    <!-- Page Content End -->
@endsection