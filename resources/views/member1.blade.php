<table class=tabel border="1">
        <tr>
            <th> ID Member</th>
            <th> Name</th>
            <th> Address</th>
            <th>  Dob </th>
              <th>  Gender </th>
                <th>  Email </th>
                 <th>  City</th>
                  <th>  Country </th>
                  
        </tr>
        @foreach($members as $val)
        
            <tr>
                 <td>{{$val->id}} </td>
                <td> {{$val->name}} </td>
                 <td> {{$val->address}} </td>
                  <td> {{$val->dob}} </td>
                    <td> {{$val->gender}} </td>
                       <td> {{$val->email}} </td>
                         <td> {{$val->city}} </td>
                           <td> {{$val->country}} </td>
              

            </tr>
         @endforeach
</table>

