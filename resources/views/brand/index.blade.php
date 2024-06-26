@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Manage Brand</div>
    <div class="card-body">
        @can('create-user')
         
            <a href="{{route('brand.create')}}" class="btn  btn-success btn-sm my-2"><i class="fa fa-plus"></i></a>
        
        @endcan
        <table class="table table-striped table-bordered user_datatable w-100">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Year</th> 
                <th>Menu</th>
                    
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody></tbody>

        </table>

    </div>
</div>
    
@endsection

 

@section('script')


<script type="text/javascript">
  $(function () {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('brand.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return "<img style='height:100px;width:100px;' src=\"storage/" + data +
                                "\" />";
                        }
                    },
            {data: 'name', name: 'name'},
            {data: 'year', name: 'year'},
            {data: 'menu', name: 'menu'},
            
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>


@endsection