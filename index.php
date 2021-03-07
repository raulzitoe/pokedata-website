<!DOCTYPE html>
<?php
include_once "db_connection.php";
?>

<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>

<body>
    <div class="container">
        <div id="pokedex-left">

            <div id="camera-container">
                <div id="camera">
                    <div id="camera-half-circle"></div>
                    <div id="camera-inner-circle"></div>
                </div>
            </div>

            <div id="led-container">
                <div id="led" style="background-color: #fe1a55;"></div>
                <div id="led" style="background-color: #faef60;"></div>
                <div id="led" style="background-color: #30f454;"></div>
            </div>



            <div id="left-screen-container">
                <div id="red-dot-container">
                    <div id="small-red-dot">
                    </div>
                    <div id="small-red-dot">
                    </div>
                </div>
                <div id="left-screen">
                    <?php
                    if (isset($_POST['search'])) {
                        $Name = $_POST['getname']; //Whatever we are typing in getname we are storing it in $name...
                        $query = "SELECT * FROM pokemons WHERE poke_name='$Name'"; // writing the query to fetch data from which table and which data...
                        $run = mysqli_query($conn, $query); // we are running the above query here
                        if(mysqli_num_rows($run)==0){
                            echo '<div style="margin-left: 10px; font-weight: bold;">No Pokemon with that name was found.</div>';
                        }
                        else{

                        while ($row = mysqli_fetch_array($run)) {
                    ?>
                            <div style="height: 100%;">
                                <?php echo '<img id="poke_image" src="data:image; base64,' . base64_encode($row['image']) . '" alt="Image" style="display: block; max-height:100px; margin: auto; padding-top: 15px;">'; ?><br>
                                <table id="poke_info" class="styled-table">
                                    <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td><?php echo $row['poke_name']; ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID: </td>
                                            <td><?php echo $row['id']; ?> </td>
                                        </tr>

                                        <tr>
                                            <td>Type: </td>
                                            <td><?php echo $row['type']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Attack: </td>
                                            <td><?php echo $row['attack']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Defense: </td>
                                            <td><?php echo $row['defense']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Level to Evolve: </td>
                                            <td><?php echo $row['level_of_evolve']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Description: </td>
                                            <td><?php echo $row['description']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    <?php
                        }
                    }
                    }
                    ?>
                </div>
                <div id="redcircle"></div>
                <div id="vents-container">
                    <div id="vents"></div>
                    <div id="vents"></div>
                    <div id="vents"></div>
                </div>

            </div>

            <div id="crabs">
                <div class="apper">
                    <div class="center positioning">
                        <div class="center-circle"></div>
                    </div>

                    <div class="up direction">
                        <div class="up-triangle"></div>
                    </div>

                    <div class="right direction">
                        <div class="right-triangle"></div>
                    </div>
                    <div class="down direction">
                        <div class="down-triangle"></div>
                    </div>

                    <div class="left direction">
                        <div class="left-triangle"></div>
                    </div>
                </div>
            </div>




            <div id="circle"></div>
            <div id="retgr"></div>
            <div id="retor"></div>
            <div id="retye"></div>
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
                    <input type="search" name="getname" id="input-search" placeholder="Type Pokemon">
                    <div id='search-button'>
                        <img src='images/search_icon.png' />
                    </div>
                    <input style="background-color:transparent; border:none" type="submit" src='images/search_icon.png' name="search" value="">
                </form>
            </div>

            <div id="blue-pannel">
                <div id="blue-pannel-row-1">
                    <div id="blueboard" style="border-radius: 15px 0px 0px 0px;"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboard" style="border-radius: 0px 15px 0px 0px;"></div>
                </div>
                <div id="blue-pannel-row-2">
                    <div id="blueboardbotton" style="border-radius: 0px 0px 0px 15px;"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboardmiddle"></div>
                    <div id="blueboardbotton" style="border-radius: 0px 0px 15px 0px;"></div>
                </div>
            </div>

            <div id="small-vent-container">
                <div id="retsmall"></div>
                <div id="retsmall"></div>
            </div>

            <div id="yellow-light">
                <div id="yellow-light-blink"></div>
            </div>
            
            <div id="white-btn-container">
                    <div id="retwh"></div>
                    <div id="retwh"></div>
            </div>

            <div id="button-section">
                <button type="button" class="tab-button" onclick="poke_info()">Info</button>
                <button type="button" class="tab-button" onclick="poke_image()">Image</button>

            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div id="btn-container">
        <a href="insert.php"><button id="btn-add-new">Add New Pokemon</button></a>
        <a href="delete.php"><button id="btn-add-new">Delete Pokemon</button></a>
    </div>

</footer>

</html>