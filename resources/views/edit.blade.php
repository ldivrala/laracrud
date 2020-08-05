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
        <div class="p-5">
            <div class="form">
                <form action="{{ route('crud.update',$crud->id) }}" method="POST" enctype="application/x-www-form-urlencoded">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') border border-danger @enderror"
                            name="name" id="name" value="{{ old('name') ?? $crud->name }}" placeholder="Name">
                        @error('name')
                        <div class="text-danger mx-2 mb-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control @error('email') border border-danger @enderror"
                            name="email" id="email" value="{{ old('email') ?? $crud->email }}" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                        @error('email')
                        <div class="text-danger mx-2 mb-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control @error('mobile') border border-danger @enderror"
                            name="mobile" id="mobile" value="{{ old('mobile')?? $crud->mobile }}" placeholder="Mobile">
                        @error('mobile')
                        <div class="text-danger mx-2 mb-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="DOB">DOB</label>
                        <input type="date" class="form-control @error('DOB') border border-danger @enderror" name="DOB"
                            id="DOB" value="{{ old('DOB') ?? $crud->DOB }}" placeholder="DOB">
                        @error('DOB')
                        <div class="text-danger mx-2 mb-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control @error('address') border border-danger @enderror" name="address"
                            id="address" rows="3">{{ old('address') ?? $crud->address }}</textarea>
                        @error('address')
                        <div class="text-danger mx-2 mb-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
