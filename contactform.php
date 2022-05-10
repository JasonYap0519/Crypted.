<?php
	include 'sql_conn.php';

    $message = "";
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if( array_key_exists('contact_fname', $_POST) && array_key_exists('contact_lname', $_POST) && array_key_exists('contact_email', $_POST) && array_key_exists('contact_message_content', $_POST)){
    
            $sql = "SELECT table_name
                FROM information_schema.tables
                WHERE table_schema = 'test1'
                AND table_name = 'contact';";
            $res = mysqli_query($dbc, $sql);
            //echo $res->num_rows;
            if($res->num_rows == 0){
                //echo "needs to make table";
                $sql = "CREATE TABLE contact (
                    Id INT(4) NOT NULL AUTO_INCREMENT,
                    first_name varchar(255),
                    last_name varchar(255),
                    email varchar(255),
                    message_content TEXT, PRIMARY KEY (Id)
                    );";
                if(mysqli_query($dbc, $sql)){
                    //echo "MADE TABLE!";
                }
            }

			$sql = "INSERT INTO contact (first_name, last_name, email, message_content) VALUES ('".$_POST['contact_fname']."', '".$_POST['contact_lname']."', '".$_POST['contact_email']."', '".$_POST['contact_message_content']."')";
			if (mysqli_query($dbc, $sql)) {
				$message = "Your message was delivered.";
			} else {
				echo mysqli_error($dbc);
			}
		}
		else{
			$message = "You must fill out all boxes.";
		}
	}
?>

<div class="contact-form">
    <form action="<?php $_PHP_SELF ?>" method="post">
        <div class="flex-form">
            <div class="form-row">
            <div id="first-name">
                <label for="fname_input">First Name</label>
                <input type="text" name="contact_fname" id="fname_input" placeholder="Alexander" />
            </div>
            <div id="last-name">
                <label for="lname_input">Last Name</label>
                <input type="text" name="contact_lname" id="lname_input" placeholder="McCormick" />
            </div>
            </div>
            <div class="form-row">
            <div id="email">
                <label for="email_in">Email Address</label>
                <input type="email" name="contact_email" id="email_in" placeholder="123@example.com" />
            </div>
            </div>
            <div class="form-row">
            <div id="message">
                <label for="message_input">Message</label>
                <textarea name="contact_message_content" id="message_input" cols="115" rows="10" placeholder="Write your message here"></textarea>
            </div>
            </div>
            <div class="form-row">
            <button type="submit">Send Message</button>
            <button type="reset">Clear</button>
            </div>
            <p><?php echo $message ?></p>
        </div>
    </form>
</div>