{include file="inc/header.tpl"}

<ul >
    {foreach from=$users item='item'}
    <li ><a href="?c={$__controller}&a=detail&id={$item.id}">{$item.name}</a></li>
    {/foreach}
</ul>

<p ><a href="?" >&lt;&lt; Go Back</a></p>

{include file="inc/footer.tpl"}