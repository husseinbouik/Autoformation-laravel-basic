<form action="" method="POST" class="vstack gap-2">
    @csrf
    @method($post->id ? "PATCH" : "POST")
    <div class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control" value="{{old('title',$post->title)}}">
@error('title')
    {{$message}}
@enderror
    </div>
    <div class="form-group">
        <label for="slug">slug</label>
        <input type="text" name="slug" class="form-control" value="{{old('slug',$post->slug)}}">
@error('slug')
    {{$message}}
@enderror
    </div>
    <div class="form-group">
        <label for="content">content</label>
    <textarea name="content" class="form-control" >{{old('content',$post->content)}}</textarea>
    @error('content')
    {{$message}}
@enderror
    </div>
    <div class="form-group">
        <label for="category">category</label>
    <select name="category_id" id="category" class="form-control" >
    <option value="">select a category</option>

@foreach ($categories as $category)
    <option value="{{$category->id}}"  @selected(old('category_id',$post->category_id) == $category->id)>{{$category->name}}</option>
@endforeach
    </select>
    @error('category_id')
    {{$message}}
@enderror
    </div>
    {{-- @dump($post->tags()->pluck('id')) --}}
    @php
    $tagsIds = $post->tags()->pluck('id');
    @endphp
    <div class="form-group">
        <label for="tag">Tags</label>
    <select name="tags[]" id="tag" class="form-control" multiple>
    {{-- <option value="">select one or multiple tags</option> --}}

@foreach ($tags as $tag)
    <option @selected($tagsIds->contains($tag->id)) value="{{$tag->id}}" >{{$tag->name}}</option>
@endforeach
    </select>
    @error('tags')
    {{$message}}
@enderror
    </div>
<button class="btn btn-primary">
    @if ($post->id)
        update
        @else
        save
    @endif
</button>
</form>
