<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('images/users/avatar-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                <h4 class="mb-0 mt-2">{{ $user->name }}</h4>
                <p class="text-muted font-14">Founder</p>

                <button type="button" class="btn btn-success btn-sm mb-2">Theo dõi</button>
                <button type="button" class="btn btn-danger btn-sm mb-2">Tin nhắn</button>

                <div class="text-start mt-3">
                    <h4 class="font-13 text-uppercase">Giới thiệu</h4>
                    <p class="text-muted font-13 mb-3">
                        Hi I'm Johnathn Nguyễn
                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Họ tên :</strong> <span class="ms-2">{{ $user->name }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Điện thoại :</strong><span class="ms-2">{{ $user->phone }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                            class="ms-2 ">{{ $user->email }}</span></p>

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

        <!-- Messages-->
        {{-- <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Messages</h4>

                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author">Tomaslau</p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                        <p class="inbox-item-date">
                            <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                        </p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author">Stillnotdavid</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date">
                            <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                        </p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author">Kurafire</p>
                        <p class="inbox-item-text">Nice to meet you</p>
                        <p class="inbox-item-date">
                            <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                        </p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author">Shahedk</p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                        <p class="inbox-item-date">
                            <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                        </p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author">Adhamdannaway</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date">
                            <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                        </p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end card-body-->
        </div>
        <!-- end card--> --}}

    </div> <!-- end col-->

    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            Tiểu sử
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                            Nhật ký
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            Cài đặt
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="aboutme">

                        {{-- Tiểu sử --}}
                        <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                            Experience</h5>

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
                                    <p class="font-14">Coderthemes Design LLP <span
                                            class="ms-2 font-12">Year: 2010 - 12</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
                                        the same family. Their separate existence is a myth. For science
                                        music sport etc, Europe uses the same vocabulary. The languages
                                        only differ in their grammar their pronunciation.</p>
                                </div>
                            </div>

                        </div>
                        <!-- end timeline -->

                    </div> <!-- end tab-pane -->
                    <!-- end about me section content -->

                    <div class="tab-pane show active" id="timeline">

                        <!-- comment box -->
                        <div class="border rounded mt-2 mb-3">
                            <form action="#" class="comment-area-box">
                                <textarea rows="3" class="form-control border-0 resize-none"
                                    placeholder="Bạn đang nghĩ gì...."></textarea>
                                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                class="mdi mdi-account-circle"></i></a>
                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                class="mdi mdi-map-marker"></i></a>
                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                class="mdi mdi-camera"></i></a>
                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i
                                                class="mdi mdi-emoticon-outline"></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Post</button>
                                </div>
                            </form>
                        </div> <!-- end .border-->
                        <!-- end comment box -->

                        <!-- Story Box-->
                        <div class="border border-light rounded p-2 mb-3">
                            <div class="d-flex">
                                <img class="me-2 rounded-circle" src="{{ asset('images/users/avatar-3.jpg') }}"
                                    alt="Generic placeholder image" height="32">
                                <div>
                                    <h5 class="m-0">Jeremy Tomlinson</h5>
                                    <p class="text-muted"><small>about 2 minuts ago</small></p>
                                </div>
                            </div>
                            <p>Story based around the idea of time lapse, animation to post soon!</p>

                            <img src="{{ asset('images/small/small-1.jpg') }}" alt="post-img" class="rounded me-1"
                                height="60">
                            <img src="{{ asset('images/small/small-2.jpg') }}" alt="post-img" class="rounded me-1"
                                height="60">
                            <img src="{{ asset('images/small/small-3.jpg') }}" alt="post-img" class="rounded"
                                height="60">

                            <div class="mt-2">
                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                        class="mdi mdi-reply"></i> Trả lời</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                        class="mdi mdi-heart-outline"></i> Thích</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                        class="mdi mdi-share-variant"></i> Chia sẽ</a>
                            </div>
                        </div>

                        <!-- Story Box-->
                        <div class="border border-light rounded p-2 mb-3">
                            <div class="d-flex">
                                <img class="me-2 rounded-circle" src="{{ asset('images/users/avatar-4.jpg') }}"
                                    alt="Generic placeholder image" height="32">
                                <div>
                                    <h5 class="m-0">Thelma Fridley</h5>
                                    <p class="text-muted"><small>about 1 hour ago</small></p>
                                </div>
                            </div>
                            <div class="font-16 text-center fst-italic text-dark">
                                <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                                gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                porta. Mauris massa.
                            </div>

                            <div class="mx-n2 p-2 mt-3 bg-light">
                                <div class="d-flex">
                                    <img class="me-2 rounded-circle" src="{{ asset('images/users/avatar-3.jpg') }}"
                                        alt="Generic placeholder image" height="32">
                                    <div>
                                        <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3
                                                hours ago</small></h5>
                                        Nice work, makes me think of The Money Pit.

                                        <br>
                                        <a href="javascript: void(0);"
                                            class="text-muted font-13 d-inline-block mt-2"><i
                                                class="mdi mdi-reply"></i> Trả lời</a>

                                        <div class="d-flex mt-3">
                                            <a class="pe-2" href="#">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="rounded-circle"
                                                    alt="Generic placeholder image" height="32">
                                            </a>
                                            <div>
                                                <h5 class="mt-0">Thelma Fridley <small
                                                        class="text-muted">5 hours ago</small></h5>
                                                i'm in the middle of a timelapse animation myself! (Very different
                                                though.) Awesome stuff.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-2">
                                    <a class="pe-2" href="#">
                                        <img src="{{ asset('images/users/avatar-1.jpg') }}" class="rounded-circle"
                                            alt="Generic placeholder image" height="32">
                                    </a>
                                    <div class="w-100">
                                        <input type="text" id="simpleinput"
                                            class="form-control border-0 form-control-sm" placeholder="Add comment">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i
                                        class="mdi mdi-heart"></i> Thích (28)</a>
                                <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                        class="mdi mdi-share-variant"></i> Chia sẽ</a>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="javascript:void(0);" class="text-danger"><i
                                    class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                        </div>

                    </div>
                    <!-- end timeline content-->

                    <div class="tab-pane" id="settings">
                        <form>
                            <h5 class="mb-2 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Thông tin cá nhân
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="name" class="form-label">Họ tên</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}" id="name"
                                            placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1 position-relative" id="datepicker1">
                                        <label for="name" class="form-label">Điện thoại</label>
                                        <input type="text" name="birthday" value="{{ date('d-m-Y', strtotime($user->birthday)) }}" data-date-format="dd-mm-yyyy" data-date-autoclose="true" class="form-control"
                                            data-provide="datepicker" data-date-container="#datepicker1">
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
                                        <span class="form-text text-muted"><small>Nếu bạn muốn thay đổi địa chỉ Email vui lòng <a
                                                    href="javascript: void(0);">kích</a> ở đây.</small></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password">
                                        <span class="form-text text-muted"><small>Nếu bạn muốn thay đổi mật khẩu vui lòng
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
                            </div>  --}}
                            <!-- end row -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Mạng xã hội
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
