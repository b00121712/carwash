<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th>Administratorid</th>
        <th>Branchid</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Dateofbirth</th>
        <th>Phone</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->administratorid }}</td>
            <td>{{ $employee->branchid }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->dateofbirth }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
