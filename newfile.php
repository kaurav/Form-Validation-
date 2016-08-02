<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>


$("document").ready(function(){

	var inc = 0;
	// Add Button Functionality
	$("#add").on("click",function(e){ 
		inc++;
		var name = "name"+inc.toString();
		var email = "email"+inc.toString();

				var rowid = "row"+inc.toString(); // row id that i have assigned here, it will be returned in .each function
						

		$("#tbid").append("<tr id ='"+rowid+"'> <td>Name</td> <td class = 'common'><input type='text' id='"+name+"' name='"+name+"'/></td><td>Email</td> <td class = 'common'><input type='text' id='"+email+"' name='"+email+"'/></td> </br></tr>");
 		e.preventDefault();
						
	});
// add ends here...

//delete's functionality goes here...
	$("#delete").on('click',function(e){
		$("#tbid tr:last").remove();
		e.preventDefault();
	
	});

// Fetch button's functionality

$("#fetch").on("click",function(e){
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

// $("#fetch").on("click",function(e){
		
// 		$.ajax({
//             url: 'selectalldata.php',
//             type: 'POST',
//             data: $('#formid').serialize(),
                        
//             success: function(result){
//                 // alert("submitted");

//                }
//          });         
// 	e.preventDefault();

// });

//fetch button ends here...
// clear starts here...
$('#clear').on("click", function(e){
    $('#tabid tr').remove();
    e.preventDefault();

     var total = $('#tb tr').length;
         $('#counter').html(total);
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

</script>
</head>

<body>
<div id="outermost">
	<button id="add">ADD</button>
	<button id="delete">Delete</button>
	<button id="fetch">Fetch</button>
	<button id="clear">Clear</button>
	<span id="emptyinputfields"></span>
	
<form id="formid" method="post" action="">
	<table id="tabid" >
		<tbody id="tbid" style="background-color:green;">
		


		</tbody>
	</table>
	<input type="submit" name="submit" id="submit">

	
</form>

</div>


</body>
</html>
