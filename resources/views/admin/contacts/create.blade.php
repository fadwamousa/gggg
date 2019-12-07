<form action="{{route('contacts.post')}}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="text" name="phone">
    <input type="text" name="message">

    <input type="submit" value="send">
</form>