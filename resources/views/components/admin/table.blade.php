@props(['title','headers','formId'])
<div class="row">
<div class="col-12">
    <div class="card mb-4">
    <div class="card-header pb-0">
        <div class="col-md-4">
        <h6 style="display: inline;margin-right: 10px;">{{$title}}</h6>
        {{ $form }}
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl table-responsive-xxxl p-0" >
        <table class="table align-items-center" style="margin-bottom: 10px;" >
            <thead>
            <tr>
            @foreach ($headers as $header)
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$header}}</th>
            @endforeach
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            </tr>
            </thead>
            <tbody>
            {{$slot}}
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
</div>
