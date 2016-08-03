<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>


$("document").ready(function(){

	var inc = 0, count = 0;
	// Add Button Functionality
	$("#add").on("click",function(e){ 
		inc++;
		var name = "name"+inc.toString();
		var email = "email"+inc.toString();

				var rowid = "row"+inc.toString(); // row id that i have assigned here, it will be returned in .each function
						

		$("#tbid").append("<tr id ='"+rowid+"'> <td>Name</td> <td class = 'common'><input type='text' id='"+name+"' name='"+name+"'/></td><td>Email</td> <td class = 'common'><input type='text' id='"+email+"' name='"+email+"'/></td> </br></tr>");
 		
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
           	

			$("#tbid").append("<tr id='"+n+"' class='addresfield'> <td>NAME </td><td><input name= '"+name+"'class='hello' type='text' value = '"+value['Name']+"'/></td><td>Email </td><td><input name='"+email+"' class='hello' type='text' value = '"+value['Email']+"'/></br></td></tr>");
	

           }
             //alert(JSON.stringify(arr));
        }
});

      		 e.preventDefault();


});



//fetch button ends here...

// clear starts here...
$("#clear").on("click", function(e){
    $("#tabid tr").remove();
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
					
					$('#'+id).find('input[name="'+name+'"]').after("<span name='emptyfield'> empty fields</span>");
						emptyname++;
					emptyarray[j] = i;
					j++;

				}

				if(emailvalue == "" )
				{

									
					emptyarray[i] = inc; //alert(inc);
					
					$('#'+id).find('input[name="'+email+'"]').after("<span name='emptyfield'> empty fields</span>");
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
	
	$("#emptyinputfields").html('<br> Total empty rows are (<b> '+ emptyrow +' </b>) . <br/> Total empty name fields (<b> '+ emptyname +' </b>) . <br> Total empty email fields (<b>'+ emptyemail +'</b>) <br> Both name or email empty fields (<b>'+ totalempty +'</b>) ');



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
</head>

<body>
<div id="outermost">
	<button id="add">ADD</button>
	<button id="delete">Delete</button>
	<button id="fetch">Fetch</button>
	<button id="clear">Clear</button>
	rows:<span id="counter"></span>
	<span id="emptyinputfields"></span>
	
<form id="formid" method="post" action="">
	<table id="tabid" >
		<tbody id="tbid" style="background-color:green;">
		


		</tbody>
	</table>
	<input type="submit" name="submit" id="submit">
<!-- <div id="response"></div> -->
	
</form>

</div>


</body>
</html>
