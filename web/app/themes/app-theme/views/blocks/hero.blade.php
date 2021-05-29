@php
	/*
	 * Title: Hero
	 * Description: hero
	 * Icon: admin-site
	 * Keywords: hero
	 * Category: new
	 */
@endphp

@if(!is_admin())
	@php
		$subheadline = get_field('subheadline');
		$headline = get_field('headline');
		$background_image = get_field('background_image');
		$image_one = get_field('image_1');
		$image_two = get_field('image_2');
		$image_three = get_field('image_3');
		$image_four = get_field('image_4');
	@endphp

	<section class="hero">
		<div>
			@if ($background_image)
				<img src="{{ $background_image['url'] }}" alt="">
			@endif
		</div>
		<div>
			{{ $subheadline ?? ''}}
		</div>
		<div>
			{{ $headline ?? ''}}
		</div>
		<div class="container-images">
			<div>
				@if($image_one)
					<img src="{{ $image_one['url'] }}" alt="">
				@endif
			</div>
			<div>
				@if($image_two)
					<img src="{{ $image_two['url'] }}" alt="">
				@endif
			</div>
			<div>
				@if($image_three)
					<img src="{{ $image_three['url'] }}" alt="">
				@endif
			</div>
			<div>
				@if($image_four)
					<img src="{{ $image_four['url'] }}" alt="">
				@endif
			</div>
		</div>

	</section>

@else
	<h2 style="font-family: 'Mark', sans-serif;">Hero</h2>
@endif
