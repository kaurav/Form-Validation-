<html>
<head>
</head>
<body>
<div class="container">
	<button id="add" class="btn btn-primary btn-lg">ADD</button>
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
				$("#tb").append("<tr><td><input class='label' id='lbl-"+incre+"' type='text'></td><td><input id='input-"+incre+"' type='text'></td></tr>");		
			}
			e.preventDefault();
			});//-------------ADD---------------

			$("#tb").on('keypress','.label', function(e){ 

				var id = $(this).attr('id');
				$(".label").replaceWith("<label for= id >hello</label>")
    			console.log(id);
    			
					


				
			


				


			});

});//------------DOCUMENT------------
	

</script>


</body>
</html>