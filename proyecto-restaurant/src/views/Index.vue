<template>
  <div>
    <navbar></navbar>
    <!-- <img class="img-fluid" src="/assets/dist/images/wallpaper.jpg"> -->
    <div class="row img-bg m-0">
      <!-- <img src="/assets/dist/images/wallpaper.jpg" /> -->
      <!-- <h5>asdasd</h5> -->
      <div class="col-md-12">
        <div class="row mt-5">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xg-12 text-center mt-5">
            <h1 class="display-2 text-light">La comida más fresca</h1>
            <h1 class="display-5 text-light">Al precio más accesible</h1>
            <h1 class="display-5 text-light mt-5">¡¡Bienvenido!!</h1>
            <button class="btn btn-outline-light mt-5">
                <h4 class="m-0">Platillos</h4>
            </button>
          </div>
        </div>
      </div>
    </div>
    <acerca-de></acerca-de>
  </div>
</template>

<script>
import Navbar from "@/components/nav/navbar";
import AcercaDe from "@/components/index/acerca-de"

export default {
  components: {
    Navbar,
    AcercaDe
  }
};
</script>

<style scoped>
.img-bg {
  background: url(/assets/dist/images/wallpaper.jpg) no-repeat center;
  /* min-height: 80vh !important; */
  width: 100% !important;
  height: 100vh;
}

h1 {
    font-family: 'Times New Roman', Times, serif;
    text-shadow: 0px 0px 5px #000;
}
</style>