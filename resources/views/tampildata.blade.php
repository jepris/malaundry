<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malaundry | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center mb-4">Edit Orderan</h3>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p class="fs-2">Paket Kuota</p>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Paket Kuota</label>
                                <select class="form-select" name="paketkuota" id="floatingSelectGrid">
                                    <option selected>{{$data->paketkuota}}</option>
                                    <option value="1">Kuota Cuci</option>
                                    <option value="2">Kuota Setrika</option>
                                    <option value="3">Kuota Cuci Setrika</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Berat</label>
                                        <input type="text" name="berat" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{$data->berat}}">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Satuan Unit</label>
                                        <select class="form-select"class id="floatingSelectGrid">
                                            <option selected>{{$data->paketkuota}}</option>
                                            <option value="1">Ons</option>
                                            <option value="2">Kg</option>
                                            <option value="3">Kwintal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{$data->harga}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Cabang</label>
                                <select class="form-select" name="cabang" id="floatingSelectGrid">
                                    <option selected>{{$data->cabang}}</option>
                                    <option value="1">MLPTI Bekasi</option>
                                    <option value="2">MLPTI Tangerang</option>
                                </select>
                            </div>
                    </div>
                    <div class="button d-flex justify-content-end">
                        <button type="submit" class="btn btn-bg-transparent">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
