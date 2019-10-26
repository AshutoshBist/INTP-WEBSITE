<<?php
$title=filter_input(INPUT_POST,"title");
$imglink=filter_input(INPUT_POST,"author");
$rating=filter_input(INPUT_POST,"rating");
$imglink=filter_input(INPUT_POST,"imglink");
$studio=filter_input(INPUT_POST,"studio");
$source=filter_input(INPUT_POST,"source");
$ep=filter_input(INPUT_POST,"ep");
$description=filter_input(INPUT_POST,"description");
$trailer=filter_input(INPUT_POST,"tlink");

if(!empty($title)){
  if(!empty($imglink)){
    if(!empty($score)){

        if(!empty($description)){
          $host="localhost";
          $dbusername="root";
          $dbpassword="";
          $dbname="mwl";

          //create fann_get_total_connections
          $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
          if(mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_error() .')'
            .mysqli_connect_error());
          }
          else{
            $sql = "INSERT INTO  info (title,imglink,rating,author,studio,source,episodes,description,trailer)
            values ('$title','$imglink','$rating','$author','$studio','$source','$ep','$description','$trailer')";
            if($conn->query($sql)){
              header('Location: http://' . $_SERVER['HTTP_HOST']. '/final/adminlanding.html',true,303);
            }
            else {
              echo "Error: ".$sql ."<br>".$conn->error;
            }
            $conn->close();
          }




        }
        else {
          echo "Description should not be empty";
          die();
        }
    }
    else {
      echo "Score should not be empty";
      die();
    }
  }
  else {
    echo "Image Link should not be empty";
    die();
  }
}
else {
  echo "Title should not be empty";
  die();
}
 ?>
