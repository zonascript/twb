<div class="uk-margin">
    <input class="uk-input uk-form-large uk-width-1-1" type="text" name="title" placeholder="Enter title here"
           value="@if(old('title') != ''){!! old('title') !!}@else{!! $post->title !!}@endif" autofocus />
</div>
<div class="uk-card k-border">
    <textarea class="uk-input textarea uk-width-1-1" name="content">@if(old('content') != ''){!! old('content') !!}@else{!! $post->content !!}@endif</textarea>
</div>
<div class="uk-card uk-margin-top">
    <label>Excerpt</label>
    <textarea class="uk-textarea uk-width-1-1" name="excerpt" rows="5" placeholder="Enter Content Summary here">@if(old('excerpt') != ''){!! old('excerpt') !!}@else{!! $post->excerpt !!}@endif</textarea>
</div>
<div class="uk-card uk-margin-top">
    <label>Page Title</label>
    <input class="uk-input uk-width-1-1" type="text" name="page_title" placeholder="Enter page title here"
           @if(old('page_title') != '') value="{!! old('page_title') !!}" @else value="{!! $post->page_title !!}" @endif />
</div>
<div class="uk-card uk-margin-top">
    <label>Meta Description</label>
    <textarea class="uk-textarea uk-width-1-1" name="meta_description" placeholder="Enter meta description here">@if(old('meta_description') != ''){!! old('meta_description') !!}@else{!! $post->meta_description !!}@endif</textarea>
</div>