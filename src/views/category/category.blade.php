@extends('clixy/admin::layouts.default')

@section('content')
<div class="row">
    <div class="large-12 columns">
        <a href="javascript:;" class="button tiny radius right" data-action="create">@lang('clixy/admin::common.btn.add')</a>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div id="{{ $module }}-wrap"></div>
        <div class="{{ $module }}-pagination"></div>
        <div id="{{ $module }}-list"></div>
        <div class="{{ $module }}-pagination"></div>
    </div>
</div>
@endsection
