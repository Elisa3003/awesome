<html>
    <head>
        <title>Starbuzz Coffee </title>
    </head>
    <body>
        <?php
        $myfile=fopen("dataStore.txt")or die("Unable to open file!");
        while(!feof($myfile)){
            echo fgets($myfile);
        }
        fclose($myfile);
        echo "<br />";
        ?>
    </body>
</html>