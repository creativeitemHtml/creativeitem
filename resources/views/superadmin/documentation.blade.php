<div class="admin_main_right p-30 bd-r-5">
	<div class="title-btn-menu-wrap d-flex justify-content-between align-items-center flex-wrap g-10 pb-30">
		<h4 class="fz-20-sb-black">{{ get_phrase($page_title) }}</h4>
		<a href="javascript:;" class="new-project-btn new-project-btn-desktop" onclick="largeModal('{{ route('superadmin.sort_products') }}', '{{ get_phrase('Sort products') }}')">{{ get_phrase('Sort products') }}</a>
		<button class="d-lg-none mobile-menu-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
			<img src="{{ asset('assets/img/new-icons-images/menu-icon.svg') }}" alt="menu">
		</button>
	</div>
	
	<div class="row">
		@foreach($products as $product)
			@php
			$product_img = !empty($product->favicon) ? $product->favicon : 'favicon.png';

			$topics = $product->product_to_topic;
			$articles = $product->product_to_article;

			@endphp
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="doc-item d-flex justify-content-between" style="border-color: {{ $product->color_code }}">
					<div class="doc-item-icon" style="background-color: {{ $product->color_code }}20">
						<img src="{{ asset('uploads/favicons/products/'.$product_img) }}" alt="" />
					</div>
					<div class="content">
						<div class="doc-item-name">{{ $product->name }}</div>
						<p class="doc-item-article">
							<i class="fa-solid fa-list"></i> {{ count($topics).' '.get_phrase('Topics') }}
							<br>
							<i class="fa-solid fa-comment"></i> {{ count($articles).' '.get_phrase('Articles') }}
						</p>
					</div>
					<!-- Dropdown -->
					<div class="payfile-option pb-4">
						<button
						type="button"
						class="dropdown-toggle"
						data-bs-toggle="dropdown"
						aria-expanded="false"
						>
						<svg class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg=""><path fill="currentColor" d="M64 360c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zm0-160c30.9 0 56 25.1 56 56s-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56zM120 96c0 30.9-25.1 56-56 56S8 126.9 8 96S33.1 40 64 40s56 25.1 56 56z"></path></svg>
						</button>
						<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<a class="dropdown-item" href="{{ route('superadmin.edit_documentation', ['slug' => $product->slug]) }}">{{ get_phrase('Go to documentation') }}</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('{{ route('superadmin.select_article_to_export', ['slug' => $product->slug]) }}', '{{ $product->name }}')">{{ get_phrase('Export Documentation') }}</a>
						</li>
						</ul>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<!-- Pagination -->
	<div class="adminPanel-pagi pt-30">
		{{ $products->links('pagination::bootstrap-4') }}
	</div>
	
</div>