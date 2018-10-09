<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.name') }}:</span>&nbsp;&nbsp;
            <input type="text" name="name" value="{{ old('name') ?: $recipe->name }}" required style="padding-left: 5px">
            <span class="error-message">{{ $errors->first('name') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.image') }}:</span>&nbsp;&nbsp;
            <img src="{{ $recipe->image }}" width="350px">
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
                    <input type="checkbox" name="category_id[]" value="{{ $category->id }}" @foreach ($relations as $item) @if ($item->pivot->category_id == $category->id) checked @endif @endforeach style="cursor: pointer;"> {{ $category->name }}&nbsp;&nbsp;&nbsp;&nbsp;
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
                    <input type="radio" name="times_id" value="{{ old('time_id') ?: $time->id }}" @if ($recipe->times->amount_of_time == $time->amount_of_time) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $time->amount_of_time }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('time_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.persons') }}:</span>&nbsp;&nbsp;
            @foreach ($persons as $person)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="persons_id" value="{{ old('$person_id') ?: $person->id }}" @if ($recipe->persons->amount_of_persons == $person->amount_of_persons) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $person->amount_of_persons }}&nbsp;&nbsp;&nbsp;&nbsp;
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
                    <input type="radio" name="complexity_id" value="{{ old('complexity_id') ?: $complexity->id }}" @if ($recipe->complexity->complexity_level == $complexity->complexity_level) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $complexity->complexity_level }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
            <span class="error-message">{{ $errors->first('complexity_id') }}</span>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.text') }}:</span>&nbsp;&nbsp;
            <textarea name="text" cols="50" rows="5">{{ old('text') ?: $recipe->text }}</textarea>
        </label>
        <span class="error-message">{{ $errors->first('text') }}</span>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.intro') }}:</span>&nbsp;&nbsp;
            <textarea name="intro" cols="50" rows="5">{{ old('intro') ?: $recipe->intro }}</textarea>
        </label>
        <span class="error-message">{{ $errors->first('intro') }}</span>
    <p>
        {{ trans('recipe::recipes.form.created at') }}: {{ $recipe->created_at }}
    </p>
    <p>
        {{ trans('recipe::recipes.form.updated at') }}: {{ $recipe->updated_at }}
    </p>
</div>
