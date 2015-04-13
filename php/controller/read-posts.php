<link type='text/css' rel='stylesheet' href='controller/index.css'>
<?php
    require_once(__DIR__ ."/../model/config.php");   
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);   
    if ($result){      
        while($row = mysqli_fetch_array($result)){          
            echo "<div class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<h1>" . $row['post'] . "</h1>";
            echo "<br/>";
            echo "</div>";
        }
}
// link and my read post 