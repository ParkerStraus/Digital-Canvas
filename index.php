<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Digital Canvas</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <?php readfile("./header.html") ?>


<style>

    #ani-container {
      position: relative;
      width: 100%;
      height: 400px;
    }

    #ani {
      position: absolute;
      top: 62%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
    }

    .circle {
      position: absolute;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #000;
      opacity: 0.5;
      animation: circle-animation 2s ease-in-out infinite;
    }

    @keyframes circle-animation {
      0% {
        transform: scale(2);
        opacity: 0;
      }
      50% {
        transform: scale(1);
        opacity: 0.5;
      }
      100% {
        transform: scale(2);
        opacity: 0;
      }
    }


    header {
      display: block;
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


    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .main {
      margin-right: auto;
      width: 80vw;
      margin-left: auto;
      padding-top: 62px;
    }

    .invoices {
      border: 2px solid;
    }

    th {
      border: 1px solid;
    }
    
    
	.grid {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		grid-gap: 10px;
		padding: 20px;
		background-color: #000;
	}

	.box {
		background-color: #000;
		overflow: hidden;
	}

	.box img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

</style>

  <div id="ani-container">
    <img id="ani" src="images/animate.gif" alt="animated image">


    <script type="text/javascript" src="js/animation.js">
    </script>
  </div>

  <div class="main">

  </div>
  
  	<div class="grid">
		<div class="box">
			<img src="images/1.jpg" alt="ShowImage 1">
		</div>
		<div class="box">
			<img src="images/2.jpg" alt="ShowImage 2">
		</div>
		<div class="box">
			<img src="images/3.jpg" alt="ShowImage 3">
		</div>
		<div class="box">
			<img src="images/4.jpg" alt="ShowImage 4">
		</div>
		<div class="box">
			<img src="images/5.jpg" alt="ShowImage 5">
		</div>
		<div class="box">
			<img src="images/6.png" alt="ShowImage 6">
		</div>
	</div>
        <?php readfile("./footer.html") ?>
</body> 

</html>



