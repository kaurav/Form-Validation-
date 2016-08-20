<html>
<head>
</head>
<body>
<div class="container">
	<button id="add" class="btn btn-primary btn-lg">ADD</button>
	<button id="submit" class="btn btn-primary btn-lg">SUBMIT</button>
</div>
<div id="f_form">
	<table id="tabid"><thead><th>Label</th><th>Input</th></thead>
		<tbody id="tb">
			<tr>
				<td>Enter the number of fields to add</td>
				<td><input class='form-control' type='text'></td>
			</tr>
		</tbody>
	</table>
</div>

<script src="http://avi:8080/Form-Validation-/js/jquery.min.js"></script>
<script>
$("document").ready(function(){ //------------DOCUMENT------------
	 
			//-------------ADD---------------
			
			$("#add").on("click",function(e){ 
				var store = $("input:text").val(); //here we will store the value of input field e.g. 5
				var total = $('#tb tr').length; // it will count the total number of rows
				var incre = total; 	//here we are using this variable to generate the value of id in run time.
				if(total >= store){ 	// here we chaeck the whether total number of row are greatere than or equal to 
							//value store in store variable then it will execute it otherwise it will skip 
							// this condition every first time and go for loop.
							return false;
					}			
				for(var i = 0;i<store;i++){  //here we will generate input fields untill i's value is less than stroe's value
				incre++;
				$("#tb").append("<tr><td style='display:none;'><label for ='lbl-"+incre+"' >hello</label></td><td> <input class='label' id='lbl-"+incre+"' type='text'></td><td><input id='input-"+incre+"' type='text'></td><td><button class='button' id = 'lbl-"+incre+"'class='btn btn-primary btn-lg'>ADD</button></td></tr>");		
			}
			e.preventDefault();
			});//-------------ADD---------------
//------------------KEYPRESS------------------
			
				
			    $("#tb").on('click','.button', function(e) { // onclick i want that text input should become its label

			    	var val = $("#tb tr").first().find("input[class='label']").val();

			    	var id = $(this).attr('id');
					
					 var key = e.which;
					 if (key == 13){
					 $(".label").replaceWith("val")	
					 return false;
					 }

				
    			console.log(val);
    		

			});
			//------------------KEYPRESS------------------

});//------------DOCUMENT------------
	

</script>


</body>
</html>
