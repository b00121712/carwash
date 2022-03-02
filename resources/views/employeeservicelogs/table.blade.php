<div class="table-responsive">
    <table class="table" id="employeeservicelogs-table">
        <thead>
        <tr>
            <th>Employeeid</th>
        <th>Serviceid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employeeservicelogs as $employeeservicelog)
            <tr>
                <td>{{ $employeeservicelog->employeeid }}</td>
            <td>{{ $employeeservicelog->serviceid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employeeservicelogs.destroy', $employeeservicelog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employeeservicelogs.show', [$employeeservicelog->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employeeservicelogs.edit', [$employeeservicelog->id]) }}"
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
