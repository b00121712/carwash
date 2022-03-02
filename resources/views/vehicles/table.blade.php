<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
        <tr>
            <th>Branchid</th>
        <th>Plate</th>
        <th>Equipment</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->branchid }}</td>
            <td>{{ $vehicle->plate }}</td>
            <td>{{ $vehicle->equipment }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehicles.show', [$vehicle->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vehicles.edit', [$vehicle->id]) }}"
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
