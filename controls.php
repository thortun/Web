<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pi Controller</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#clickON').click(function(){
            var a = new XMLHttpRequest();
            a.open("GET", "pinon.php");
            a.onreadystatechange=function(){
                if(a.readyState == 4){
                    if(a.status==200){
                }else alert("HTTP ERROR")
                }
            }
        a.send();
        });     
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#clickOFF').click(function(){
            var a = new XMLHttpRequest();
            a.open("GET", "pinoff.php");
            a.onreadystatechange=function(){
                if(a.readyState == 4){
                    if(a.status==200){
                }else alert("HTTP ERROR")
                }
            }
        a.send();
        });     
    });
    </script>
</head>
<body>
    <button type="button" id="clickON">ON</button>
    <button type="button" id="clickOFF">OFF</button></br>
    <div class="slidercontainer">
        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
        <p>Value: <span id="demo"></span></p>
    </div>
    <script type="text/javascript">
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = "50";
    output.innerHTML = slider.value;
    slider.oninput = function(){
        output.innerHTML = this.value; /* Set the value to the slider value */
    }
    </script>
</body>
</html>
