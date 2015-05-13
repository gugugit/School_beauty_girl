<!DOCTYPE html>
<html>
    <head>
        <title>Campus campus Belle ranking selection</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatibl\e" content="IE=edge">
        <meta name="keywords" content="Campus campus Belle ranking selection">
        <meta name="description" content="Campus campus Belle ranking selection,by shiyanlou">
    <link href="bootstrap.css" rel="stylesheet">
      <script src="jquery.js"></script>
    </head>
    <body>
    <div class="wrapper" id="wrapper">
        <nav class="navbar navbar-default navbar-static-top">
              <a class="navbar-brand" href="index.php">Campus Belle Rank (shiyanlou.com)</a>
        </nav>
        <!-- ^ ?? -->
        		<div class="container ranklist">
			<table class="table">
		      <caption>Campus Belle Rank Table.</caption>
		      <thead>
		        <tr>
		          <th>Section</th>
		          <th>Name</th>
		          <th>RankScore</th>
		        </tr>
		      </thead>
		      <tbody>
		      <?php require("DBMysql.php");$query=new DBMysql();$i=0;$sql="select * from stu order by `score` desc;";$result=$query->query($sql);while($row=mysql_fetch_array($result)){ $i++;?>
		        <tr>
		          <th scope="row"><?php echo $i;?></th>
		          <td><a href="/index.php?class=Anke&fun=force&stu=<?php echo $row["stu"];?>"><?php echo $row["stu"];?></a></td>
		          <td><?php echo $row["score"];?></td>
		        </tr>
		        <?php }?>
		      </tbody>
		    </table>
        <button class="btn btn-success" id="rechoose">Choose Again</button>
        </div>
        <!-- $ ?? -->
    </div>
    <script src="bootstrap.js"></script>
    <script type="text/javascript">
    $("#rechoose").on("click",function(){
       document.cookie="rankwomanper=0";
       window.location.href="./";
    });
    </script>
    </body>
</html>
