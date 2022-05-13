<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
</head>
<body>
    <?php 
        echo "<h1>Trabalhando com variáveis</h1>";

        $olaMundo = "Hello world!"; //string
        $OlaMundo = "Hello world 2!"; //string case-sensitive
        $x = 5; //int
        $y = 10.5; //decimal
        $z = 200; //int
        $adjective = "easy!";

        echo $olaMundo.'<br>';
        echo $OlaMundo.'<br>';
        echo $x.'<br>';
        echo $y.'<br>';
        echo 'Total da soma das variaveis x+y+z='.$x+$y+$z.'<br>';
        echo "Total da soma $x+$y+$z=".$x+$y+$z."<br>";
        echo 'phptherightway é ' . $adjective;

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x * $y;

    ?>
</body>
</html>