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
				var store = $("input:text").val(); //var store = 0;
				var total = $('#tb tr').length; 
				var incre = total; 
				if(total >= store){ 
							return false;
					}			
				for(var i = 0;i<store;i++){  
				incre++;
				$("#tb").append("<tr><td style='display:none;'><label for ='lbl-"+incre+"' >hello</label></td><td> <input class='label' id='lbl-"+incre+"' type='text'></td><td><input id='input-"+incre+"' type='text'></td><td><button class='button' id = 'lbl-"+incre+"'class='btn btn-primary btn-lg'>ADD</button></td></tr>");		
			}
			e.preventDefault();
			});//-------------ADD---------------
//------------------KEYPRESS------------------
			
				
			    $("#tb").on('click','.button', function(e) {

			    	var val = $("#tb tr").first().find("input[class='label']").val();

			    	var id = $(this).attr('id');
					
					// var key = e.which;
					// if (key == 13){
					// $(".label").replaceWith("val")	
					// return false;
					// }

				
    			console.log(val);
    		

			});
			//------------------KEYPRESS------------------

});//------------DOCUMENT------------
	

</script>


</body>
</html>
