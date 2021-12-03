<table class="table table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Edit</th>
				<th>Delete</th>
    </thead>
    <tbody>
        <?php
            foreach($users as $row){
                echo "<tr>";
                echo "<td>" . $row->id . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->phone . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>";
                echo '<a href="'. base_url('index.php/AddNewUser_AyaGamal/update/'.$row->id) . '"> Edit </a>';
                echo "</td>";
								echo "<td>";
                echo '<a href="'. base_url('index.php/AddNewUser_AyaGamal/delete/'.$row->id) . '"> Delete </a>';
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<button id="new-btn"> 
	<a href= "<?php echo base_url('index.php/AddNewUser_AyaGamal/create') ?>"> Add New User </a> 
</button>

