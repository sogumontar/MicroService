@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produk(localhost8002)</div>

                <div class="card-body">
                    @if (session('status'))     
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="post" enctype="multipart/form-data" action="{{route('create')}}">

                        <input type="text" name="nama" placeholder="Nama Produk" class="form-control" name=""><br>
                        <textarea id="txtarea" name="deksripsi" placeholder="Deskripsi" class="form-control"></textarea>
                        <br>
                        <input style="margin-left: 0px; width: 100px;" name="harga" width="50px;" type="number" min="0" step="1" placeholder="harga" class="form-control"  name="">
                        <br>
                        <input type="hidden" class="btn btn-info" name="_token" value="{{csrf_token()}}"  class="hidden">
                        <button style="margin-left: 610px;" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
