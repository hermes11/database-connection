<?php 
  require('config/config.php');
   require('config/db.php');
   #GET $id
   $id = mysqli_real_escape_string($conn, $_GET['id']);
   #create query
   $query = 'SELECT*FROM users WHERE id = ' .$id;
   #get result
   $result = mysqli_query($conn, $query);
   #fetch data
   $user = mysqli_fetch_assoc($result);

   #FREE RESULT
   mysqli_free_result($result);
   #close connection
   mysqli_close($conn);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>DATABASE CONNECTION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
   <div class="jumbotron">
      <h1 style="font-family: 'IMPACT'; text-align:center; color:darkblue; font-size: 50px;">USER:</h1>
     
         <div class= "container" style="background-color:purple; text-align:center;">
            <marquee style="text-align:center;" direction='up' behavior ='aleternate' scrollamount="2"><h3 style="color:orange;"> <?php echo $user['username']; ?></h3></marquee>
           <marquee behavior ='alternate' scrollamount="8")<h4 style="color:cyan;"><span style="color:#fff68f;">USER's DETAIL:</span>&ensp;<?php echo $user['first_name'];?>&ensp;<?php echo $user['last_name']; ?></h4></marquee>
            <small style="color:white;">Created On<?php echo $user['created_at']; ?></small>
            <a class="btn btn-success" href="<?php echo ROOT_URL;?>index.php?id=<?php echo $user['id'] ?>">BACK</a>
            <hr class="my-4">
         </div>
          
   </div>
 
 
 </body>
 </html>