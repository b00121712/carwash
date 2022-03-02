<div class="table-responsive">
    <table class="table" id="employeevehiclelogs-table">
        <thead>
        <tr>
            <th>Employeeid</th>
        <th>Vehicleid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employeevehiclelogs as $employeevehiclelog)
            <tr>
                <td>{{ $employeevehiclelog->employeeid }}</td>
            <td>{{ $employeevehiclelog->vehicleid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employeevehiclelogs.destroy', $employeevehiclelog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employeevehiclelogs.show', [$employeevehiclelog->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employeevehiclelogs.edit', [$employeevehiclelog->id]) }}"
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
