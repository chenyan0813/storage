<Table ss:ExpandedColumnCount="5" ss:ExpandedRowCount="11" x:FullColumns="1"
   x:FullRows="1" ss:DefaultColumnWidth="54" ss:DefaultRowHeight="13.5">
   <Row>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品名</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品号</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">单位</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">分类</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">库位</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">库存</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">警戒库存</Data></Cell>
   </Row>

  <Row>
  <?php 
  foreach ($goods as $good){

  ?>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $good["Good"]["id"];?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $good["Good"]["name"];?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $good["Good"]["unit"];?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $good["Good"]["class"];?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $good["Good"]["location"];?></Data></Cell>
  <Cell ss:StyleID="s62"><Data ss:Type="Number"><?php //echo $good["Good"]["banlance"];?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Number"><?php echo $good["Good"]["alert"];?></Data></Cell>
    <?php
    }
    ?>
   </Row>
</Table>
