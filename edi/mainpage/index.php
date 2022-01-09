<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>musify-live ur own world</title>
        <link rel="stylesheet" href="style.css">
        </head>
<body>
    <nav>
        <ul>
            <li class="brand"><img src="LOGO.png" alt="musify"> Musify</li>
            <li class="home"><a  href="../homepag.php">Home </a></li>
           
        </ul>
    </nav>

    <div class="container">
        <div class="songList">
            <h1>Best of NCS - No Copyright Sounds</h1>
            <div class="songItemContainer">
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:10 <i id="0" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/1.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:30 <i id="1" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/2.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:22 <i id="2" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/3.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:30 <i id="3" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/4.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:30 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/5.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:30 <i id="5" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/6.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:30 <i id="6" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/7.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:29<i id="7" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/8.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"><span class="timestamp">00:15 <i id="8" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/9.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName"> </span>
                    <span class="songlistplay"><span class="timestamp">00:11 <i id="9" class="far songItemPlay fa-play-circle"></i> </span></span>
                    <a href="songs/10.mp3" download=""> <i class="fas fa-download"></i></i></a>
                </div>
            </div>
        </div>
        <div class="songBanner"></div>
    </div>

    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <!-- fontawesome icons -->
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i> 
        </div>
        <div class="songInfo">
            <img src="playing.gif" width="42px" alt="" id="gif"> <span id="masterSongName"></span>
        </div>
        <span class='timer'>00:00</span>
    </div>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
</body>
</html>