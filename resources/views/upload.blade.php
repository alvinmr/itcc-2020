<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data" id="upload_form">
		{{ csrf_field() }}
		<input type="file" accept=".pdf" name="berkas" id="uploadBox">
		<br>
		<input type="submit" name="submit" onclick="upload_file()" id="submit">
	</form>

	<script type="text/javascript">
		function upload_file() {
			$.ajax({
				url : 'coba',
				data : {
					berkas: new FormData($("#upload_form")),
				},
				dataType : 'json',
				method : 'post',
				success:function(response){
					console.log(response);
				},
			});
		}

	</script>
</body>
</html>