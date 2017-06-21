<table class=tabel border="1">
        <tr>
            <th> ID_Produk </th>
            <th> Nama_Produk</th>
            <th> Jumlah_Produk</th>
            <th> Jenis_Produk</th>
            
        </tr>
        @foreach($products as $val)
        
            <tr>
                <td> {{$val->id_product}} </td>
                <td> {{$val->nama_produk}} </td>
                 <td> {{$val->jumlah_produk}} </td>
                  <td> {{$val->jenis_produk}} </td>

 -->
            </tr>
         @endforeach
</table>

