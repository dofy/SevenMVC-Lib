{include file="inc/header.tpl"}

<ul >
    {foreach from=$books item='item'}
    <li ><a href="?c={$__controller}&a=detail&id={$item.id}">{$item.title}</a> <em>by {$item.author}</em> (Pages: {$item.pages})</li>
    {/foreach}
</ul>

<p ><a href="?" >&lt;&lt; Go Back</a></p>

{include file="inc/footer.tpl"}