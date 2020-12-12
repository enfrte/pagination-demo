{include file='header.tpl'}
<div class="container">
  <h1>Pagination Demo</h1>
  <div class="row">
  <div class="col">
    <ol>
      {foreach $demo.titles as $val}
        <li>{$val}</li>
      {/foreach}
    </ol>
  </div>
</div>
  {include file='pagination.tpl'}
</div>
{include file='footer.tpl'}
