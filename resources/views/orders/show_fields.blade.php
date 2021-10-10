<div class="card-body">
    <h4 class="header-title mb-1">{{ $order->price->product->name }} <span
            class="badge bg-success rounded-pill">{{ $order->price->number }}</span></h4>
    <p>Trạng thái đơn hàng: <span
            class="badge badge-outline-{{ $order->status->color }} rounded-pill">{{ $order->status->name }}</span>
    </p>

    <div data-simplebar="init" style="max-height: 419px;">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="timeline-alt pb-0">

                                @foreach ($order->books as $book)
                                    <div class="timeline-item">
                                        <i
                                            class="mdi mdi-calendar-account bg-{{ $book->status->color }}-lighten text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <p class="text-{{ $book->status->color }} fw-bold mb-1 d-block">
                                                {{ date('d-m-Y', strtotime($book->date)) }}</p>
                                            <p class="mb-0 pt-0">{{ $book->status->name }}</p>
                                            <p class="mb-0 pt-0">{{ $book->content }}</p>
                                            <p class="mb-0 pt-0">
                                                <small class="text-muted">Giờ hẹn:
                                                    {{ date('H:m', strtotime($book->time)) }}</small>
                                            </p>
                                            <p class="mb-0 pb-0">
                                                <small class="text-muted">Giờ cập nhật:
                                                    {{ date('H:m d-m-Y', strtotime($book->updated_at)) }}</small>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end timeline -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 162px; height: 829px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 211px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div> <!-- end slimscroll -->
</div>
