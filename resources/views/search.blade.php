@extends('app')
@section('content')

    <div class="container">

        <form action="/search" method="GET">
            {{--<input type="text" name="search" id="search" value=""/>--}}

            <div class="form-group">
                <label for="title">Date Search</label>
                <input type="date" name="_from" id="_from" class="form-control"/>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </form>



    </div>
@endsection