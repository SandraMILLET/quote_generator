<?php
ini_set('display_errors', 'On');
error_reporting(-1);

/* Connexion */
$dsn = 'mysql:dbname=random2;host=127.0.0.1; charset=utf8';
$user = '';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      };




  # PDO Query
  $stmt = $dbh->query("SELECT * FROM quotes ORDER BY RAND() LIMIT 1");

  // Display Quote
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['quote_text']; 
    ?><br><br><?php
    echo $row['quote_reference'];
    
  }

  // Close statment ($stmt)
  unset($stmt);

  // Close connection ($pdo)
  unset($dbh);
