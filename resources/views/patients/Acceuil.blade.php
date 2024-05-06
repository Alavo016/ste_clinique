<form action="{{ route('logout') }}" method="post">

    @csrf

    <button type="submit">Decoonection</button>
</form>
