@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.service_.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.service_.fields.id') }}
                        </th>
                        <td>
                            {{ $service_->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_.fields.name') }}
                        </th>
                        <td>
                            {{ $service_->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_.fields.description') }}
                        </th>
                        <td>
                            {{ $service_->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection
