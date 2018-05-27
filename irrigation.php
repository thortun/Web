<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Vanning</title>

<script type="text/javascript" language="javascript">
    function pingItjs(ipAdress){
        console.log('HEI');
    }
</script>
<?php
    function takeThis(){
        echo "TAKE THIS!";
    }
?>
</head> 
<body>

<a href="javascript:pingItjs('localhost')">ping</a>
<?php
    $command = escapeshellcmd('/usr/bin/python3.5 /home/pi/Documents/myTest.py');
    $output = shell_exec($command);
    echo $output;
    system('/usr/bin/python3.5 /home/pi/Documents/myTest.py');
?>

</body>
<!--SCRIPTS--!>
</html>
