<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

$(document).ready(function(){

	 var count = 0;
	$("#btn1").click(function(e){
		count++;
		 var n = "id"+count.toString(); 
		  var name = "name"+count.toString();
		 //alert(n);
		$("#tb").append("</br><tr id='"+n+"'> <td>Address</td><td><input name='"+name+"' class='hello' type='text'/></td></tr>");
		e.preventDefault();

        var total = $('#tb tr').length;
         $('#counter').html(total);
         
	});

$('#btn2').on("click", function(e){
    $('#tid tr:last').remove();
    e.preventDefault();
     var total = $('#tb tr').length;
         $('#counter').html(total);
});

$("#submit1").on("click",function(e){

// declare an array
var errors = [];
var i = 0; var j = 0;

$.each($('#tb tr'),function(){
	i++;

	var id = $(this).attr('id'); //??
	
	var textfieldvalue = $('#'+id).find('input[type="text"]').val();
	if (textfieldvalue == ''){
		$('#'+id).find('input[type="text"]').after("empty fields");

		errors[j] = i;
		j++;

	}

	});

console.log(errors);

	var string = "";
	for(var k = 0; k < errors.length; k ++){

		var value = errors[k];
		if (k == errors.length - 1){
		var string = string  + value.toString();


		} else {
		var string = string  + value.toString()+",";
	}

	}//alert(errors.length);
if(errors.length > 0){ 
	e.preventDefault();

	$('#errmesg').html(string+"rows are empty");
}else{
e.preventDefault();

//var formData = {name:"ravi",age:"31"};
$.ajax({

            url: 'insertdata.php',
            type: 'POST',
            data: $('#fid').serialize(),
                        //data: formData,

            success: function(result){
                alert('success');

               }

         });         

   


}
	


});
});
	
</script>
</head>
<body>

<form name="f_name" id="fid" method="post">
<div style="background-color:red;">
		
			<button id="btn1">ADD</button>
			<button id="btn2">Delete</button>

		
	</div>
	<div id="id" style="background-color:green; position:absolute; width:400; height:400; margin-left:50; margin-top:60;">
	<table name="t_name" id="tid">
	<tbody id="tb">
		

	</tbody>
	
	
	</table>
	
</div>
<input type="submit" name="submit" value="submit" id="submit1">
rows: <span id="counter"></span>

<span id="errmesg"></span>
</form>
	


</body>
</html>
