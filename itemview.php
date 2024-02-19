<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="headerScript.js"></script>
<meta charset="utf-8">
<title>Artsite</title>
<link href="style.css" rel="stylesheet" type="text/css">

<style>

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

header h1 {
  margin: 0;
}

.main {
  margin: 0 auto;
  width: 80vw;
  padding-top: 62px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.main h1#title {
  margin-top: 40px;
  font-size: 36px;
  font-weight: bold;
  text-align: center;
}

.main h2#author {
  margin-top: 20px;
  font-size: 24px;
  font-weight: normal;
  text-align: center;
}

.main img#image {
  margin-top: 20px;
  max-width: 100%;
}

.main h1#price {
  margin-top: 20px;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
}

.main form {
  margin-top: 20px;
  text-align: center;
}

.main input[type="submit"] {
  margin-top: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.main input[type="submit"]:hover {
  background-color: #fff;
  color: #333;
}

footer {
  background-color: #666;
  color: #fff;
  padding: 10px;
  text-align: center;
}

footer p {
  margin: 0;
}

table.invoices {
  border: 2px solid;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

table.invoices th,
table.invoices td {
  border: 1px solid;
  padding: 10px;
  text-align: left;
}

table.invoices th {
  background-color: #333;
  color: #fff;
}

table.invoices tr:nth-child(even) {
  background-color: #f2f2f2;
}

table.invoices tr:hover {
  background-color: #ddd;
}

</style>

</head>

<body>
<?php readfile("./header.html") ?>
    <div class="main">
    
    <?php
        include "./php/itemviewHTML.php";
        $art = $_GET['art'];
        echo getArt($art);
        
    ?>
    </div>
<?php readfile("./footer.html") ?>
</body>
</html>
