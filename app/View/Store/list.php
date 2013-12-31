<ul class="eku-list" >

if(is_array($records )){
foreach ($records as $r ){ ?>
  <li>
    <div>ekuid eku_id</div>
    <div>ekuid pid</div>
    <div>ekuid pname</div>
    <div>ekuid unit</div>
    <div>ekuid num</div>
    <div>ekuid action</div>
    <div>ekuid action_label</div>
    <div>ekuid alert_level</div>
    <div>ekuid kuwei</div>
    <div>ekuid datetime</div>
    <div>ekuid doer</div>
    <div>ekuid remark</div>
    <div>ekuid category</div>
    <div>ekuid balance</div>
    <div>ekuid cur_balance</div>
    <div>
      <a href="/eku/view/id" >查看</a>
      <a href="/eku/edit/id" >编辑</a> 
    </div>
  </li>
</ul>
