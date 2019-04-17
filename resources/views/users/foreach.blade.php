@if(count($buildings) > 0)

    @foreach($buildings as $key =>$building)
        @if($key % 3 ==0 && $key != 0)
            <div class="clearfix">

            </div>
        @endif
        <div class="col-md-4 col-sm-6">
    		<span class="thumbnail">
      			<img src="http://placehold.it/500x400" alt="...">
      			<h4>{{$building->name}}</h4>

      			<p>{{$building->small_description}}. </p>

      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">${{$building->price}}</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right"> BUY ITEM</button>
      				</div>

      			</div>
    		</span>
        </div>

    @endforeach
    <div class="clearfix"></div>
@else
    <div class="alert alert-danger">
        fuck off go away son of bitch
    </div>
@endif
