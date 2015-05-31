<div class="goods-list">
@if(isset($catalogList))
	@foreach($catalogList as $catalog)
		<ul class="good-item">
			<li class="goods-mini-img"><img src="/images/{{$catalog->images}}"></li>
			<li class="good-item-name"><a href="{{url($catalog->slug)}}">{{$catalog->name}}</a></li>
		</ul>
	@endforeach
@endif
</div>