<div class="table-responsive">
    <table class="table" id="servicetypes-table">
        <thead>
        <tr>
            <th>Vehiclecleaning</th>
        <th>Tyreservice</th>
        <th>Vehiclepainting</th>
        <th>Wheelpainting</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($servicetypes as $servicetype)
            <tr>
                <td>{{ $servicetype->vehiclecleaning }}</td>
            <td>{{ $servicetype->tyreservice }}</td>
            <td>{{ $servicetype->vehiclepainting }}</td>
            <td>{{ $servicetype->wheelpainting }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['servicetypes.destroy', $servicetype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicetypes.show', [$servicetype->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('servicetypes.edit', [$servicetype->id]) }}"
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
