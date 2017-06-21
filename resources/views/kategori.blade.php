<table class=tabel border="1">
        <tr>
            <th> ID_Kategori </th>
            <th> Kategori</th>
            <th> Jumlah</th>
            <th> Diskon </th>
            
        </tr>
        @foreach($categories as $val)
        
            <tr>
                 <td> {{$val->id_kategori}} </td>
                <td> {{$val->kategori}} </td>
                 <td> {{$val->jumlah_kategori}} </td>
                  <td> {{$val->diskon}} </td>



            </tr>
         @endforeach
</table>

