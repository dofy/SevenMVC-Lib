{include file="inc/header.tpl"}

[ DETAIL ]

    {if $item}
    <h2>{$item.title}</h2>
    by <em>{$item.author}</em> (Pages: {$item.pages})

{$item.content}

    {else}
    The Book is not found.
    {/if}

<p ><a href="?c={$__controller}" >&lt;&lt; Go Back</a></p>

{include file="inc/footer.tpl"}