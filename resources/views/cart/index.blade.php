<div id="order-form">
	<div id="order-form-close"></div>
	<span class="order-heard">Корзина</span>
	<div class="boxer order-list">
		<div class="box-row header-table">
			<div class="box order-item-pic"></div>
			<div class="box order-item-name">Название</div>
			<div class="box order-item-count">Количество</div>
			<div class="box order-item-price">Цена</div>
			<div class="box order-item-summ">Сумма</div>
			<div class="box order-item-edit"></div>
		</div>
		@foreach($result as $item)
		<div class="box-row">
			<div class="box order-item-pic"><a href="/"><img src="/images/cart-order-img.png"></a></div>
			<div class="box order-item-name"><a href="/">{{$item->name}}</a></div>
			<div class="box order-item-count"><span class="count-minus"></span><span><input type="text" value={{$item->qty}}></span><span class="count-plus"></span></div>
			<div class="box order-item-price"><span class="price-item">{{$item->price}}</span></div>
			<div class="box order-item-summ"><span class="price-item">{{$item->price*$item->qty}}</span></div>
			<div class="box order-item-edit"><span class="order-del" data-id="{{$item->rowid}}"></span></div>
		</div>
		@endforeach
	</div>
	<div class="cart-info">
		<p>
			К каждой порции суши и роллов полагается бесплатная порция имбиря, вассаби, соевый соус и палочки.
Вы можете добавить себе дополнительные порции. Дополнительные палочки бесплатно. 
		</p>
	</div>
	<!--
	<div class="addon-items">
		<h2>Дополнение к вашему заказу</h2>
			<div id="order-slider" class="bottom-colum">
			<div class='viewport'>
				<ul class='slidewrapper' data-current=0>
					<li class='slide'>
						<ul>
							<li><a href=""><img src="/images/cart-order-img.png"></a></li>
							<li><a href="">Салат</a></li>
							<li><span class="price-item">230</span></li>
							<li class="cart-slider-input">
								<span class="count-minus-catalog"></span>
									<span><input type="text"></span></input>
								<span class="count-plus-catalog"></span>
							</li>
							<li><button class="to-cart-btn">в корзину</button></li>
						</ul>
					</li>
					
				</ul>
			</div>
			<a href='javascript: void(0)' class='prev_slide2' class='arrows'></a>
			<a href='javascript: void(0)' class='next_slide2' class='arrows'></a>
		</div>
	</div>
-->
	<div class="bottom-order box-row">
		<div class="bottom-order-left box">
			<span class="order-bonus-0"></span>
		</div>
		<div class="bottom-order-center box">
			<span>и того:</span><span>2400</span>
		</div>
		<div class="bottom-order-right box">
			<button class="order-complite">Оформить заказ</button>
		</div>
	</div>
</div>
