<?php include "inc/header.php"; ?>

<!-- Iterate all data ilement to show  -->

<table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>

<?php 
$i= 0;
    foreach ($user as $key => $value) {
        $i++;
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['email'];?> </td>
        <td><?php echo $value['address'];?> </td>
    </tr>
<?php 
    }
?>

</table>


                                   




<?php include "inc/footer.php"; ?>
?>