const App = new Vue(
    {
      el: '#app',
      data: {
        cards: []
      },
      created() {
        axios.get('http://localhost:80/lezione-4-php-html-css-vue/php-ajax-dischi/server/controller-api.php').then((result) => {
          this.cards = result.data.results;
          console.log(result);
        }).catch((error) => { console.log(error);});
      }
    }
  );