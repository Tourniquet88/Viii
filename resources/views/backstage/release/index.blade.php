@extends('layouts.backstage')

@section('content')
<div class="col-md-12">
    <h1>
        Releases
    </h1>
</div>
<div class="col-md-12 list-bar-group">
    <div class="row">
        @foreach ( $releases as $release )
            <div class="col-md-3">
                <div class="row list-bar">
                    <a class="col-10 list-bar-item list-bar-default" href="{{ route('editRelease', ['id' => $release->id]) }}">{{ $release->getString().' ('.$release->getPlatformName().')' }}</a>
                    <a class="col-2 list-bar-item list-bar-danger text-center" href="{{ route('deleteRelease', ['id' => $release->id]) }}"><i class="fa fa-fw fa-trash"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="col-md-12">
    {{ $releases->links() }}
</div>
@endsection