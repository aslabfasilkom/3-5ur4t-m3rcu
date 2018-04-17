<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo form_open('tester/cekcsrf',array('method' =>'post')) ?>
	<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
	<input type="text" name="test" value="" placeholder="">
	<input type="submit" name="submit" value="test">
	<?php echo form_close(); ?>
</body>
</html>