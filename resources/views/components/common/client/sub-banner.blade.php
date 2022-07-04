@props(['title'=>'title' ])
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{strtoupper($title)}}</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ucfirst($title)}}</li>
            </ul>
        </div>
    </div>
</div>
