<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container my-2 ">
        <div class="p-5 card">
            <div class="row py-2">
                <div class="col-3">
                    Name:
                </div>
                <div class="col-3">
                    {{$crud->name}}
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    Email:
                </div>
                <div class="col-3">
                    {{$crud->email}}
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    Mobile:
                </div>
                <div class="col-3">
                    {{$crud->mobile}}
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    Address:
                </div>
                <div class="col-3">
                    {{$crud->address}}
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    Created At:
                </div>
                <div class="col-3">
                    {{$crud->created_at}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
