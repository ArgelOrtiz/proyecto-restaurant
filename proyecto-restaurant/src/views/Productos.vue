<template>
  <div>
    <nav-bar></nav-bar>
    <section class="probootstrap-cta probootstrap-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-cta-heading">Administración de productos</h2>
          </div>
        </div>
      </div>
    </section>
    <platillos></platillos>
    <!-- <section class="probootstrap-section probootstrap-section-dark">
      <h2 class="mt0">Bebidas</h2>
      <div class="container">
        <div class="row probootstrap-gutter10">
          <div class="col-md-4">
            <div class="probootstrap-block-image-text">
              <figure>
                <a href="img/img_1.jpg" class="image-popup">
                  <img
                    src="/assets/dist/img/img_1.jpg"
                    alt="Free HTML5 Bootstrap Template by uicookies.com"
                    class="img-responsive"
                  />
                </a>
                <div class="actions">
                  <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <i class="icon-play2"></i>
                  </a>
                </div>
              </figure>
              <div class="text">
                <h3>
                  <a href="#">Grand Deluxe Room</a>
                </h3>
                <div class="post-meta">
                  <ul>
                    <li>
                      <span class="review-rate">4.7</span>
                      <i class="icon-star"></i> 252 Reviews
                    </li>
                    <li>
                      <i class="icon-user2"></i> 3 Guests
                    </li>
                  </ul>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p>
                  <a href="#" class="btn btn-primary">Book now from $109</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-section-dark">
      <h2 class="mt0">Postres</h2>
      <div class="container">
        <div class="row probootstrap-gutter10">
          <div class="col-md-4">
            <div class="probootstrap-block-image-text">
              <figure>
                <a href="img/img_1.jpg" class="image-popup">
                  <img
                    src="/assets/dist/img/img_1.jpg"
                    alt="Free HTML5 Bootstrap Template by uicookies.com"
                    class="img-responsive"
                  />
                </a>
                <div class="actions">
                  <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <i class="icon-play2"></i>
                  </a>
                </div>
              </figure>
              <div class="text">
                <h3>
                  <a href="#">Grand Deluxe Room</a>
                </h3>
                <div class="post-meta">
                  <ul>
                    <li>
                      <span class="review-rate">4.7</span>
                      <i class="icon-star"></i> 252 Reviews
                    </li>
                    <li>
                      <i class="icon-user2"></i> 3 Guests
                    </li>
                  </ul>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p>
                  <a href="#" class="btn btn-primary">Book now from $109</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
  </div>
</template>

<script>
import NavBar from "@/components/nav/navbar";
import Platillos from "@/components/admin-productos/platillos";

export default {
  components: {
    NavBar,
    Platillos
  }
};
</script>

<style scoped>
h2 {
    width: 100% !important;
}
</style>