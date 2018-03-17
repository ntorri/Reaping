<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
  <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="email" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="message">Your message</label>
    <textarea class="form-control" id="message" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    }
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		// mail("nate@torridigital.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }
?>
