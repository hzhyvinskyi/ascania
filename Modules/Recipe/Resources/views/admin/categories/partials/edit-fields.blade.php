<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::categories.form.name') }}:</span>&nbsp;&nbsp;
            <input type="text" name="name" value="{{ old('name') ?: $category->name }}" style="padding-left: 5px">
            <span class="error-message">{{ $errors->first('name') }}</span>
        </label>
    </p>
</div>
