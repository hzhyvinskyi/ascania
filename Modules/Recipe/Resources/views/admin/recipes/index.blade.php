@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('recipe::recipes.title.recipes') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('recipe::recipes.title.recipes') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.recipe.recipe.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('recipe::recipes.button.create recipe') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>{{ trans('recipe::recipes.table.name') }}</th>
                                <th>{{ trans('recipe::recipes.table.image') }}</th>
                                <th>{{ trans('recipe::recipes.table.category') }}</th>
                                <th>{{ trans('recipe::recipes.table.time') }}</th>
                                <th>{{ trans('recipe::recipes.table.persons') }}</th>
                                <th>{{ trans('recipe::recipes.table.complexity') }}</th>
                                <th>{{ trans('recipe::recipes.table.text') }}</th>
                                <th>{{ trans('recipe::recipes.table.intro') }}</th>
                                <th>{{ trans('recipe::recipes.table.created at') }}</th>
                                <th>{{ trans('recipe::recipes.table.updated at') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($recipes)): ?>
                            <?php foreach ($recipes as $recipe): ?>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->id }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        <img src="{{ $recipe->image }}" style="max-width: 100px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        @foreach ($recipe->categories as $category)
                                            {{ $category->name}}<br>
                                        @endforeach
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->times->amount_of_time }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->persons->amount_of_persons }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->complexity->complexity_level }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->text }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->intro }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->created_at }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}">
                                        {{ $recipe->updated_at }}
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.recipe.recipe.edit', [$recipe->id]) }}" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="{{ route('admin.recipe.recipe.destroy', [$recipe->id]) }}"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th>{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('recipe::recipes.title.create recipe') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.recipe.recipe.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>
@endpush
