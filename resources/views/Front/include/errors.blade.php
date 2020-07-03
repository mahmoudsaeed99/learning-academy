@if($errors->any())
    <ul class="list-unstyled">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

@endif