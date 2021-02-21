<!DOCTYPE html>
<?php
	include_once "db_connection.php";
?>

<html>
    
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="container">
            <div id="pokedex-left">
                <div id="left-screen-container">
                    <div id="red-dot-container">
                        <div id="small-red-dot">
                        </div>
                        <div id="small-red-dot">
                        </div>
                    </div>
                        <div id="left-screen">
                        </div>
                </div>
            </div>
            <div id="pokedex-middle">
                <div id="middle-bar1"></div>
                <div id="middle-bar2"></div>
                <div id="middle-bar3"></div>
                <div id="middle-bar4"></div>
                <div id="middle-ellipse"></div>
            </div>
            <div id="pokedex-right">
                <svg viewBox="0 0 250 350" id="pokedex-right-svg1">
                    <path d="M0 0 h100 l50 50 h100 v300 h-250 Z" />
                </svg>
                <svg viewBox="0 0 250 350" id="pokedex-right-svg2">
                    <path d="M0 0 h100 l50 50 h100 v300 h-250 Z" />
                </svg>
                <div class="search-box">
                    <form action="" method="POST">
                        <input type="search" id="input-search" placeholder="Type Pokemon">
                        <div id='search-button'>
                            <img src='images/search_icon.png' />
                        </div>
                    </form>
                </div>
                <div id="button-section">
                    <button type="button" class="tab-button">Click</button>
                    <button type="button" class="tab-button">Click Me!</button>
                </div>
            </div>
        </div>
    </body>
</html>