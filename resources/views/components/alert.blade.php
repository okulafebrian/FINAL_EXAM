@if (session('success'))
    <div class="modal fade show alert" style="z-index: 9999;" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0 shadow-sm rounded-3" style="background-color: #3364a0">
                <div class="modal-body text-light">
                    <h6 class="m-0">
                        <i class="fa-solid fa-circle-check me-1"></i> {!! session('success') !!}
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('failed'))
    <div class="modal fade show alert" style="z-index: 9999;" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0 shadow-sm rounded-3" style="background-color: #3364a0">
                <div class="modal-body text-light">
                    <h6 class="m-0">
                        <i class="fa-solid fa-circle-xmark me-1"></i> {!! session('failed') !!}
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endif
