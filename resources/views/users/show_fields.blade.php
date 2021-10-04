<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('images/users/avatar-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                <h4 class="mb-0 mt-2">{{ $user->name }}</h4>
                <p class="text-muted font-14">Founder</p>

                <button type="button" class="btn btn-success btn-sm mb-2">Nhắn tin</button>

                <div class="text-start mt-3">
                    <h4 class="font-13 text-uppercase">Giới thiệu</h4>
                    <p class="text-muted font-13 mb-3">
                        Hi I'm Johnathn Nguyễn
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

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                class="mdi mdi-youtube"></i></a>
                    </li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col-->

    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#aboutme" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                            Thông tin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            Tài khoản
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="aboutme">
                        {{-- Tiểu sử --}}
                        <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                            Lịch sử trị liệu</h5>

                        <div class="timeline-alt pb-0">
                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                    <p class="font-14">websitename.com <span class="ms-2 font-12">Year: 2015 -
                                            18</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
                                        would be desirable: one could refuse to pay expensive translators.
                                        To achieve this, it would be necessary to have uniform grammar,
                                        pronunciation and more common words.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                    <p class="font-14">Software Inc. <span class="ms-2 font-12">Year: 2012 -
                                            15</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
                                        of the resulting language is more simple and regular than that of
                                        the individual languages. The new common language will be more
                                        simple and regular than the existing European languages.</p>

                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                    <p class="font-14">Coderthemes Design LLP <span class="ms-2 font-12">Year:
                                            2010 - 12</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
                                        the same family. Their separate existence is a myth. For science
                                        music sport etc, Europe uses the same vocabulary. The languages
                                        only differ in their grammar their pronunciation.</p>
                                </div>
                            </div>

                        </div>
                        <!-- end timeline -->
                    </div> <!-- end tab-pane -->


                    <div class="tab-pane" id="settings">
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
                            </div> <!-- end row -->

                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="userbio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="userbio" rows="4"
                                            placeholder="Write something..."></textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row --> --}}

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
                            </div> <!-- end row -->

                            {{-- <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i>
                                Thông tin Công ty</h5>
                            <div class="row"> --}}
                            {{-- <div class="col-md-6">
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
                            </div> --}}
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
                            </div> <!-- end row -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-success mt-2"><i
                                        class="mdi mdi-content-save"></i> Lưu</button>
                            </div>
                        </form>
                    </div>
                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
