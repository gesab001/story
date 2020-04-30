<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("filename").value = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>

<?php
$title = $_POST["title"];
?>

<form action="addstory.py" method="post" id="usrform">
<input type="text" name="title" value="<?php echo $title;?>" placeholder="title"/> 
<br>
<textarea rows="4" cols="50" name="caption" placeholder="caption"></textarea>
<br> 
<!--<input type="text" onkeyup="showHint(this.value)" placeholder="filename"/>-->
<br>
<input type="text" name="url" id="url" placeholder="image url"/>
<input type="text" name="filename" id="filename" placeholder="image filename"/> 
<br>
<input type="text" name="book" placeholder="book"/>
<br>
<input type="text" name="chapter" placeholder="chapter"/>
<br>
<input type="text" name="verse" placeholder="verse"/>
<br>
<input type="submit" value="submit"/>
</form>
</body>

</html>
