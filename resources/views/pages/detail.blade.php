@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
        <!-- Page Content -->
    <!-- Page Content  -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('home')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].url"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{active: index==activePhoto}"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Galig Pratama</div>
                <div class="price">$1,555</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3"
                  >Add to Cart</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui
                  enim ipsam odio omnis repellendus molestias exercitationem,
                  perferendis quod sunt nulla commodi nisi quidem quas. Impedit
                  rerum eveniet nam aperiam deserunt!
                </p>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui
                  enim ipsam odio omnis repellendus molestias exercitationem,
                  perferendis quod sunt nulla commodi nisi quidem quas. Impedit
                  rerum eveniet nam aperiam deserunt!
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/ic-testimonial.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hazza RIsky</h5>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Necessitatibus minima, architecto temporibus officiis
                      facilis earum voluptate maiores dolor? Ratione labore
                      dolorum totam facere maiores, officiis eum culpa impedit
                      dicta officia!
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/ic-testimonial.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hazza RIsky</h5>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Necessitatibus minima, architecto temporibus officiis
                      facilis earum voluptate maiores dolor? Ratione labore
                      dolorum totam facere maiores, officiis eum culpa impedit
                      dicta officia!
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/ic-testimonial.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hazza RIsky</h5>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Necessitatibus minima, architecto temporibus officiis
                      facilis earum voluptate maiores dolor? Ratione labore
                      dolorum totam facere maiores, officiis eum culpa impedit
                      dicta officia!
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 1,
          photos: [
            {
              id: 1,
              url: "/images/products-detail-1.jpg",
            },
            {
              id: 2,
              url: "/images/products-detail-2.png",
            },
            {
              id: 3,
              url: "/images/products-detail-3.png",
            },
            {
              id: 4,
              url: "/images/products-detail-4.png",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    
@endpush