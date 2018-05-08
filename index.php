<!DOCTYPE html>
<html>
<head>
	<title>VoteMe!</title>
	<!-- JS SOURCE -->
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="swal/sweetalert2.all.js"></script>

	<!-- CSS SOURCE -->
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css.map">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-image: url('bg.jpg'); background-size: cover; background-position: cover;">

	  <div class="wrapper" >
	    <form class="form-signin">       
	      <h2 class="form-signin-heading">Masuk Dong</h2>
	      <input type="text" class="form-control" id="username" name="username" placeholder="Email Address" required="" autofocus="" />
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required=""/>      
	      
	      <button class="btn btn-lg btn-primary btn-block" type="button" id="masukdong">Masuk</button>   
	    </form>
	  </div>

</body>
<script type="text/javascript">
	$(document).ready(function(){

		$('#masukdong').click(function(){
			if ($("#username").val() == "frismanda" && $("#password").val() == "mandaganteng" ) {
			swal('Sukses', '-', 'success');
			window.location.href = "beranda.html";
		} else {
			swal('Nonono', 'Ohh tidak bisa nih', 'warning');
		}

		})
		
	})
</script>
</html>