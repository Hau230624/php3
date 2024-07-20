@extends('client.master')
@section('content')
<div class="detail-left">
    <h1 style="text-align:center" class="detail-title">
        {{$data->title}}
    </h1>
    <div class="content">
        <h2 style="text-align:justify" class="sapo">
        {{$data->content}}
        </h2>
        </ul>
        <div class="content_wrapper">
            <div style="text-align:center">
                <figure class="image" style="display:inline-block"><img alt="Chú thích ảnh" height="489" src="/client/images/{{$data->img}}" width="665">
                </figure>
            </div>
        </div>
    </div>
</div>

@endsection