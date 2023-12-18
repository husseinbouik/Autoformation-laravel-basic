
@extends('base')
@section('title', 'Accueil du blog')
@section('content')
    <h1>My Blog</h1>
    {{-- @dump($posts) --}}

    @foreach($posts as $post)
 
        <h2>{{$post->title}}</h2>
        
    <p class="small">
        @if ($post->category)
        Category : <strong>{{$post->category?->name}}</strong>
        @if (!$post->tags->isEmpty())
        @endif
        @endif
        @if (!$post->tags->isEmpty())
        
        Tags:
            @foreach ($post->tags as $tag)
                <span class="badge bg-secondary">{{$tag->name}}</span>
            @endforeach
            @endif
    </p>
<p>
      {{$post->content}}
</p>
<p> 
    <a href="{{ route('blog.show',['slug' => $post->slug , 'post'=> $post->id ]) }}"  class="btn btn-primary"> lire la suite</a>
</p>

    @endforeach
    {{$posts->links()}}


    {{-- @if($posts->count() > 0)
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }} <!-- Pagination links -->
@else
    <p>No posts found.</p>
@endif --}}
    @dump(['hussein is supercalifragilisticexpialidocious'])
{{-- write PHP code directly within your Blade views --}}
@php
    $demo = 'HUSSS';
@endphp
@if(true)
<?="Hussein<strong>bouik</strong>" ?>
@else
    {{-- display it as it is  --}}
<p>{{ "Texte" }}</p>  

<?= "Texte" ?>
@endif






@endsection

