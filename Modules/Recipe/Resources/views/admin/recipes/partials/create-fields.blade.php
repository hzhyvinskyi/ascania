<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.name') }}:</span>&nbsp;&nbsp;
            <input type="text" name="name" required style="padding-left: 5px">
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.image') }}:</span>&nbsp;&nbsp;
            <input type="text" name="image" style="padding-left: 5px">
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
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.time') }}:</span>&nbsp;&nbsp;
            @foreach ($times as $time)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="times_id" value="{{ $time->id }}" required style="padding-left: 5px; cursor: pointer;"> {{ $time->amount_of_time }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.persons') }}:</span>&nbsp;&nbsp;
            @foreach ($persons as $person)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="persons_id" value="{{ $person->id }}" required style="padding-left: 5px; cursor: pointer;"> {{ $person->amount_of_persons }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.complexity') }}:</span>&nbsp;&nbsp;
            @foreach ($complexities as $complexity)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="complexity_id" value="{{ $complexity->id }}" required style="padding-left: 5px; cursor: pointer;"> {{ $complexity->complexity_level }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.text') }}:</span>&nbsp;&nbsp;
            <textarea name="text" cols="50" rows="5"></textarea>
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.intro') }}:</span>&nbsp;&nbsp;
            <textarea name="text" cols="50" rows="5"></textarea>
        </label>
    </p>
</div>
