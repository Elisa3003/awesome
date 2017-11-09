<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
        <?php
            echo $_GET['time'].$_GET['speed'].$_GET['steps'];
            $myfile=fopen("data.txt","a+");
            fwrite($myfile, "|".$_GET['time']."|".$_GET['speed']."|".$_GET['steps']."\n");
            fclose($myfile);
        ?>
    </body>
</html>