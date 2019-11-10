<template>
  <div>
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <a class="navbar-brand" href="#">
          <h3>Restaurant ®</h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menú</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Iniciar sesion</a>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
        </div>
        <form class="form-inline">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Iniciar Sesion</a>
            </li>
          </ul>
        </form>
      </nav>
    </header>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.header {
  background: url(/assets/dist/images/wallpaper.jpg) no-repeat center;
  background-size: cover;
  min-height: 100vh;
}

.header .navbar {
  background-color: transparent !important;
}
</style>