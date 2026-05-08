<form method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="title"
           value="{{ $post->title }}">

</form>