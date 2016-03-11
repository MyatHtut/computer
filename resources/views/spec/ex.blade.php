@extends('app')
@section('content')

<div class="container">

    <h2>Spec Create</h2>
    @include('errors.list')

    <form action="/spec" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control"/>
    </div>
        <div class="form-group">
            <label for="os">Image</label>
            <input type="text" name="os" id="os" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="os">Color</label>
            <input type="text" name="color" id="color" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="cpu">CPU</label>
            <input type="text" name="cpu" id="cpu" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="gcard">GraphicCard</label>
            <input type="text" name="gcard" id="gcard" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="ram">RAM</label>
            <input type="text" name="ram" id="ram" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="storage">storage</label>
            <input type="text" name="storage" id="storage" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="other">Other</label>
            <input type="text" name="other" id="other" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="shop">Shop</label>
            <input type="text" name="shop" id="shop" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control"/>
        </div>        

        <div class="form-group">
             <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
        </form>

</div>
@endsection