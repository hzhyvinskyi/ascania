<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::times.form.amount of time') }}:</span>&nbsp;&nbsp;
            <input type="text" name="amount_of_time" value="{{ old('amount_of_time') }}" required style="padding-left: 5px">&nbsp;
            <span class="error-message">{{ $errors->first('amount_of_time') }}</span>
        </label>
    </p>
</div>
