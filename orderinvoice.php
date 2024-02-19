<html>
<head>
	<meta charset="utf-8">
	<title>Invoices - Artsite</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
<style>
body {
  font-family: 'Montserrat', sans-serif;
}

.header {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.navbar {
  display: flex;
  justify-content: center;
  align-items: center;
}

.navbar a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: all 0.2s ease-in-out;
}

.navbar a:hover {
  color: #333;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.main {
  margin: 50px auto;
  max-width: 80%;
}

.main-title {
  font-size: 2rem;
  text-align: center;
  margin-bottom: 30px;
}

.invoices-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 30px;
}

.invoices-table th {
  background-color: #333;
  color: #fff;
  text-align: left;
  padding: 10px;
}

.invoices-table td {
  border: 1px solid #ddd;
  padding: 10px;
}

.invoices-table tbody tr:hover {
  background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php readfile("./header.html") ?>
<?php

include './php/invoiceTable.php';
generateTable();
?>
    <?php readfile("./footer.html") ?>
</body>
</html>