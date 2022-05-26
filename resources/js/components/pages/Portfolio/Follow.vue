<template>
  <section id="follow">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <div
            class="d-flex align-items-center rounded border shadow bg-light"
            style="width: 50rem"
          >
            <img
              src="images/logo.jpeg"
              width="200px"
              alt="logo"
              class="img-fluid"
            />
            <p class="p-4 fs-5 fw-bold">
              Seguimi anche sul mio portfolio <a href="https://github.com/Salvo170586SP" target="_blank">GitHub</a>. Troverai
              tutti i miei lavori liberamente scaricabili e consultabili con
              pochi click.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Follow",
};
</script>

<style scoped lang="scss">
#follow{
    background-image: linear-gradient(to top, #000a3e 50%, white 50%);
    height: 30vh;
    display: flex;
    align-items: center;
}
</style>