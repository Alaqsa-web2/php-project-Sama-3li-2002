<?php
// class Connect{

 $servername ="localhost"; 
 $username="root";
 $password ='';
 $dbname="finalproject";


$conn= mysqli_connect($servername, $username, $password, $dbname);
// function connect(){

// $conn =mysqli_connect($this->servername, $this->username , $this->password , $this->dbname);
//     return $conn;
// }

// function  read_from_db($query){
    // $conn = $this -> connect();
    // $res = mysqli_query($conn, $query);

    // if(!$res){
    //     return false;
    // }
    // else{
    //     $data = false;
    //     while($row = mysqli_fetch_assoc($res)){
    //         $data[]= $row;
    //     }
        // return $data;
    // }
// }
// }
?>