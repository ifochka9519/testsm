@extends("layouts.site")

@section('head') Create StructA @endsection
@section('title') Create new StructA @endsection

@section('content')
    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-5">
            <form method="post" action="{{route('structA.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name"/>

                    <label for="onwer_id">Onwer Id:</label>
                    <select class="m-3" name="onwer_id" >
                        @foreach($structsB as $structB)
                            <option value="{{$structB->id}}">{{$structB->id}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>

    </div>
@endsection