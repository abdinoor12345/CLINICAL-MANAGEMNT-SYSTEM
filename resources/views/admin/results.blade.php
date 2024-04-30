<!-- resources/views/search/form.blade.php -->
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>
