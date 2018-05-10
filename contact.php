<?php include 'head.php' ?>
<?php header('location: form.php'); ?>
<h6>Please fill the form below to contact me</h6>
<form action="form.php" method="post">
        
        <fieldset id="emplyerinfo">
			<legend>Contact Information</legend>
			
			<section class="emplyername">
                            <?php echo $message; ?>
                            <label for="emplyeFrname">First Name*</label> <!--for attrubute not required-->
                            <input name="emplyerFname" id="emplyername" 
				placeholder="first name"/>
                            
                            <label for="emplyerLname">Last Name*</label> <!--for attrubute not required-->
                            <input name="emplyerLname" id="emplyername" 
				placeholder="Lastname"/>
                            </section>
		
			<section class="phone">
                              <label for="phone">Phone</label>
                            <input name="phone" id="phone"			
                            placeholder="(nnn) nnn-nnnn" />
			</section>
			
			<section class="email">
                            <label for="email" >E-mail*</label>
                            <input id="email" name="email" 
                            placeholder=""  />
			</section>
			
			
		</fieldset>
			<input type="submit" value="Submit My Survey" name="go"/>
			<input type="reset" value="Cancel" />
		</form>
</html>


