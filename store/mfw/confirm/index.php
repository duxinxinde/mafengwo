<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.input-group{
			padding: 20px;
		}
		
	</style>
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
		<h1 style="font-weight: 200;" class="text-info">定制旅行</h1>
	</div>
	<hr>
<div class="container">
	<h3 style="font-weight: 200;"><small>1⃣️</small>出游基本信息</h3>
  <div class="input-group input-group-lg"><span class="input-group-addon">出发ID</span>
    <input id="start" disabled type="text" class="form-control" placeholder="">
  </div>
  <div class="input-group input-group-lg"><span class="input-group-addon">目的ID</span>
    <input id="end" disabled type="text" class="form-control" placeholder="">
    </div>
  <div class="input-group input-group-lg"><span class="input-group-addon">出行日</span>
    <input id="time" type="date" class="form-control" placeholder="">
    </div>
</div>
	<div class="container">
	<h3 style="font-weight: 200;"><small>2⃣️</small>出行人数及预算</h3>
  <div class="input-group input-group-lg"><span class="input-group-addon">成人</span>
    <input id="adult" type="text" value="1" class="form-control" placeholder="">
  </div>
  <div class="input-group input-group-lg"><span class="input-group-addon">儿童</span>
    <input id="child" value="2" type="text" class="form-control" placeholder="">
    </div>
  <div class="input-group input-group-lg"><span class="input-group-addon">预算</span>
    <input id="daydream" type="text" class="form-control" placeholder="选填">
    </div>
</div>
	<div class="container">
	<h3 style="font-weight: 200;"><small>3⃣️</small>联系人信息</h3>
  <div class="input-group input-group-lg"><span class="input-group-addon">姓名</span>
    <input id="name" type="text" class="form-control" placeholder="">
  </div>
  <div class="input-group input-group-lg"><span class="input-group-addon">电话</span>
    <input id="tel" type="text" class="form-control" placeholder="">
    </div>
</div>
	<div style="margin-bottom: 50px" class="container-fluid text-right">
        <a id="gugu" target="_parent"><button type="button" id="sub" class="btn btn-success btn-lg">确认信息</button></a>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script>
    status = 0
    paystate = 0
    $.ajax({
        url: "http://localhost:8080/mafengwo/store/mfw/framework/go/index.php?controller=currentProduct&method=query",
        method: "GET",
        dataType: "json",
        data: {"pid":<?php echo $_GET["pid"]?>},
        success: function (data) {
            $("#start").val(data['startid'])
            $("#end").val(data['endid'])
            var mydate = new Date()
            document.getElementById('time').valueAsDate = new Date()
        }
    })

    var inputs = document.getElementsByTagName("input")
    $("#sub").click(function () {
        $.each(inputs,function (index,item) {
            if (index != 5){
                if (item.value == ""){
                    status = 0
                    return false
                }
                else {
                    status = 1
                }
            }
        })
        if (status == 1){

            if (paystate == 1){

            }
            else {
                var uid = "<?php echo $_SESSION['status'];?>";//这里等等换成$session
                var pid = <?php echo $_GET["pid"]?>;
                var date = $("#time").val()
                var daydream = $("#daydream").val()
                var adult = $("#adult").val()
                var child = $("#child").val()
                var name = $("#name").val()
                var tel = $("#tel").val()
                $.ajax({
                    async: true,
                    url: "http://localhost:8080/mafengwo/store/mfw/framework/go/index.php?controller=cart&method=insert",
                    method: "GET",
                    dataType: "json",
                    data: {
                        "uid": uid,
                        "pid": pid,
                        "date": date,
                        "daydream": daydream,
                        "adult": adult,
                        "child": child,
                        "name": name,
                        "tel": tel
                    },
                    success: function (data) {
                        $("#gugu").attr("href", "../payment.php")
                        alert("确认成功")
                        paystate = 1
                        $("#sub").html("去付款")
                    }
                })
            }
        }
        else {
            alert("请输入完整信息")
        }
    })


</script>
</body>
</html>
