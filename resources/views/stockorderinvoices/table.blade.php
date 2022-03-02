<div class="table-responsive">
    <table class="table" id="stockorderinvoices-table">
        <thead>
        <tr>
            <th>Deliverystatus</th>
        <th>Paymentstatus</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stockorderinvoices as $stockorderinvoice)
            <tr>
                <td>{{ $stockorderinvoice->deliverystatus }}</td>
            <td>{{ $stockorderinvoice->paymentstatus }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['stockorderinvoices.destroy', $stockorderinvoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stockorderinvoices.show', [$stockorderinvoice->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('stockorderinvoices.edit', [$stockorderinvoice->id]) }}"
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
