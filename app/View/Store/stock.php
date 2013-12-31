
<div class="panel_block" >
<div class="padding"><a href="/store/export/" class="btn btn-primary" >导出</a></div>

<table class="table table-striped" id="jtable" >
<thead>
  <tr> 
    <th>品号 / 品名 / 型号</th> 
    <th>分类</th>
    <th>库位</th>
    <th>库存</th>
    <th>警戒库存</th>
    <th width="80" >
      操作
    </th>
  </tr>
</thead>

<tbody>
  <tr class="odd red">
    <td>pid / pname / size</td>
    <td>category</td>
    <td>kuwei</td>
    <td>balance (警戒!) unit </td>
    <td>alert_level</td>
    <td>
      <a href="/store/history_view/1" >明细</a>
      <a href="/store/edit/1"  >编辑</a>
    </td>
  </tr>
  <tr class="odd">
    <td>pid / pname / size</td>
    <td>category</td>
    <td>kuwei</td>
    <td>balance unit</td>
    <td>alert_level</td>
    <td>
      <a href="/store/history_view/1" >明细</a>
      <a href="/store/edit/1"  >编辑</a>
    </td>
  </tr>
</tbody>
</table>
</div>

<script type="text/javascript" src="/static/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#jtable').dataTable({"bPaginate": false,
         "oLanguage": {
            "sLengthMenu": "显示 _MENU_ 条每页",
            "sZeroRecords": "什么都没有找到 - 很抱歉",
            "sInfo": "总共 _TOTAL_ , 显示 _START_ 至 _END_ 条",
            "sSearch": "搜索",
            "sInfoEmpty": "没有数据！",
            "sInfoFiltered": "(过滤自 _MAX_ 条数据)"
        }
        });
} );
</script>