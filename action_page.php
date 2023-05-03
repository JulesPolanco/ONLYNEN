
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
    </head>
    
    <body>
    
        <?php
        $name = $_GET['name'];
        $anime= $_GET['anime'];
        $country = $_GET['country'];
        $comments = $_GET['comments'];
   
        print "<p>Welcome To NEN'S ANIMATION $name, You are from $country. </p>
        <p>You stated that your Favorite Anime is $anime and added that: <br />$comments</p>";
        
        ?>
    
    
    
    </body>

</html>