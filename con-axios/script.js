
function init(){
   var app= new Vue({
      el: '#app',
      data: {
         database: []
      },

      methods: {

         update: function (author){
            axios
               .get('data.php',{

                  params: {

                     'author': author
                  }

               })
               .then(res =>{
                  this.database = res.data;
               });
                     
         },

         clear: function(){
            this.update('');
         }

      },

      mounted: function(){
         this.clear();
      }
   });
}

init();
