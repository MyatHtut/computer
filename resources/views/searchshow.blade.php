@extends('app')
@section('content')
    <br/> <br/> <br/><br/>
    <p>
        {{ $names->count() }} {{ str_plural('person', $names->count()) }} matched your query
    </p>
    <br/><br/>


<div class="container">
    @foreach($names as $name)
        <!--- Loop through posts and display... -->
        {{$name->_from}}
        <br>
        {{$name->name}}

    @endforeach

</div>

@endsection