
<h4>User List</h4>
<table>
   
    <tr>
        <th>Username</th>
        <th>Email</th>
    </tr>
     
     <?php 
      foreach($users as $user){
     ?>
     <tr>
         <td><a href="User.php?user=<?php echo $user->username; ?>"><?php echo $user->username; ?></a></td>
         <td><?php echo $user->email; ?></td>
     </tr>
      <?php   } ?>

</table>