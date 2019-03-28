<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="page-header">
    <h1>Upload Image In Database</h1>      
  </div>
<div class="jumbotron">
    <form method="post" enctype="multipart/form-data" action="uploadprocess.php">
       <label>Enter Image ID : <input type="text" name="img_id" /></label> <br/>
       <label>Upload : <input type="file" name="image" /></label><br/>
       <label><input type="submit" value="Upload Image" class="btn btn-primary" name="submit" /></label>
       
    </form>
	</div>
	</div>
 </body>
</html>

