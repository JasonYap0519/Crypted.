<?php
	include 'sql_conn.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if( $_POST['contact_email'] != "" ){

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

<div class="Event-form">
          <form>
          <!-- action="<?php $_PHP_SELF ?>" method="post" -->
            <div class="flex-form">
              <div class="form-row">
                <div id="blockchaintype-input">
                  <label for="blockchainType_input">Choose a Blockchain Type:</label>
                  <select id="BlockchainType_input" name="event_blockchaintype">
                    <option value="ETH">ETH</option>
                    <option value="SOL">SOL</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div id="date">
                  <label for="date">Date</label>
                  <input type="text" name="event_date" id="date" placeholder="YYYY-MM-DD" />
                </div>

                <div id="time">
                  <label for="time">Time</label>
                  <input type="text" name="event_time" id="time" placeholder="HH:MM:SS" />
                </div>

                <div id="meridianType-input">
                <label for="meridianType-input">AM/PM</label>
                  <select id="meridianType_input" name="event_meridian">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div id="eventTitle">
                  <label for="title">Title</label>
                  <input type="text" name="event_title" id="title" placeholder="Event Name" />
                </div>
              </div>
              <div class="form-row">
                <button type="submit">Submit Event</button>
                <button type="reset">Clear</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
