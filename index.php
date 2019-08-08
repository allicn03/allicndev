<?php include_once("index.html"); ?>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: allicndev';
    $to = 'a.neusch@gmail.com';
    $subject = 'Hello';
    $body = "From: $name\n E-mail: $email\n Message:\n $message";
?>

<?php
  if ($_POST['submit']) {
    /* Anything that goes in here is only performed if the form is submitted */
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
  }
?>
