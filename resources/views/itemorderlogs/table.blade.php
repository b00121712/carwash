<div class="table-responsive">
    <table class="table" id="itemorderlogs-table">
        <thead>
        <tr>
            <th>Stockorderid</th>
        <th>Stockitemid</th>
        <th>Amount</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($itemorderlogs as $itemorderlog)
            <tr>
                <td>{{ $itemorderlog->stockorderid }}</td>
            <td>{{ $itemorderlog->stockitemid }}</td>
            <td>{{ $itemorderlog->amount }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['itemorderlogs.destroy', $itemorderlog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('itemorderlogs.show', [$itemorderlog->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('itemorderlogs.edit', [$itemorderlog->id]) }}"
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
