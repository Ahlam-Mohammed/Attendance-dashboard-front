<div class="col-12">
    <div class="d-flex align-items-center gap-5 p-5 category">
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-easel2-fill"></i>
            </div>
            <h6 class="box__title">Colleges</h6>
        </a>
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-building"></i>
            </div>
            <h6 class="box__title">Dep</h6>
        </a>
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-calendar"></i>
            </div>
            <h6 class="box__title">Ac Year</h6>
        </a>
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-graph-up-arrow"></i>
            </div>
            <h6 class="box__title">Levels</h6>
        </a>
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h6 class="box__title">Class</h6>
        </a>
        <!-- single box -->
        <a href="{{ route('subject') }}" class="box @if(Route::currentRouteName() === 'subject') active @endif ">
            <div class="box__icon">
                <i class="bi bi-easel2-fill"></i>
            </div>
            <h6 class="box__title">Subjects</h6>
        </a>
        <!-- single box -->
        <a href="" class="box">
            <div class="box__icon">
                <i class="bi bi-door-open"></i>
            </div>
            <h6 class="box__title">Halls</h6>
        </a>
        <!-- single box -->
        <a href="{{ route('student') }}" class="box @if(Route::currentRouteName() === 'student') active @endif">
            <div class="box__icon">
                <i class="bi bi-people-fill"></i>
            </div>
            <h6 class="box__title">Students</h6>
        </a>
    </div>
</div>
