<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="refresh" content="5">
</head>
    <body>
        <?php
            echo $_GET['v1'].$_GET['v2'].$_GET['v3'];
            $myfile=fopen("data.txt","a+");
            fwrite($myfile, "|".$_GET['v1']."|".$_GET['v2']."|".$_GET['v3']."\n");
        ?>
    </body>
</html>