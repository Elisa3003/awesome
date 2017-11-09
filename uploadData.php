<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
        <?php
            echo $_GET['v1'].$_GET['v2'].$_GET['v3'];
            $myfile=fopen("data.txt","a+");
            fwrite($myfile, $_GET['v1']."|".$_GET['v2']."|".$_GET['v3']."\n");
        ?>
    </body>
</html>