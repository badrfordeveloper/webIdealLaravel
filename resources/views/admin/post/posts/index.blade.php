 @extends('layouts.app')

 @section('css')

    <link href="{{ asset('admin/assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    
@endsection

@section('content')


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Posts</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url(Config::get('constants.ADMIN_PATH')) }}">Tableau de Board</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Posts</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Posts</h5>
                        <div class="ibox-tools">
                            @if(App\Helpers\Checker::checkAcces('posts','create')) 
                                <a class="" href="{{ url(Config::get('constants.ADMIN_PATH').'posts'.'/create') }}">
                                    <i class="fa fa-plus"></i>
                                </a>
                            @endif

                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th><i class="fa fa-wrench"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $item)
                                    <tr class="gradeX" data-key="{{$item->id}}" >
                                        <td rowspan="2"><img height="50px;" src="@if($item->photo) {{asset('storage/'.$item->photo)}} @else {{asset('assets/images/default.png')}} @endif" alt="{{ $item->titre }}"></td>
                                        <td>{{ $item->titre }}</td>
                                        <td>{{ substr($item->description,0,50).'...' }}</td>
                                        <td rowspan="2">{{ $item->created_at }}</td>


                                         <td rowspan="2" class="text-center">

                                         <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Actions</button>
                                                <ul class="dropdown-menu">

                                                @if(App\Helpers\Checker::checkAcces('categories','edit')) 
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'posts/' . $item->id . '/edit') }}" title="Edit Post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                                                    </li>
                                                @endif

                                                @if(App\Helpers\Checker::checkAcces('posts','destroy')) 

                                                    <li>
                                                        <form method="POST" action="{{ url(Config::get('constants.ADMIN_PATH').'posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="dropdown-item" title="Delete Post" onclick="return confirm('Voulez vous vraiment supprimer ?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                        </form>
                                                    </li>
                                                 @endif

                                                </ul>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr class="gradeX" data-key="{{$item->id}}">
                                        <td>{{ $item->titreEn ?? "" }}</td>
                                        <td>{{ substr($item->descriptionEn,0,50).'...' ?? "" }}</td>
                                    </tr>  
                                    @endforeach                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th><i class="fa fa-wrench"></i></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Model  -->

        <button style="display: none" id="mymodel" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

            </div>
          </div>
        </div>

    <!-- end Model -->


@endsection


@section('script')
    <!-- DataTables -->
    <script src="{{ asset('admin/assets/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                @if(App\Helpers\Checker::checkAcces('posts','files'))
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {
                        extend: 'excel',
                        text: 'Save current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                    }

                @endif

                ]

            });

            // Setup - add a text input to each footer cell
             $('.dataTables-example tfoot th').not('.dataTables-example tfoot th:last').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Cherche '+title+'" />' );
            } );
         
            // DataTable
            var table = $('.dataTables-example').DataTable();
         
            // Apply the search
            table.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

        });

    </script>

    @if(App\Helpers\Checker::checkAcces('posts','show')) 

        <script>
            var touchtime = 0;
            $("tr td:not(:nth-last-child(1))").on("click", function() {
              if (((new Date().getTime()) - touchtime) < 300) {
                    var _key = $(this).parent().attr('data-key');
                    console.log(_key);

                    $.ajax({
                                url: "{{ url(Config::get('constants.ADMIN_PATH').'posts/') }}"+'/'+_key,
                            })
                    .done(function(data) {

                            $('.modal-content').html(data);            
                            $('#mymodel').trigger('click');
                                console.log(data);
                            })
                            .fail(function() {
                                console.log("error");
                            })
                            .always(function() {
                                console.log("complete");
                            });
              }
              touchtime = new Date().getTime();
            });
        </script>
    @endif
@endsection


