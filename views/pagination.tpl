<div class="row">
  <div class="col">
      {if $pagination_data.error === 1}
        <h4>Pagination failed.</h4>
      {else}
        <a href="{$pagination_data.url}/?offset=previous&current_offset={$pagination_data.current_offset + $pagination_data.limit}" 
          class="btn btn-info active" role="button" aria-pressed="true">
          &#8249;
        </a>
        {for $foo=1 to $pagination_data.page_chunk}
            <a href="{$pagination_data.url}/?offset={($foo * $pagination_data.limit) - $pagination_data.limit}" 
            class="btn btn-default active" role="button" aria-pressed="true">{$foo}</a>
        {/for}
        {if condition}
          
        {/if}
        <a href="{$pagination_data.url}/?offset=next&current_offset={$pagination_data.current_offset + $pagination_data.limit}" 
          class="btn btn-info active" role="button" aria-pressed="true">
          &#8250;
        </a>
      {/if}
  </div>
</div>
