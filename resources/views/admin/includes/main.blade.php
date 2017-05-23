<div class="uk-margin">
    <input class="uk-input uk-form-large uk-width-1-1" type="text" name="title" placeholder="Enter title here"
           @if(old('title') != '')value="{!! old('title') !!}"@endif autofocus/>
</div>
<div class="uk-card k-border">
    <textarea class="uk-input textarea uk-width-1-1" name="content">@if(old('content') != ''){!! old('content') !!}@endif</textarea>
</div>