<!-- resources/views/listing_card.blade.php -->


@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="tag">
        <a class="tag_link" href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
