<!DOCTYPE html>
<html>
<head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var PM = false;
    m = checkTime(m);
    s = checkTime(s);
    if(h > 12){
        h = h-12
        PM = true;
    }
    if(PM){ 
        document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s + " PM"; 
    }else{
        document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s + " AM";
    }
     
        
    
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>

</body>
</html>


