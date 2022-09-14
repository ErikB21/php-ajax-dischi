// Seconda Versione:
// Attraverso l’utilizzo di axios: al caricamento della 
// pagina axios chiederà, attraverso una chiamata api, 
// i dischi a php e li stamperà attraverso vue.

// prima milestone: recuperare la lista dei dischi tramite 
// una chiamata axios e stampare la lista dei titoli degli 
// album all’interno di una lista non numerata (ul)

// seconda milestone: per ogni disco, stampare una card con 
// tutte le informazioni

const app = new Vue({
    el: '#app',
    data: {
      myArray : []//creo un array vuoto
    },
    created(){

      axios.get('http://localhost/php-ajax-dischi/client_side/api.php')
      .then(response =>{
        this.myArray = response.data;//pusho nel mio array vuoto l'oggetto passato dalla chiamata axios
      })
      .catch(err => {
        console.log(err);
      })

    }
});