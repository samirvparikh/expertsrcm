<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
            Experts<span><strong>RCM</strong></span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">RCM Setup</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Administration</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        @can('edit posts')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">Users</a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{ route('offices.index') }}" class="nav-link">Offices</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('providers.index') }}" class="nav-link">Providers</a>
                        </li>                        
                        <li class="nav-item">
                            <a href="{{ route('insurances.index') }}" class="nav-link">Insurances</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patients.index') }}" class="nav-link">Patients</a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('eligibilities.index') }}" class="nav-link">
                  <i class="link-icon" data-feather="calendar"></i>
                  <span class="link-title">Eligibility</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#rolesPermission" role="button" aria-expanded="false"
                    aria-controls="rolesPermission">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Role & Permission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="rolesPermission">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}" class="nav-link">Permissions</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link">Roles</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rolepermissions.index') }}" class="nav-link">Role Permissions </a>
                        </li>
                    </ul>
                </div>
            </li>


            

            @role('superadmin')
            <li class="nav-item nav-category">Setting</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#setting" role="button" aria-expanded="false"
                    aria-controls="setting">
                    <i class="link-icon" data-feather="sliders"></i>
                    <span class="link-title">Setting</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="setting">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('options.index') }}" class="nav-link">Option Master</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endrole
        </ul>
    </div>
</nav>
