<html>
<head>

	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/Form-Validation-/bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="/Form-Validation-/bootstrap/js/bootstrap.js"></script>

	<style type="text/css">
		.container {
			width: 1020px;	
		}
		.col-sm-6{
/*background-color:black;
color: white;*/
}
.text-center{
	color: white;
}

</style>

</head>

<body style="background-color: black;">
	<div class ="text-center">
		<h1>Form builder</h1>

	</div>

	<div class="container">
		<div class="row">
			<!-- buttons -->
			<div class="jumbotron">
				<div class="text-center">
					<button id="add" class="btn btn-primary btn-lg">ADD</button>
					<button id="delete" class="btn btn-danger btn-lg">Delete</button>
					<button id="fetch" class="btn btn-primary btn-lg">Fetch</button>
					<button id="clear" class="btn btn-default btn-lg">Clear</button>
					<input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">

				</div>
				<br/>
				<div class="alert alert-info remove">
					rows: ( <b><span id="counter"></span></b> )
				</div>
				<span id="emptyinputfields"></span>
			
			<!-- buttons -->
			<!-- form -->
			<!-- <div class="jumbotron text-center"> -->
			<div class="table table-striped">
				<form id="formid" method="post" action="" ">  
					<div class="form-group">
						<table id="tabid" class="table table-condensed table-striped">
							<thead><tr><th colspan="3">NAME</th> <th>EMAIL</th></tr></thead>
							<tbody id="tbid">



							</tbody>
						</table>

						<!-- <div id="response"></div> -->
					</div>
				</form>
			</div>
			<!-- form -->
			<!-- </div> -->
		</div>
		</div>    <!-- row -->

	</div> <!-- container -->

	<script>

		$("document").ready(function(){

			var inc = 0, count = 0;
// Add Button Functionality
$("#add").on("click",function(e){ 
	inc++;
	var name = "name"+inc.toString();
	var email = "email"+inc.toString();

var rowid = "row"+inc.toString(); // row id that i have assigned here, it will be returned in .each function


$("#tbid").append("<tr id ='"+rowid+"'> <td>Name</td> <td><input class='form-control' type='text' id='"+name+"' name='"+name+"'/></td> <td>&nbsp;&nbsp;</td>  <td>Email</td> <td><input class='form-control' type='text' id='"+email+"' name='"+email+"'/></td> </br></br></br></tr>");

var total = $('#tbid tr').length; //finding the length of array
$('#counter').html(total);
e.preventDefault();

});
// add ends here...

//delete's functionality goes here...
$("#delete").on('click',function(e){
	$("#tabid tr:last").remove();

var total = $('#tbid tr').length; //finding the length of array
$('#counter').html(total);
e.preventDefault();

});

// Fetch button's functionality


$("#fetch").on("click",function(e){
	count++;


	$.ajax({    
		type: "POST",
		url: "selectalldata.php",             
		success: function(response){  

			var name = "name"+inc.toString();
			var email = "email"+inc.toString();
			var n = "name"+count.toString(); 
			var name = "name"+count.toString();

			var arr = response['data']; 
			var len = arr.length;
//console.log(len);
if(arr.length > 0){
	$("#clear").trigger("click");

}

for (var i = 0 ; i < arr.length; i++){

	var value = arr[i] 


	$("#tbid").append("<tr id='"+n+"' class='addresfield'> <td>NAME </td><td><input class='form-control' name= '"+name+"' type='text' value = '"+value['Name']+"'/></td><td>&nbsp;&nbsp;</td><td>Email </td><td><input class='form-control' name='"+email+"'  type='text' value = '"+value['Email']+"'/></td></br></br></br></tr>");


}
//alert(JSON.stringify(arr));
}
});

	e.preventDefault();


});



//fetch button ends here...

// clear starts here...
$("#clear").on("click", function(e){
	$("#tabid tr, .remove").remove();

	var total = $('#tbid tr').length;
	$('#counter').html(total);
	e.preventDefault();
});
// clear ends here...


$("#submit").on("click",function(e){
	e.preventDefault();
var length = $("#tbid tr").length;	//console.log(length);
if(length <=0){
	alert('no input to submit');
	e.preventDefault();
	return false;
}

var emptyarray = [];

var i=0, j=0; var emptyname = 0, emptyemail = 0 , emptyrow = 0;
$("#tbid tr span").remove();

$.each($("#tbid tr"),function(){ 
	var id = $(this).attr('id'); 
	i++;

	console.log(id);
var inc = id.replace('row',''); //alert(inc);
var name = "name"+inc.toString();
var email = "email"+inc.toString();

var namevalue = $("#" +id).find("input[name = '"+name+"']").val();
var emailvalue = $("#" +id).find("input[name = '"+email+"']").val();

// console.log(namevalue);
// console.log(emailvalue);



if(namevalue == "" )
{


emptyarray[i] = inc; //alert(inc);

$('#'+id).find('input[name="'+name+'"]').after("<span name='emptyfield'><b> empty fields</b></br></span>");
emptyname++;
emptyarray[j] = i;
j++;

}

if(emailvalue == "" )
{


emptyarray[i] = inc; //alert(inc);

$('#'+id).find('input[name="'+email+'"]').after("<span name='emptyfield'><b> empty fields</b></br></span>");
emptyemail++;
emptyarray[j] = i;
j++;

}

if (namevalue == "" && emailvalue == "")
{

	emptyrow++;

}


});



var totalempty = (emptyname + emptyemail);
info = '<div class="alert alert-info remove"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Total empty rows are (<b> '+ emptyrow +' </b>).</div>';
info += '<div class="alert alert-info remove"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Total empty name fields (<b> '+ emptyname +' </b>) .</div>';
info +='<div class="alert alert-info remove"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Total empty email fields (<b>'+ emptyemail +'</b>).</div>';
info +='<div class="alert alert-info remove"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Both name or email empty fields (<b>'+ totalempty +'</b>) </div>';

$("#emptyinputfields").html(info);



if(totalempty  > 0){
	console.log('empty');
	return false;
}

submitform(e);	

});







function submitform() {

	$.ajax({

		url: 'selectalldata.php',
		type: 'POST',
		data: $('#formid').serialize(),
//data: formData,

success: function(result){
	$("#emptyinputfields").append("<br>submitted");
	setTimeout(function(){
// location = 'newfile.php';
},2000);
}
}); 

}

});

</script>

</body>
</html>
