<header>
    <div class="mobile-fix-menu"></div>
    <div class="container-fluid custom-padding">
        <div class="header-section">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('images/icon/logo.png') }}" alt="logo" class="img-fluid blur-up lazyload">
                    </a>
                </div>
                <div class="search-box">
                    <i data-feather="search" class="icon iw-16 icon-light"></i>
                    <input type="text" class="form-control search-type" placeholder="find friends...">
                    <div class="icon-close">
                        <i data-feather="x" class="iw-16 icon-light"></i>
                    </div>
                    <div class="search-suggestion">
                        <span class="recent">recent search</span>
                        <ul class="friend-list">
                            <li>
                                <div class="media">
                                    <img src="../assets/images/user-sm/9.jpg" alt="user">
                                    <div class="media-body">
                                        <div>
                                            <h5 class="mt-0">Paige Turner</h5>
                                            <h6> 1 mutual friend</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="../assets/images/user-sm/12.jpg" alt="user">
                                    <div class="media-body">
                                        <div>
                                            <h5 class="mt-0">Paige Turner</h5>
                                            <h6> 1 mutual friend</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="../assets/images/user-sm/15.jpg" alt="user">
                                    <div class="media-body">
                                        <div>
                                            <h5 class="mt-0">Paige Turner</h5>
                                            <h6> 1 mutual friend</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="btn-group">
                    <li class="header-btn home-btn">
                        <a class="main-link" href="index.html">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="home"></i>
                        </a>
                    </li>
                    <li class="header-btn custom-dropdown dropdown-lg add-friend">
                        <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="user-plus"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <span>friend request</span>
                                <div class="mobile-close">
                                    <h5>close</h5>
                                </div>
                            </div>
                            <div class="dropdown-content">
                                <ul class="friend-list">
                                    <li>
                                        <div class="media">
                                            <img src="../assets/images/user-sm/5.jpg" alt="user">
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="mt-0">Paige Turner</h5>
                                                    <h6> 1 mutual friend</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-btns">
                                            <button type="button" class="btn btn-solid">confirm</button>
                                            <button type="button" class="btn btn-outline ms-1">delete</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img src="../assets/images/user-sm/6.jpg" alt="user">
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="mt-0">Paige Turner</h5>
                                                    <h6> 1 mutual friend</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-btns">
                                            <button type="button" class="btn btn-solid">confirm</button>
                                            <button type="button" class="btn btn-outline ms-1">delete</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img src="../assets/images/user-sm/7.jpg" alt="user">
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="mt-0">Paige Turner</h5>
                                                    <h6> 1 mutual friend</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-btns">
                                            <button type="button" class="btn btn-solid">confirm</button>
                                            <button type="button" class="btn btn-outline ms-1">delete</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img src="../assets/images/user-sm/2.jpg" alt="user">
                                            <div class="media-body">
                                                <div>
                                                    <h5 class="mt-0">Paige Turner</h5>
                                                    <h6> 1 mutual friend</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-btns">
                                            <button type="button" class="btn btn-solid">confirm</button>
                                            <button type="button" class="btn btn-outline ms-1">delete</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <div class="post-stats">
                    <ul>
                        <li>
                            <h3>326</h3>
                            <span>total posts</span>
                        </li>
                        <li>
                            <h3>2456</h3>
                            <span>total friends</span>
                        </li>
                    </ul>
                </div>
                <ul class="option-list">
                    <li class="header-btn custom-dropdown dropdown-lg btn-group message-btn">
                        <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="message-circle"></i><span
                                class="count success">2</span>
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
                                                <img src="../assets/images/user-sm/1.jpg" alt="user">
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
                                                <img src="../assets/images/user-sm/2.jpg" alt="user">
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
                                                <img src="../assets/images/user-sm/3.jpg" alt="user">
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
                    <li class="header-btn custom-dropdown">
                        <a id="dark-1" class="main-link" href="javascript:void(0)">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="moon"></i>
                        </a>
                        <a id="light-1" class="main-link d-none" href="javascript:void(0)">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="sun"></i>
                        </a>
                    </li>
                    <li class="header-btn custom-dropdown d-md-none d-block app-btn">
                        <a class="main-link" href="javascript:void(0)">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="grid"></i>
                        </a>
                        <div class="overlay-bg app-overlay"></div>
                        <div class="app-box">
                            <div class="row">
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="index.html">
                                            <div class="icon">
                                                <i data-feather="file" class="bar-icon"></i>
                                            </div>
                                            <h5>Newsfeed</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="single-page.html">
                                            <div class="icon">
                                                <i data-feather="star" class="bar-icon"></i>
                                            </div>
                                            <h5>favourite</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="#">
                                            <div class="icon">
                                                <i data-feather="users" class="bar-icon"></i>
                                            </div>
                                            <h5>group</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="music.html">
                                            <div class="icon">
                                                <i data-feather="headphones" class="bar-icon"></i>
                                            </div>
                                            <h5>music</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="weather.html">
                                            <div class="icon">
                                                <i data-feather="cloud" class="bar-icon"></i>
                                            </div>
                                            <h5>weather</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="event.html">
                                            <div class="icon">
                                                <i data-feather="calendar" class="bar-icon"></i>
                                            </div>
                                            <h5>calender</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="#">
                                            <div class="icon">
                                                <svg class="bar-icon">
                                                    <use class="fill-color"
                                                         xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#cake"></use>
                                                </svg>
                                            </div>
                                            <h5>event</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="app-icon">
                                        <a href="games.html">
                                            <div class="icon">
                                                <svg class="bar-icon">
                                                    <use class="fill-color"
                                                         xlink:href="https://themes.pixelstrap.com/friendbook/assets/svg/icons.svg#game-controller">
                                                    </use>
                                                </svg>
                                            </div>
                                            <h5>games</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-btn custom-dropdown dropdown-lg btn-group notification-btn">
                        <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="bell"></i><span
                                class="count warning">2</span>
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
                                                <img src="../assets/images/user-sm/5.jpg" alt="user">
                                                <div class="media-body">
                                                    <div>
                                                        <h5 class="mt-0"><span>Paige Turner</span> send you a friend
                                                            request
                                                        </h5>
                                                        <h6> 1 mutual friend</h6>
                                                        <div class="action-btns">
                                                            <button type="button" class="btn btn-solid"><i
                                                                    data-feather="check"></i></button>
                                                            <button type="button" class="btn btn-solid ms-1"><i
                                                                    data-feather="x"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <img src="../assets/images/user-sm/6.jpg" alt="user">
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
                                                <img src="../assets/images/user-sm/7.jpg" alt="user">
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
                                                <img src="../assets/images/user-sm/2.jpg" alt="user">
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
                    @include('partials.profile-dropdown')
                </ul>
            </div>
        </div>
    </div>
</header>
