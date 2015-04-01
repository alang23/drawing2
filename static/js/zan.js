var biao = '';
var result = '';
var err = 0;
function zan(id){ 
	/*
	var jsonData = null;
	jQuery.ajax({
		 type:'post',
		 url: hostname + 'index.php?c=dianzan&m=zan',
		 data:{'id':id},
		 dataType:'json',
		 cache:false,
		 async:false,
		 success:function(data){

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
	*/
	 $("#fid").val(id);
	 $("#yzm").trigger("click");
}

function checkcode()
{
	
	var code = $("#acode").val();
	var id = $("#fid").val();
	//alert(code);
		var jsonData = null;
		jQuery.ajax({
		 type:'post',
		 url: hostname + 'index.php?c=dianzan&m=checkcode',
		 data:{'acode':code},
		 dataType:'json',
		 cache:false,
		 async:false,
		 success:function(data){

		     if(data.err == 0){
		     	//showdianzan();
				$(".close-reveal-modal").trigger("click");
				alert(code);
				zhan(id.code);
		     }else if(data.err == -2){
		     	//zanfalse();
				//alert(data.msg);
				alert(data.msg);
				getCode();
				$("#acode").val('');
		     }
		 },
		 error:function(){
			 alert("error!!!");
		 }
	 });
	return jsonData;
}


function zhan()
{
	var acode = $("#acode").val();
	var id = $("#fid").val();
	
		var jsonData = null;
	  jQuery.ajax({
		 type:'post',
		 url: hostname + 'index.php?c=dianzan&m=zan',
		 data:{'id':id,acode:acode},
		 dataType:'json',
		 cache:false,
		 async:false,
		 success:function(data){

		    // alert(data.err); 
		     if(data.err == 0){
				 $(".close-reveal-modal").trigger("click");
		     	showdianzan();
				$("#acode").val('');
				getCode();
		     }else if(data.err == -2){
				 $(".close-reveal-modal").trigger("click");
		     	zanfalse();
				$("#acode").val('');
				getCode();
		     }else if(data.err == -4){
				alert(data.msg);
				getCode();
				$("#acode").val('');
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
			 	if(data.err == -1){ //没有登录
					//alert(data.msg);
					//cj_zj();
					$("#logindiv").trigger("click");
					biao = 0;
					return false;
			 	}else if(data.err == -2){
					biao = 0;
					alert('没有抽奖机会了');
					return false;
			 	}

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
			 //alert("error!!!");
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


        function DrawImage(ImgD, FitWidth, FitHeight) {
                var image = new Image();
                image.src = ImgD.src;
                if (image.width > 0 && image.height > 0) {
                    if (image.width / image.height >= FitWidth / FitHeight) {
                        if (image.width > FitWidth) {
                            ImgD.width = FitWidth;
                            ImgD.height = (image.height * FitWidth) / image.width;
                        } else {
                            ImgD.width = image.width;
                            ImgD.height = image.height;
                        }
                    } else {
                        if (image.height > FitHeight) {
                            ImgD.height = FitHeight;
                            ImgD.width = (image.width * FitHeight) / image.height;
                        } else {
                            ImgD.width = image.width;
                            ImgD.height = image.height;
                        }
                    }
                }
            }


	function getCode()
	{
		var img_src = hostname+'index.php?c=dianzan&m=get_code&rank='+Math.random();
		//alert(img_src);
		$("#authcode").attr('src',img_src);
	}