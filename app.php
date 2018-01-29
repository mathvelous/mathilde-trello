<?php

    if (isset($_POST['inputForm'])){

          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "Trello";

          try {
             //for windows
             //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
             //for mac
             $db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
          } catch(Exception $e) {
             die("Error: ". $e);
          }

            $reponse = $db->query('SELECT COUNT(*) FROM card');
            $count = $reponse->fetchColumn();
            echo $count;
            $count++;

          $conn = $db->query("INSERT INTO card (content, position) VALUES ('" . $_POST['inputForm'] . "', ".$count.")");
          // use exec() because no results are returned
          //echo "New record created successfully";

        echo $_POST['inputForm'];
    }
?>