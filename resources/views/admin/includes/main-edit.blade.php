<div class="uk-margin">
    <input class="uk-input uk-form-large uk-width-1-1" type="text" name="title" placeholder="Enter title here"
           value="@if(old('title') != ''){!! old('title') !!}@else{!! $post->title !!}@endif" autofocus />
</div>
<div class="uk-card k-border">
    <textarea class="uk-input textarea uk-width-1-1" name="content">@if(old('content') != ''){!! old('content') !!}@else{!! $post->content !!}@endif</textarea>
</div>

<ul uk-accordion="multiple: true">
    <li class="uk-open">
        <h5 class="uk-accordion-title">Excerpt</h5>
        <div class="uk-accordion-content uk-margin-small-top">
            <textarea class="uk-textarea uk-width-1-1" name="excerpt" rows="5" placeholder="Enter Content Summary here">@if(old('excerpt') != ''){!! old('excerpt') !!}@else{!! $post->excerpt !!}@endif</textarea>
        </div>
    </li>
    <li class="uk-open">
        <h5 class="uk-accordion-title">Page Title</h5>
        <div class="uk-accordion-content uk-margin-small-top">
            <input class="uk-input uk-width-1-1" type="text" name="page_title" placeholder="Enter page title here"
                   @if(old('page_title') != '') value="{!! old('page_title') !!}" @else value="{!! $post->page_title !!}" @endif />
        </div>
    </li>
    <li class="uk-open">
        <h5 class="uk-accordion-title">Meta Description</h5>
        <div class="uk-accordion-content uk-margin-small-top">
            <textarea class="uk-textarea uk-width-1-1" name="meta_description" placeholder="Enter meta description here">@if(old('meta_description') != ''){!! old('meta_description') !!}@else{!! $post->meta_description !!}@endif</textarea>
        </div>
    </li>
</ul>