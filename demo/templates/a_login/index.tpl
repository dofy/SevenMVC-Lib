{include file="inc/header.tpl"}

<a href="?c=book" >Books</a>
<ul >
    {foreach from=$books item='item'}
    <li >{$item.title} [<a href="?c=book&a=edit&id={$item.id}">Edit</a>] | [<a href="?c=book&a=delete&id={$item.id}">Delete</a>]</li>
    {/foreach}
</ul>

{include file="inc/footer.tpl"}