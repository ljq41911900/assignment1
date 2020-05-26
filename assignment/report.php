<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>report</title>
    <?php
     require "functions.php";
     $con = getConnection();
     
     $sql="SELECT `amount` as total,`orderDate`as day FROM `orders`WHERE TIMESTAMPDIFF(DAY,`orderDate`,DATE(NOW()))<7 group by `orderDate`";

     $sql1="SELECT `amount` as total1,`orderDate`as m FROM `orders`WHERE TIMESTAMPDIFF(DAY,`orderDate`,DATE(NOW()))<30 group by `orderDate`";

     $sql2="SELECT `cover_theme` as th FROM `diary`";
     $sql4="SELECT `paper_type` as pa FROM `diary`";
     $sql3="SELECT `cover_color` as co FROM `diary`";

     $result=mysqli_query($con,$sql);
     
     $day[] = array();
     $count[] =array();
 
     while($row = mysqli_fetch_array($result))
     {
     $day[]=$row['day'];
     $data1[]=$row['total'];
     }
     $day = json_encode($day);
     $data1 = json_encode($data1);
      //把获取的数据对象转换成json格式

     $result=mysqli_query($con,$sql1);
     $day1[] = array();
     $count1[] =array();
 
     while($row = mysqli_fetch_array($result))
     {
     $day1[]=$row['m'];
     $data11[]=$row['total1'];
     }
     $day1 = json_encode($day1);
     $data11 = json_encode($data11);

     $result=mysqli_query($con,$sql2);
     $count3 =array();
 
     while($row = mysqli_fetch_array($result))
     {
     $count3[]=$row['th'];
     
     }
     $c=array_count_values($count3);

     $d=array();
     $e=array();
    foreach($c as $x=>$x_value){
       array_push($d,$x);
       array_push($e,$x_value);
   };
     $m=array(array());

    for($x=0;$x<count($d);$x++){
        $m[$x]['name']=$d[$x];
        $m[$x]['value']=$e[$x];
    };
     
     $data13 = json_encode($m);

     $result=mysqli_query($con,$sql3);
     $count4 =array();
 
     while($row = mysqli_fetch_array($result))
     {
     $count4[]=$row['co'];
     
     }
     $c=array_count_values($count4);

     $d=array();
     $e=array();
    foreach($c as $x=>$x_value){
       array_push($d,$x);
       array_push($e,$x_value);
   };
     $m=array(array());

    for($x=0;$x<count($d);$x++){
        $m[$x]['name']=$d[$x];
        $m[$x]['value']=$e[$x];
    };
     
     $dat13 = json_encode($m);

     $result=mysqli_query($con,$sql4);
     $count5 =array();
 
     while($row = mysqli_fetch_array($result))
     {
     $count5[]=$row['pa'];
     
     }
     $c=array_count_values($count5);

     $d=array();
     $e=array();
    foreach($c as $x=>$x_value){
       array_push($d,$x);
       array_push($e,$x_value);
   };
     $m=array(array());

    for($x=0;$x<count($d);$x++){
        $m[$x]['name']=$d[$x];
        $m[$x]['value']=$e[$x];
    };
    
     
     $dat2 = json_encode($m);



     ?>

     
 

    <!-- 引入 echarts.js -->
    <script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="mainf" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('mainf'));
 
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'latest week'
            },
            tooltip: {},
            legend: {
                data:['sales']
            },
            xAxis: {
                data:  <?php echo $day; ?>
            },
            yAxis: {},
            series: [{
                name: 'sales',
                type: 'line',
                data: <?php echo $data1; ?>
            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);

    </script>
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));
 
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'latest month'
            },
            tooltip: {},
            legend: {
                data:['sales']
            },
            xAxis: {
                data: <?php echo $day1; ?>
            },
            yAxis: {},
            series: [{
                name: 'sales',
                type: 'line',
                data: <?php echo $data11; ?>
            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    <div id="ma" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('ma'));
    
 
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'cover_theme'
            },
            tooltip: {},
            legend: {
                data:['sales']
            },
    
            series: [{
                name: 'sales',
                type: 'pie',
                data: <?php echo $data13; ?>
            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    <div id="co" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('co'));
    
 
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'cover_color'
            },
            tooltip: {},
            legend: {
                data:['sales']
            },
    
            series: [{
                name: 'sales',
                type: 'pie',
                data: <?php echo $dat13; ?>
            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    <div id="tp" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('tp'));
    
 
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'paper_type'
            },
            tooltip: {},
            legend: {
                data:['sales']
            },
    
            series: [{
                name: 'sales',
                type: 'pie',
                data: <?php echo $dat2; ?>
            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>

</body>
</html>