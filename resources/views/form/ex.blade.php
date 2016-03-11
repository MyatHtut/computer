@extends('app')
@section('content')

<div class="container">

    <h2>Shop Create</h2>
    @include('errors.list')

    <form action="/ex" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control"/>
    </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" name="type" id="type" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="phone">Phonr</label>
            <input type="text" name="phone" id="phone" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" class="form-control"/>
        </div>

        <div class="form-group">
             <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
        </form>

</div>
@endsection