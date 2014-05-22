{include file="inc/header.tpl"}

[ DETAIL ]

    {if $item}
    <h2>{$item.title}</h2>
    <em>by {$item.author}</em> (Pages: {$item.pages})
    {else}
    The Book is not found.
    {/if}

<p ><a href="?c={$__controller}" >&lt;&lt; Go Back</a></p>

{include file="inc/footer.tpl"}