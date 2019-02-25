@extends("layouts.site")

@section('head') Edit StructB @endsection
@section('title') Edit StructB @endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form method="post" action="{{route('structB.update', $structB->id)}}">
                <div class="form-group">
                    @method('PATCH')
                    @csrf
                    <label for="field_1">Field 1:</label>
                    <input type="text" class="form-control" name="field_1" value="{{$structB->field_1}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection