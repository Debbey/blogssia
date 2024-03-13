<h1> Billin Details </h1>
<table> 
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Email</th>
             <th>Address</th>
              <th>State</th>
               <th>Zip</th>
                <th>Card Type</th>
</tr>
</thead>

<tbody>
    @foreach($billin as $billin)
        <tr>
            <td> {{ $billin->id }} </td>
            <td> {{ $billin->firstN }} </td>
            <td> {{ $billin->lastN }} </td>
            <td> {{ $billin->gender }} </td>
            <td> {{ $billin->language }} </td>
            <td> {{ $billin->email }} </td>
            <td> {{ $billin->address }} </td>
            <td> {{ $billin->state }} </td>
            <td> {{ $billin->zip }} </td>
            <td> {{ $billin->cardtype }} </td>

        </tr>
        @endforeach
</tbody>
</table>