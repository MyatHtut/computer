@extends('app')
@section('content')


    <table id="example" class="display hover table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th>
            <th>image</th>
            <th>Gender</th>
            <th>color</th>
            <th>shop</th>




        </tr>
        </thead>
        <tbody>
        @foreach($accs as $acc)
            <tr>

                <td>{{ $acc->id }}</td>
                <td><a href="{{url('blog',$acc->id)}}">{{ $acc->name }}</a></td>
                <td>{{ $acc->type }}</td>
                <td><img src="{{ $acc->for}}" alt="" class="img-responsive" style="width:150px"/></td>
                <td>{{ $acc->gender }}</td>
                <td>{{ $acc->color }}</td>
                <td>{{ $acc->shop }}</td>



                {{--<td>--}}
                    {{--<form action="{{route("ex.destroy",$ex->id)}}" method="POST" accept-charset="UTF-8">--}}
                        {{--<input name="_method" type="hidden" value="DELETE">--}}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<input class="btn btn-danger" type="submit" value="Delete">--}}
                    {{--</form>--}}
                {{--</td>--}}




            </tr>
        @endforeach
        </tbody>
    </table>
@endsection