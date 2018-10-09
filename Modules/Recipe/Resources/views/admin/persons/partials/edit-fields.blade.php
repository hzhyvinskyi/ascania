<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::people.form.amount of persons') }}:</span>&nbsp;&nbsp;
            <input type="text" name="amount_of_persons" value="{{ old('amount_of_persons') ?: $person->amount_of_persons }}" required style="padding-left: 5px">&nbsp;
            <span class="error-message">{{ $errors->first('amount_of_persons') }}</span>
        </label>
    </p>
</div>
