<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
        <tr>
            <th>Customerid</th>
        <th>Corporatecustomerid</th>
        <th>Servicetypeid</th>
        <th>Servicedate</th>
        <th>Servicetime</th>
        <th>Fee</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->customerid }}</td>
            <td>{{ $service->corporatecustomerid }}</td>
            <td>{{ $service->servicetypeid }}</td>
            <td>{{ $service->servicedate }}</td>
            <td>{{ $service->servicetime }}</td>
            <td>{{ $service->fee }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$service->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$service->id]) }}"
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
