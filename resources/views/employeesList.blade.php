<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->Emp_num }}</td>
        <td>{{ $employee->FirstName }}</td>
        <td>{{ $employee->LastName }}</td>
        <td>{{ $employee->age }}</td>
        <td>{{ $employee->department }}</td>
        <td>
          <a href="{{ url('/show/'.$employee->id) }}" class="btn btn-sm btn-info">Show</a>
           <a href="{{ url('/edit/'.$employee->id) }}" class="btn btn-sm btn-warning">Edit</a>
           <a href="{{ url('/delete/'.$employee->id) }}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
  </tbody>
  @endforeach
</table>