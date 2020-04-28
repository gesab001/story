<!DOCTYPE html>
<html>
<body>

<h1 id="title"></h1>
<p id="demo"></p>
<ul style="list-style-type:none" id="slides"></ul>

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
   document.getElementById("title").innerHTML = slides[0].title;
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
       var slideitem = document.createElement('li');
       slideitem.innerHTML = "<figure><img src='./images/"+slide.filename+"'/><figcaption>"+slide.caption+ toString+"</figcaption></figure>";
       document.getElementById("slides").appendChild(slideitem);
    }
}
</script>



</body>
</html>

