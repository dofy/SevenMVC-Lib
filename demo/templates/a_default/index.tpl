{include file="inc/header.tpl"}
{include file="inc/amenu.tpl"}
<p >
Hello <strong>{$name}</strong> <em>(last logined ip: {$ip})</em>
</p>
<a href="?c=book" >Books</a>
<ul id="list" >
    {foreach from=$books item='item'}
    <li class="i_{$item.id}" >
        <strong>{$item.title}</strong> by <em>{$item.author}</em> (Pages: {$item.pages}) 
        [<a href="?c=book&a=edit&id={$item.id}">Edit</a>] | [<a class="del" href="?c=book&a=delete&id={$item.id}">Delete</a>]
    </li>
    {/foreach}
</ul>

{include file="inc/form.tpl"}
{include file="inc/footer.tpl"}