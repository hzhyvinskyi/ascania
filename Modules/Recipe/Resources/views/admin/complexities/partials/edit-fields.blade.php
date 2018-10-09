<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::complexities.form.complexity level') }}:</span>&nbsp;&nbsp;
            <input type="text" name="complexity_level" value="{{ old('complexity_level') ?: $complexity->complexity_level }}" required style="padding-left: 5px">&nbsp;
            <span class="error-message">{{ $errors->first('complexity_level') }}</span>
        </label>
    </p>
</div>
