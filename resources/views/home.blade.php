<h1>User</h1>
{{-- jangan dihilangin ini penting --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

{{-- jangan dihilangin ini penting --}}