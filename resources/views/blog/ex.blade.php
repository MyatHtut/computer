@extends('app')
@section('content')

<div class="container">

    <h2>Blog Create</h2>
    @include('errors.list')

    <form action="/blog" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control"/>
    </div>
        <div class="form-group">
            <label for="dec">deception</label>
            <textarea name="dec" id="dec" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="hint">Hint</label>
            <input type="text" name="hint" id="hint" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="text" name="image" id="image" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="author">author</label>
            <input type="text" name="author" id="author" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="publish_date">Date</label>
            <input type="date" name="publish_date" id="publish_date" class="form-control"/>
        </div>


        <div class="form-group">
             <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
        </form>

</div>
@endsection