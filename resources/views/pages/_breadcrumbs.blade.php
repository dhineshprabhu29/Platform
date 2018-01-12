<div class="breadcrumbs">
    @if (userCan('view', $page->book))
        <a href="{{ $page->book->getUrl() }}" class="text-book text-button"><i class="zmdi zmdi-book"></i>{{ $page->book->getShortName() }}</a>
        <img src="https://cdnjs.cloudflare.com/ajax/libs/uswds/1.4.4/img/arrow-right.svg" style="height:10px">
    @endif
    @if($page->hasChapter() && userCan('view', $page->chapter))
        <a href="{{ $page->chapter->getUrl() }}" class="text-chapter text-button">
            <i class="zmdi zmdi-collection-bookmark"></i>
            {{ $page->chapter->getShortName() }}
        </a>
        <img src="https://cdnjs.cloudflare.com/ajax/libs/uswds/1.4.4/img/arrow-right.svg" style="height:10px">
    @endif
    <a href="{{ $page->getUrl() }}" class="text-page text-button"><i class="zmdi zmdi-file"></i>{{ $page->getShortName() }}</a>
</div>