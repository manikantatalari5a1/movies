
<?php include('header.php');?>
<?php include('database_conn.php');?>
 


<a href="login.php?&type=add-new" class="badge badge-success">Add-New </a>
<div class="table table-responsive">
    <table class="table table-striped" style="width:70%;border:2px;">
        <tr>
            <th>S.NO</th>
            <th>Name</th>
            <th>Actor</th>
            <th>Actors</th>
            <th>Director</th>
            <th>Released</th>
            <th>Actions</th>
        </tr>
        <?php 
         $i=1;
         $query=mysqli_query($conn,"select * from movies");
         while($row=mysqli_fetch_assoc($query)){
        ?>
        
        <tr>
            
            <td><?php echo $i++;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['actor'];?></td>
            <td><?php echo $row['actors'];?></td>
            <td><?php echo $row['director'];?></td>
            <td><?php echo $row['released'];?></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>" class="badge badge-danger">delete</a>&nbsp &nbsp &nbsp <a href="update.php?id=<?php echo $row['id']?>" class="badge badge-secondary">update</a></td>
        </tr>

       <?php } ?>


    </table>
    
  

</div>
<?php include('footer.php');?>
