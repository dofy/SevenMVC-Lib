{include file="inc/header.tpl"}
{include file="inc/amenu.tpl"}

[<a href="?c={$__controller}&a=edit">Add New Book</a>]

<ul id="list" >
    {foreach from=$books item='item'}
    <li class="i_{$item.id}" >
        <strong>{$item.title}</strong> by <em>{$item.author}</em> (Pages: {$item.pages}) 
        [<a href="?c=book&a=edit&id={$item.id}">Edit</a>] | [<a class="del" href="?c=book&a=delete&id={$item.id}">Delete</a>]
    </li>
    {/foreach}
</ul>

<p ><a href="?" >&lt;&lt; Go Back</a></p>

{include file="inc/form.tpl"}
{include file="inc/footer.tpl"}