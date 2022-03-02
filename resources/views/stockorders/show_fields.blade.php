<!-- Supplierid Field -->
<div class="col-sm-12">
    {!! Form::label('supplierid', 'Supplierid:') !!}
    <p>{{ $stockorder->supplierid }}</p>
</div>

<!-- Stockorderinvoiceid Field -->
<div class="col-sm-12">
    {!! Form::label('stockorderinvoiceid', 'Stockorderinvoiceid:') !!}
    <p>{{ $stockorder->stockorderinvoiceid }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $stockorder->amount }}</p>
</div>

