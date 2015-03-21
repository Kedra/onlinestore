$(document).ready(function(){
	function search(){
		var title=$("#txt").val();
		if(title!=""){
            $.ajax({
			type:"post",
			url:"include/search_product.php",
			data:"title="+title,
			success:function(data){
				$("#add_prod").html(data);
				$("#buton").val("");
			 }
			});
        } else{
			alert("Fill in the text field first.");
		}
 
	}

	$("#buton").click(function(){
	 search();
	});

	$('#txt').keyup(function(e) {
	 if(e.keyCode == 13) {
		search();
	  }
	});
});