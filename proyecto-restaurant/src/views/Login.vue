<template>
  <div>
      <navbar></navbar>
      <b-card
            title="Card Title"
            img-src="https://picsum.photos/600/300/?image=25"
            img-alt="Image"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-2"
        >
            <b-card-text>
                <formulario></formulario>
            </b-card-text>

            <b-button href="#" variant="primary">Go somewhere</b-button>
        </b-card>
  </div>
</template>

<script>
import Formulario from '@/components/formulario'
import Navbar from '@/components/nav/navbar'
export default {
    components: {
        Formulario,
        Navbar
    }
}
</script>

<style>

</style>