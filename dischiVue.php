<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Php VUE</title>

    <link rel="stylesheet" href="./css/dischi.css">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

    <div id="app">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/768px-Spotify_logo_without_text.svg.png" alt="">
        </header>

        <main class="container">
            <div class="container-cards">
                <div class="card" v-for="disco in dischiList">
                    <img :src="disco.poster" alt="poster album">
                    <span class="title">{{disco.title}}</span>
                    <span class="author">{{disco.author}}</span>
                    <span class="year">{{disco.year}}</span>
                </div>
            </div>

        </main>
    </div>

    <script>
        new Vue({
            el: "#app",
            data: {
                dischiList: [],
            },
            mounted() {
                axios.get("http://localhost:8888/php-ajax-dischi/api/dischiApi.php")
                .then(response => {
                    this.dischiList = response.data;
                })
            }
        })
    </script>
    
</body>
</html>