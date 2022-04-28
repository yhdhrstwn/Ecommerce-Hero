<form action="<?php echo site_url('uploadfile/submit')?>" 
enctype="multipart/form-data" 
method="POST">
	<input type="file" name="datafile" 
	accept="image/x-png,image/gif,image/jpeg" />	
	<br/>
	<button type="submit">Upload</button>
</form>