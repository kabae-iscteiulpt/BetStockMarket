<?php
    set_time_limit(250);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "betstockmarket";

    $db = new mysqli($servername, $username, $password, $dbname);

    if ($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "SELECT * FROM stocks";
    $result = $db->query($sql);

    if($result->num_rows <= 0) {
        die("No records found");
    }
    $iterator = 1;
    while($row = $result->fetch_assoc()) {
        if($iterator==5 || $iterator==10 || $iterator==15)
        {
            echo 'Sleeping';
            // Sleep for 1min because of API 
            sleep(61);
        }
        $symbol = $row["symbol"];
        echo "The symbol is: ".$symbol;
        $URL='https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol='.$symbol.'&apikey=RU8DFXVNKWDRC0HL';
        $contents=file_get_contents($URL);
        $yesterday=date('Y-m-d',strtotime("-1 days"));
        if(isWeekend($yesterday)){
            echo "UPS!!! looks like it was weekend and there is no update available";
            break;
        }
        if($contents !== false){
            $json_a = json_decode($contents, true);
            echo   "This is yesterday ".$yesterday." ";
            $new_value=floatval($json_a["Time Series (Daily)"][$yesterday]["1. open"]);
            echo $json_a["Time Series (Daily)"][$yesterday]["1. open"];
        }
        $update = "UPDATE stocks SET 
            stockvaluebefore=currentstockvalue, currentstockvalue=$new_value
            WHERE symbol='$symbol'";
        
        if ($db->query($update) === TRUE) {
            echo "Record saved";
        } else {
            echo "Error: " . $db->error;
        }
        $iterator++;
    }

    // Updating users points in case they win 
    
    echo 'Starting To check user bets';
    $bets = "SELECT * FROM bets";
    $results = $db->query($bets);

    while($row = $results->fetch_assoc()) {
        echo ' in While ';
        $date = strtotime($row['created_at']);
        if(!date('Ymd', $date) == date('Ymd', strtotime('yesterday')))
        {
            echo "not yesterday ".$row['created_at'];
            continue;
        }
        $bet_option = $row['bet_option'];
        $symbol = $row['symbol'];
        $user_id = $row['user_id'];

        $result = $db->query("SELECT * FROM stocks WHERE symbol='$symbol'");
        $user_result = $db->query("SELECT * FROM users WHERE id=$user_id");
        $user = $user_result->fetch_assoc();
        $value = $result->fetch_assoc();

        echo 'Current value for '.$symbol.' is '.$value['currentstockvalue'];
        if(($value['currentstockvalue'] > $value['stockvaluebefore'] && strcmp($row['bet_option'], 'up')==0 )||( $value['currentstockvalue'] < $value['stockvaluebefore'] && strcmp($row['bet_option'], 'down')==0))
        {
            echo "<br>";
            echo ' The user won the bet \n';
            $amount = $row['amount'] * 2;
            echo 'Returns of: '.$amount;
            $newPoints = $amount + $user['points'];
            echo '\t New Points: '.$newPoints;
            $now = date('Y-m-d G:i:s');
            echo "<br>";
            echo 'user_id '.$user_id.'; Date: '.$date ;
            $update = "UPDATE users SET points=$newPoints, updated_at=now() WHERE id=$user_id";
            if ($db->query($update) === TRUE) {
                echo "Record saved";
                // $insert_history="INSERT INTO users_history(points, user_id, created_at, updated_at) 
                // VALUES (,[value-3],[value-4],[value-5])";
            } else {
                echo "Error: " . $db->error;
            }

        }

    }
    if($result->num_rows <= 0) {
        die("No records found");
    }

    function isWeekend($date) {
        return (date('N', strtotime($date)) >= 6);
    }
      $db->close();