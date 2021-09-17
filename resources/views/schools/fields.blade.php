<!-- Schoolname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schoolName', 'Schoolname:') !!}
    {!! Form::text('schoolName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Schooladdress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schoolAddress', 'Schooladdress:') !!}
    {!! Form::text('schoolAddress', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Principalname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('principalName', 'Principalname:') !!}
    {!! Form::text('principalName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date', 'Date:') !!}
    {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush