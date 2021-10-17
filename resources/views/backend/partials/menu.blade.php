            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Menu Dashboards-->
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('admin') }}"><i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">დაშბოარდი</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="store"><a class="nav-item-hold" href="#">
                        <ion-icon size="large" name="storefront-outline"></ion-icon>
                        <span class="nav-text">პროდუქცია</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('admin/sliders') }}"><i class="nav-icon i-Width-Window"></i>
                            <span class="nav-text">სლაიდერი</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('admin/offers') }}"><i class="nav-icon i-Tag-2"></i>
                            <span class="nav-text">შეთავაზებები</span>
                        </a>
                        <div class="triangle"></div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('admin/promotions') }}"><i class="nav-icon i-Medal-2"></i>
                            <span class="nav-text">აქციები</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="users">
                        <a class="nav-item-hold" href="{{ url('admin/users') }}">
                            <i class="nav-icon i-Administrator"></i><span class="nav-text">მომსმარებლები</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
                <!--// Menu Dashboards-->
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Submenu Dashboards-->
                <ul class="childNav" data-parent="store">
                    <li class="nav-item"><a href="{{ url('admin/products') }}"><i class="nav-icon i-Data-Upload"></i><span class="item-name">პროდუქტი</span></a></li>
                    <li class="nav-item"><a href="{{ url('admin/categories') }}"><i class="nav-icon i-Belt-3"></i><span class="item-name">კატეგორიები</span></a></li>
                </ul>

                <ul class="childNav" data-parent="users">
                    <li class="nav-item"><a href="{{ url('admin/users') }}"><i class="nav-icon i-Male"></i><span class="item-name">მომხმარებლები</span></a></li>
                    {{-- <li class="nav-item"><a href="{{ url('admin/roles') }}"><i class="nav-icon i-Checked-User"></i><span class="item-name">პრივილეგიები</span></a></li> --}}
                    <li class="nav-item"><a href="{{ url('admin/roles') }}"><i class="nav-icon i-Find-User"></i><span class="item-name">პრივილეგიები</span></a></li>
                </ul>

                <!--// Submenu Dashboards-->
            </div>
