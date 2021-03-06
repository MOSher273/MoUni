@extends('admin.layouts.main')
@section('content')
<h1 class="h3 mb-2 text-gray-800"><b>Soccerr FC</b></h1>
    <div class="card shadow mb-4">
        @if (session('msg'))
            <span class="mt-2 alert alert-success"> {{ session('msg') }} </span>
        @endif
        <div class="card-header py-3">
            <a href="{{ url('quote/add') }}" class="btn bg-gradient-primary" style="float:right;color: white"> Add Quote </a>
        <h6 class="m-0 font-weight-bold text-primary">All Quotes</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr.#</th>
                        <th>Author Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @foreach ($quotes as $quote)
                        <?php $i++; ?>
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{ $quote->author }}</td>
                            <td> {{ $quote->description }}</td>
                            <td>  
                                <a href="{{ url('quote/delete/'.$quote->id) }}" 
                                    onclick="return confirm('Are you sure you want to delete?');" 
                                    class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection