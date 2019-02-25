@extends("layouts.site")

@section('head') Create StructB @endsection
@section('title') Create new StructB @endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form method="post" action="{{route('structB.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="field_1">Field 1:</label>
                    <input type="text" class="form-control" name="field_1"/>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection