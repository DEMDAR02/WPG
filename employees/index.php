<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  require_once('connect.php');

  $query= $conn -> query('Select * from dept_manager');
  $data=$query ->fetch(); //первая запись
// $data=$query ->fetchALL(); //все записи
  print_r($data);
    ?>
    <?php
    foreach ($data as $key => $value) {
        echo "$key =>". $value['emp_no'] ."=>" . $value['dept_no']. 
        "=>" . $value['from_date']. "=>" . $value['to_date']. '<br>' ;
    }
    
    ?>
</body>
</html>