<!-- Sidebar chat start -->
<?php
$login_user= \Illuminate\Support\Facades\Auth::user();
?>
<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="card card_main p-fixed users-main">
            <div class="user-box">
                <div class="card-block">
                    <div class="right-icon-control">
                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                        <div class="form-icon">
                            <i class="icofont icofont-search"></i>
                        </div>
                    </div>
                </div>
                <div class="main-friend-list">
                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Josephin Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Lary Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-2.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alice</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u2.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alia</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Suzen</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-3.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Michael Scofield</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-4.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Irina Shayk</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-5.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Sara Tancredi</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Samon</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Daizy Mendize</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-3.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Loren Scofield</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-4.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Shayk</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u3.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Sara</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                        <a class="media-left" href="#!">
                            <img class="media-object img-circle" src="{{asset('dashboard/assets/images/task/task-u1.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Lary</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar inner chat start-->
<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="icofont icofont-rounded-left"></i> Josephin Doe
        </a>
    </div>
    <div class="media chat-messages">
        <a class="media-left photo-table" href="#!">
            <img class="media-object img-circle m-t-5" src="{{asset('dashboard/assets/images/avatar-1.png')}}" alt="Generic placeholder image">
        </a>
        <div class="media-body chat-menu-content">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="media chat-messages">
        <div class="media-body chat-menu-reply">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media-right photo-table">
            <a href="#!">
                <img class="media-object img-circle m-t-5" src="{{asset('dashboard/assets/images/avatar-2.png')}}" alt="Generic placeholder image">
            </a>
        </div>
    </div>
    <div class="chat-reply-box p-b-20">
        <div class="right-icon-control">
            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
            <div class="form-icon">
                <i class="icofont icofont-paper-plane"></i>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar inner chat end-->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar" pcoded-header-position="relative">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">

                        @if($login_user->image=='')
                            <img  class="img-40" src="{{asset('dashboard/assets/images/user.png')}}" alt="User-Profile-Image">
                        @else

                            <img  class="img-40"  src="{{asset($login_user->image)}}" alt="User-Profile-Image">
                        @endif

                        <div class="user-details">
                            {{--<span> <i class="ti-angle-down"></i></span>--}}
                            <span id="more-details">{{$login_user->name}}<i class="ti-angle-down"></i></span>
                        </div>
                    </div>

                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="{{url('AdminPanel/Admins/'.$login_user->id)}}"><i class="ti-user"></i>View Profile</a>
{{--                                <a href="#!"><i class="ti-settings"></i>Settings</a>--}}
                                <a href="{{ route('logout') }} "
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                "><i class=" icofont icofont-logout"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-home"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="{{url('AdminPanel/Dashboard')}}">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.dash.default">Dashboard</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dashboard-ecommerce.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dashboard-crm.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dashboard-analytics.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>--}}
                                    {{--<span class="pcoded-badge label label-info ">NEW</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dashboard-project.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}


                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" >
                            <span class="pcoded-micon"><i class="icofont icofont-navigation-menu"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.navigate.main">Projects</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{url('AdminPanel/Projects')}}" >
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar">Show ALL</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{url('AdminPanel/Projects/create')}}" >
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar-inverse">Add Project</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            {{--<li class=" ">--}}
                                {{--<a href="navbar-elements.html" >--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.navigate.navbar-with-elements">Navbar With Elements</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>

                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" >
                            <span class="pcoded-micon"><i class="icofont icofont-news"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.navigate.main">Tasks</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{url('AdminPanel/Tasks')}}" >
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar">Show ALL</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{url('AdminPanel/Tasks/create')}}" >
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.navigate.navbar-inverse">Add Task</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>



                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element" menu-title-theme="theme5">UI Element</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.main">Basic Components</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="alert.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alert</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="breadcrumb.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="button.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.button">Button</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="box-shadow.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.box-shadow" >Box-Shadow</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="accordion.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.collapse–accordion">Accordion</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="generic-class.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.generic-class">Generic Class</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="tabs.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.tabs">Tabs</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="color.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.color">Color</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="label-badge.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.label-badge">Label Badge</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="progress-bar.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.progress-bar">Progress Bar</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="preloader.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.pre-loader">Pre-Loader</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="list.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.list">List</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="tooltip.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="typography.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Typography</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="other.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.basic-components.other">Other</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-crown"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.main">Advance Components</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="draggable.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.draggable">Draggable</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="bs-grid.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.grid-stack">Grid Stack</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="light-box.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.light-box">Light Box</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="modal.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.modal">Modal</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="modal-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.modal-form">Modal Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="notification.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.notifications">Notifications</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="notify.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.pnotify">PNOTIFY</span>--}}
                                    {{--<span class="pcoded-badge label label-info">NEW</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="rating.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.rating">Rating</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="range-slider.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.range-slider">Range Slider</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="slider.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.slider">Slider</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="syntax-highlighter.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.syntax-highlighter">Syntax Highlighter</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="tour.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.tour">Tour</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="treeview.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.tree-view">Tree View</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="nestable.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.nestable">Nestable</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="toolbar.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.toolbar">Toolbar</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="x-editable.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.advance-components.x-editable">X-Editable</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-gift"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.extra-components.main">Extra Components</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="session-timeout.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.extra-components.session-timeout">Session Timeout</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="session-idle-timeout.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.extra-components.session-idle-timeout">Session Idle Timeout</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="offline.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.extra-components.offline">Offline</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="animation.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.animations.main">Animations</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="sticky.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layers-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.sticky-notes.main">Sticky Notes</span>--}}
                            {{--<span class="pcoded-badge label label-danger">HOT</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-star"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.icons.main">Icons</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-font-awesome.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.font-awesome">Font Awesome</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-themify.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.themify">Themify</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-simple-line.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.simple-line-icon">Simple Line Icon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-ion.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.ion-icon">Ion Icon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-material-design.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.material-design">Material Design</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-icofonts.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.ico-fonts">Ico Fonts</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-weather.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.weather-icon">Weather Icon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-typicons.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.typicons">Typicons</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="icon-flags.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.icons.flags">Flags</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme5">Forms</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layers"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="form-elements-component.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Form Components</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="form-elements-add-on.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Form-Elements-Add-On</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="form-elements-advance.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-advance">Form-Elements-Advance</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="form-validation.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.form-components.form-validation">Form Validation</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="form-picker.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.form-pickers.main">Form Picker</span>--}}
                            {{--<span class="pcoded-badge label label-warning">NEW</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.json-form.main">JSON Form</span>--}}
                            {{--<span class="pcoded-badge label label-danger">HOT</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/simple-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.simple-form">Simple Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/clubs.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.clubs-view">Clubs(View Selector)</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/customer-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.customer-form">Customer Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/customer-profile-display-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.profile-display">Profile Display</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/customer-profile-edit-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.profile-edit">Profile Edit</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/customer-profile-read-only.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.profile-ready-only">Profile Ready Only</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/json-form-fields.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.form-fields">Form Fields</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/registration-click-validation.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.registration-validation">Registration Validation</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/registration-automatic-validation.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.automatic-validation">Automatic Validation</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="json-forms/localized-login.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.json-form.localized-login">Localized Login</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="form-select.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-shortcode"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.form-select.main">Form Select</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="form-masking.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-write"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.form-masking.main">Form Masking</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="form-wizard.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-archive"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.form-wizard.main">Form Wizard</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-receipt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.main">Ready To Use</span>--}}
                            {{--<span class="pcoded-badge label label-danger">HOT</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-cloned-elements-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.cloned-elements-form">Cloned Elements Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-currency-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.currency-form">Currency Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-form-booking.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-form">Booking Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-form-booking-multi-steps.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-multi-steps-form">Booking Multi Steps Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-form-comment.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.comment-form">Comment Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-form-contact.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.contact-form">Contact Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-job-application-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.job-application-form">Job Application Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-js-addition-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.jS-addition-form">JS Addition Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-login-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.login-form">Login Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-popup-modal-form.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.popup-modal-form">Popup Modal Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-registration-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.registration-form">Registration Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-review-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.review-form">Review Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-subscribe-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.subscribe-form">Subscribe Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-suggestion-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.suggestion-form">Suggestion Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="ready-tabs-form.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.ready-to-use.tabs-form">Tabs Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables" menu-title-theme="theme5">Tables</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-receipt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Bootstrap Table</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="bs-basic-table.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Basic Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="bs-table-sizing.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">Sizing Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="bs-table-border.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.border-table">Border Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="bs-table-styling.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.bootstrap-table.styling-table">Styling Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-widgetized"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table.main">Data Table</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-basic.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.basic-initialization">Basic Initialization</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-advance.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.advance-initialization">Advance Initialization</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-styling.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.styling">Styling</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-api.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.api">API</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ajax.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.ajax">Ajax</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-server-side.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.server-side">Server Side</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-plugin.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.plug-in">Plug-In</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-data-sources.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table.data-sources">Data Sources</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-loop"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.main">Data Table Extensions</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-autofill.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.autofill">AutoFill</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="pcoded-hasmenu">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.main">Button</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="pcoded-submenu">--}}
                                    {{--<li class=" ">--}}
                                        {{--<a href="dt-ext-basic-buttons.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.basic-button">Basic Button</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class=" ">--}}
                                        {{--<a href="dt-ext-buttons-flash.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.flash-button">Flash Button</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class=" ">--}}
                                        {{--<a href="dt-ext-buttons-html-5-data-export.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.html-data-export">Html-5 Data Export</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class=" ">--}}
                                        {{--<a href="dt-ext-buttons-print.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.print-button">Print Button</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-col-reorder.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.col-reorder">Col Reorder</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-fixed-columns.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-columns">Fixed Columns</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-fixed-header.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-header">Fixed Header</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-key-table.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.key-table">Key Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-responsive.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.responsive">Responsive</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-row-reorder.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.row-recorder">Row Recorder</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-scroller.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.scroller">Scroller</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class=" ">--}}
                                {{--<a href="dt-ext-select.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.data-table-extensions.select-tbl">Select Table</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="foo-table.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.foo-table.main">FooTable</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-view-list"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.main">Handson Table</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-appearance.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.appearance">Appearance</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-data-operation.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.data-operation">Data Operation</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-rows-cols.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.rows-columns">Rows Columns</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-columns-only.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.columns-Only">Columns Only</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-cell-features.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.cell-features">Cell Features</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-cell-types.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.cell-types">Cell Types</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-integrations.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.integrations">Integrations</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-rows-only.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.rows-Only">Rows Only</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="handson-utilities.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.handson-table.utilities">Utilities</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="editable-table.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-write"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.editable-table.main">Editable Table</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.chart-and-maps" menu-title-theme="theme5">Chart And Maps</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.charts.main">Charts</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-google.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.google-chart">Google Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-echart.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.echarts">Echarts</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-chartjs.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.chartjs">ChartJs</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-list.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.list-chart">List Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-float.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.float-chart">Float Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-knob.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.know-chart">Know chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-morris.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.morris-chart">Morris Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-nvd3.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.nvd3-chart">Nvd3 Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-peity.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.peity-chart">Peity Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-radial.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.radial chart">Radial Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-rickshaw.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.rickshaw-chart">Rickshaw Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-sparkline.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.sparkline-chart">Sparkline Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="chart-c3.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.charts.c3-chart">C3 Chart</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-map-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.maps.main">Maps</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="map-google.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maps.google-maps">Google Maps</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="map-vector.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maps.vector-map">Vector Maps</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="map-api.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maps.google-map-api">Google Map Search API</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="location.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maps.location">Location</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="landingpage/index.html" target="_blank">--}}
                            {{--<span class="pcoded-micon"><i class="ti-mobile"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.landing-page.main">Landing Page</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages" menu-title-theme="theme5">Pages</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-id-badge"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.authentication.main">Authentication</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-normal-sign-in.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.login-bg-image">Login With BG Image</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-in-social.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-icon">Login With Social Icon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-in-social-header-footer.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-h-f">Login Social With Header And Footer</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-normal-sign-in-header-footer.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.login-h-f">Login With Header And Footer</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-up.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.registration-bg-image">Registration BG Image</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-up-social.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-icon">Registration Social Icon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-up-social-header-footer.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-h-f">Registration Social With Header And Footer</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-sign-up-header-footer.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.registration-h-f">Registration With Header And Footer</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-multi-step-sign-up.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.multi-step-registration">Multi Step Registration</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-reset-password.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.forgot-password">Forgot Password</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-lock-screen.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.lock-screen">Lock Screen</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="auth-modal.html" target="_blank">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.authentication.modal">Modal</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-settings"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.maintenance.main">Maintenance</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="error.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maintenance.error">Error</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="comming-soon.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maintenance.comming-soon">Comming Soon</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="offline-ui.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.maintenance.offline-ui">Offline UI</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-user"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.user-profile.main">User Profile</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="timeline.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.user-profile.timeline">Timeline</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="timeline-social.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.user-profile.timeline-social">Timeline Social</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="user-profile.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.user-profile.user-profile">User Profile</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="user-card.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">User Card</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-comment-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.blog.main">Blog</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="blog.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.blog.blog">Blog</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.blog.blog-detail">Blog Detail</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="blog-detail-left.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.blog.blog-left-side">Blog With Left Sidebar</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="blog-detail-right.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.blog.blog-right-sidebar">Blog With Right Sidebar</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.main">E-Commerce</span>--}}
                            {{--<span class="pcoded-badge label label-danger">NEW</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="product.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.product">Product</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="product-list.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.product-list">Product List</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="product-edit.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.product-edit">Product Edit</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="product-detail.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.product-detail">Product Detail</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="product-cart.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.product-card">Product Card</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="product-payment.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.e-commerce.credit-card-form">Credit Card Form</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-email"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.email.main">E-Email</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="email-compose.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.email.compose-mail">Compose Email</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="email-inbox.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.email.inbox">Inbox</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="email-read.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.email.read-read-mail">Read Mail</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="pcoded-hasmenu ">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-email"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.main">Email Template</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="pcoded-submenu">--}}
                                    {{--<li class="">--}}
                                        {{--<a href="email-templates/email-welcome.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.welcome-email">Welcome Email</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="">--}}
                                        {{--<a href="email-templates/email-password.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.reset-password">Reset Password</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="">--}}
                                        {{--<a href="email-templates/email-newsletter.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.newsletter-email">Newsletter Email</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="">--}}
                                        {{--<a href="email-templates/email-launch.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.app-launch">App Launch</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="">--}}
                                        {{--<a href="email-templates/email-activation.html">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.email.email-template.activation-code">Activation Code</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.app" menu-title-theme="theme5">App</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class=" ">--}}
                        {{--<a href="chat.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-comments"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.chat.main">Chat</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class=" ">--}}
                        {{--<a href="crm-contact.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-list-thumb"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.crm-contact.main">CRM Contact</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-dribbble"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.social.main">Social</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="fb-wall.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.social.fb-wall">Fb Wall</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="message.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.social.messages">Messages</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-check-box"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.task.main">Task</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="task-list.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.task.task-list">Task List</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="task-board.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.task.task-board">Task Board</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="task-detail.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.task.task-detail">Task Detail</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="issue-list.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.task.issue list">Issue List</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-notepad"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.to-do.main">To-Do</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="todo.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.to-do.todo">To-Do</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="notes.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.to-do.notes">Notes</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-gallery"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.gallery.main">Gallery</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="gallery-grid.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.gallery.gallery-grid">Gallery-Grid</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="gallery-masonry.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.gallery.masonry-gallery">Masonry Gallery</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="gallery-advance.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.gallery.advance-gallery">Advance Gallery</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-search"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.search.main">Search</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="search-result.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.search.simple-search">Simple Search</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="search-result2.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.search.grouping-search">Grouping Search</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-medall-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.job-search.main">Job Search</span>--}}
                            {{--<span class="pcoded-badge label label-danger">NEW</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="job-card-view.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.job-search.card-view">Card View</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="job-details.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.job-search.job-detailed">Job Detailed</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="job-find.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.job-search.job-find">Job Find</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="job-panel-view.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.job-search.job-panel-view">Job Panel View</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension" menu-title-theme="theme5">Extension</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.editor.main">Editor</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="ck-editor.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.editor.ck-editor">CK-Editor</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="wysiwyg-editor.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.editor.wysiwyg-editor">WYSIWYG Editor</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="ace-editor.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.editor.ace-editor">Ace Editor</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="summernote.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.editor.summer-note-editor">Summer Note Editor</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="long-press-editor.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.editor.long-press-editor">Long Press Editor</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-media-right"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.invoice.main">Invoice</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="invoice.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.invoice.invoice">Invoice</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="invoice-summary.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.invoice.invoice-summery">Invoice Summary</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="invoice-list.html"><span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.invoice.invoice-list">Invoice List</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-calendar"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.event-calendar.main">Event Calendar</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="event-full-calender.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.full-calendar.full-calendar">Full Calendar</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="event-clndr.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.clnder.clnder">CLNDER</span>--}}
                                    {{--<span class="pcoded-badge label label-info">NEW</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="image-crop.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-cut"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.image-cropper.main">Image Cropper</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="file-upload.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-cloud-up"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.file-upload.main">File Upload</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-world"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.main">Internationalize</span>--}}
                            {{--<span class="pcoded-badge label label-danger">HOT</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="internationalization/internationalization-after-init.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.after-init">After Init</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="internationalization/internationalization-fallback.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.fallback">Fallback</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="internationalization/internationalization-on-init.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.on-int">On Init</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="internationalization/internationalization-resources.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.resources">Resources</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="internationalization/internationalization-xhr-backend.html">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.internationalize.xhr-backend">XHR Backend</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="change-loges.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-list"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.change-loges.main">Change Loges</span>--}}
                            {{--<span class="pcoded-badge label label-warning">1.0</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.other" menu-title-theme="theme5">Other</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="pcoded-hasmenu ">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<span class="pcoded-micon"><i class="ti-direction-alt"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="pcoded-submenu">--}}
                            {{--<li class="">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="pcoded-hasmenu ">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-direction-alt"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="pcoded-submenu">--}}
                                    {{--<li class="">--}}
                                        {{--<a href="javascript:void(0)">--}}
                                            {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                            {{--<span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>--}}
                                            {{--<span class="pcoded-mcaret"></span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="pcoded-micon"><i class="ti-angle-right"></i></span>--}}
                                    {{--<span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>--}}
                                    {{--<span class="pcoded-mcaret"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="javascript:void(0)" class="disabled">--}}
                            {{--<span class="pcoded-micon"><i class="ti-na"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.disabled-menu.main">Disabled Menu</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="active">--}}
                        {{--<a href="sample-page.html">--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.sample-page.main">Sample Page</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="pcoded-navigatio-lavel" data-i18n="nav.category.support" menu-title-theme="theme5">Support</div>--}}
                {{--<ul class="pcoded-item pcoded-left-item">--}}
                    {{--<li class="">--}}
                        {{--<a href="http://flatable.phoenixcoded.net/doc" target="_blank">--}}
                            {{--<span class="pcoded-micon"><i class="ti-file"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.documentation.main">Documentation</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="https://support.phoenixcoded.net/#/home" target="_blank" >--}}
                            {{--<span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>--}}
                            {{--<span class="pcoded-mtext" data-i18n="nav.submit-issue.main">Submit Issue</span>--}}
                            {{--<span class="pcoded-mcaret"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </nav>

