<table class=tabel border="1">
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Alamat </th>
            <th> Jenis Kelamin </th>
            <td><a href=" Action"> View </td>
        </tr>
        @foreach($customers as $val)
        
            <tr>
                <td> {{$val->id_customer}} </td>
                <td> {{$val->nama}} </td>
                 <td> {{$val->alamat}} </td>
                  <td> {{$val->jenis_kelamin}} </td>

            </tr>
         @endforeach
</table>

<h1>
    
</h1>
<table class=tabel border="1">
        <tr>
            <th> ID </th>
            <th> Diskon </th>
            <th> Periode </th>
            <th> Kategori Diskon </th>
          <td><a href=" Action"> View </td>  
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
<h1>
    
</h1>

<table class=tabel border="1">
        <tr>
            <th> ID_Kategori </th>
            <th> Kategori</th>
            <th> Jumlah</th>
            <th> Diskon </th>
          <td><a href=" Action"> View </td>  
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
<h1>
    

</h1>
<table class=tabel border="1">
        <tr>
            <th> ID_Produk </th>
            <th> Nama_Produk</th>
            <th> Jumlah_Produk</th>
            <th> Jenis_Produk</th>
            <td><a href=" Action"> View </td>
        </tr>
        @foreach($products as $val)
        
            <tr>
                <td> {{$val->id_product}} </td>
                <td> {{$val->nama_produk}} </td>
                 <td> {{$val->jumlah_produk}} </td>
                  <td> {{$val->jenis_produk}} </td>

            </tr>
         @endforeach
</table>
<h1>
    
</h1>

<table class=tabel border="1">
        <tr>
            <th> ID_Toko </th>
            <th> Nama Toko </th>
            <th> Alamat </th>
            <th> No_HP</th>
           <td><a href=" Action"> View </td> 
        </tr>
        @foreach($tokos as $val)
        
            <tr>
                 <td> {{$val->id_toko}} </td>
                <td> {{$val->nama_toko}} </td>
                 <td> {{$val->alamat}} </td>
                  <td> {{$val->no_hp}} </td>

            </tr>
         @endforeach
</table>


