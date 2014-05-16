<style type="text/css">
	.error{
		coler=red;
	}
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align:right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}
	.has-feedback .form-control-feedback {
		display: inline-block;
		right:auto;
		top:auto;
		margin-left: -40px;
	}
	.has-error {
		color: red;
	}
	@media screen and (min-width: 768px) {
		.my-horizontal .form-control {
			width: 25%;
		}
	}
</style>

<h2>Edit:</h2>
	<ul class="error">
		<? foreach ($errors as $key => $value):?>
			<li></li>
		<? ?>
	</ul>

<form action="$action=save" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>"/>
	
	<label for="FirstName">First Name:</label>
	<input type="hidden" name="id" value="<?=$model['id']?>"/>
	<input type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>"/>
	<br />
	<label for="LastName">Last Name:</label>
	<input type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>/>
	<br />
	<label for="Password">Password:</label>
	<input type="text" name="Password" id="Password" value="<?=$model['Password']?>/>
	<br />
	<label for="fbid">Facebook ID</label>
	<input type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>/>
	<br />
	<label for="UserType">User Type</label>
	<input type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>/>
	<br />
	<input type="submit" value="save"/>

</form>

<pre>
	<? print_r($_GET)?>
	<? print_r($_POST)?>
</pre>



    <? function JavaScripts(){ ?>
    	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
    	<script type="text/javascript">
    	    $(function(){
    	    	
    	    	$("form").validate();
    	    	$("#AddressType").val(<?=$model['AddressType']?>);
    	    	
    	    })
    		
    	</script>
    	
    <?	} ?>
    	


