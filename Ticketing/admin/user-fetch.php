<?php
  include('conn.php');
  if(isset($_POST['fetch'])){
    ?>
    <div>
    <table  id="user_table" class="table table-striped table-hover">
     
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Role</th>
        <th style="text-align: center;">Action</th>
   
        </thead>
  <?php
        $query=$conn->query("select * from `users`");
        while($row=$query->fetch_array()){
          ?>
          <tr>
            <td><span id="name<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
              <td><span id="email<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                 <td><span id="username<?php echo $row['id']; ?>"><?php echo $row['username']; ?></td>
                   <td><span id="level<?php echo $row['id']; ?>"><?php echo $row['level']; ?></td>
                    
                    <td align="center" >
              <a style="cursor:pointer;" class="btn btn-info edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span></a> || 
              <a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php
        }
      
      ?>
      </tbody>
    </table>
  </div>
  </div>
    <?php
  }
?>

