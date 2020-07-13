<h1>{{ $pageName }}</h1>
<form method="post" action="/admin/news/update/{{ $news->staff_id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $news->staff_id }}">
    <p>
        <label for="title">Title</label><br>
        <input type="text" name="title" value="{{ $news->title }}">
    </p>


    <p>
        <button type="submit">Submit</button>
    </p>
</form>
