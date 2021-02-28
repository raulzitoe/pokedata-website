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
                            <?php                        
                                if(isset($_POST['search'])){
                                    $Name = $_POST['getname'];//Whatever we are typing in getname we are storing it in $name...
                                    $query = "SELECT * FROM pokemons WHERE poke_name='$Name'";// writing the query to fetch data from which table and which data...
                                    $run = mysqli_query($conn, $query);// we are running the above query here
   
                                    while($row = mysqli_fetch_array($run)){
                                    ?>
                                    <form action="" method="POST">
                                        <?php echo '<img src="data:image; base64,'.base64_encode($row['image']).'" alt="Image" style="display: block; max-height:100px; margin: auto; padding-top: 15px;">';?><br>
                                        <table class="styled-table">
                                            <thead>
                                            <tr>
                                                <td>Name: </td>
                                                <td><?php echo $row['poke_name'];?></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>ID: </td>
                                                <td><?php echo $row['id'];?> </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Type: </td>
                                                <td><?php echo $row['type'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Attack: </td>
                                                <td><?php echo $row['attack'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Defense: </td>
                                                <td><?php echo $row['defense'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Level to Evolve: </td>
                                                <td><?php echo $row['level_of_evolve'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Description: </td>
                                                <td><?php echo $row['description'];?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    <?php
                                    }
                                }
                            ?>
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
                        <input type="search" name="getname" id="input-search" placeholder="Type Pokemon">
                        <div id='search-button'>
                            <img src='images/search_icon.png' />
                        </div>
                        <input type="submit" name="search" value="Search Data">
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