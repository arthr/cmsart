<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>
@if ($paginator->lastPage() > 1)
	<div class="row">
		<div class="col-md-12">
			<div class="nk-pagination nk-pagination-center">
	
				<a href="{{ $paginator->url(1) }}" class="nk-pagination-prev {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
					<span class="nk-icon-arrow-left"></span>
				</a>
	
				<nav>
					@for ($i = 1; $i <= $paginator->lastPage(); $i++)
					<?php
						$half_total_links = floor($link_limit / 2);
						$from = $paginator->currentPage() - $half_total_links;
						$to = $paginator->currentPage() + $half_total_links;

						if ($paginator->currentPage() < $half_total_links) {
						   $to += $half_total_links - $paginator->currentPage();
						}

						if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
							$from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
						}
					?>
						@if ($from < $i && $i < $to)
						<a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? 'nk-pagination-current-white' : '' }}">
							{{ $i }}
						</a>
						@endif
					@endfor
				</nav>
	
				<a href="{{ $paginator->url($paginator->lastPage()) }}" class="nk-pagination-next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
					<span class="nk-icon-arrow-right"></span>
				</a>
	
			</div>
		</div>
	</div>
@endif