<template>
  <section id="contact">
    <Loader v-if="isLoading" />
    <div v-else class="container h-75">
      <div class="row h-75 align-items-center">
        <div class="col-12">
          <h2>Contattami</h2>
          <p>Puoi trovarmi anche sui canali social</p>
        </div>
        <div class="col-12">
          <Alert
            v-if="alertMessage || hasErrors"
            :type="hasErrors ? 'danger' : 'success'"
            :dismissable="false"
            >{{ alertMessage }}
            <ul v-if="hasErrors">
              <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
            </ul>
          </Alert>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              v-model="form.email"
              required
              type="email"
              :class="{ 'is-invalid': errors.mail }"
              class="form-control shadow"
              id="email"
              name="email"
            />
            <div class="invalid-feedback" v-if="errors.mail">
              {{ errors.mail }}
            </div>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Scrivi il testo qui</label>
            <textarea
              v-model="form.message"
              required
              class="form-control shadow"
              :class="{ 'is-invalid': errors.message }"
              id="message"
              name="message"
              rows="7"
            ></textarea>
            <div class="invalid-feedback" v-if="errors.message">
              {{ errors.message }}
            </div>
            <button
              type="submit"
              @click="sendMail"
              class="btn btn-primary text-light shadow my-3"
            >
              Invia
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Alert from "../Alert.vue";
import { isEmpty } from "lodash";
import Loader from "../Loader.vue";
export default {
  name: "ContactPage",
  components: {
    Alert,
    Loader,
  },
  data() {
    return {
      form: {
        email: "",
        message: "",
      },
      alertMessage: "",
      isLoading: false,
      errors: {},
    };
  },
  computed: {
    hasErrors() {
      /* return Object.keys(this.errors).length; */
      return !isEmpty(this.errors);
    },
  },
  methods: {
    validateForm() {
      //VALIDAZIONE
      const errors = {};
      if (!this.form.email.trim()) errors.mail = "la mail è obbligatoria";
      if (!this.form.message.trim())
        errors.message = "il messaggio è obbligatorio";
      //controllo se è una mail valida
      if (
        this.form.email.trim() &&
        !this.form.email.match(
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
      )
        errors.mail = "La mail non è valida";

      this.errors = errors;
    },

    sendMail() {
      this.validateForm();

      //INVIO IL FORM
      if (!this.hasErrors) {
        this.isLoading = true;
        axios
          .post("http://localhost:8000/api/contact", this.form)
          .then((res) => {
            this.form.email = "";
            this.form.message = "";
            this.alertMessage = "Il messaggio è stato inviato";
          })
          .catch((err) => {
            console.error(err.response.status);
            this.errors = { error: "si è verificato un errore" };
          })
          .then(() => {
            this.isLoading = false;
          });
      }
    },
  },
};
</script>

<style scoped lang="scss">
#contact {
  margin-top: 70px;
  height: 70vh;
}
</style>