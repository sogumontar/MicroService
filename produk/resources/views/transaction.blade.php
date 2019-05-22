@extends('layouts.app')
@section('content')
<?php 

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table border='1'>
             <th>No</th>
             <th>Nama</th>
             <th>deskripsi</th>
             <th>Harga</th>
             <th>Aksi</th>   
             <th>Aksi</th>  
               <?php 
             $no=0;
             echo $no;
             foreach($t as $tt)
             {
                echo "del";
                $no++;
                
               ?>
               <tr>
                <td valign="top">
                    <?php echo $no ?>
                </td>
                <td valign="top">
                    <?php echo $tt->nama; ?>
                </td>
                <td valign="top">
                    <?php echo $tt->deskripsi; ?>
                </td>

                <td valign="top">
                    <?php echo $tt->harga; ?>
                </td>
                <?php if(Auth::user()->email=='hendrasimz92@gmail.com'){?>
                <td>
                    <a href=""><button class="btn btn-success">Approve</button></a>
                </td>
                <td>
                    <a href=""><button class="btn btn-danger">Decline</button></a>
                </td>
               <?php  }?>
            </tr>
            <?php
        }
        ?> 
           
    </table>
</div>
</div>
</div>
@endsection

