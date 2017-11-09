<html>
    <head>
        <title>step counter data </title>
    </head>
    <body>
        <table border="1px" width="80%" align="center">
            <?php
            $myfile=fopen("data.txt","r");
            while(!feof($myfile)){
                $values=explode("|",fgets($myfile));
                echo "<tr><td>".$values[1]."</td><td>".$values[2]."</td><td>".$values[3]."</td></tr>";
            }
            fclose($myfile);
        ?>
        </table>
    </body>
</html>
