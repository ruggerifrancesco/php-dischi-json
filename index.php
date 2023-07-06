<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi Json</title>

    <!-- Vue JS CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

    <div id="app">
        <header>
            <nav class="navbar">
                <div class="container logo-container">
                  <a class="navbar-brand" href="#">
                    <img src="./assets/spotify-logo.png" alt="Bootstrap" width="30" height="24">
                  </a>
                </div>
            </nav>
        </header>

        <main>
            <article class="disc-card" v-for="(disc, index) in discList" :key="index">
                <div class="poster-wrapper">
                    <img :src="disc.poster" alt="">
                </div>
                <div class="disc-info">
                    <h3>{{ disc.title }}</h3>
                    <span>{{ disc.author }}</span>
                    <h5>{{ disc.year }}</h5>
                </div>
            </article>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script JS -->
    <script src="./script/script.js" type="module"></script>
</body>
</html>