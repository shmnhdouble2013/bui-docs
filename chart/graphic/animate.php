<?php $title="图形动画"?>
<?php include("../../templates/chart-header.php"); ?>

    <div class="detail-section">  
      <h2>基本图形</h2>
      <p>点击圆进行动画</p>
      <p><button class="button button-primary" id="J_Btn">更改path</button></p>
      <div id="canvas">
        
      </div>
      
      <p>平移参考： <a href="http://raphaeljs.com/reference.html#Element.transform">Raphael平移</a></p>
    </div>
    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script> 
    <?php include("../../templates/chart-script.php"); ?>

  <script type="text/javascript">
   
      //创建画板
      var canvas = new AChart.Canvas({
        id : 'canvas',
        height : 300,
        width : 800
      });

    //圆
    var circle =   canvas.addShape('circle',{
        cx : 125,
        cy : 100,
        r : 20,
        fill : '#2f7ed8',
        stroke : ''
      });

    circle.on('click',function  () {
      circle.animate({
        fill : 'yellow',
        transform : 't100 100s2 2r45'//平移
      },1000,function () {
        circle.animate({
          fill : '#2f7ed8',
          transform : ''
        },1000);
      });
    });

      //path
    var path =  canvas.addShape('path',{
        path : 'M 25 208.31428571428572 L 35 208.31428571428572 L 105 209.22 L 175 185.67142857142858 L 245 140.3857142857143 L 315 106.87428571428572 L 385 76.9857142857143 L 455 43.47428571428571 L 525 31.69999999999999 L 595 60.68285714285713 L 665 105.96857142857144 L 735 145.82000000000002 L 805 184.7657142857143 L 815 184.7657142857143',
        stroke : '#c0c0c0'
      });
    $('#J_Btn').on('click',function () {
        path.animate({path : 'M 25 279.86571428571426 L 35 279.86571428571426 L 105 266.28 L 175 240.01428571428573 L 245 195.6342857142857 L 315 149.44285714285715 L 385 117.74285714285713 L 455 103.25142857142856 L 525 109.5914285714286 L 595 142.19714285714286 L 665 190.2 L 735 236.39142857142858 L 805 262.65714285714284 L 815 262.65714285714284'},2000);

    })
      
      </script>
<?php include("../../templates/control-footer.php"); ?>