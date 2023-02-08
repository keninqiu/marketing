@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('content')

<div class="p-3">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-plan-tab" data-bs-toggle="tab" data-bs-target="#nav-plan" type="button" role="tab" aria-controls="nav-plan" aria-selected="true">
            Plan
        </button>
        <button class="nav-link" id="nav-create-tab" data-bs-toggle="tab" data-bs-target="#nav-create" type="button" role="tab" aria-controls="nav-create" aria-selected="false">
            Create
        </button>
        <button class="nav-link" id="nav-publish-tab" data-bs-toggle="tab" data-bs-target="#nav-publish" type="button" role="tab" aria-controls="nav-publish" aria-selected="false">
            Publish
        </button>
    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-plan" role="tabpanel" aria-labelledby="nav-plan-tab">
        @include('admin.plan')
    </div>
    <div class="tab-pane fade" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
        @include('admin.create')
    </div>
    <div class="tab-pane fade" id="nav-publish" role="tabpanel" aria-labelledby="nav-publish-tab">
        @include('admin.publish')
    </div>
    </div>
</div>
@endsection