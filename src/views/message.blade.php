@if (Session::has('flash_notification.messages'))
    @if($messages = Session::get('flash_notification.messages'))
        @foreach($messages as $message)
        <div class="alert alert-{{$message['level']}}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {!! $message['message'] !!}
        </div>
        @endforeach
    @endif
@endif
