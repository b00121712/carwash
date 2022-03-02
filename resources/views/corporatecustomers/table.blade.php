<div class="table-responsive">
    <table class="table" id="corporatecustomers-table">
        <thead>
        <tr>
            <th>Administratorid</th>
        <th>Firmname</th>
        <th>Numberofvehicles</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($corporatecustomers as $corporatecustomer)
            <tr>
                <td>{{ $corporatecustomer->administratorid }}</td>
            <td>{{ $corporatecustomer->firmname }}</td>
            <td>{{ $corporatecustomer->numberofvehicles }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['corporatecustomers.destroy', $corporatecustomer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('corporatecustomers.show', [$corporatecustomer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('corporatecustomers.edit', [$corporatecustomer->id]) }}"
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
