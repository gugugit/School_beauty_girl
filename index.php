<!DOCTYPE html>
<html>
    <head>
        <title>????????</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatibl\e" content="IE=edge">
        <meta name="keywords" content="????????">
        <meta name="description" content="????????,???????.">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
      <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
      <style type="text/css">
.col_2  {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  width: 50%;
  float: left;
}
.rank img{width: 30em;}
.rankimg span{
    top: -7em;
    font-size: 3em;
}
@media (max-width: 598px){
.rankimg span {
  top:-3em;
  font-size: 2em;
}
}
@media (max-width: 506px){
.rankimg span {
  top:-4em;
  font-size: 1em;
}
}
.rankimg span{
  position: relative;
  z-index: 5;
  color: rgb(240, 20, 20);
  font-weight: bold;
  left: 1em;
  opacity: 0.6;
  background: rgb(199, 190, 190);
}</style>
    </head>
    <body>
    <div class="wrapper" id="wrapper">
        <nav class="navbar navbar-default navbar-static-top">
              <a class="navbar-brand" href="index.php">??????(??? ????)</a>
        </nav>
        <!-- ^ ?? -->
        		<div class="container rank">
			<div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">
          <span class="">0% Complete</span>
        </div>
      </div>
			<div class="alert alert-info alert-dismissible" role="alert" style="display:none;">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">	&times;</span></button>
			  <strong>!</strong>???????????????????~
			</div>
			<?php require("DBMysql.php");$query=new DBMysql();$i=0;$sql="select * from stu order by rand() limit 2";$result=$query->query($sql);while($row=mysql_fetch_array($result)){ $i++;?>
			<div class="col_2 rankimg<?php echo $i; ?> rankimg">
				<input type="hidden" value="<?php echo $row["id"];?>">
				<a  href="#" id="ranka<?php echo $i; ?>"><img src="http://7sbqdl.com1.z0.glb.clouddn.com/<?php echo $row["beauti"];?>.jpg?imageView2/1/w/300/h/400/q/64/format/JPG  " class="img-responsive img-rounded" alt="Responsive image"></a>
	            <span><?php echo $row["stu"];?></span>
	        </div>
	        <?php }?>
        </div>
        <!-- $ ?? -->
    </div>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $("#ranka1").on("click",function(){
        $("#ranka2").hide();
        rank(1);
    });
    $("#ranka2").on("click",function(){
        rank(0);
        $("#ranka1").hide();
    });
    function rank(i){
        $.ajax({
            url: './rank.php',   //???? 
            data: '&stu1=' + $(".rankimg1 input").val() + "&stu2=" + $(".rankimg2 input").val()+"&id="+i, //??????? 
            type: 'post', //????? 
            error: function () {}, 
            success: function (msg) {
                window.location.reload();
            }
        })
    }
    function getCookie(name)
    {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
     
        if(arr=document.cookie.match(reg))
     
            return (arr[2]);
        else
            return null;
    }
    if(!getCookie("rankwoman"))
    {
        $(".alert-info").show();
        document.cookie="rankwomanper=0";
    }
    document.cookie="rankwoman=rankwoman";
    rankwomanper=parseInt(getCookie("rankwomanper"));
    $(".progress-bar").width(rankwomanper+"0%");
    $(".progress-bar span").text(rankwomanper+"0% Competed");
    rankwomanper=parseInt(getCookie("rankwomanper"))+1;
    document.cookie="rankwomanper="+rankwomanper;
    if(getCookie("rankwomanper")>10){
        window.location.href="./ranklist.php";
    }
    </script>
    </body>
</html>
