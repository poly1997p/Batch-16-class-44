<?php
echo "<h1>This is our first cls on php</h1>";
?>
<?php
$x = 10;
$y =30;
$result = $x+$y;
echo "the result is=".$result;
?>

<?php
$brand =['rahim', 'karim', 'niloy', 'heemel', 'apon'];

for($i =0; $i<5; $i++){
echo $brand[$i].'<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-01</title>
</head>
<body>
    <h3>this is h3 tag-html </h3>
    <p>this is p tag</P>

    <a href='contact.php'>contact page</a>
    <?php
    echo "<b>this is bold tag from php block</b> <br>";
    $indexarray =[20,  10, 30, 90, 80];
    echo $indexarray[3].'<br>';
    echo $indexarray[2] .'<br>' ;
    echo $indexarray[4] .'<br>';
    ?>
</body>
</html>