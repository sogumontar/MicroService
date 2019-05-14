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
               <?php 
             $no=0;
             foreach($t as $contact)
             {
             	echo "asd";
                $no++;
                
               ?>
               <tr>
                <td valign="top">
                    <?php echo $no ?>
                </td>
                <td valign="top">
                    <?php echo $contact['nama']; ?>
                </td>
                <td valign="top">
                    <?php echo $contact['deskripsi']; ?>
                </td>

                <td valign="top">
                    <?php echo $contact['harga']; ?>
                </td>
               
            </tr>
            <?php
        }
        ?> 
           
    </table>
</div>
</div>
</div>
@endsection

