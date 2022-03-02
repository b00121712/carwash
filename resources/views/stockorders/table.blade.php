<div class="table-responsive">
    <table class="table" id="stockorders-table">
        <thead>
        <tr>
            <th>Supplierid</th>
        <th>Stockorderinvoiceid</th>
        <th>Amount</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stockorders as $stockorder)
            <tr>
                <td>{{ $stockorder->supplierid }}</td>
            <td>{{ $stockorder->stockorderinvoiceid }}</td>
            <td>{{ $stockorder->amount }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['stockorders.destroy', $stockorder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stockorders.show', [$stockorder->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('stockorders.edit', [$stockorder->id]) }}"
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
