<?php
// This script processes the user's order
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artid = htmlspecialchars($_POST["artID"]);
    $name = htmlspecialchars($_POST["name"]);
    $addr = htmlspecialchars($_POST["address"]);
    $card_number = $_POST["card_num"];
    $card_cvv = $_POST["card_cvv"];
    $card_expiry_month = $_POST["card_expiry_month"];
    $card_expiry_year = $_POST["card_expiry_year"];
    // Redirect to order confirmation page
    
    include './php/submitInvoice.php';
    submitInvoice($artid, $name,$addr,$card_number, $card_cvv, $card_expiry_month,$card_expiry_year);
    
}
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="headerScript.js"></script>
<meta charset="utf-8">
<title>Art4Sale - Checkout</title>
<link href="style.css" rel="stylesheet" type="text/css">

<style>

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
}


main {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2rem;
}

h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

form {
  width: 100%;
  max-width: 600px;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
}

input, select {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  margin-bottom: 1rem;
  font-size: 1rem;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}


@media screen and (min-width: 768px) {
  header {
    padding: 1rem 2rem;
  }

  nav a {
    margin: 0 2rem;
  }

  main {
    flex-direction: row;
    justify-content: center;
  }

  form {
    margin-left: 2rem;
  }
}

</style>

</head>

<body>

<?php readfile("./header.html") ?>


<div class="main">
    <h1>Checkout</h1>
    <form method="post" >
    
        <?php
            echo "<input type='hidden' name='artID' id='artID' value='".htmlspecialchars($_GET["art"])."'>"
        ?>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
    
        <label for="card_num">Credit Number:</label>
        <input type="text" name="card_num" id="card_num" required>
        <br>

        <label for="card_cvv">CVV:</label>
        <input type="text" name="card_cvv" id="card_cvv" required>
        <br>

        <label for="card_expiry_month">Experation Month:</label>
        <select name="card_expiry_month" id="card_expiry_month" required>
            <option value="">-- Select Month --</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>

        <label for="card_expiry_year">Expiry Year:</label>
        
        <input type="number" id="card_expiry_year" name="card_expiry_year" value = "2023" min="2023" max="2050">
        <input type="submit" value="Place Order">
    </form>
</div>
<?php readfile("./footer.html") ?>
</body>
</html>
