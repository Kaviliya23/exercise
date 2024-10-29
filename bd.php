//db.php
<?php

//database connection
$server = 'localhost';
$user ='root';
$password='';
$database='musical';

//create connection
$conn=new mysqli($server,$user,$password,$database);

//check connection
if($conn->connect_error){
    die('connection error!'.$conn->connect_error);
}
else{
    echo 'connected successfully<br>';
}

$sql = "CREATE DATABASE IF NOT EXISTS $database";

//check database
if($conn->query($sql)==TRUE)
{
    echo 'Database created successfully<br>';
}
else{
    echo 'error creating database :'.$conn->error;
}

$conn->select_db($database);

//create Artist table 

$sql="create table IF NOT EXISTS Artist(
artID int primary key,
artName varchar(100),
artNationality varchar(100))";

$conn->query($sql);

//create CD table 

$sql="create table IF NOT EXISTS CD (
cdID int primary key,
artID int ,
cdTitle varchar(150),
cdPrice decimal(4,2),
cdGenre varchar(100),
cdRating int ,
cdYear  int ,
foreign key (artID) references Artist(artID))";

$conn->query($sql);

echo "tables created successfully.<br>";


//insert data into Artist table

$sql="insert into Artist(artID,artName,artNationality) values 
(1,'Muse','British'),
(2,'Mr.Scruff','British'),
(3,'DeadMaus','Canadian'),
(4,'Mark Ronson','British'),
(5,'Mark Ronson & The Business Intl','British'),
(6,'Animal Collective','American'),
(7,'Kings of Leon','American'),
(8,'Maroon 5','American')";

$conn->query($sql);

//insert data into CD table

$sql="insert into CD(cdID,artID,cdTitle,cdPrice,cdGenre,cdRating,cdYear) values
(1,1,'Black Holes and Revelations',9.99,'Rock',78,2006),
(2,1,'The Resistance',11.99,'Rock',90,2009),
(3,2,'Black Holes and Revelations',9.99,'Rock',78,2006),
(4,3,'Black Holes and Revelations',9.99,'Rock',78,2006),
(5,4,'Black Holes and Revelations',9.99,'Rock',78,2006),
(6,5,'Black Holes and Revelations',9.99,'Rock',78,2006),
(7,6,'Black Holes and Revelations',9.99,'Rock',78,2006),
(8,7,'Black Holes and Revelations',9.99,'Rock',78,2006),
(9,7,'Black Holes and Revelations',9.99,'Rock',78,2006),
(10,8,'Black Holes and Revelations',9.99,'Rock',78,2006)";

$conn->query($sql);

echo "data inserted  successfully";
?>