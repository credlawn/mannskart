<div class="py-3 reviews-area">
    <ul class="list-group list-group-flush">
        @foreach ($reviews as $review)
            @php
                // Determine the customer name and avatar based on the review type
                if ($review->type == "real") {
                    $customerName = $review->user ? $review->user->name : $review->custom_reviewer_name;
                    $customerAvatar = $review->user ? uploaded_asset($review->user->avatar_original) : static_asset('assets/img/placeholder.jpg');
                } else {
                    $customerName = $review->custom_reviewer_name;
                    $customerAvatar = uploaded_asset($review->custom_reviewer_image);
                }

                // Fetch order details if available
                $OrderDetail = get_order_details_by_review($review);
            @endphp
            <li class="media list-group-item d-flex px-3 px-md-4 border-0">
                <!-- Review User Image -->
                <span class="avatar avatar-md mr-3">
                    <img class="lazyload"
                         src="{{ static_asset('assets/img/placeholder.jpg') }}"
                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                         data-src="{{ $customerAvatar }}"
                    >
                </span>

                <div class="media-body text-left">
                    <!-- Review User Name (1st Line) -->
                    <h3 class="fs-15 fw-600 mb-0">{{ $customerName }}</h3>

                    <!-- Review Date (2nd Line) -->
                    <div class="opacity-60">
                        <i class="fs-12 fw-500">Reviewed on {{ date('d-m-Y', strtotime($review->created_at)) }}</i>
                    </div>

                    <!-- Review Variation and Verified Purchase (3rd Line) -->
                    @if ($OrderDetail && $OrderDetail->variation)
                        <div class="mb-0">
                            <small class="text-secondary fs-12 font-italic">
                                {{ translate('Variation :') }} {{ $OrderDetail->variation }}
                                @if ($review->type == "real")
                                    <span class="fs-12 fw-500 text-success ml-1">✅ Verified Purchase</span>
                                @endif
                            </small>
                        </div>
                    @endif

                    <!-- Review Rating (4th Line) -->
                    <span class="rating d-block mt-2 mb-2">
                        @for ($i = 0; $i < $review->rating; $i++)
                            <i class="las la-star active"></i>
                        @endfor
                        @for ($i = 0; $i < 5 - $review->rating; $i++)
                            <i class="las la-star"></i>
                        @endfor
                    </span>

                    <!-- Review Comment (5th Line) -->
                    <p class="comment-text mt-2 fs-14">
                        {{ $review->comment }}
                    </p>
                </div>

                <!-- Review Images -->
                <div class="spotlight-group d-flex flex-wrap">
                    @if ($review->photos)
                        @foreach (explode(',', $review->photos) as $photo)
                            <a class="spotlight mr-2 mr-md-3 mb-2 mb-md-3 size-60px size-md-90px border overflow-hidden has-transition hov-scale-img hov-border-primary"
                               href="{{ uploaded_asset($photo) }}">
                                <img class="img-fit h-100 lazyload has-transition"
                                     src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                     data-src="{{ uploaded_asset($photo) }}"
                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                            </a>
                        @endforeach
                    @endif
                </div>
            </li>
        @endforeach
    </ul>

    @if ($reviews->isEmpty())
        <div class="text-center fs-18 opacity-70">
            {{ translate('There have been no reviews for this product yet.') }}
        </div>
    @endif

    <!-- Pagination -->
    <div class="aiz-pagination product-reviews-pagination py-2 px-4 d-flex justify-content-end">
        {{ $reviews->links() }}
    </div>
</div>
