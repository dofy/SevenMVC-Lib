{include file="inc/header.tpl"}

[ {if $item}Edit "{$item.title}"{else}Add a New Book{/if} ]

    <h2>{$item.title}</h2>

    <form method="post" action="?c={$__controller}&a=save" >
        <label for="title">Title:</label> <input id="title" type="text" name="title" value="{$item.title}" /> <br />
        <label for="author">Author:</label> <input id="author" type="text" name="author" value="{$item.author}" /> <br />
        <label for="pages">Pages:</label> <input id="pages" type="text" name="pages" value="{$item.pages}" /> <br />
<script id="editor" name="content" type="text/plain" >
{$item.content}</script>
        <input type="hidden" name="id" value="{$item.id}" />
        <input type="submit" value="Submit" />
        <input type="hidden" name="backurl" value="?c={$__controller}" />
    </form>

<p ><a href="?c={$__controller}" >&lt;&lt; Go Back</a></p>

{include file="inc/ueditor.tpl"}
{include file="inc/form.tpl"}

{include file="inc/footer.tpl"}