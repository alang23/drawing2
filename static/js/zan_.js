var biao = '';
var result = '';
var err = 0;
function zan(id){ 
	var jsonData = null;
	jQuery.ajax({
		 type:'post',
		 url: hostname + 'index.php?c=dianzan&m=zan',
		 data:{'id':id},
		 dataType:'json',
		 cache:false,
		 async:false,
		 success:function(data){
		     //jsonData = data; 
		    // alert(data);
		     //alert(data.msg);     
		     //showdianzan();      
		     if(data.err == 0){
		     	showdianzan();
		     }else if(data.err == -2){
		     	zanfalse();
		     }
		 },
		 error:function(){
			 alert("error!!!");
		 }
	 });
	return jsonData;
}

function choujiang()
{
	var jsonData = null;
	jQuery.ajax({
		 type:'post',
		 url: hostname + 'index.php?c=hjmd&m=choujiang',
		 dataType:'json',
		 cache:false,
		 async:false,
		 success:function(data){
			
			//alert(data.err);
			 if(data.err < 0){
					alert(data.msg);
					biao = 0;
					return false;
			 }else if(data.err == 0){
				biao = 1440+data.biao;;
				result = data.msg;
				err = data.err;
				
			 }else if(data.err == 1){
				 biao = 1440+data.biao;;
				result = data.msg;
				err = data.err;
			 }else{
				alert(data.err);
			 }
			 
			// alert(data.err);
         
		 },
		 error:function(){
			 alert("error!!!");
		 }
	 });
	return jsonData;
}

function showdianzan()
{
	
    $("#myclick").trigger("click");
}

function zanfalse()
{
	$("#shibai").trigger("click");
}

function cj_zj()
{
	 $("#zhongjiang").trigger("click");
}

function cj_miss()
{
	$("#cjmiss").trigger("click");
}