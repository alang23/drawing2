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
		     alert(data.msg);           
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

		     alert(data.msg);  

		     return false;         
		 },
		 error:function(){
			 alert("error!!!");
		 }
	 });
	return jsonData;
}