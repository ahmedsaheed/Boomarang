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





$sql = "SET foreign_key_checks = 0 ;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '1 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}

//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_







$sql = "DROP TABLE parent;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '2 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE child;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '3 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE day;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '4 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE contact_us;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '5 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE fee;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '6 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE page;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '7 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}
//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
$sql = "DROP TABLE testimonial;";

// Select 1 from table_name will return false if the table does not exist.
$ver = mysqli_query($conn,$sql);
if(!$ver)
{
    echo mysqli_error($conn);
    echo '8 failed';
    die();
}
else
{
    echo "Query succesfully executed!";
}

















//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_

$sql = "SET foreign_key_checks = 1 ;";

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
    echo 'key check back on';
}

//-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_










?>
</body>
</html>
