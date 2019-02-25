@extends("layouts.site")

@section('head') Edit StructA @endsection
@section('title') Edit StructA @endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form method="post" action="{{route('structA.update', $structA->id)}}">
                <div class="form-group">
                    @method('PATCH')
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$structA->name}}"/>

                    <label for="onwer_id">Onwer Id:</label>
                    <select class="m-3" name="onwer_id" >
                        @foreach($structsB as $structB)
                            @if($structB->id == $structA->onwer_id)
                                <option selected value="{{$structB->id}}">{{$structB->id}}</option>
                            @else
                                <option value="{{$structB->id}}">{{$structB->id}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </div>
@endsection