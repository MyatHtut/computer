@extends('app')
@section('content')


    <table id="example" class="display hover table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>OS</th>
            <th>color</th>
            <th>CPU</th>
            <th>Graphic Card</th>
            <th>RAM</th>
            <th>Brand</th>
            <th>Storage</th>
            <th>Other</th>
            <th>shop</th>
            <th>Image</th>


        </tr>
        </thead>
        <tbody>
        @foreach($specs as $spec)
            <tr>

                <td>{{ $spec->id }}</td>
                <td><a href="{{url('ex',$spec->id)}}">{{ $spec->name }}</a></td>
                <td>{{ $spec->os}}</td>
                <td>{{ $spec->color }}</td>
                <td>{{ $spec->cpu }}</td>
                <td>{{ $spec->gcard }}</td>
                <td>{{ $spec->ram }}</td>
                <td>{{ $spec->brand }}</td>
                <td>{{ $spec->storage }}</td>
                <td>{{ $spec->other }}</td>
                <td>{{ $spec->shop }}</td>

                <td><img src="{{ $spec->image_url}}" alt="" class="img-responsive" style="width:150px"/></td>


                {{--<td>--}}
                    {{--<a class="btn btn-info" href="{{route("ex.edit",$ex->id)}}">Edit</a>--}}
                {{--</td>--}}
                <td>

                    <form action="{{route("spec.destroy",$spec->id)}}" method="POST" accept-charset="UTF-8">
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