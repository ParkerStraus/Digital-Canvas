<!DOCTYPE html>
<html>
  <head>
    <title>Digital Art Site - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      header {
        background-color: #333;
        color: #fff;
        padding: 20px;
      }
      h1 {
        margin: 0;
      }
      nav {
        background-color: #666;
        color: #fff;
        padding: 10px;
      }
      nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
      }
      nav a:hover {
        background-color: #fff;
        color: #333;
      }
      main {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
      }
      .artwork {
        width: 300px;
        margin: 10px;
        border: 1px solid #ccc;
        background-color: #fff;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      .artwork img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
      .artwork h2 {
        margin: 10px;
        font-size: 18px;
      }
      .artwork p {
        margin: 0 10px 10px;
        font-size: 14px;
        color: #666;
      }
      footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
      
        .arrow {
          text-decoration: none;
          display: inline-block;
          padding: 8px 16px;
        }

        .arrow:hover {
        
          background-color: #ddd;
          color: black;
        }
        
        .num{
        
          background-color: #ddd;
        }
    </style>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="js/gridviewPopup.js"></script>
</head>

<body onload="loadDoc()">
        
<div id="overlay" onClick="hide('overlay')">
        <div id="overlayDisplayContainer" class="overlayDisplayContainer">
        </div>
</div>
        
<?php readfile("./header.html") ?>
    <div style= "
  margin: auto;
  width: 100%;
  text-align: center;">
        <div class="arrow previous" onclick = "prevpage()">&laquo;</div>
        <div class="arrow num" id="numarrow">1</div>
        <div class="arrow next"  onclick = "nextpage()">&raquo;</div>
        <input type = "hidden" name = "page" id = "page" value = "0">
    </div>
    <main id = "main">
    </main>
    
    <div style= "
  margin: auto;
  width: 100%;
  text-align: center;">
        <div class="arrow previous" onclick = "prevpage()">&laquo;</div>
        <div class="arrow num" id="numarrow2">1</div>
        <div class="arrow next"  onclick = "nextpage()">&raquo;</div>
      </div>  
<?php readfile("./footer.html") ?>
</body>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./php/browseBody.php?page="+document.getElementById('page').value, true);
  xhttp.send();
}

function prevpage() {
if(document.getElementById('page').value != 0){
document.getElementById('page').value = document.getElementById('page').value - 1;
//alert(document.getElementById('page').value);
loadDoc();
document.getElementById('numarrow').innerHTML = 1 + parseInt(document.getElementById('page').value);
document.getElementById('numarrow2').innerHTML = 1 + parseInt(document.getElementById('page').value);
  }
}


function nextpage() {
document.getElementById('page').value = 1 + parseInt(document.getElementById('page').value);
//alert(document.getElementById('page').value);  
loadDoc();  
document.getElementById('numarrow').innerHTML = 1 + parseInt(document.getElementById('page').value);
document.getElementById('numarrow2').innerHTML = 1 + parseInt(document.getElementById('page').value);
  
}



</script>
</html>