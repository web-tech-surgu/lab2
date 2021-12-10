<?php 
	print_r($_FILES[‘avatar']);
?>
<form name="file_upload" method="POST" action="<?=$_SERVER['SCRIPT_NAME']?>" enctype="multipart/form-data"> 
<label>Ваш аватар: 
	<input type="file" name="avatar">
</label> 
<input type="submit" name="send" value="Отправить файл">
</form>
