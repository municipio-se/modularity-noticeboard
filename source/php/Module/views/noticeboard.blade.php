<div class="{{ $classes }}">
    <h4 class="box-title">{{ $postTitle }}</h4>

    @if (!empty($introductoryText))
        {!! wpautop($introductoryText) !!}
    @endif

    <ul>
        @forelse ($postItems as $postItem)
            <li>
                @if ($postItem['link'])
                    <a href="{{ $postItem['link'] }}">{{ $postItem['title'] }} {{ $postItem['meetingDate'] }}</a>
                @else
                    {{ $postItem['title'] }} {{ $postItem['meetingDate'] }}
                @endif
                Anslaget: {{ $postItem['published'] }}
                @if ($postItem['unpubDate'])
                    Tas ner: {{ $postItem['unpubDate'] }}
                @endif
            </li>
        @empty
            <li>Inga inlägg tillgängliga.</li>
        @endforelse
    </ul>
</div>
