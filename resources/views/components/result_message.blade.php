<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="alert alert-{{$result}}" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            {{ $slot }}
        </div>
    </div>
</div>
