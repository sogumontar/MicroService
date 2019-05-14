@extends('layouts.app')

@section('content')
<div class="form-group">
	<form method="post" action="{{route('crea',$id)}}">

		<input type="hidden" class="btn btn-info" name="_token" value="{{csrf_token()}}"  class="hidden">
		<div class="col-md-12" ><p  style="margin-left: 500px;">Nama Produk</p>
			<p class="form-control" style="width: 425px; margin-left: 500px;" disabled="" type="text" value="<?=$t['nama']?>" name="nama"><?=$t['nama']?></p>
		</div><br>
		<div class="col-md-12" ><p  style="margin-left: 500px;">Harga Produk</p>
			<input class="form-control" style="width: 425px; margin-left: 500px;" disabled="" type="text" value="<?=$t['harga']?>" name="harga">
		</div><br>
		<div class="col-md-12" ><p  style="margin-left: 500px;">Tahun Produksi Produk</p>
			<input class="form-control" style="width: 425px; margin-left: 500px;" disabled="" type="text" value="<?=$t['created_at']?>" name="tahun">
		</div><br>
		<div class="col-md-12" ><p  style="margin-left: 500px;">Deskripsi Produk</p>
			<input class="form-control" style="width: 425px; margin-left: 500px;" disabled="" type="text" value="<?=$t['deksripsi']?>" name="desc">
		</div><br>
		<br>
		<div>
			<input type="number" style="width: 425px; margin-left: 515px;" required="" min="0" class="form-control" name="jumlah">
		</div>
		<br>
		<button style="margin-left: 860px;" class="btn btn-success">Beli</button>
	</form>
</div>
@endsection