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


//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "INSERT INTO `fee` (`name`, `price`) VALUES
('babies', '20'),
('wobblers', '25'),
('Toddlers', '30'),
('Preschool', '35');";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo 'failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}

//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "INSERT INTO `page` (`feature_ID`, `title`, `message`, `picture_path`) 
VALUES
(1, 'culture market', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'images/feature1.jpg'),
(2, 'ahmed season', 'dbleaokfepakapiea', 'images/feature3.jpg');";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo 'failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}

//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "INSERT INTO `parent` (`email`, `first_name`, `last_name`, `password`) VALUES
('admin@boomerang.com', 'admin', 'boomerang', 'admin123');";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo 'failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}





?>
</body>
</html>
