<!-- Stockorderid Field -->
<div class="col-sm-12">
    {!! Form::label('stockorderid', 'Stockorderid:') !!}
    <p>{{ $itemorderlog->stockorderid }}</p>
</div>

<!-- Stockitemid Field -->
<div class="col-sm-12">
    {!! Form::label('stockitemid', 'Stockitemid:') !!}
    <p>{{ $itemorderlog->stockitemid }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $itemorderlog->amount }}</p>
</div>

