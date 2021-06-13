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
                       Perbarui Pengeluaran
                   </div>
                   <hr>
                   <div class="text-end">
                    <a class="btn btn-sm btn-danger" href="{{route('pengeluaran.index')}}">Batal</a>
                    </div>
                   <form action="{{route('pengeluaran.update',$edit->id)}}" method="post">
                    @csrf
                    @method("PUT")
                       <div class="form-group ">
                           <label for="nama" class="block">Pengeluaran :</label>
                           <input type="text" id="pengeluaran" name="pengeluaran" class="form-control" value="{{$edit->pengeluaran}}">
                        </div>
                        <div class="form-group">
                            <label for="tipe" class="block">Total :</label>
                            <input type="text" id="total" name="total" class="form-control" value="{{$edit->total}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="block">Keterangan :</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{$edit->keterangan}}">
                        </div>
                        <div class="text-end py-3">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </div>
                    </form>
               </div>
           </div>
       </div>
   </div>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>