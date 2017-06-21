<table class=tabel border="1">
        <tr>
            <th> ID_Toko </th>
            <th> Nama Toko </th>
            <th> Alamat </th>
            <th> No_HP</th>
            
        </tr>
        @foreach($tokos as $val)
            <tr>
                 <td> {{$val->id_toko} </td>
                <td> {{$val->nama_toko}} </td>
                 <td> {{$val->alamat}} </td>
                  <td> {{$val->no_hp}} </td>

            </tr>
         @endforeach
</table>

