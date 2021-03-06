<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.name') }}:</span>&nbsp;&nbsp;
            <input type="text" name="name" value="{{ old('name') }}" required style="padding-left: 5px">
            <span class="error-message">{{ $errors->first('name') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.image') }}:</span>&nbsp;&nbsp;
            <span class="error-message">{{ $errors->first('image') }}</span>
            <br><br>
            <input type="file" name="image">
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.categories') }}:</span>&nbsp;&nbsp;&nbsp;&nbsp;
            @foreach ($categories as $category)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="checkbox" name="category_id[]" value="{{ $category->id }}" style="cursor: pointer;"> {{ $category->name }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('category_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.time') }}:</span>&nbsp;&nbsp;
            @foreach ($times as $time)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="times_id" value="{{ $time->id}}" @if ($time->id == old('times_id')) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $time->amount_of_time }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('times_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.persons') }}:</span>&nbsp;&nbsp;
            @foreach ($persons as $person)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="persons_id" value="{{ $person->id }}" @if ($person->id == old('persons_id')) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $person->amount_of_persons }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('persons_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.complexity') }}:</span>&nbsp;&nbsp;
            @foreach ($complexities as $complexity)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="complexity_id" value="{{ $complexity->id }}" @if ($complexity->id == old('complexity_id')) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $complexity->complexity_level }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('complexity_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.text') }}:</span>&nbsp;&nbsp;
            <textarea name="text" cols="50" rows="5">{{ old('text') }}</textarea>
            <span class="error-message">{{ $errors->first('text') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.intro') }}:</span>&nbsp;&nbsp;
            <textarea name="intro" cols="50" rows="5">{{ old('intro') }}</textarea>
            <span class="error-message">{{ $errors->first('intro') }}</span>
        </label>
    </p>
</div>
