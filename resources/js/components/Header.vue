<template>
  <header class="shadow">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <router-link class="navbar-brand" :to="{name: 'home-portfolio'}"><img src="images/logo2.png" width="40" alt="logo"> PS WebDeveloper</router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <router-link class="nav-link active" aria-current="page" :to="{name: 'home'}">Home</router-link>
            </li> -->
            <li class="nav-item">
              <router-link class="nav-link" aria-current="page" :to="{name: 'home-portfolio'}">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link " aria-current="page" :to="{name: 'home-bio'}">Biografia</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link " aria-current="page" :to="{name: 'gallery'}">Galleria</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" aria-current="page" :to="{name: 'contact-page'}">Contattami</router-link>
            </li>
          </ul>
          <ul class="navbar-nav w-100 d-flex justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="/login">Entra</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrati</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style scoped lang="scss">
header{

  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 10000;

  nav {
        background-color: #1f2126;
        a, .nav-link {
            color: #50b6c5;
            &:hover{
                color: white;
            }
        }
    }
}
</style>