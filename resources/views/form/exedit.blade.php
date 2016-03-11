@extends('app')
@section('content')

    <div class="container">
        <form action="{{route("ex.update",$ex->id)}}" method="POST" accept-charset="UTF-18">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="title">name</label>
                <input type="text" name="name" id="name" class="form-control"  value="{{$ex->name}}"/>
            </div>
            <div class="form-group">
                <label for="title">venue</label>
                <input type="text" name="venue" id="venue" class="form-control" value="{{$ex->venue}}"/>
            </div>

            <div class="form-group">
                <label for="title">company</label>
                <input type="text" name="company" id=company class="form-control" value="{{$ex->company}}"/>
            </div>
            <div class="form-group">
                <label for="title">time</label>
                <input type="text" name="time" id="time" class="form-control" value="{{$ex->time}}"/>
            </div>
            <div class="form-group">
                <label for="title">From</label>
                <input type="date" name="_from" id="_from" class="form-control" value="{{$ex->_from}}"/>
            </div>

            <div class="form-group">
                <label for="title">To</label>
                <input type="date" name="_to" id="_to" class="form-control" value="{{$ex->_to}}"/>
            </div>
            <div class="form-group">
                <label for="title">image_url</label>
                <input type="text" name="image_url" id="image_url" class="form-control" value="{{$ex->image_url}}"/>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control input-sm" name="type" id="type">
                    <option>{{$ex->type}}</option>
                    <option>B</option>
                    <option>C</option>



                </select><!-- end of Item_Drop_Down -->
            </div>
            <div class="form-group">
                <label for="title">tel</label>
                <input type="text" name="tel" id="tel" class="form-control" value="{{$ex->tel}}"/>
            </div>

            <div class="form-group">
                <label for="title">deception</label>
                <textarea name="deception" id="deception" cols="30" rows="10" class="form-control">{{$ex->deception}}</textarea>
            </div>




            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
@endsection