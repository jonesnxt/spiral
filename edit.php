<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9" />

<script src="jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
#edit {
position: absolute;
top: 70px;
width: 100%;
height: 400px;
}

.main {
margin-top: 40px;
}
</style>

<title>Spiral</title>
</head>
<body>
<script src="jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap/js/bootstrap.min.js"></script>

 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Spiral</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="edit.php">New Module</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container main">
	<div class="page-header">
		<h1>RobotC Module</h1>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="img-thumbnail" id="edit"></div>
			</div>
		<div>
    </div> <!-- /container -->
	
	
<script src="ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("edit");
    editor.setTheme("ace/theme/eclipse");
    editor.getSession().setMode("ace/mode/c_cpp");
</script>
</body>
</html>