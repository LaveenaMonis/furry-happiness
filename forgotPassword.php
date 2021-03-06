<?php 
include_once('databaseConnection.php');
include_once('updatePassword.php');

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" method="post" action="">
        <h3 class="form-signin-heading">Please sign in</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="userName" id="userName" placeholder="Username" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i>
            </div>
             <input type="password" class="form-control" name="password" id="userPassword" placeholder="Enter Password" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" autocomplete="off" />
          </div>
        </div>

        
        <button class="btn btn-lg btn-primary btn-block" name="change_password" id ="change_password" type="submit">Change</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    var result= $( document ).ready( function( ) {

    $( '#change_password' ).on( 'click', function( e ) {
      var validated = validate();
      if( ! validated ){
         e.preventDefault();
         
      }
    

    });
  });

    function validate(){
      var datavalid=true;
      //e.preventDefault();
        var password = $('#userPassword').val();
        var confirm_password = $('#confirm_password').val();
        var userName=$('#userName').val();
           if ( userName.length < 1 || (! ( userName.match (/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/) )) ) {
          $('#userName' ).parent().append('E-mail invalid');
          datavalid=false;
        }    
        
           if ((password.length < 8 ) || (! password.match(/([a-zA-Z0-9]+[!,@,#,$,%,^,&,*])/) ))  {
            $('#userPassword' ).after('  Password invalid');
            datavalid=false;
          }
          if(password !== confirm_password){
            datavalid=false;
          }
            

      return datavalid;
    }

      
    //  var x = "<?php //echo checkUser($_POST);?>";  
  /*<?php
  //  header("Location: ./retrival.php");
    ?>
  */
  </script>



  </body>
</html>
