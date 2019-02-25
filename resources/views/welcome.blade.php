<!doctype html>
<html>
    <head>
        <title>TestSM</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h3 class="m-5" align="center">TestSM</h3>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <button class="btn btn-outline-primary"><a href="{{route('structA.index')}}">StructA</a></button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-primary"><a href="{{route('structB.index')}}">StructB</a></button>
            </div>
        </div>
    </body>
</html>
