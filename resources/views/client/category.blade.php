@extends('client.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .anh {
        width: 600px;
        height: 300px;
    }
</style>
<div class="container">
    <h1 class="my-4">{{$data1->name_cate}}
    </h1>
    @foreach ($data as $a)
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0 anh" src="{{ \Storage::url($a->img) }}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{$a->title}}</h3>
            <p>{{$a->content}}</p>
            <a class="btn btn-primary" href="http://php3asm.test/show/{{$a->id}}">View Project</a>
        </div>
    </div>
    <hr>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
<!-- /.container -->
@endsection