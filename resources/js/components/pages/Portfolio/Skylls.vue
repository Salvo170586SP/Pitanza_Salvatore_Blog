<template>
  <section id="skylls">
    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-12 text-center">
          <h2>SVILUPPO SITI WEB & WEB APP</h2>
          <span class="fw-bold text-muted fs-4">Tecnologie che utilizzo</span>
        </div>
        <div class="col-12 col-md-6 text-center p-4">
          <h3 class="text-muted">FRONT-END</h3>
          <p class="fw-bold">
            L'occhio vuole la sua parte, le tecnologia che prediligo
            maggiormente per il front-end è Vuejs. E' un framework javascript
            che rende le pagine interattive e leggere, soprattutto grazie ai
            suoi componenti neutrali, atomici e riutilizzabili. Il sass come
            compilatore css, la libreria di bootstrap e ovviamente le ossatura
            dell'html.
          </p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-evenly h-150">
          <a href="https://it.wikipedia.org/wiki/HTML" target="”_blank”">
            <figure>
              <img
                src="images/icon/file_type_html_icon_130541.svg"
                class="icon-code"
                width="70"
                alt="html"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/CSS" target="”_blank”">
            <figure>
              <img
                src="images/icon/file_type_css_icon_130661.svg"
                class="icon-code"
                width="70"
                alt="css"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/JavaScript" target="”_blank”">
            <figure>
              <img
                src="images/icon/javascript_icon_130900.svg"
                class="icon-code"
                width="70"
                alt="javascript"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/Vue.js" target="”_blank”">
            <figure>
              <img
                src="images/icon/file_type_vue_icon_130078.svg"
                class="icon-code"
                width="70"
                alt="vue"
              />
            </figure>
          </a>
          <a
            href="https://it.wikipedia.org/wiki/Bootstrap_(framework)"
            target="”_blank”"
          >
            <figure>
              <img
                src="images/icon/bootstrap_plain_logo_icon_146619.svg"
                width="70"
                alt="bootstrap"
                class="icon-code"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/Sass" target="”_blank”">
            <figure>
              <img
                src="images/icon/icons8-sass.svg"
                width="70"
                class="icon-code"
                alt="sass"
              />
            </figure>
          </a>
        </div>
        <div class="col-6 d-flex justify-content-evenly h-150">
          <a href="https://it.wikipedia.org/wiki/PHP" target="”_blank”">
            <figure>
              <img
                src="images/icon/php_icon_130857.svg"
                width="70"
                class="icon-code"
                alt="php"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/MySQL" target="”_blank”">
            <figure>
              <img
                src="images/icon/mysql_original_wordmark_logo_icon_146417.svg"
                width="70"
                alt="mysql"
                class="icon-code"
              />
            </figure>
          </a>
          <a href="https://it.wikipedia.org/wiki/Laravel" target="”_blank”">
            <figure>
              <img
                src="images/icon/laravel-logo-9B01588B1F-seeklogo.com_.png"
                width="70"
                alt="laravel"
                class="icon-code"
              />
            </figure>
          </a>
          <a
            href="https://it.wikipedia.org/wiki/Git_(software)"
            target="”_blank”"
          >
            <figure>
              <img
                src="images/icon/file_type_git_icon_130581.svg"
                width="70"
                class="icon-code"
                alt="git"
              />
            </figure>
          </a>
          <a
            href="https://it.wikipedia.org/wiki/Visual_Studio_Code"
            target="”_blank”"
          >
            <figure>
              <img
                class="icon-code"
                src="images/icon/Visual_Studio_Code_1.35_icon.svg.png"
                width="70"
                alt="vscode"
              />
            </figure>
          </a>
        </div>
        <div class="col-12 col-md-6 text-center px-5">
          <h3 class="text-muted">BACK-END</h3>
          <p class="fw-bold">
            Dietro le quinte di ogni applicazione o sito web c'è il back-end, le
            tecnologie che utilizzo principalmente sono il linguaggio PHP
            assieme a Laravel per gestire gli oggetti e il relativo datatbase
            con mySQL. Il tutto viene mergiato tramite piattaforma Git e
            l'editor Visual Studio Code.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Skylls",
};
</script>

<style scoped lang="scss">
#skylls {
  height: 110vh; 
  padding: 50px 0;
  background: radial-gradient(#594c66, #000000);
  color: white;
  padding-top: 100px;
  p {
    text-align: justify;
  }
  .h-150 {
    height: 150px;
  }
  .icon-code {
    transition: 0.5s;
    cursor: pointer;
  }
  .icon-code:hover {
    margin-bottom: 70px;
    transform: scale(1.5);
  }
}
</style>