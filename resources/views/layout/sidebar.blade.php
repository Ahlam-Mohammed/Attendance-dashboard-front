<!-- Start Sidebar -->
<nav class="pt-5 position-fixed">
    <ul class="sidebar p-lg-0">
        <li class="d-flex gap-2 align-items-center mb-4 fs-5
        @if(Route::currentRouteName() === 'home' ||
            Route::currentRouteName() === 'subject' ||
            Route::currentRouteName() === 'student') active @endif">
            <i class="bi bi-house-door-fill text-secondary"></i>
            <a href="{{ route('home') }}" class="text-secondary">Dashboard</a>
        </li>
        <li class="d-flex gap-2 align-items-center mb-4 fs-5 @if(Route::currentRouteName() === 'lecture') active @endif">
            <i class="bi bi-easel2-fill text-secondary"></i>
            <a href="{{ route('lecture') }}" class="text-secondary">Lectures</a>
        </li>
        <li class="d-flex gap-2 align-items-center mb-4 fs-5 @if(Route::currentRouteName() === 'account') active @endif">
            <i class="bi bi-people-fill text-secondary"></i>
            <a href="{{ route('account') }}" class="text-secondary">Accounts</a>
        </li>
        <li class="d-flex gap-2 align-items-center mb-4 fs-5
        @if( Route::currentRouteName() === 'statistics' ||
             Route::currentRouteName() === 'statistics.details') active @endif">
            <i class="bi bi-bar-chart-fill text-secondary"></i>
            <a href="{{ route('statistics') }}" class="text-secondary">Statistics</a>
        </li>
        <li class="d-lg-none d-flex gap-2 align-items-center mb-4 fs-5">
            <i class="bi bi-box-arrow-right text-red"></i>
            <a href="" class="text-secondary">Logout</a>
        </li>
    </ul>
</nav>
<!-- End Sidebar -->
