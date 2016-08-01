<!-- <?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "address";
$connection = new mysqli($server,$user,$password,$database);

if($connection->connect_error){
die("connection failed". $connection->connect_error);
}else
{
	echo "connected";
}
?>
 -->

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

$(document).ready(function(){

	 var count = 0;
	$("#btn1").click(function(e){
		count++;
		//alert('addnew');
		 var n = "id"+count.toString(); 
		  var name = "name"+count.toString();
		 //alert(n);
		$("#tb").append("</br><tr id='"+n+"'> <td>Address</td><td><input name='address[]' class='hello' type='text'/></td></tr>");
		

        var total = $('#tb tr').length;
         $('#counter').html(total);
         e.preventDefault();
	});

	$("#tid").on('keypress', 'tr input[type="text"]', function(e) {


		if(e.which == 13){

		 	e.preventDefault();
			return false;
 		}
	});

$('#btn2').on("click", function(e){

    $('#tid tr:last').remove();
    e.preventDefault();

     var total = $('#tb tr').length;
         $('#counter').html(total);
});
$('#clearout').on("click", function(e){
    $('#tid tr').remove();
    e.preventDefault();

     var total = $('#tb tr').length;
         $('#counter').html(total);
});

$("#submit1").on("click",function(e){
     var total = $('#tb tr').length;

if(total <= 0){
	alert("no input");
	e.preventDefault();
}else{

// declare an array
var errors = [];
var i = 0; var j = 0;
$("#tb tr span").remove();    //it will remove all extra empty fields text.
$.each($('#tb tr'),function(){
	i++;

	var id = $(this).attr('id'); 
	
	var textfieldvalue = $('#'+id).find('input[type="text"]').val();
	if (textfieldvalue == ''){
		$('#'+id).find('input[type="text"]').after("<span name='emptyfield'> empty fields</span>");

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
<<<<<<< HEAD
// $("#submit1").submit(function(){
// 	var Address = $('#')
// })
=======

>>>>>>> 5f0fd2578ce765dc4ff6f83c63adef4d1082a6e7
//var formData = {name:"ravi",age:"31"};
$.ajax({

            url: 'insertdata.php',
            type: 'POST',
            data: $('#fid').serialize(),
                        //data: formData,

            success: function(result){
                alert("submitted");

               }

         });         

   


	}}
	

});




 $("#btn3").on("click",function(e){
			count++;
		 	var n = "id"+count.toString(); 
		  	var name = "name"+count.toString();

      $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "selectdata.php",             
        success: function(response){                    
           

           var arr = response['result'];
           if(arr.length > 0){
           	$("#clearout").trigger( "click" );

           }



           for (var i = 0 ; i < arr.length; i++){
			
           	var value = arr[i]['Address'];	

           	alert(value);

			$("#tb").append("<tr id='"+n+"' class='addresfield'> <td>Address</td><td><input name='address[]' class='hello' type='text' value = '"+value+"'/></br></td></tr>");
	

           }
            alert(JSON.stringify(arr));
        }
});

      		 e.preventDefault();


});


});
	
</script>
</head>
<body>

<form name="f_name" id="fid" method="post">
<div style="background-color:red;">
			
			<button id="btn2">Delete</button>
			<button id="btn1">ADD</button>
			<button id="btn3">Select</button>
			<button id="clearout">Clear All</button>
			<input type="submit" name="submit" value="submit" id="submit1">
			rows:<span id="counter"></span>

			<span id="errmesg"></span>
		
	</div>
	<div id="id" style="background-color:green; position:absolute; width:400; height:400; margin-left:50; margin-top:60;">
	<table name="t_name" id="tid">
	<tbody id="tb">
		

	</tbody>	
	</table>
	
</div>

</form>



</body>
</html>
