{include file="inc/header.tpl"}

<a href="?c=user" >Users</a>
<ul >
    {foreach from=$users item='item'}
    <li >{$item|var_dump}</li>
    {/foreach}
</ul>

<a href="?c=book" >Books</a>
<ul >
    {foreach from=$books item='item'}
    <li >{$item|var_dump}</li>
    {/foreach}
</ul>

{include file="inc/footer.tpl"}