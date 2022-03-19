<?php  

function get_all_user($con){
   $sql  = "SELECT * FROM users ORDER bY id DESC";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $user = $stmt->fetchAll();
   }else {
      $user = 0;
   }

   return $user;
}




function get_user($con, $userid){
   $sql  = "SELECT * FROM users WHERE id=?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$userid]);

   if ($stmt->rowCount() > 0) {
   	  $user = $stmt->fetch();
   }else {
      $user = 0;
   }

   return $user;
}


function search_user($con, $key){
   # creating simple search algorithm :) 
   $key = "%{$key}%";

   $sql  = "SELECT * FROM users 
            WHERE firts_name LIKE ?
            OR last_name LIKE ?";
   $stmt = $con->prepare($sql);
   $stmt->execute([$key, $key]);

   if ($stmt->rowCount() > 0) {
        $user = $stmt->fetchAll();
   }else {
      $user = 0;
   }

   return $user;
}

