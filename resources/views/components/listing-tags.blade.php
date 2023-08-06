<!-- resources/views/listing_card.blade.php -->

<style>
    /* Add this style block within your Blade template or link to an external CSS file */
    .tag {
        display: inline-block;
        padding: 4px 8px;
        background-color: #e2e8f0;
        border-radius: 4px;
        margin-right: 4px;
        cursor: pointer; /* Cursor changes to a pointer on hover */
    }

    /* Add hover style for the tags */
    .tag:hover {
        background-color: #a0aec0;
    }
</style>

@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="tag">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
