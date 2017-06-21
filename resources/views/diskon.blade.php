<table class=tabel border="1">
        <tr>
            <th> ID </th>
            <th> Diskon </th>
            <th> Periode </th>
            <th> Kategori Diskon </th>
            
        </tr>
        @foreach($diskons as $val)
        
            <tr>
                 <td> {{$val->id_diskon}}</td>
                <td> {{$val->diskon}} </td>
                 <td> {{$val->periode_diskon}} </td>
                  <td> {{$val->kategori_diskon}} </td>

            </tr>
         @endforeach
</table>

