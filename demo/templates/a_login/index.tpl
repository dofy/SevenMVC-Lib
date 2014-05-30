{include file="inc/header.tpl"}

<form method="post" action="?c={$__controller}&a=login" >
<label for="name">Username:</label><input id="name" type="text" name="name" /><br />
<label for="pass">Password:</label><input id="pass" type="password" name="pass" /><br />
<input type="submit" value="Login" />
<input type="hidden" name="back" value="?" />
</form>

{include file="inc/form.tpl"}
{include file="inc/footer.tpl"}