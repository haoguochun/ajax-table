/*
 *  url  	  请求地址			str[请求地址]
 * 	type	  发送数据的方式		str["get","post"]
 * 	data	  发送的数据			str[] json[];
 * 	dataType 返回的数据类型   		str[text,xml,document,json]
 * 	asynch	  同步还是异步发送	boolean[true,false];
 * 	success	  请求成功执行的函数	fn(e);
 * 	error 	  发生错误执行的函数	fn(e);
 * 	
 * */
function ajax(obj){
	if(typeof obj!=="object"){
		console.error("请输入正确的参数格式（对象）")
		return;
	}
	var url=obj.url;
	if(url===undefined){
		console.error("请输入请求地址")
		return;
	}
	var type=obj.type||"get";
	var dataType=obj.dataType||"text";
	var asynch=obj.asynch===undefined?true:obj.asynch;
	var data=obj.data||"";
	if(typeof data==="object"){
		var str="";
		for(var i in obj.data){
				str+=i+"="+obj.data[i]+"&";
			}
		data=str.slice(0,-1);
	}
	var ajax=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP");
	if(type=="get"){
		ajax.open("get",url+"?"+data);
		ajax.responseType=dataType;
		ajax.send();
	}
	else if(type=="post"){
		ajax.open("post",url)
		ajax.responseType=dataType;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send(data);
	}
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				if(dataType=="xml"){
					var result=ajax.responseXML;
				}
				else{
					var result=ajax.response;
				}
				if(obj.success){
					obj.success(result);
				}
			}else if(ajax.status==404){
				if(obj.error){
					obj.error("页面未找到");
				}
			}else{
				if(obj.error){
					obj.error("错误");
				}
			}
		}
	}
}
