<!doctype html>
   <html>
    <head>
	<title>WebSocket PHP</title>
    
    <meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="fragment" content="!"/>
	<base href="/">
	<link rel="apple-touch-icon" href="<?php echo $BASEPATH; ?>apple-touch-icon.png">
	
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script src="https://gist.githubusercontent.com/cboden/fcae978cfc016d506639c5241f94e772/raw/e974ce895df527c83b8e010124a034cfcf6c9f4b/autobahn.js"></script>
    
<!-- for development application Files must be loaded separately -->
	<script src="<?php echo $BASEPATH; ?>static/vendor.min.js"></script>
	<link rel="stylesheet" href="<?php echo $BASEPATH; ?>static/vendor.min.css" />
	
	<script src="<?php echo $BASEPATH; ?>main/app.config.js"></script>
	<script src="<?php echo $BASEPATH; ?>main/app.run.js"></script>
	<script src="<?php echo $BASEPATH; ?>main/websocket.js"></script>	
	<link rel="stylesheet" href="<?php echo $BASEPATH; ?>main/css/app.css" />
	 <?php echo $HEADBOTTOM; ?>	
<head>
<body ng-app="">
<?php echo $BODYTOP; ?>
<div class="container">

<div class="row">
 <div class="col-sm-12">Websocket sending panel</div>
  <div class="col-sm-12">
  
  <form class="form-horizontal" action="<?php echo $BASEPATH; ?>post.php" method="post">
  <div class="form-group">
    <label for="inputId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" id="inputId" placeholder="Id">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputtext" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" name="inputtext" id="inputtext" placeholder="Please enter your text here">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="open"> Open
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
</form>
    </div>
</div>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
<?php echo $BODYBOTTOM; ?>
</body>
</html>