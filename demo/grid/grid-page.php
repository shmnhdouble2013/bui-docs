<?php $title="分页从1开始"?>
<?php include("../../templates/control-header.php"); ?>
    <div class="row">
      <div class="span16">
        <div id="grid">
          
        </div>
      </div>
    </div>
    <?php include("../../templates/script.php"); ?>
    <script type="text/javascript">
    <?php if($useKissy) {?>
  KISSY.use(['bui/grid','bui/data'],function(S,Grid,Data){
    <?php }else if($useLoader) {?>
    BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    <?php }else{?>
        var Grid = BUI.Grid,
            Data = BUI.Data;
    <?php }?>
        var Grid = Grid,
          Store = Data.Store,
          columns = [
            {title : '表头1',dataIndex :'a', width:100},
            {id: '123',title : '表头2',dataIndex :'b', width:100},
            {title : '表头3',dataIndex : 'c',width:200}
          ];

        var store = new Store({
            url : 'data/grid-data.php',
            autoLoad:true,
            proxy : { //设置起始页码
              pageStart : 1
            },
            pageSize:3  // 配置分页数目
          }),
          grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            loadMask: true,
            store: store,
            // 底部工具栏
            bbar:{
                // pagingBar:表明包含分页栏
                pagingBar:true
            }
          });

        grid.render();
    <?php if($useLoader) {?>
  });
    <?php } ?>
</script>
<?php include("../../templates/control-footer.php"); ?>

