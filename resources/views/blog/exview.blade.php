@extends('app')
@section('content')


    <table id="example" class="display hover table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Dec</th>
            <th>Hint</th>
            <th>image</th>
            <th>author</th>
            <th>Publish date</th>



        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>

                <td>{{ $blog->id }}</td>
                <td><a href="{{url('blog',$blog->id)}}">{{ $blog->title }}</a></td>
                <td>{{ $blog->dec }}</td>
                <td>{{ $blog->hint }}</td>
                <td><img src="{{ $blog->image}}" alt="" class="img-responsive" style="width:150px"/></td>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->publish_date }}</td>



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