<div class="profile-cover">
    <img src="{{ asset('images/cover/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="cover">
    <div class="profile-box d-lg-block d-none">
        <div class="profile-content">
            <div class="image-section">
                <div class="profile-img">
                    <div>
                        <img src="{{ asset('images/user-sm/15.jpg') }}" class="img-fluid blur-up lazyload bg-img"
                             alt="profile">
                    </div>
                    <span class="stats">
                                    <img src="{{ asset('images/icon/verified.png') }}" class="img-fluid blur-up lazyload"
                                         alt="verified">
                                </span>
                </div>
            </div>
            <div class="profile-detail">
                <h2>kelin jasen <span>❤</span></h2>
                <h5>kelin.jasen156@gmail.com</h5>
                <div class="counter-stats">
                    <ul>
                        <li>
                            <h3 class="counter-value" data-count="546">0</h3>
                            <h5>following</h5>
                        </li>
                        <li>
                            <h3 class="counter-value" data-count="26335">0</h3>
                            <h5>likes</h5>
                        </li>
                        <li>
                            <h3 class="counter-value" data-count="6845">0</h3>
                            <h5>followers</h5>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editProfile"
                   class="btn btn-solid">edit profile</a>
            </div>
        </div>
    </div>
    <div class="setting-dropdown btn-group custom-dropdown arrow-none dropdown-sm">
        <a class="btn-white btn-cover" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">
            edit cover
        </a>
        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
            <ul>
                <li>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#choosePhoto"><i
                            class="icon-font-light iw-16 ih-16" data-feather="image"></i>choose
                        photo</a>
                </li>
                <li class="choose-file">
                    <a href="#"><i class="icon-font-light iw-16 ih-16" data-feather="upload"></i>upload
                        photo</a>
                    <input type="file">
                </li>
                <li>
                    <a href="#"><i class="icon-font-light iw-16 ih-16" data-feather="maximize"></i>set
                        position</a>
                </li>
                <li>
                    <a href="#"><i class="icon-font-light iw-16 ih-16" data-feather="trash-2"></i>remove
                        photo</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="d-lg-none d-block">
    <div class="profile-box">
        <div class="profile-content">
            <div class="image-section">
                <div class="profile-img">
                    <div>
                        <img src="{{ asset('images/user-sm/15.jpg') }}" class="img-fluid blur-up lazyload bg-img"
                             alt="profile">
                    </div>
                    <span class="stats">
                                    <img src="{{ asset('images/icon/verified.png') }}" class="img-fluid blur-up lazyload"
                                         alt="verified">
                                </span>
                </div>
            </div>
            <div class="profile-detail">
                <h2>kelin jasen <span>❤</span></h2>
                <h5>kelin.jasen156@gmail.com</h5>
                <div class="counter-stats">
                    <ul id="counter">
                        <li>
                            <h3 class="counter-value" data-count="546">0</h3>
                            <h5>following</h5>
                        </li>
                        <li>
                            <h3 class="counter-value" data-count="26335">0</h3>
                            <h5>likes</h5>
                        </li>
                        <li>
                            <h3 class="counter-value" data-count="6845">0</h3>
                            <h5>followers</h5>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editProfile"
                   class="btn btn-solid">edit profile</a>
            </div>
        </div>
    </div>
</div>
