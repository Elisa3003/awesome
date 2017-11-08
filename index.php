<html>
    <head>
        <title>Starbuzz Coffee </title>
    </head>
    <body>
        <?php
        $myfile=fopen("dataStore.txt");
        while(!feof($myfile)){
            echo fgets($myfile);
            echo "<br />";
        }
        fclose($myfile);
        echo "<br />";
        ?>
    </body>
</html>