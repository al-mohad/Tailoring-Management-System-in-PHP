<table class="table table-striped table-hover">
      <tr>
        <th><span class="glyphicon glyphicon-user"></span> Fulname</th>
        <th><span class="glyphicon glyphicon-home"></span> Username</th>
        <th><span class="glyphicon glyphicon-phone"></span> Email</th>
        <th><span class="glyphicon glyphicon-cog"></span> More</th>
        <th><span class="glyphicon glyphicon-flash"></span> Action</th>
      </tr>
  <?php
  include "../functions.php";
  $res=$db->query("SELECT * FROM users");
  while ($row=$res->fetch_assoc()) {
  ?>
  
      <tr>
        <td><?php echo $row['fulname'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['fulname'];?></td>
        <td><?php echo $row['fulname'];?></td>
        <td>
           <select name="makeID">
                <option selected disabled>Choose Make</option>
            <?php while ($result = $carMakeResult->fetch_assoc()): ?>
                <option value="<?= html($result['makeID']); ?>"><?= html($result['carmake']); ?></option>
            <?php endwhile; ?>
            </select>
        </td>
      </tr>
  <?php 
}
?>
</table>

<!--  -->