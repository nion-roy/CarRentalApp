@if ($paginator->hasPages())
	<div class="col-md-12">
		<ul class="pagination">
			{{-- Previous Page Link --}}
			@if ($paginator->onFirstPage())
				<li class="disabled"><a  href="javascript:void(0)">Prev</a></li>
			@else
				<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Prev</a></li>
			@endif

			{{-- Pagination Elements --}}
			@foreach ($elements as $element)
				{{-- "Three Dots" Separator --}}
				@if (is_string($element))
					<li class="disabled"><a href="javascript:void(0)">{{ $element }}</a></li>
				@endif

				{{-- Array Of Links --}}
				@if (is_array($element))
					@foreach ($element as $page => $url)
						@if ($page == $paginator->currentPage())
							<li class="active"><a href="javascript:void(0)">{{ $page }}</a></li>
						@else
							<li><a href="{{ $url }}">{{ $page }}</a></li>
						@endif
					@endforeach
				@endif
			@endforeach

			{{-- Next Page Link --}}
			@if ($paginator->hasMorePages())
				<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
			@else
				<li class="disabled"><a href="javascript:void(0)">Next</a></li>
			@endif
		</ul>
	</div>
@endif
