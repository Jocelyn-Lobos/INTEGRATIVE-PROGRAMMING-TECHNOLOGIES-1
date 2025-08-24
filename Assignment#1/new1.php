<?php 
$y = 5; 
$x = 6; 
if ($y < $x){   
    echo "Correct!"; 
} 
?>
<?php echo "<hr>"; ?>

<?php 
$y = 5; 
$x = 6; 
if ($y < $x){   
    echo "Correct!"; 
} else {
    echo "Wrong!";
} 
?>
<?php echo "<hr>"; ?>

<?php 
$m = 17; 
$a = 21; 
$s = 60;  
if ($m < 18){
    echo "Minor";
} else if ($m >= 18 && $m < $s){
    echo "Adult";
} else {
    echo "Senior";
} 
?>
<?php echo "<hr>"; ?>

<?php 
$Anime = "Haikyuu!";  
switch ($Anime){
    case "One Piece":
        echo "My favorite anime is One Piece";
        break;
    case "Naruto":
        echo "My favorite anime is Naruto";
        break;
    case "Haikyuu!":
        echo "My favorite anime is Haikyuu!";
        break;
    default:
        echo "Demon Slayer";
}
?>
