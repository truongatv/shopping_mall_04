<section class="">
    <h1>{{ $name }}</h1>
    <p>{{ $mail }}</p>
    @if(isset($link))
        <p>{{ $messsage_notification }} {{$link}}</p>
    @else
        <p>{{ $messsage_notification }}</p>
    @endif
</section>
