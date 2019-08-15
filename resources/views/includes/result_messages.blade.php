@if($errors->any())
    @component('components.result_message',['result' => 'danger'])
        @foreach($errors->all() as $errorTxt)
            <li>{{ $errorTxt}}</li>
        @endforeach
    @endcomponent
@endif

@if(session('success'))
    @component('components.result_message',['result' => 'success'])
        {{ session()->get('success') }}
    @endcomponent
@endif


