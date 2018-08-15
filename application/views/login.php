<style type="text/css">
	.login-card 
	{
	  padding: 40px;
	  width: 450px;
	  margin: auto;
	  border-radius: 2px;
	  margin-bottom:100px;  
	  overflow: hidden;
	  /*background image*/
	    background: #FFFFFF url(  assets/img/bluebg.jpg );
	  background-repeat: no-repeat;
	  background-size: 100% 700px;
	  background-position: top center;
	}
</style>

<div style="min-height: 525px;">
<div class="row">
<div class="col-sm-4 col-sm-offset-4" style="padding-top: 80px;">
<?php echo $this->session->flashdata('errorMessage') ?>
<?php echo $this->session->flashdata('successMessage') ?>
<?php echo form_open('login_con/login_validation') ?>
<div class="login-card">
<?php echo form_fieldset('Login user'); ?>
	<div class="input-group form-group">
		<span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
		<input id="username" type="text" class="form-control input-lg" name="username" placeholder="Username">
	</div>
	<div class="input-group form-group">
		<span class="input-group-addon"><i class="fa fa-key " aria-hidden="true"></i></span>
		<input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">
	</div>

<div class="form-group">
	<input type="submit" name="login" class="btn btn-primary input-lg form-control" value="Login">
</div>
<?php echo form_close() ?>
</div>
</div>
</div>
</div>	