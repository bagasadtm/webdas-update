<?php
include "./data.php";
include("./components/header.php");
?>
<main>
<h1>Contact</h1>
    <p>Welcome to our contact page!</p>
    <p>If you have any questions or inquiries, please don't hesitate to contact us using the form below or the contact information provided:</p>
    <form action="submit.php" method="post">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="subject">Subject:</label><br>
      <input type="text" id="subject" name="subject"><br>
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" cols="50"></textarea><br><br>
      <input type="submit" value="Submit">
    </form> 
    <br>
    <p>
      Phone: 0895422526698<br>
      Email: bagasadt1922@gmail.com<br>
      Address: Semarang Selatan
    </p>
</main>

<?php
include("./components/footer.php");
?>