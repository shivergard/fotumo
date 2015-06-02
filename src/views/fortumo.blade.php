@extends((\Config::get('fortumo.extend_view') ? \Config::get('fortumo.extend_view') : 'fortumo::app'))

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Shivergard\Fortumo</div>
				<div class="panel-body">
					fortumo
				</div>
			</div>
		</div>
	</div>
</div>
@endsection