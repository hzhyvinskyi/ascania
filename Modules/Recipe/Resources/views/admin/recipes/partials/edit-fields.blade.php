<div class="box-body">
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.name') }}:</span>&nbsp;&nbsp;
            <input type="text" name="name" value="{{ $recipe->name }}" required style="padding-left: 5px">
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.image') }}:</span>&nbsp;&nbsp;
            <img src="{{ $recipe->image }}" width="350px">
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
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.time') }}:</span>&nbsp;&nbsp;
            @foreach ($times as $time)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="times_id" value="{{ $time->id }}" @if ($recipe->times->amount_of_time == $time->amount_of_time) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $time->amount_of_time }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.persons') }}:</span>&nbsp;&nbsp;
            @foreach ($persons as $person)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="persons_id" value="{{ $person->id }}" @if ($recipe->persons->amount_of_persons == $person->amount_of_persons) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $person->amount_of_persons }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.complexity') }}:</span>&nbsp;&nbsp;
            @foreach ($complexities as $complexity)
                <label style="font-weight: 400; cursor: pointer;">
                    <input type="radio" name="complexity_id" value="{{ $complexity->id }}" @if ($recipe->complexity->complexity_level == $complexity->complexity_level) checked @endif required style="padding-left: 5px; cursor: pointer;"> {{ $complexity->complexity_level }}&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            @endforeach
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.text') }}:</span>&nbsp;&nbsp;
            <input type="text" name="text" value="{{ $recipe->text }}" style="padding-left: 5px">
        </label>
    </p>
    <p>
        <label style="font-weight: 400">
            <span>{{ trans('recipe::recipes.form.intro') }}:</span>&nbsp;&nbsp;
            <input type="text" name="intro" value="{{ $recipe->intro }}" style="padding-left: 5px">
        </label>
    </p>
    <p>
        {{ trans('recipe::recipes.form.created at') }}: {{ $recipe->created_at }}
    </p>
    <p>
        {{ trans('recipe::recipes.form.updated at') }}: {{ $recipe->updated_at }}
    </p>
</div>
