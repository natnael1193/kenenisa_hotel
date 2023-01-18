<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Hi, welcome back!</h4>
            <span class="ml-1">{{ $title }}</span>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url($link) }}">{{ $parent }}</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $child }}</a></li>
        </ol>
    </div>
</div>
