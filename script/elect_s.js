//alert("Hello");

$(function(){
$(".com_in").click(function(){
	tp_g = $(this).attr("id");
	//alert(tp_g);
	if(tp_g=="res_prov"){
	valk = $("#res_prov option:selected").text();
	sen_z = "province="+valk;
	res_s = "#res_dis";
	//alert(valk);
	}else if(tp_g=="res_dis"){
	disk = $("#res_dis option:selected").text();
	sen_z = "district="+disk;
	//alert(disk);
	res_s = "#vil_res_mun";
	}
	//
	if (valk != "" || disk != ""){
		
		//alert("Hier");
	$.ajax({
		url : "includes/district_inc.php" , 
		type : "POST" ,
		data : sen_z,
		success : function(res_p){
	    //alert("succ");
		
		$(res_s).html(res_p);
		
			
		}
	})
	}
		});
		
		
	
	
});



