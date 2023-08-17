<form role="search" method="get" action="{{ $homeUrl }}" class="search-box ms-auto">
    <div class="input-group mb-3">
        <label class="input-group-text" for="search-form"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></label>
        <input class="search-text form-control" placeholder="Suchen..." type="search" id="search-form" value="{{ get_search_query() }}" name="s">
    </div>    
</form>
