{if $pagination_data.error === 0 AND $pagination_data.total_rows > $pagination_data.limit}
<div class="row">
  <div class="col">
      {if $pagination_data.error === 1}
        <h4>Pagination failed.</h4>
      {else}
        {* Previous button *}
        <a href="{$pagination_data.url}/?offset=previous&current_offset={$pagination_data.current_offset}" 
          class="btn btn-info {if $pagination_data.current_offset eq 0}disabled{/if}" role="button">
          &#8249;
        </a>
        
        {* Pages as numbers *}
        {for $page=1 to $pagination_data.pages}
            <a href="{$pagination_data.url}/?offset={($page * $pagination_data.limit) - $pagination_data.limit}" 
            class="btn btn-default" role="button">{$page}</a>
        {/for}

        {* Next button *}
        <a href="{$pagination_data.url}/?offset=next&current_offset={$pagination_data.current_offset}" 
          class="btn btn-info {if $pagination_data.current_offset eq ($pagination_data.total_rows - $pagination_data.limit)}disabled{/if}" role="button">
          &#8250;
        </a>
      {/if}
  </div>
</div>
{/if}