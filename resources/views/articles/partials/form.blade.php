@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
        value="{{old('title',$article->title)}}">
    {!! $errors->first('title','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="title">Content</label>
    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30"
        rows="10" class="form-control">{{old('content',$article->content)}}</textarea>
    @error('content')
    <span class="invalid-feedback">
        {{$message}}
    </span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit}}</button>