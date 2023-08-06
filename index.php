 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1> My Favourite Language </h1>    
    <form action = "hello_php" method = "get">
        Name:<input type = "text" name="name">
        <input type = "submit">
</form>
<br>
<?php
if (isset($_GET["name"])) {
    echo $_GET["name"];
} else {
    echo "Name parameter not provided.";
}
?>

 </body>
 </html>
    
    