<div class="table-responsive">
    <table class="table" id="branches-table">
        <thead>
        <tr>
            <th>Location</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($branches as $branch)
            <tr>
                <td>{{ $branch->location }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['branches.destroy', $branch->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('branches.show', [$branch->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('branches.edit', [$branch->id]) }}"
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
