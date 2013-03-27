<html>
	<head>
		<title>Ajax File Uploader by SpirITzzz</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.MultiFile.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		
<script type="text/javascript">
$(document).ready(function(){
	  
$('.MultiFile').MultiFile({ 
	accept:'jpg|gif|bmp|png|rar', max:15, STRING: { 
		remove:'удалить',
		file:'$file', 
		selected:'Выбраны: $file', 
		denied:'Неверный тип файла: $ext!', 
		duplicate:'Этот файл уже выбран:\n$file!' 
	} 
});		  
	  
$("#loading").ajaxStart(function(){
	$(this).show();
})

.ajaxComplete(function(){
	$(this).hide();
});
	  

$('#uploadForm').ajaxForm({
	beforeSubmit: function(a,f,o) {
		o.dataType = "html";
		$('#uploadOutput').html('Submitting...');
	},
	success: function(data) {
		var $out = $('#uploadOutput');
		

		
		$out.html('Form success handler received: <strong>' + typeof data + '</strong>');
		if (typeof data == 'object' && data.nodeType)
			data = elementToString(data.documentElement, true);
		else if (typeof data == 'object')
			data = objToString(data);
		$out.append('<div><pre>'+ data +'</pre></div>');
	}
});
});
</script>	
	</head>

<body> 
    <form id="uploadForm" action="doajaxfileupload.php" method="post" enctype="multipart/form-data">
    	<input name="MAX_FILE_SIZE" value="1000000" type="hidden"/>
     	File: <input name="fileToUpload[]" id="fileToUpload" class="MultiFile" type="file"/><br>
      	<input value="Submit" type="submit"/>
	</form>
 	<img id="loading" src="loading.gif" style="display:none;"/>   
    <div id="uploadOutput"></div>
<br><br><br><br><br>



	

</body>
</html>