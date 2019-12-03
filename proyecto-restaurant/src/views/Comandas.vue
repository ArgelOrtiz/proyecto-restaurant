<template>
  <div>
    <nav-bar></nav-bar>
    <div>
      <h4>Comanda</h4>
      <b-card-group deck>
        <b-card img-src="https://placekitten.com/1000/300" img-alt="Card image" img-top>
          <b-card-text>Comanda contenido</b-card-text>
        </b-card>
      </b-card-group>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/nav/navbar";
export default {
  components: {
    NavBar
  }
};
</script>

<style>
</style>
