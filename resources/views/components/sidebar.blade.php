<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <x-sidebar-brand title="Sb Admin" href="#" class="rotate-n-15" icon="fas fa-laugh-wink"
                     icon-rotate="rotate-n-15"/>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <x-nav-item-dashboard icon="fas fa-fw fa-tachometer-alt" href="#" title="Dashboard"/>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <x-nav-item-drop-down title="Components" icon="fas fa-fw fa-cog" data-target="#collapseTwo"/>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <x-nav-item-drop-down-title title="Custom Components:"/>
                <x-nav-item-drop-down-menu title="Buttons" href="#"/>
                <x-nav-item-drop-down-menu title="Cards" href="#"/>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
