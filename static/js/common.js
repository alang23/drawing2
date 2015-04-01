function copy_clip(txt) {
	
var clipBoardContent="";
clipBoardContent+=txt;
clipBoardContent+="";
//clipBoardContent+=this.location.href;
window.clipboardData.setData("Text",clipBoardContent);
alert("复制成功，请粘贴到你的QQ/MSN上推荐给你的好友");
	
	
}