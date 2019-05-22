@extends('layouts.app')

@section('content')
<?php 
$url='http://localhost:8002/api/create';

$json= file_get_contents($url);
$contacts=json_decode($json,true);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table border='1'>
             <th>No</th>
             <th>No KTP</th>
             <th>Nama</th>
             <th>Tanggal Daftar</th>    
             <th>Aksi</th>   
             <?php 
             $no=0;
             foreach($contacts as $contact)
             {
                $no++;
                foreach ($contact as $key => $value ) {
                   $$key=$value;
               }
               ?>
               <tr>
                <td valign="top">
                    <?php echo $no ?>
                </td>
                <td valign="top">
                    <?php echo $nama ?>
                </td>
                <td valign="top">
                    <?php echo $deksripsi ?>
                </td>

                <td valign="top">
                    <?php echo $harga ?>
                </td>
                <td><a href="{{route('order',[$id,$nama,$deksripsi,$harga])}}"><button class="btn btn-primary">Order</button></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</div>
</div>
@endsection
