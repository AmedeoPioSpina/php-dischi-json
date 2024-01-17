<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1982px-Spotify_icon.svg.png" alt="Spotify logo">
        </header>
        <main>
            <ul>
                <li v-for="(disk,index) in tempDisksList">
                    <img :src="disk.disk_img" alt="">
                    <h2>
                        {{disk.name}}
                    </h2>
                    <p>
                        {{disk.author}}
                    </p>
                    <p>
                        {{disk.year}}
                    </p>
                </li>
            </ul>
        </main>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>