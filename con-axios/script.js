// function getData(){

//    axios
//       .get('data.php')
//       .then(res => console.log(res.data));
// }

function init(){
   var app= new Vue({
      el: '#app',
      data: {
         database: []
      },
      mounted: function(){
         axios
            .get('data.php')
            .then((risposta) => {
               this.database = risposta.data;
               console.log(risposta.data);
            });
      }
   });
}

init();