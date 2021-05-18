<?php 
$submit = filter_input(INPUT_POST, 'submit');
$genres = $_POST['genres'];
?>
 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($submit)) {
    echo "formulář byl odeslán"; 
    var_dump($genres);
    } else {?>
    <h1>Vyber oblíbené hry</h1>
    <form method="post">
    
     <input type="checkbox" id="genre1" name="genres[]" value="fps"> <label for="genre1">Střílečky z první osoby</label> </br> 
     <input type="checkbox" id="genre2" name="genres[]" value="horror"> <label for="genre2">Horrorové</label> </br> 
     <input type="checkbox" id="genre3" name="genres[]" value="brutal"> <label for="genre3">Brutální</label> </br> 
     <input type="checkbox" id="genre4" name="genres[]" value="strategy"> <label for="genre4">Strategie</label> </br> 
     <input type="checkbox" id="genre5" name="genres[]" value="RPG"> <label for="genre5">Roleplay Hry</label> </br> 
     <input type="checkbox" id="genre6" name="genres[]" value="racing"> <label for="genre6">Zavodní</label> </br> 
     <input type="checkbox" id="genre7" name="genres[]" value="army"> <label for="genre7">S vojenskou tématikou</label> </br> 
     <input type="checkbox" id="genre8" name="genres[]" value="space"> <label for="genre8">S vesmírnou tématikou</label> </br> 
     <input type="checkbox" id="genre9" name="genres[]" value="parkour"> <label for="genre9">Skákačky</label> </br> 
     <input type="checkbox" id="genre10" name="genres[]" value="2D"> <label for="genre10">Plošinovky</label> </br> 
     <input type="checkbox" id="genre11" name="genres[]" value="anime"> <label for="genre11">Anime hry</label> </br> 
     <input type="submit" id="submit" name="submit">
    </form>
    <?php } ?>
</body>
</html>
