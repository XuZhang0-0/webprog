
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css"></link>

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
    				<td><?=$row['FirstName']?></td>
    				<td><?=$row['LastName']?></td>
    				<td><?=$row['Password']?></td>
    				<td><?=$row['fbid']?></td>
    				<td><?=$row['UserType']?></td>
    			</tr>
    		
    		<? endforeach; ?>
    	</tbody>

    </table>
    
    <? function JavaScripts(){ ?>
    	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.3/jquery.dataTables.min.js"></script>
    	<script type="text/javascript">
    	    $(function(){
    	    	$(".table").dataTable();
    	    })
    		
    	</script>
    <?	} ?>
    	
    	
    	
    	
    	
    	
