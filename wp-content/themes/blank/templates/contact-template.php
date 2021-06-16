<?php
	/* Template Name: CONTACT */

get_header();
?>

<div class = "wall">
	<div class="insidect">
	  	<form action="action_page.php">
	  	<li>		
	  		<label for="fname">First Name</label>
    		<input type="text" id="fname" name="firstname" placeholder="Name"style="width:1200px">
    	</li>
        <li>        
            <label for="fname">Last Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Name"style="width:1200px">
        </li>
    	<li>
    		<label for="lname">Contact Number</label>
			<input type="text" id="lname" name="lastname" placeholder="Contact Number"style="width:1200px">
    	</li>
    	<li>
    		<label for="email">Email</label>
	    	<input type="text" id="email" name="email" placeholder="Email"style="width:1200px">
    	</li>
    	<li>
    		<label for="request">Feedback/Message</label>
	    	<textarea id="request" name="request" placeholder="Write something.." style="height:200px"></textarea>
    	</li>
    	<input type="submit" value="Submit">
	</form>
</div>
<?php get_footer(); ?>
