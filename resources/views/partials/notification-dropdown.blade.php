<li class="header-btn custom-dropdown dropdown-lg btn-group notification-btn">
    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <x-feathericon-bell class="icon-light stroke-width-3 iw-16 ih-16"/>
        <span class="count warning">2</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
            <span>Notification</span>
            <div class="mobile-close">
                <h5>close</h5>
            </div>
        </div>
        <div class="dropdown-content">
            <ul class="friend-list">
                <li class="d-block">
                    <div>
                        <div class="media">
                            <img src="{{ asset('images/user-sm/5.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0"><span>Paige Turner</span> send you a friend
                                        request
                                    </h5>
                                    <h6> 1 mutual friend</h6>
                                    <div class="action-btns">
                                        <button type="button" class="btn btn-solid">
                                            <x-feathericon-check/>
                                        </button>
                                        <button type="button" class="btn btn-solid ms-1">
                                            <x-feathericon-x/>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/6.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0"><span>Bob Frapples</span> add their stories
                                    </h5>
                                    <h6>8 hour ago</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/7.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0"><span>Josephin water</span> have birthday
                                        today
                                    </h5>
                                    <h6>sun at 5.55 AM</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <img src="{{ asset('images/user-sm/2.jpg') }}" alt="user">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0"><span>Petey Cruiser</span> added a new
                                        photo
                                    </h5>
                                    <h6>sun at 5.40 AM</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</li>
