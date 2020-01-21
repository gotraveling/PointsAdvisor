<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>  
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    {!! Form::label('type', 'Type', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('type', array('Category' => 'Category',
            'Type' => 'Type',
            'Source' => 'Source',
            'Brand' => 'Brand'), '', ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('type') }}</strong>
        </span>
    </div>
</div>
