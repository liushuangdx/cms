    <!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
			<h1>Form examples</h1>
			<!-- Quick search box -->
			<form action="" method="get"><input class="" type="text" id="q" name="q" /></form>
		</div>
	</div>
	<!-- End of Page title -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">					

					<h3>Form validation example</h3>
					<div class="box box-info">All fields are required</div>
					
					<form id="sampleform" method="post" action="#">

						<fieldset>
							<legend>JQuery Form Validation</legend>

							<p>
								<label class="required" for="firstname">First name:</label><br/>
								<input type="text" id="firstname" class="half" value="" name="firstname"/>
							</p>

							<p>
								<label class="required" for="lastname">Last name:</label><br/>
								<input type="text" id="lastname" class="half" value="" name="lastname"/>
							</p>

							<p>
								<label class="required" for="username">Username:</label><br/>
								<input type="text" id="username" class="half" value="" name="username"/>
								<small>e.g. ui.templates</small>
							</p>
							
							<p>
								<label class="required" for="password">Password:</label><br/>
								<input type="password" id="password" class="half" value="" name="password"/>
							</p>

							<p>
								<label class="required" for="password_confirm">Confirm password:</label><br/>
								<input type="password" id="password_confirm" class="half" value="" name="password_confirm"/>
							</p>

							<p>
								<label class="required" for="email">Email address:</label><br/>
								<input type="text" id="email" class="half" value="" name="email"/>
							</p>
							
							<p>
								<label class="required">Date format:</label><br/>
								<input type="radio" id="dateformat1" class="" value="dmy" name="dateformat"/>
								<label class="choice" for="dateformat1">dd/mm/yyyy</label>
								<input type="radio" id="dateformat2" class="" value="mdy" name="dateformat"/>
								<label class="choice" for="dateformat2">mm/dd/yyyy</label>
							</p>
							
							<p>
								<input type="checkbox" id="terms" class="" value="1" name="terms"/>
								<label class="choice" for="terms">I have read and accept the Terms of Use.</label>
							</p>
							
							<p class="box"><input type="submit" class="btn btn-green big" value="Validate"/> or <input type="reset" class="btn" value="Reset"/></p>

						</fieldset>

					</form>

					<h3>Form elements</h3>
					
					<h5>Step 1/6</h5>
					<div id="progress1" class="progress full progress-green"><span><b></b></span></div>
					
					<form id="sampleform2" method="post" action="#" onSubmit="return false;">

						<fieldset>
							<legend>Error message</legend>
							<div class="box box-error">Invalid credit card info</div>
							<div class="box box-error-msg">
								<ol>
									<li>Credit card number entered is invalid</li>
									<li>Credit card verification number must be a valid number</li>
								</ol>
							</div>
						</fieldset>
						
						<fieldset>
							<legend>Text fields</legend>
								<p>
									<label for="input2">Big title:</label><br/>
									<input type="text" id="input2" class="half title" value="" name="input2"/>
									<small>class="half title"</small>
								</p>
								<p>
									<label for="input1">Full textbox:</label><br/>
									<input type="text" id="input1" class="full" value="" name="input1"/>
									<small>class="full"</small>
								</p>
						</fieldset>
						
						<fieldset>
							<legend>Text area</legend>
							<p>
								<label for="area1">Small textarea:</label><br/>
								<textarea id="area1" class="small" name="area1"></textarea>
								<small>class="small"</small>
							</p>
							<p>
								<label for="area1">Medium textarea:</label><br/>
								<textarea id="area2" class="medium half" name="area2"></textarea>
								<small>class="medium half"</small>
							</p>
							<p>
								<label for="area1">Large textarea:</label><br/>
								<textarea id="area3" class="large full" name="area3"></textarea>
								<small>class="large full"</small>
							</p>
						</fieldset>
						
						<fieldset>
							<legend>Selections</legend>
							<div class="clearfix">
								<div class="column width3 first">									
									<p>
										<label>Radio buttons:</label><br/>
										<input type="radio" id="rb1" class="" value="" name="rb"/>
										<label class="choice" for="rb1">Lorem ipsum dolor sit amet</label><br/>
										<input type="radio" id="rb2" class="" value="" name="rb"/>
										<label class="choice" for="rb2">Lorem ipsum dolor sit amet</label>
									</p>
									<p>
										<label for="select1">Single selection:</label><br/>
										<select id="select1" class="half" name="select1">
											<option value="1">Lorem</option>
											<option value="2">Ipsum</option>
											<option value="3">Dolor</option>
											<option value="4">Sit</option>
											<option value="5">Amet</option>
										</select>
									</p>
								</div>
								<div class="column width3">
									<p>
										<label>Check boxes:</label><br/>
										<input type="checkbox" id="cb1" class="" value="" name="cb"/>
										<label class="choice" for="cb1">Lorem ipsum dolor sit amet</label><br/>
										<input type="checkbox" id="cb2" class="" value="" name="cb"/>
										<label class="choice" for="cb2">Lorem ipsum dolor sit amet</label>
									</p>
									<p>
										<label for="select2">Multiple selection:</label><br/>
										<select id="select2" class="half" multiple="multiple" size="6" name="select2">
											<optgroup label="Set 1">
												<option value="1" selected>Lorem</option>
												<option value="2">Ipsum</option>
											</optgroup>
											<optgroup label="Set 2">
												<option value="3">Dolor</option>
												<option value="4">Sit</option>
												<option value="5">Amet</option>
											</optgroup>
										</select>
									</p>
								</div>
							</div>
						</fieldset>
						
						<fieldset>
							<legend>Buttons</legend>
							<label>Some combinations</label>
							<p class=""><input type="submit" class="btn btn-green big" value="Big green"/> <input type="submit" class="btn btn-red" value="Standard red"/> or <input type="reset" class="btn" value="Simple gray"/></p>
						</fieldset>
						
					</form>
				
				</section>
				<!-- End of Left column/section -->
				
				<!-- Right column/section -->
				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>You might also want to check out...</h3>
						</header>
						<dl class="first">
							<dt><img width="16" height="16" alt="Basic styles" SRC="<?php echo ADMIN_IMG_URL; ?>/style.png"></dt>
							<dd><a HREF="styles.html">Basic styles</a></dd>
							<dd class="last">Basic elements and styles</dd>							
							
							<dt><img width="16" height="16" alt="Form validation" SRC="<?php echo ADMIN_IMG_URL; ?>/book.png"></dt>
							<dd><a HREF="#">Form validation</a></dd>
							<dd class="last">jQuery form validation documentation</dd>							
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Quick info</h3>
						</header>
						<section>
							<q>A form is an area that can contain form elements.
							Form elements are elements that allow the user to enter information (like text fields, textarea fields, drop-down menus, radio buttons, checkboxes, etc.) in a form.
							A form is defined with the &lt;form&gt; tag.
							<cite>w3schools.com</cite></q>							
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	<script type="text/javascript">
    $(document).ready(function(){
    	
    	/* setup navigation, content boxes, etc... */
    	Administry.setup();
    	
    	/* progress bar animations - setting initial values */
    	Administry.progress("#progress1", 1, 6);
    	
    	// validate form on keyup and submit
    	var validator = $("#sampleform").validate({
    		rules: {
    			firstname: "required",
    			lastname: "required",
    			username: {
    				required: true,
    				minlength: 2
    			},
    			password: {
    				required: true,
    				minlength: 5
    			},
    			password_confirm: {
    				required: true,
    				minlength: 5,
    				equalTo: "#password"
    			},
    			email: {
    				required: true,
    				email: true
    			},
    			dateformat: "required",
    			terms: "required"
    		},
    		messages: {
    			firstname: "Enter your firstname",
    			lastname: "Enter your lastname",
    			username: {
    				required: "Enter a username",
    				minlength: jQuery.format("Enter at least {0} characters")
    			},
    			password: {
    				required: "Provide a password",
    				rangelength: jQuery.format("Enter at least {0} characters")
    			},
    			password_confirm: {
    				required: "Repeat your password",
    				minlength: jQuery.format("Enter at least {0} characters"),
    				equalTo: "Enter the same password as above"
    			},
    			email: {
    				required: "Please enter a valid email address",
    				minlength: "Please enter a valid email address"
    			},
    			dateformat: "Choose your preferred dateformat",
    			terms: " "
    		},
    		// the errorPlacement has to take the layout into account
    		errorPlacement: function(error, element) {
    			error.insertAfter(element.parent().find('label:first'));
    		},
    		// specifying a submitHandler prevents the default submit, good for the demo
    		submitHandler: function() {
    			alert("Data submitted!");
    		},
    		// set new class to error-labels to indicate valid fields
    		success: function(label) {
    			// set &nbsp; as text for IE
    			label.html("&nbsp;").addClass("ok");
    		}
    	});
    	
    	// propose username by combining first- and lastname
    	$("#username").focus(function() {
    		var firstname = $("#firstname").val();
    		var lastname = $("#lastname").val();
    		if(firstname && lastname && !this.value) {
    			this.value = firstname + "." + lastname;
    		}
    	});
    
    });
    </script>