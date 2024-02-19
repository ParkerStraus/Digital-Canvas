//Awardspace Mail Function requires a paid account, free account mail options are limited.

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Artsite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php readfile("./header.html") ?>

<style>
.header {
  background-color: #f2f2f2;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.navbar-brand {
  font-size: 1.5rem;
  font-weight: bold;
  color: #333;
  text-decoration: none;
}

.navbar-nav {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

.nav-item {
  margin-right: 20px;
}

.nav-link {
  font-size: 1rem;
  color: #333;
  text-decoration: none;
}

.contact {
  margin-top: 40px;
}

.contact h2 {
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.contact-form {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  width: 100%;
  max-width: 400px;
}

.contact-form label {
  font-size: 1rem;
  font-weight: bold;
  margin-bottom: 5px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 1rem;
}

.contact-form textarea {
  resize: vertical;
  min-height: 150px;
}

.contact-form button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
}

.success,
.error {
  margin-top: 10px;
  font-size: 1rem;
  font-weight: bold;
  padding: 10px;
  border-radius: 5px;
}

.success {
  background-color: #d1e7dd;
  color: #155724;
}

.error {
  background-color: #f8d7da;
  color: #721c24;
}
</style>
    <main class="main">
        <section class="about">
            <h1>About Us</h1>
            <p>Welcome to Digital Canvas! 
            We specialize in selling digital art created by talented artists from around the world. 
            Our mission is to provide a platform for artists to showcase their work and for art lovers to discover 
            and purchase unique digital art pieces.</p>
        </section>
        
        <section class="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or concerns, please feel free to contact us. You can reach us through email, phone, or our contact form below:</p>

            <?php
            //to submit form 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the user's name and email from the form
                $name = $_POST["name"];
                $email = $_POST["email"];
                $to = "se4050artsite@gmail.com"; 
                $subject = "New message from Artsite Contact Form";
                $message = $_POST["message"];
                $headers = "From: ".$email;
                
                if (mail($to, $subject, $message, $headers)) {
                    //if the email was sent successfully
                    echo "<p class='success'>Thank you for your message!</p>";
                } else {
                    // error message if not sent
                    echo "<p class='error'>System in upgrade, please call our number.</p>";
                }
            }
            ?>

            <form form action="" method="post" enctype="multipart/form-data" class="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>
    </main>
 <?php readfile("./footer.html") ?>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="headerScript.js"></script>
</body>
</html>
