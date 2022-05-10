<?php
	include 'sql_conn.php';

  date_default_timezone_set('America/Chicago');

  $message = "";
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if( array_key_exists('event_time', $_POST) && array_key_exists('event_meridian', $_POST) && array_key_exists('event_date', $_POST) && array_key_exists('event_blockchaintype', $_POST) && array_key_exists('event_title', $_POST)){
      $sql = "SELECT table_name
          FROM information_schema.tables
          WHERE table_schema = 'test1'
          AND table_name = 'nftcalendar';";
      $res = mysqli_query($dbc, $sql);
      //echo $res->num_rows;
      if($res->num_rows == 0){
          //echo "needs to make table";
          $sql = "CREATE TABLE nftcalendar (
              Id INT(4) NOT NULL AUTO_INCREMENT,
              blockchain varchar(3),
              title varchar(64),
              unix_timestamp int(11), PRIMARY KEY (Id)
              );";
          if(mysqli_query($dbc, $sql)){
            $sql = "INSERT INTO nftcalendar (blockchain,title,unix_timestamp) VALUES
                ('ETH','CryptoPunks', 1652210837),
                ('ETH','World of Women Galaxy Mint', 1652470037),
                ('SOL','Krakenz Mint', 1652485637),
                ('ETH','World of Women Galaxy Reveal', 1652547600),
                ('SOL','The Bubble Pops', 1652655600);";
            if(mysqli_query($dbc, $sql)){
                
            }
          }
      }

      $converted_unix = $_POST['event_time'].' '.$_POST['event_meridian'].' '.$_POST['event_date'];
      $test = strtotime($converted_unix);

      $timezone = timezone_open("America/Chicago");
      $datetime_eur = date_create("now", timezone_open("Europe/Amsterdam"));

      $diff = timezone_offset_get($timezone, $datetime_eur);
      $test += $diff;
      

			$sql = "INSERT INTO nftcalendar (blockchain, title, unix_timestamp) VALUES ('".$_POST['event_blockchaintype']."', '".$_POST['event_title']."', '.$test.')";
			if (mysqli_query($dbc, $sql)) {
				$message = "Your event was added.";
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
  <form action="<?php $_PHP_SELF ?>" method="post">
    <div class="flex-form">
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
        <div id="blockchaintype-input">
          <label for="blockchainType_input">Choose a Blockchain Type:</label>
          <select id="BlockchainType_input" name="event_blockchaintype">
            <option value="ETH">ETH</option>
            <option value="SOL">SOL</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <button type="submit">Submit Event</button>
        <button type="reset">Clear</button>
      </div>
      <p><?php echo $message ?></p>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
    </div>
  </form>
</div>
