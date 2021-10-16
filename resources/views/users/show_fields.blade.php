<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('images/users/avatar-1.png') }}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                <h4 class="mb-0 mt-2">{{ $user->name }}</h4>
                {{-- <p class="text-muted font-14">Founder</p> --}}

                {{-- <button type="button" class="btn btn-success btn-sm mb-2">Nhắn tin</button> --}}

                <div class="text-start mt-3">
                    <h4 class="font-13 text-uppercase">THÔNG TIN</h4>
                    <p class="text-muted font-13 mb-3">
                        {{ $user->profile->info }}
                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Họ tên :</strong> <span
                            class="ms-2">{{ $user->name }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Điện thoại :</strong><span
                            class="ms-2">{{ $user->phone }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Ngày sinh :</strong><span
                            class="ms-2">{{ date('d-m-Y', strtotime($user->birthday)) }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                            class="ms-2 ">{{ $user->email }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Thẻ người dùng :</strong></p>
                    @foreach ($user->tags as $v)
                        <span class="badge badge-outline-{{ $v->color }} rounded-pill">{{ $v->name }}</span>
                    @endforeach

                </div>

                {{-- <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                class="mdi mdi-youtube"></i></a>
                    </li>
                </ul> --}}
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col-->

    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#aboutme" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                            Thông tin người dùng
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            Tài khoản
                        </a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="aboutme">
                        {{-- Tiểu sử --}}
                        {{-- <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                            Lịch sử trị liệu</h5> --}}

                        <div class="timeline-alt pb-0">
                            <div class="timeline-alt pb-0">

                                @foreach ($user->orders as $order)
                                    @foreach ($order->books as $book)
                                        <div class="timeline-item">
                                            <i
                                                class="mdi mdi-calendar-account bg-{{ $book->status->color }}-lighten text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <p class="text-{{ $book->status->color }} fw-bold mb-1 d-block">
                                                    {{ $order->price->product->name }}
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
                                @endforeach
                            </div>

                        </div>
                        <!-- end timeline -->
                    </div> <!-- end tab-pane -->


                    {{-- <div class="tab-pane" id="settings">
                        <form>
                            <h5 class="mb-2 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Thông tin cá
                                nhân
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="name" class="form-label">Họ tên</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}"
                                            id="name" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1 position-relative" id="datepicker1">
                                        <label for="name" class="form-label">Điện thoại</label>
                                        <input type="text" name="birthday"
                                            value="{{ date('d-m-Y', strtotime($user->birthday)) }}"
                                            data-date-format="dd-mm-yyyy" data-date-autoclose="true"
                                            class="form-control" data-provide="datepicker"
                                            data-date-container="#datepicker1">
                                    </div>
                                </div> <!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="userbio" class="form-label">Thông tin người dùng</label>
                                        <textarea class="form-control" id="userbio" rows="4"
                                            placeholder="Thông tin người dùng...">{{ Auth::user()->profile->info }}</textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="email" class="form-label">Địa chỉ Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Địa chỉ Emai">
                                        <span class="form-text text-muted"><small>Nếu bạn muốn thay đổi địa chỉ Email
                                                vui lòng <a href="javascript: void(0);">kích</a> ở đây.</small></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password">
                                        <span class="form-text text-muted"><small>Nếu bạn muốn thay đổi mật khẩu vui
                                                lòng
                                                <a href="javascript: void(0);">kích</a> ở đây.</small></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>

                            <!-- end row -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i>
                                Thông tin Công ty</h5>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyname" class="form-label">Tên công ty</label>
                                        <input type="text" class="form-control" id="companyname"
                                            placeholder="Enter company name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cwebsite" class="form-label">Website</label>
                                        <input type="text" class="form-control" id="cwebsite"
                                            placeholder="Enter website url">
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Mạng xã
                                hội
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-fb" class="form-label">Facebook</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                            <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-tw" class="form-label">Youtube</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-youtube"></i></span>
                                            <input type="text" class="form-control" id="social-tw"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-success mt-2"><i
                                        class="mdi mdi-content-save"></i> Lưu</button>
                            </div>
                        </form>
                    </div> --}}
                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
