

<?php
$db_connect = mysqli_connect("localhost", "root", "", "anamul");
$view = $db_connect->query("SELECT * from order_details order by sl_no desc");

?>



<?php include 'include_file/header.php' ?>





    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">SL No</th>
                <th scope="col"> Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Product Name</th>
				<th scope="col">Model</th>
				<th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

         
            <?php 
             if(!empty($view)){
                 $i=0;
                 while($raw=$view->fetch_object()){
                     $i++;
                 
            ?>
            <tr>
                <td scope="row"><?php echo $i; ?></td>
                <td><?php echo $raw->name; ?></td>
                <td><?php echo $raw->p_number; ?></td>
                <td><?php echo $raw->address; ?></td>
				<td><?php echo $raw->product_name; ?></td>
				<td><?php echo $raw->model; ?></td>
				<td><?php echo $raw->date; ?></td>
                <th> 
                    <a href="update.php?id= <?php echo $raw->sl_no ?>" class="btn btn-success btn-sw">Update</a>
					<a href="print.php?id= <?php echo $raw->sl_no ?>" class="btn btn-success btn-sw">Print</a>
                    <a href="" class="btn btn-danger btn-sw">Delete</a>
                </th>
            </tr>
            <?php }} ?>
        </tbody>
    </table>



