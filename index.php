<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="header-container">
                <div class="img-container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="">
                </div>
            </div>
        </header>
        <div class="container">
            <div class="card" v-for="album in albumArray" >
                <div class="card-img">
                    <img :src="album.poster" alt="">
                </div>
                <div class="album-info">
                    <div><strong>{{ album.title }}</strong></div>
                    <div><small>{{ album.author }}</small></div>
                    <div><strong>{{ album.year }}</strong></div>
                </div>

            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>
