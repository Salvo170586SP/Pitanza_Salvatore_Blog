<template>
  <section id="home-bio">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-9  pe-md-5 ">
          <h3 class="pb-4">MI RACCONTO</h3>
          <p>
            Mi chiamo Salvatore Pitanza, <br />
            il mio percorso nel settore informatico è stato lungo e a tratti
            tortuoso, ma con una passione che non è mai passata, anzi, è sempre
            un continuo crescere con il passare degli anni. <br />
            Il mio primo approccio con il mondo dei pc risale ai lontani anni 80
            quando il mondo era dominato dai Commodor e dai Vic 20. <br />
            Difatti questi due sono stati i miei primi computer con cui da
            piccolo ho potuto sperimentare i primi interminabili comandi per
            avviare i giochi registrati sui nastri delle cassette. Un gioiellino
            all'epoca, ma tutt'ora ancora ricordato come un vero e proprio pezzo
            da museo che ognuno dovrebbe esporre. <br />
            Dopo anni, nei primi del 2000 ho iniziato a instaurare un rapporto
            più solido con la moderna informatica cercando di smanettare con i
            componenti e a formattare pc periodicamente. <br />
            Fu con l'approccio al mondo del web che ha rimescolato le carte,
            spulciando sui vari forum inziai a capire come funzionarono le
            pagine web e mi scontrai con i linguaggi di markup html, css. <br />
            Decisi così nel 2005 di iscrivermi a un corso di Web Master, ma non ne fui molto soddisfatto, per
            conto della scarsa organizzazione del corso e dal tipo di lezioni
            svolte.
            <br />
            Cercai così dopo una lunga pausa, di cambiare totalmente strada dove
            la vita mi portò a fare tutt'altro, entrando nel mondo del sociale e
            dare una mano alle persone meno fortunate. Ma nel 2020...
          </p>

          <h3 class="pt-5">Il percorso</h3>
          <p>
            La pandemia ha portato un pò tutti a svoltare le nostre vite, e di
            certo non sono stato con le mani in mano, tra una lettura e l'altra,
            tra un video tutorial e l'altro riaffiora quella passione innata
            che non è mai svanita, ma anzi...cresceva sempre di più. <br />
            Ed improvvisamente, come se fosse stato un segno del destino, mi accorsi di questa accademia online, incuriosito, ho indagato fino a convincermi di intraprendere questo interessante percorso. <br>
          </p>
          <h4>
            Le mie competenze
          </h4>
          <p>
            Ho appreso le basi delle seguenti skills: html, css, Bootstrap, javascript, VueJs, php, Laravel e mySql.
            Il grado di apprendimento si può intuire da dove stai leggendo. Questo sito/blog è stato messo in piedi con Laravel e VueJs. <br>
            Il percorso è una strada in salita ma l'entusiasmo e la passione non mancheranno.
            E chissà cosa mi riserverà ancora in futuro. <br> Di certo questo settore ha portato la mia vità a crearmi degli obbiettivi ed avere uno scopo ben preciso, essere un professionista nel settore. <br>
            Cosa che fino a non molto tempo fa non pensavo di raggiungere. <br>
             E tutto questo grazie ai ragazzi di Boolean, dove con la loro professionalità e la loro umanità mi hanno accompagnato in un mondo nuovo ed entusiasmante.
          </p>

          <h3 class="pt-5">La vita oltre al coding</h3>
          <p>
            La mia seconda vita la passo sulle montagne, passione che viaggia su un binario parallelo. <br>
            La Sicilia è comunemente conosciuta per le sue spiagge e il suo mare estivo, ma oltre a questo ha un paesaggio montano incredibile. Forse unico, sia per il suo aspetto storico, ma sopratutto perchè detiene il più alto tasso di biodiversità in Europa. <br>
            Grazie ai vari eventi effettuati da AtridNatura e dalla bravissima guida du FederEscursioni Davide Mangano (clicca qui), scoprirete una terra unica fatta di contrasti, passando dalle infinite praterie alle verdissime vette che si affacciano sul mediterraneo. <br>
            Pubblicherò in futuro immagini e ulteriori dettagli.
          </p>
        </div>

        <div class="col-12 col-md-3 d-flex flex-column  align-items-center">
          <img
            src="images/140731356_4380348161981271_7614192049077160206_n.jpg"
            class="img-fluid border img-bio"
            alt="img_bio"
          />
          <div class="my-4">
            <p>La citazione che più mi raffigura</p>
            <cite>
              “Troverai più nei boschi che nei libri. Gli alberi e le rocce ti
              insegneranno cose che nessun maestro ti dirà” - Bernardo di
              Chiaravalle
            </cite>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "HomeBio",
};
</script>

<style scoped lang="scss">
#home-bio {
  padding: 70px 0;

  .img-bio {
    height: 300px;
    width: 300px;
    object-fit: cover;
    border-radius: 5%;
    object-position: center;
  }
  p{
   text-align: justify;
  }
}
</style>