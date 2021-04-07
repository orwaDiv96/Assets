              <?php
   include("con_db.php");      
                $result = mysqli_query($con,"SELECT * FROM users");
                $count = 1;


                    
                   ?>

<table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">  <thead>
                
  <tr>
    <th>Name</th>
    <th>Division</th>
    <th>Job Title</th>
    <th >Email</th>
    <th>Permission</th>
    <th style="text-align: center;">User</th>
    <th style="text-align: center;">Editor</th>
    <th style="text-align: center;">Admin</th>
    <th style="text-align: center;">Remove</th>
    
    
  </tr>
  
              </thead>
              <tbody style="text-align: center;">
         <?php
                            while($row = mysqli_fetch_array($result))
                            {
                              
                        ?>

            


                              <tr>
                               <td style="text-align: left;"> <?Php echo $row['name']; ?> </td> 

                              <td style="text-align: left;"> <?Php echo $row['division']; ?> </td> 

                              <td style="text-align: left;"> <?Php echo $row['job_title']; ?> </td> 

                              <td  style="text-align: left;"> <?Php echo $row['email']; ?> </td>

                              <td  style="text-align: left;"> <?Php echo $row['permission']; ?> </td>
                            
                              <td style="text-align: center;">
                                <a class="btn btn-success" href="control.php?permission=user&user_id=<?php echo $row['id']; ?>">User</a>
                              </td>

                              <td style="text-align: center;">
                                <a class="btn btn-primary" href="control.php?permission=editor&user_id=<?php echo $row['id']; ?>">Editor</a>
                              </td>

                              <td style="text-align: center;">
                                <a class="btn btn-warning" href="control.php?permission=admin&user_id=<?php echo $row['id']; ?>">Admin</a>
                              </td>

                              <td style="text-align: center;">
                                <button class="btn btn-danger" onclick="if (window.confirm('Are You Sure You Want To Remove This User ?')){document.location = 'deleteUser.php?uID=<?php echo $row['id']; ?>';}">Remove</button>
                              </td>
                           
                              </tr>

                                <?php 
                                $count++;
                        }
                        mysqli_close($con);
                        ?>
            
            </tbody>
            </table>                                  
