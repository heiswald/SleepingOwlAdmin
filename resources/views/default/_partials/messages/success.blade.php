@if($messages)
    <div class="alert alert-success alert-message text-white">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {!! $messages !!}
    </div>
@endif
