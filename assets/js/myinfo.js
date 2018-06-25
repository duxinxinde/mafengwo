$(function(){
	$("#save").click(function(){
		$.post("myinfoprocess.php",{x:1,myname:$('#myname').val(),sex:$("input[name='sex']:checked").val(),city:$('#city').val(),
			birth:$('#birth').val(),brief:$('#brief').val(),address:$('#address').val()},function(data){
             alert('保存成功');
			})
	})
	$.post('myinfoprocess.php',{x1:2},function(data){
    $.each(data,function(k,v){
      $("#myname").val(v.myname);
      for(var i=0;i<3;i++){
      if(v.sex==$(".sex").eq(i).val()) $(".sex").eq(i).prop('checked','true');
      }
      $("#birth").val(v.birth);
      $("#brief").val(v.brief);
      $("#city").val(v.city);
      $("#address").val(v.address);
    })
	},'json')
})