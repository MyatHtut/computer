@extends('app')
@section('content')

<div class="container">

    <h2>Acc Create</h2>
    @include('errors.list')

    <form action="/acc" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="name" id="name" class="form-control"/>
    </div>

        <div class="form-group">
            <label for="type">type</label>
            <input type="text" name="type" id="type" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="for">image</label>
            <input type="text" name="for" id="for" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="color">color</label>
            <input type="text" name="color" id="color" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="shop">shop</label>
            <input type="text" name="shop" id="shop" class="form-control"/>
        </div>


        <div class="form-group">
             <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
        </form>

</div>
@endsection