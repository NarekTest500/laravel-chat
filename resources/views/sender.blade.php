<form action="sender" method="post">
    <input type="text" name="text">
    <input type="submit" value="Send">
    {{ csrf_field() }}
</form>
