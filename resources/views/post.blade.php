<h1>New Post Page</h1>

<br>
<br>
Option A:

<br>
@if(!empty($id))
    <p>The Post ID is: <strong>{{ $id }}</strong></p>
@else
    <p>No Post ID was provided.</p>
@endif


<br>
<br>
Option B (Recommended):

<br>
@isset($id)
    <p>The Post ID is: <strong>{{ $id }}</strong></p>
@else
    <p>No Post ID was provided.</p>
@endisset

<br>
<br>

<a href="/">Home</a>
<br>
<a href="/post">Post</a>
<br>
<a href="/post/firstpost">First Post</a>
<br>
<a href="{{ route('about')}}">About</a>