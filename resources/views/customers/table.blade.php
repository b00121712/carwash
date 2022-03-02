<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Street</th>
        <th>Housenumber</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->firstname }}</td>
            <td>{{ $customer->lastname }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->street }}</td>
            <td>{{ $customer->housenumber }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}"
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
