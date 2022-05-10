<?php
    include 'sql_conn.php';

    date_default_timezone_set('America/Chicago');

    $start_date = time();

    $sql = "SELECT table_name
        FROM information_schema.tables
        WHERE table_schema = 'test1'
        AND table_name = 'nftcalendar';";
    $res = mysqli_query($dbc, $sql);
    if($res->num_rows == 0){
        $sql = "CREATE TABLE nftcalendar (
            Id INT(4) NOT NULL AUTO_INCREMENT,
            blockchain varchar(3),
            title varchar(64),
            unix_timestamp int(11), PRIMARY KEY (Id)
            );";
        if(mysqli_query($dbc, $sql)){

        }
        else{
            echo "FAILED TO MAKE DB?";
        }
    }

    $sql = "SELECT * 
        FROM nftcalendar";
    $res = mysqli_query($dbc, $sql);
    $total_events = $res->num_rows;
    if($res->num_rows == 0){
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if( $_POST['calendar-start'] != "" ){
            $start_date = strtotime($_POST['calendar-start']);
		}
		else{
			$message = "You must fill out all boxes.";
		}
	}
    

    $sql = "SELECT * 
        FROM nftcalendar 
        WHERE unix_timestamp BETWEEN ".$start_date." AND ".$start_date+(60*60*24*7).";";
    $res = mysqli_query($dbc, $sql);
    $this_week_results = $res->num_rows;

    $calendar_information = array();

    for($x = 0; $x < 7; $x++){
        $date = gmdate("F j, Y", $start_date+($x*60*60*24));
        if (!array_key_exists($date, $calendar_information)) {
            $calendar_information[$date] = [];
        }
    }

    while($row = mysqli_fetch_assoc($res)) {
        $date = gmdate("F j, Y", $row["unix_timestamp"]);
        $obj = array(
            "title" => $row["title"],
            "blockchain" => $row["blockchain"],
            "time" => gmdate("g:i a", $row["unix_timestamp"])
        );
        if( array_key_exists($date, $calendar_information) ){
            array_push($calendar_information[$date],$obj);
        }
    }

    $html_export = '<div class="calendar">';
    $date_keys = array_keys($calendar_information);
    foreach ($calendar_information as $date => $events) {
        $html_export .= '<div class="calendar_holder">';
        $html_export .= '<div class="calendar_date"> '.$date.' </div>';
        $html_export .= '<div class="calendar_events">';
        if(count($events)){
            foreach ($events as $event){
                $html_export .= '<div class="calendar_event">
                                <a> '.$event['title'].' - '.$event["time"].' ('.$event['blockchain'].') </a>
                                </div>';
            }
        }
        else{
            $html_export .= '<div class="calendar_event">
                                <a> Nothing! </a>
                                </div>';
        }
        $html_export .= '</div>';
        $html_export .= '</div>';
    }
    $html_export .= '</div>';

?>

<center>
    <div>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <label for="start">Week of:</label>
            <input type="date" id="start" name="calendar-start"
                value="<?php echo gmdate("Y-m-d", $start_date)?>"
                min="2022-04-05" max="2022-05-31">
            <button type="submit">Search</button>
        </form>
        <?php echo $html_export; ?>
    </div>
</center>