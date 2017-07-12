@extends('layouts.backstage')

@section('content')
<div class="col-md-12">
    <form method="POST" action="{{ route('patchDelta') }}" class="row row-p-10">
        <div class="col-12">
            <h1>
                Edit {{ $delta->getString() }} for {{ $delta->getPlatformName() }} in {{ $delta->getRingName() }}
                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-fw fa-check"></i> Save</button>
            </h1>
        </div>
        {!! method_field('patch') !!}
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="id" name="id" aria-describedby="id" value="{{ $delta->id }}">
        <input type="hidden" class="form-control" id="build_id" name="build_id" aria-describedby="build_id" value="{{ $delta->build_id }}">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
                <label for="build_string">String</label>
                <input type="text" class="form-control" id="build_string" name="build_string" aria-describedby="build_string" placeholder="Build string" value="{{ $delta->getString( 'full' ) }}">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
                <label for="platform">Platform</label>
                <input type="number" class="form-control" id="platform" name="platform" aria-describedby="platform" placeholder="Platform" value="{{ $delta->platform }}">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
                <label for="ring">Ring</label>
                <input type="number" class="form-control" id="ring" name="ring" aria-describedby="ring" placeholder="Ring" value="{{ $delta->ring }}">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="form-group">
                <label for="release">Date</label>
                <input type="date" class="form-control" id="release" name="release" aria-describedby="release" placeholder="Date" value="{{ $delta->release }}">
            </div>
        </div>
    </form>
</div>
@endsection