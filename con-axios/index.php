<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

    <div id="app">

      <button @click="clear">CLEAR</button>
      
      <button @click="update('Bon Jovi')">Bon Jovi</button>
      <button @click="update('Queen')">Queen</button>
      <button @click="update('Sting')">Sting</button>
      <button @click="update('Steve Gadd Band')">Steve Gadd Band</button>
      <button @click="update('Iron Maiden')">Iron Maiden</button>
      <button @click="update('Eric Clapton')">Eric Clapton</button>

      <div class="contenitore" v-for="(item,index) in database" >

        <div class="album">
          <img :src="item.poster" alt="">
          <div class="testo">
            <span id="titolo">{{item.title}}</span>
            <span id="autore">{{item.author}}</span>
            <span id="anno">{{item.year}}</span>
          </div>
        </div>

      </div>

    </div>


    <script src="script.js"></script>
</body>
</html>