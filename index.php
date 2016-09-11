
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Facebook wall design</title>

    <!-- Bootstrap core CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script>
		$(document).on('click','#button',function(){
			var feed = $('#feedbox').val();
			if(!feed)
				alert('Enter the feed');
			else{
			$( '<div id="feed"><div class="row" >\
		  <div class="col-md-2"><img src="image2.jpg" class="img-circle" width="100%"/></div>\
		  <div class="col-md-10">\
		  <div><b>Krishna Teja</b>\
		  <div class="pull-right text-muted" id="delete">delete</div></div>\
		  <div> '+feed+'</div>\
		  <div class="text-muted"> <small>posted 2 minutes ago</small></div>\
		  </div>\
		</div><hr></div>').insertAfter( "#insert" ).hide().slideDown();
			$('#feedbox').val('');
		}
		});
		
		$(document).on('click','#delete',function(){
			$(this).closest('#feed').slideUp();
		});
	</script>
  </head>
<style>
	#delete{
		cursor:pointer;
	}
</style>
  <body>

    <div class="container">
      <div class="header">

        <h3 class="text-muted">Facebook Wall Design</h3>
      </div>

	<div>
		<div class="row">
		  <div class="col-md-2"><img src="image.jpg" class="img-circle" width="100%"/></div>
		  <div class="col-md-10"><textarea class="form-control" id="feedbox" rows="3"></textarea><br>
		  <button type="button" id="button" class="btn btn-default">post</button>
		  <button type="button" id="imagem" class="btn btn-default">imago</button>
		  </div>
		</div>
	</div>
	<hr>
		<div id="insert"></div>
		<div>
		<div class="row" id="feed">
		  <div class="col-md-2"><img src="image2.jpg" class="img-circle" width="100%"/></div>
		  <div class="col-md-10">
		  <div><b>Fabiu</b>
		  <div class="pull-right text-muted" id="delete">delete</div></div>
		  <div> Iiiiiiiiiiiiiiiiih</div>
		  <div class="text-muted"> <small>posted 2 minutes ago</small></div>
		  </div>
		</div>
	</div>
	<br>

      

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
