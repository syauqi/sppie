<p>kamu siswa</p>

<form action="{{ url('logout') }}" method="POST">
    @csrf
    <button type="submit"> Sign Out</button>
</form>