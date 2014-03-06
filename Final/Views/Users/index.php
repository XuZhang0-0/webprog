

    <h2>
    	List of Users
    </h2>
    
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		<tr>
    			<th>First Name</th>
    			<th>Last Name</th>
    			<th>Password</th>
    			<th>fasebook id</th>
    			<th>User Type</th>
    		</tr>
    	</thead>
    	<tbody>
    		<? foreach ($model as $row): ?>
    			<tr>
    				<td><?=$row['Firstname']?></td>
    				<td><?=$row['LastName']?></td>
    				<td><?=$row['Password']?></td>
    				<td><?=$row['fbid']?></td>
    				<td><?=$row['UserType']?></td>
    			</tr>
    		
    		<? endforeach; ?>
    	</tbody>
    </table>