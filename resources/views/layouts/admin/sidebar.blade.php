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
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Administration</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">Users</a>
                        </li>
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
                  <i class="link-icon" data-feather="check-square"></i>
                  <span class="link-title">Eligibility</span>
                </a>
            </li>



            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
