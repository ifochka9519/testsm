@extends("layouts.site")

@section('head') StructB @endsection
@section('title') StructB @endsection

@section('content')

    <button class="btn btn-outline-info m-3"><a href="{{route('structB.create')}}">Create new</a></button>
    <button class="btn btn-outline-info m-3"><a href="{{route('structsB')}}">Create XML</a></button>

    <div class="table-hover table-bordered m-5">
        <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Field_1</th>
                </tr>
            @foreach($structs as $struct)
                <tr>
                    <td>{{$struct->id}}</td>
                    <td>{{$struct->field_1}}</td>
                    <td><a href="{{route('structB.edit', ['id'=>$struct->id])}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('structB.destroy', $struct->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection