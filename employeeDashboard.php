<!DOCTYPE html>
<html>
  <head>
    <title>Employee Menu - Digital Art Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      li {
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
      }
      a {
        text-decoration: none;
        color: #333;
      }
      a:hover {
        color: #000;
      }
    </style>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php readfile("./header.html") ?>
    <div class="main">
    <h1>Employee Menu</h1>
    <ul>
      <li><a href="addArtwork.php">Add Artwork</a></li>
      <li><a href="orderinvoice.php">View Orders</a></li>
      <li><a href="logout.html">Return Home</a></li>
    </ul>
    </div>
     <?php readfile("./footer.html") ?>
  </body>
</html>