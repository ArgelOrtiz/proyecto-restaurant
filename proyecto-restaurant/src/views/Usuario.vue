<template>
  <div>
    <nav-bar></nav-bar>
    <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(/assets/dist/img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="/assets/dist/img/curve_white.svg" class="seperator" ></p>
                  <h1 class="probootstrap-heading ">Usuarios</h1>
                  <div class="probootstrap-sub-wrap">Sección para la administración de usuarios</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  <usuarios :usuarios ="arr_usuarios.usuarios" @reload="reload()"></usuarios>
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <p class="mt40"><img src="/assets/dist/img/logo_sm.png" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>Blog</h3>
            <ul class="probootstrap-blog-list">
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="/assets/dist/img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="/assets/dist/img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="/assets/dist/img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>Contact</h3>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-mail"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>
            
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2019 <a href="https://gg.com/" target="_blank">Atlantis</a>. All Rights Reserved. </small>
          </p>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- END: footer -->
  </div>
</template>

<script>
import NavBar   from "@/components/nav/navbar";
import Usuarios from "@/components/admin-usuarios/usuarios";
import API      from "@/api/api-admin-usuarios";

export default {
  data() {
    return {
      arr_usuarios : []
    }
  },

  components:{
    NavBar,
    Usuarios
  },
  methods: {
    get_usuarios: async function(){

      const consulta    = await API.usuarios.get_usuarios()
      this.arr_usuarios =  consulta.data
    },

    reload:       async function(){

      const consulta    = await API.usuarios.get_usuarios()
      this.arr_usuarios =  consulta.data
    }
    
    
  },
  mounted() {
    this.get_usuarios();
  },
};

</script>