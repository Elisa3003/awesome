<html>
    <head>
        <title>step counter data </title>
    </head>
    <body>
        <table>
            <?php
            $myfile=fopen("data.txt","r");
            while(!feof($myfile)){
                $values=explode("|",fgets($myfile));
                echo "<tr><td>"+$values[1]+"</td><td>"+$values[2]+"</td><td>"+$values[2]+"</td></tr>";
            }
            fclose($myfile);
        ?>
        </table>
    </body>
</html>
