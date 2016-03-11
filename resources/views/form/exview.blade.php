@extends('app')
@section('content')


    <table id="example" class="display hover table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Image</th>
            <th>type</th>
            <th>tel</th>
            <th>deception</th>


        </tr>
        </thead>
        <tbody>
        @foreach($exs as $ex)
            <tr>

                <td>{{ $ex->id }}</td>
                <td><a href="{{url('ex',$ex->id)}}">{{ $ex->name }}</a></td>
                <td>{{ $ex->type }}</td>
                <td>{{ $ex->address }}</td>
                <td>{{ $ex->phone }}</td>
                <td><img src="{{ $ex->image}}" alt="" class="img-responsive" style="width:150px"/></td>


                <td>
                    <a class="btn btn-info" href="{{route("ex.edit",$ex->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route("ex.destroy",$ex->id)}}" method="POST" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </td>




            </tr>
        @endforeach
        </tbody>
    </table>
@endsection