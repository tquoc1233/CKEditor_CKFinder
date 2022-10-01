<?php
?>
<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CKEditor And CKFinder Demo</title>
	<script src="./ckeditor/ckeditor.js"></script>
	<script src="./ckfinder/ckfinder.js"></script>
</head>
<body>
	<h1 style="text-align: center;">CKEditor</h1>
	<form>
		<textarea name="editor" id="editor">
			This is my textarea to be replaced with CKEditor 4.
		</textarea>
		<script>
			var editor = CKEDITOR.replace( 'editor', {
				filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
				filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserWindowWidth : '1000',
				filebrowserWindowHeight : '700'
			});
			CKFinder.setupCKEditor( editor, '/ckfinder/' );
		</script>
	</form>
</body>
</html>