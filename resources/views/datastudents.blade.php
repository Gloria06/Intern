
<table class=tabel border="4">
        <tr>
            <th> ID </th>
           <!--  <th> Name </th>
            <th> Address </th> -->
             <th>Class </th>
            <!-- <th> Gender </th> -->
            

            
        </tr>
        @foreach($students as $val)
        
            <tr>
                <td> {{$val->ID}} </td>
               <!--  <td> {{$val->name}} </td>
                <td> {{$val->address}} </td> -->
                <td> {{$val->class}} </td>

               <!--  <td> @if($val->gender==0)
                Male
                @else
                       Female
                @endif
                 </td>
 -->
            </tr>
         @endforeach
</table>

