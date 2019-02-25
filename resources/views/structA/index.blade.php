@extends("layouts.site")

@section('head') StructA @endsection
@section('title') StructA @endsection

@section('content')

    <button class="btn btn-outline-info m-3"><a href="{{route('structA.create')}}">Create new</a></button>

    <div class="table-hover table-bordered m-5">
        <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>StructB.field_1</th>
                </tr>
            @foreach($structs as $struct)
                <tr>
                    <td>{{$struct->id}}</td>
                    <td>{{$struct->name}}</td>
                    <td>{{$struct->structB->field_1}}</td>
                    <td><a href="{{route('structA.edit', ['id'=>$struct->id])}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('structA.destroy', $struct->id)}}" method="post">
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