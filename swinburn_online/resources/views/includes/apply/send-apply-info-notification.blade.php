@if ($errors->any())
<ul class="error">
    @foreach ($errors->all() as $key => $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif