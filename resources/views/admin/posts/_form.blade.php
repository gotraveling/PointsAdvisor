<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('title', null, ['class' => 'form-control post-title', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
    {!! Form::label('slug', 'Slug', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('slug', null, ['class' => 'form-control post-slug', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('slug') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    <div class="col-md-2 text-right">
        {!! Form::label('body', 'Body', ['class' => 'control-label']) !!}
        
        <div><a href="javascript:void(0);" onclick="switchBodyEditMode();">Edit mode</a></div>
    </div>
    <div class="col-md-8">
        <div class="ckeApp">
            @isset($post)
            {!! Form::textarea('body', $post->body, ['class' => 'form-control', 'required']) !!}
            @endisset
            @empty($post)
            {!! Form::textarea('body', '', ['class' => 'form-control', 'required']) !!}
            @endempty
            
            <md-dialog style="background: white;" :md-active.sync="bShowDialog">
                <md-dialog-content style="width: 1000px;">
                    <section class="admin">
                        <div class="content" style="width: 936px;">
                            <adminimages v-bind:select_mode="true" v-on:select_url="ckeImgUrl = $event"></adminimages>
                        </div>
                    </section>
                </md-dialog-content>
                <md-dialog-actions>
                    <md-button class="md-primary" @click="bShowDialog = false; sendCkeImgUrl(ckeImgUrl)">Select</md-button>
                    <md-button class="md-primary" @click="bShowDialog = false">Close</md-button>
                </md-dialog-actions>
            </md-dialog> 
        </div>
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('add_html') ? ' has-error' : '' }}">
    {!! Form::label('add_html', 'Additional HTML', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::textarea('add_html', null, ['class' => 'form-control']) !!}
        <span class="help-block">
            <strong>{{ $errors->first('add_html') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('featured_img') ? ' has-error' : '' }}">
    {!! Form::label('featured_img', 'Featured Image', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        <div class="ckeApp">
            @isset($post)
            {!! Form::textarea('featured_img', $post->featured_img, ['class' => 'form-control imgOnly']) !!}
            @endisset
            @empty($post)
            {!! Form::textarea('featured_img', '', ['class' => 'form-control']) !!}
            @endempty
            <md-dialog style="background: white;" :md-active.sync="bShowDialog">
                <md-dialog-content style="width: 1000px;">
                    <section class="admin">
                        <div class="content" style="width: 936px;">
                            <adminimages v-bind:select_mode="true" v-on:select_url="ckeImgUrl = $event"></adminimages>
                        </div>
                    </section>
                </md-dialog-content>
                <md-dialog-actions>
                    <md-button class="md-primary" @click="bShowDialog = false; sendCkeImgUrl(ckeImgUrl)">Select</md-button>
                    <md-button class="md-primary" @click="bShowDialog = false">Close</md-button>
                </md-dialog-actions>
            </md-dialog> 
        </div>
        <span class="help-block">
            <strong>{{ $errors->first('featured_img') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('category_id', $categories, $category_id, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
    {!! Form::label('type_ids', 'Type', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('type_ids[]', $types, $type_ids, ['class' => 'form-control select2-tags', 'required', 'multiple']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('type_ids') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('source_id') ? ' has-error' : '' }}">
    {!! Form::label('source_id', 'Source', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('source_ids[]', $sources, $source_ids, ['class' => 'form-control select2-tags', 'required', 'multiple']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('source_ids') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
    {!! Form::label('brand_id', 'Brand', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('brand_ids[]', $brands, $brand_ids, ['class' => 'form-control select2-tags', 'required', 'multiple']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('brand_ids') }}</strong>
        </span>
    </div>
</div>

@php
    if(isset($post)) {
        $tag = $post->tags->pluck('name')->all();
    } else {
        $tag = null;
    }
@endphp

<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
    {!! Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags', 'multiple']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('tags') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('expiry_date') ? ' has-error' : '' }}">
    {!! Form::label('expiry_date', 'Expiry Date', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::input('datetime-local', 'expiry_date', isset($post->expiry_date)?$post->expiry_date:"", ['class' => 'form-control']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('expiry_date') }}</strong>
        </span>
    </div>
</div>
