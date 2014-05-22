{include file="inc/header.tpl"}

[ DETAIL ]

    {if $item}
    <h2>{$item.name}</h2>
    <em>{$item.age}</em> years old.
    {else}
    The User is not found.
    {/if}

<p ><a href="?c={$__controller}" >&lt;&lt; Go Back</a></p>

{include file="inc/footer.tpl"}