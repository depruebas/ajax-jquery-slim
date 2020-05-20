
<!DOCTYPE html>
<html>
<head>
	<title>JQUERY - AJAX</title>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">

	$( document ).ready(function() {

		$( "#test-ajax" ).click(function() {

		  $.ajax({

	      url : 'ajax.php?id=25',
	      type : 'GET',

	      success : function( html) {

	        if ( html != "")
	        {
	          alert( html);
	        }
	      }
	    });

		});

	});


	</script>
</head>
<body>

	<form name=frm id=frm>
		<input type="Button" name="test-ajax" id="test-ajax" value=" Test Ajax ">
	</form>

</body>
</html>