<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="subscribe.php" method="GET">
        <input type="email" name="email" id="email">
        <button type="submit">Subscribe</button>
    
    
    </form>

    <form action="new.php" method="get">
    <input type="text" name="vardas" id="email">
    <input type="text" name="x" id="email">
    <button type="submit">mano vardas</button>
    
    </form>
   
    <a href="new.php?vardas=Paulius&x=970" >mano vardas</a>

    <?php


?>

</body>
</html>