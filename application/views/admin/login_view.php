<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login CodeIgniter</title>

    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
  <body style="background:#eeeeee;">
    <div class="container">
      <div class="row" style="margin-top: 50px"> 
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <h2 style="display:inline"><small>Staff Management</small></h2><hr/>
              <?php echo validation_errors(); ?>
              <?php echo form_open('verifylogin'); ?>
                <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Enter Username"/>
                <br/>
                <input type="password" size="20" id="passowrd" name="password" class="form-control" placeholder="Enter Password"/>
                <br/>
                <input type="submit" value="Login" class="btn btn-primary btn-block"/>
              </form>
            </div>  
          </div>
        </div>
      </div>
    </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>