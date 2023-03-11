<?php 



// create tables 

$conn =  mysqli_connect("localhost","root","","todoapp");

if(!$conn){
    echo "connect error " . mysqli_connect_error($conn);
}


// users 
    // id , name  , email , password 

// tasks
    // id , title , user_id 
    // user id foreign key 



$sql = "CREATE TABLE `users` ( 
    id INT PRIMARY KEY AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE
    
) ";

mysqli_query($conn,$sql);

$sql = "CREATE TABLE IF NOT EXISTS tasks(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL ,
    `user_id` INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `users` (id)

) ";

// to make a query 
mysqli_query($conn,$sql);



mysqli_close($conn);

