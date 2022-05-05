<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creating tables</title>
</head>
<body>
<?php
include_once '../../include/connection.php';
echo 'Trying to create table...';

/*$sql = "CREATE TABLE `s3065078`.`cars_table` ( `VIN` VARCHAR(17) NOT NULL , `make` VARCHAR(20) NOT NULL ,
`model` VARCHAR(20) NOT NULL , `manufacturing_year` INT(4) NOT NULL , `engine_size` VARCHAR(8) NOT NULL ,
`transmission_type` VARCHAR(10) NOT NULL , `seats` TINYINT(2) NOT NULL , `doors` TINYINT(2) NOT NULL , 
`fuel_type` VARCHAR(10) NOT NULL , `colour` VARCHAR(12) NOT NULL , `registration_number` VARCHAR(15) NOT NULL ,
`first_registration` DATE NOT NULL , PRIMARY KEY (`VIN`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;";
*/


// $sql = "CREATE TABLE `parent` (
//     `email` varchar(50) NOT NULL,
//     `first_name` varchar(30) NOT NULL,
//     `last_name` varchar(30) NOT NULL,
//     `password` varchar(20) NOT NULL,
//     PRIMARY KEY(email)
//   );";

  

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '1 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_

$sql = "CREATE TABLE `intent` (
                            `email` varchar(50) NOT NULL,
                            `first_name` varchar(30) NOT NULL,
                            `last_name` varchar(30) NOT NULL,
                            `password` varchar(20) NOT NULL,
                            `code` text NOT NULL,
                            `child_first_name` varchar(30) NOT NULL,
                            `child_last_name` varchar(30) NOT NULL,
                            `category` varchar(15) NOT NULL,
                            `day_care` varchar(20) NOT NULL,
                            PRIMARY KEY(email)
                          );";

                          $ver = mysqli_query($conn,$sql);
                          if(!$ver)
                          {
                              echo mysqli_error($conn);
                              echo 'Intent failed';
                              die();
                          }
                          else
                          {
                              echo "Intent Query succesfully executed!";
                          }
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `child` (
//     `child_ID` int(11) NOT NULL AUTO_INCREMENT,
//     `parent_email` varchar(50) NOT NULL,
//     `first_name` varchar(30) NOT NULL,
//     `last_name` varchar(30) NOT NULL,
//     `category` varchar(15) NOT NULL,
//     `day_care` varchar(20) NOT NULL,
//     PRIMARY KEY(child_ID),
//     FOREIGN KEY(parent_email)
//     REFERENCES parent(email)
//     ON DELETE CASCADE 
//     ON UPDATE CASCADE
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '2 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

// //-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `contact_us` (
//     `ID` int(11) NOT NULL AUTO_INCREMENT,
//     `name` varchar(50) NOT NULL,
//     `email` varchar(50) NOT NULL,
//     `phone` varchar(30) NOT NULL,
//     `message` text NOT NULL,
//     PRIMARY KEY(ID)
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '3 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

// //-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `testimonial` (
//     `ID` int(11) NOT NULL AUTO_INCREMENT,
//     `name` varchar(30) NOT NULL,
//     `service` varchar(60) NOT NULL,
//     `date` date NOT NULL,
//     `message` text NOT NULL,
//     `approved` tinyint(1) NOT NULL,
//     PRIMARY KEY(ID)
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '4 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

// //-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `fee` (
//     `ID` int(11) NOT NULL AUTO_INCREMENT,
//     `name` varchar(30) NOT NULL,
//     `price` varchar(30) NOT NULL,
//     PRIMARY KEY(ID)
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '5 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

// //-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `page` (
//     `feature_ID` int(3) NOT NULL,
//     `title` varchar(80) NOT NULL,
//     `message` varchar(500) NOT NULL,
//     `picture_path` varchar(200) NOT NULL,
//     PRIMARY KEY(feature_ID)
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '6 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

// //-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
// $sql = "CREATE TABLE `day` (
//     `ID` int(11) NOT NULL AUTO_INCREMENT,
//     `date` date NOT NULL,
//     `child_ID` int(11) NOT NULL,
//     `temperature` varchar(50) NOT NULL,
//     `breakfast` varchar(200) NOT NULL,
//     `lunch` varchar(200) NOT NULL,
//     `activities` varchar(200) NOT NULL,
//     PRIMARY KEY(ID),
//     FOREIGN KEY(child_ID)
//     REFERENCES child(child_ID)
//     ON DELETE CASCADE 
//     ON UPDATE CASCADE
//   );";

// // Select 1 from table_name will return false if the table does not exist.
// $ver = mysqli_query($conn,$sql);
// if(!$ver)
// {
//     echo mysqli_error($conn);
//     echo '7 failed';
//     die();
// }
// else
// {
//     echo "Query succesfully executed!";
// }

//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_










?>
</body>
</html>
