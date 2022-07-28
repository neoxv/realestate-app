@props(['action','key'=>""])
<form class="form-inline" method="POST" action="{{route($action)}}" id="searchForm">
    @csrf
<input class="mr-sm-2 form-control" value="{{$key}}"  id="search" name='search' type="search" placeholder="Search" aria-label="Search" >
</form>
