<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
/* Chrome, Safari and Opera syntax */
:-webkit-full-screen {
  background-color: yellow;
}

/* Firefox syntax */
:-moz-full-screen {
  background-color: yellow;
}

/* IE/Edge syntax */
:-ms-fullscreen {
  background-color: yellow;
}

/* Standard syntax */
:fullscreen {
  background-color: yellow;
}

/* Style the button */
button {
  padding: 20px;
  font-size: 20px;
}
.container {
  height: 100%;  

}
.carousel{
 height: 100%;

}
</style>
</head>
<body>



<div class="container">
<!--
<button onclick="openFullscreen();">Open Fullscreen</button>
<button onclick="closeFullscreen();">Close Fullscreen</button>-->
  <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div id="slideimages" class="carousel-inner">
      

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>


var xmlhttp = new XMLHttpRequest();
var bible = {};

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    var bible = myObj.bible;
    loadBible(bible);

    
  }
};
xmlhttp.open("GET", "../bible.json", false);
xmlhttp.send();

function loadBible(bibleObject){
  bible = bibleObject;
  //document.getElementById("demo").innerHTML = bible[0].book;
}


xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    var slides = myObj.slides;
    loadSlides(slides);
    
  }
};
xmlhttp.open("GET", "imagedata.json", false);
xmlhttp.send();


function loadSlides(slides){
  var filename = "./images/david-rest.jpg"; 
    var alt = "David is resting";
    document.getElementById("slideimages").innerHTML +=   "<div class=\"item active\"><h1>"+slides[0].title+"</h1></div>";
   for (var x=0; x<slides.length; x++){
       var slide = slides[x];
       var biblereference = slide.bible;
       var book = biblereference.book;
       var chapter = biblereference.chapter;
       var verse = biblereference.verse;
       var wordText = "nothing";
       for (var i=0; i<bible.length; i++){
           var item = bible[i];
           var bookTitle = item.book;
           var chapterNumber = item.chapter;
           var verseNumber = item.verse;
           if (book==bookTitle){
               if(chapterNumber==chapter){
                    if(verseNumber==verse){
                       wordText = item.word;
   
                    }
               }
           }
       }
       var toString = " - " + wordText + " (" + book + " " + chapter + ":" + verse + ")"; 
       var filename = "./images/"+slide.filename; 
       var alt = slide.caption;
       document.getElementById("slideimages").innerHTML +=   "<div class=\"item \"><h1>"+alt+"<figure><img src=\""+filename+"\" alt=\""+alt+"\" style=\"width:100%; height:800px;\"/><figcaption>"+toString+"</figcaption></figure></div>";

    }
  
   
}


</script>



</body>
</html>


