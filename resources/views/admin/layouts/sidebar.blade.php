   <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed" style="
            background-image: url(/admin/img/design.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            ">

            <a class="logo-wrapper waves-effect">
                <img src="{{asset('images/wall.jpg')}}" class="img-fluid" alt="LOGO" style="width: 100%;max-height: 92px;">
            </a>

            <div class="list-group list-group-flush">

                <a href="/admin/dashboard" 
                    class="list-group-item list-group-item-action waves-effect
                    {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="fa fa-pie-chart mr-3"></i>
                    Dashboard
                </a>

                <a href="/admin/advertisement" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/advertisement') ? 'active' : '' }}">
                    <i class="fa fa-adn mr-3"></i>
                    Advertisement
                </a>

                <a href="/admin/category" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/category') ? 'active' : '' }}">
                    <i class="fa fa-clone mr-3"></i>
                    Category
                </a>

                <a href="/admin/view_brands" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/view_brands') ? 'active' : '' }}">
                    <i class="fa fa-tags mr-3"></i>
                    Brands 
                </a>
                <a href="/admin/view_admin" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/view_admin') ? 'active' : '' }}">
                    <i class="fa fa-user mr-3"></i>
                    Member
                </a>
                
                <a href="/admin/support" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/support') ? 'active' : '' }}">
                    <i class="fa fa-money mr-3"></i>
                    Contact 
                </a>
                
                <a href="/admin/carousel" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/carousel') ? 'active' : '' }}">
                    <i class="fa fa-sliders mr-3"></i>
                    Big Slider 
                </a>
                
                <a href="/admin/slider" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/slider') ? 'active' : '' }}">
                    <i class="fa fa-slideshare mr-3"></i>
                    Small Slider 
                </a>
                
                <a href="/admin/view-news" 
                    class="list-group-item list-group-item-action waves-effect 
                    {{ Request::is('admin/view-news') ? 'active' : '' }}">
                    <i class="fa fa-newspaper-o mr-3"></i>
                    News  
                </a>
                
            </div>

        </div>
