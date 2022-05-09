<?php
	include 'sql_conn.php';

    $message = '';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if( $_POST['newsletter_email_to_submit'] != "" ){

            $sql = "SELECT table_name
                FROM information_schema.tables
                WHERE table_schema = 'test1'
                AND table_name = 'newsletter';";
            $res = mysqli_query($dbc, $sql);
            //echo $res->num_rows;
            if($res->num_rows == 0){
                //echo "needs to make table";
                $sql = "CREATE TABLE newsletter (
                    Id INT(4) NOT NULL AUTO_INCREMENT,
                    email varchar(255), PRIMARY KEY (Id)
                    );";
                if(mysqli_query($dbc, $sql)){
                    //echo "MADE TABLE!";
                }
            }

			$sql = "INSERT INTO newsletter (email) VALUES ('".$_POST['newsletter_email_to_submit']."')";
			if (mysqli_query($dbc, $sql)) {
				$message = "Your email was added.";
			} else {
				echo mysqli_error($dbc);
			}
		}
		else{
			$message = "You must fill out all boxes.";
		}
	}
?>

<div id="footer_signup">
    <h2>Sign up now and get updates from our newsletter.</h2> Our newsletter delivers once a week. <br />
    <form action="<?php $_PHP_SELF ?>" method="post">
        <label for="email_input">Your Email:</label>
        <input class="text_input" type="text" id="email_input" name="newsletter_email_to_submit" />
        <br>
        <p><?php echo $message ?></p>
        <button type ="submit" > Submit </button>
    </form>
</div>