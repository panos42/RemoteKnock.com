<!-- resources/views/listing_card.blade.php -->

<style>
    /* Add this style block within your Blade template or link to an external CSS file */
    .tag {
        display: inline-block;
        padding: 4px 8px;
        color: #1e40af;
        background-color: #dbeafe;
        border-radius: 4px;
        margin-right: 4px;
        cursor: pointer; /* Cursor changes to a pointer on hover */
    }

    /* Add hover style for the tags */
    .tag:hover {
        color:white;
        background-color: #60a5fa;
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
