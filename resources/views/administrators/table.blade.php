<div class="table-responsive">
    <table class="table" id="administrators-table">
        <thead>
        <tr>
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
        @foreach($administrators as $administrator)
            <tr>
                <td>{{ $administrator->branchid }}</td>
            <td>{{ $administrator->firstname }}</td>
            <td>{{ $administrator->lastname }}</td>
            <td>{{ $administrator->dateofbirth }}</td>
            <td>{{ $administrator->phone }}</td>
            <td>{{ $administrator->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['administrators.destroy', $administrator->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('administrators.show', [$administrator->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('administrators.edit', [$administrator->id]) }}"
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
