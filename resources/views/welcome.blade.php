<h1>Our First page</h1>


<a href="/post">Post</a>
<br>
<a href="/post/firstpost">First Post</a>
<br>
<a href="{{ route('about')}}">About</a>
<br>
<a href="{{ route('contact')}}">Contact</a>
<br>
<a href="/page/gallery">Gallery</a>
<br>
<a href="/page/slider">Slider</a>
<br>
<a href="/page/test">Test</a>

@foreach ($collection as $item)
    
@endforeach

{{-- comment --}}

@forelse ($collection as $item)
    
@empty
    
@endforelse