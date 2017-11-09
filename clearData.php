<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
        <?php
            $myfile=fopen("data.txt","w");
            fwrite($myfile, "| time/s | speed/steps/s | total steps \n");
            fclose($myfile);
        ?>
    </body>
</html>