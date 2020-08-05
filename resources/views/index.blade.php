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
        <div class="p-4">
            <div class="my-4">
                <div>
                <h3 class="float-left">Crud YajraTable</h3>
                <a href="{{ route('crud.create') }}" class="btn btn-primary py-1 float-right">Add</a>
            </div>
                <table class="table table-bordered my-5" id="crud_table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $table = $('#crud_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('crud.crud_list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'DOB',
                        name: 'DOB'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'action',
                        name: 'action',

                    }
                ],

            })
        });

        function delete_confirm(id) {
            cnfrm = confirm("Are You sure?You Want To delete;");
            if (cnfrm) {
                window.location = "{{url('crud/delete')}}/"+id ;
            }
        };

    </script>
</body>

</html>
