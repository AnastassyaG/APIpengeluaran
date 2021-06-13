<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Create Data Vendor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <div class="row">
            <div class="card w-100 shadow">
                <div class="card-body">
                    <div class="card-title text-center fw-bold">
                        DATA PENGELUARAN
                    </div>
                    <hr>
                    <div class="text-end mb-3">
                        <a class="btn btn-sm btn-dark" href="{{route('pengeluaran.api')}}">Pengeluaran JSON</a>
                        <a class="btn btn-sm btn-success" href="{{route('pengeluaran.create')}}">Create</a>
                    </div>
                    <div class="table-responsive" style="border-radius: 25px; box-shadow: -2px 3px 10px #babec2;">
                        <table class="table" style="text-align: center;">
                            <thead class="table" style="background-color: #b4d7fa; color:white; text-align:center;">
                                <th scope="col">Id</th>
                                <th scope="col">Pengeluaran</th>
                                <th scope="col">Total</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                                <th></th>
                            </thead>
                            <tbody style="text-align:center;">
                                @php
                                $no = 1
                                @endphp
                                @foreach ($tampils as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->pengeluaran}}</td>
                                <td>{{$data->total}}</td>
                                <td>{{$data->keterangan}}</td>

                                <td>
                                    <a href="{{route('pengeluaran.edit',$data->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('pengeluaran.delete',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>