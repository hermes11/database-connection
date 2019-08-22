<?php 
   require('config/config.php');
   require('config/db.php');

   #create query
   $query = 'SELECT*FROM users';
   #get result
   $result = mysqli_query($conn, $query);
   #fetch data
   $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
      <h1 style="font-family: 'IMPACT'">USERS:</h1>
      <?php foreach($users as $user): ?>
         <div class= "container" style="background-color:green; text-align:center;">
             <marquee behavior ='alternate' scrollamount="8"><h3 style="color:orange;"> <?php echo $user['username']; ?></h3></marquee>
             <small style="color:white;">Created On<?php echo $user['created_at']; ?></small>
            <a style="float:right; position: relative;" class="btn btn-danger" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $user['id'] ?>">READ MORE</a>
            <hr class="my-4">
         </div>
          <?php endforeach; ?>
   </div>
 
 
 </body>
 </html>