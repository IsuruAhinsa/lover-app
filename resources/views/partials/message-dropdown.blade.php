<li class="header-btn custom-dropdown dropdown-lg btn-group message-btn">
    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <x-feathericon-message-circle class="icon-light stroke-width-3 iw-16 ih-16"/>
        <span class="count success">2</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
            <div class="left-title">
                <span>messages</span>
            </div>
            <div class="right-option">
                <ul>
                    <li>
                        <a href="#">
                            <i class="iw-16 ih-16" data-feather="maximize"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="iw-16 ih-16" data-feather="edit"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="iw-16 ih-16" data-feather="more-horizontal"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-close">
                <h5>close</h5>
            </div>
        </div>
        <div class="search-bar input-style icon-left">
            <i class="iw-16 ih-16 icon" data-feather="search"></i>
            <input type="text" class="form-control" placeholder="search messages...">
        </div>
        <div class="dropdown-content">
            <ul class="friend-list">
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/1.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">Paige Turner</h5>
                                    <h6>Are you there ?</h6>
                                </div>
                            </div>
                        </div>
                        <div class="active-status">
                            <span class="active"></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/2.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">Paige Turner</h5>
                                    <h6>Are you there ?</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/3.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0">Bob Frapples</h5>
                                    <h6>hello ! how are you ?</h6>
                                </div>
                            </div>
                        </div>
                        <div class="active-status">
                            <span class="offline"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</li>
