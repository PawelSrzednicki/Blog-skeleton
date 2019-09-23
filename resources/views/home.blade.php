@extends('layouts.app')

@section('content')
<div class="grid-x grid-padding-x">
    <div class="cell small-4">Cell 1</div>
    <div class="cell small-4">Cell 2</div>
    <div class="cell small-4">Cell 3</div>
</div>
<button class="button" type="button" data-toggle="example-dropdown2">Top Aligned</button>

<div class="dropdown-pane top" id="example-dropdown2" data-dropdown>
    Just some junk that needs to be said. Or not. Your choice.
</div>
@endsection