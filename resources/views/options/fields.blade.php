<!-- Option Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option_name', 'Option Name:') !!}
    {!! Form::text('option_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Option Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('option_value', 'Option Value:') !!}
    {!! Form::text('option_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Option Data Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('option_data', 'Option Data:') !!}
    {!! Form::textarea('option_data', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('options.index') !!}" class="btn btn-default">Cancel</a>
</div>
