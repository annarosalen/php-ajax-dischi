<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <?php
        include 'data.php';
    ?>
</head>

<body>

    <div id="app">


            <?php

                for($x=0; $x<count($database); $x++){

                    $album = $database[$x];

                    ?>
                        <div class="contenitore">

                            <div class="album">

                                <img src= <?php echo $album['poster']; ?> alt="">
                                <div class="testo">
        
                                    <span id=titolo><?php echo $album['title']; ?></span>
                                    <span id=autore><?php echo $album['author']; ?></span>
                                    <span id=anno><?php echo $album['year']; ?></span>
                    
                                </div>     

                            </div>

                        </div>
                        
                         
                        
                    <?php
                }
            ?>


    </div>


    <script src="script.js"></script>
</body>
</html>