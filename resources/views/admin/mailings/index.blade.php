 @extends('layouts.app')

 @section('css')

    <link href="{{ asset('admin/assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    
@endsection

@section('content')

<!-- 
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Mailings</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url(Config::get('constants.ADMIN_PATH')) }}">Tableau de Board</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Mailings</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div> -->
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Mailings</h5>
                        <div class="ibox-tools">

                            <form method="POST" id="formDeleteMailing" action="{{ url(Config::get('constants.ADMIN_PATH').'mailings/delete-mail') }}" accept-charset="UTF-8" >
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                
                            </form>
                       

                            <form method="POST" id="send-emailing" action="{{ url(Config::get('constants.ADMIN_PATH').'mailings/send-mail') }}" accept-charset="UTF-8" >
                                {{ csrf_field() }}
                                <input type="hidden" name="dataSend[]" id="dataSend" >
                               
                                @if(App\Helpers\Checker::checkAcces('mailings','create')) 
                                    <a class="" href="{{ url(Config::get('constants.ADMIN_PATH').'mailings'.'/create') }}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                @endif

                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            
                            </form>
                        </div>

                            <form method="post" enctype="multipart/form-data" action="{{ url(Config::get('constants.ADMIN_PATH').'mailings/import-excel') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                     <table class="table">
                                      <tr>
                                           <td width="40%" align="right"><label>Select File (.xls, .xslx )</label></td>
                                           <td width="30">
                                                <input type="file" name="select_file" />
                                                {!! $errors->first('select_file', '<p class="help-block">:message</p>') !!}
                                           </td>
                                           <td width="30%" align="left">
                                                <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                                           </td>
                                      </tr>
                                     </table>
                                </div>
                            </form>

                             <div class="ibox-content">
                                <form id="myForm" method="POST" action="{{ url(Config::get('constants.ADMIN_PATH').'mailings') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    @include ('admin.mailings.form', ['formMode' => 'create'])

                                </form>
                            </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th> 
                                            <button style="border: none; background: transparent; font-size: 14px;" id="MyTableCheckAllButton">
                                                <i class="far fa-square"></i>  
                                            </button>                  
                                    </th>

                                     <th>Email</th><th>Nom</th><th>Etat</th><th>Nombre d'envoi</th><th><i class="fa fa-wrench"></i></th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>#</th><th>Email</th><th>Nom</th><th>Etat</th><th>Nombre d'envoi</th><th><i class="fa fa-wrench"></i></th>
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
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
              
                lengthMenu: [[10,50, 500, -1], [10, 50, 500, "All"]],
                responsive: true,
                processing: true,
                serverSide: true,
                deferRender: true,
                ajax:{
                   url: "{{ url(Config::get('constants.ADMIN_PATH').'mailings') }}",
                },
                columns:[
                      /*{
                        data: 'id',
                         render: function(data, type, full, meta){
                            return "<input value="+ data + " class='checked-item' type='checkbox' class='input-lg checkbox' />";
                            },
                            orderable: false
                       },*/
                       {
                        defaultContent: ""
                       },
                       {
                        data: 'email'
                       },
                       {
                        data: 'nom'
                       },
                       {
                        data: 'etat',
                       },
                       {
                        data: 'nb_email',
                        defaultContent: "0"
                       },
                       {
                        data: 'id',
                         render: function(data, type, full, meta){
                                var text ="";

                                text += '<div class="btn-group"> <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Actions</button> <ul class="dropdown-menu">';

                               @if(App\Helpers\Checker::checkAcces('mailings','edit')) 
                                    text += "<li><a class=\"dropdown-item\" href=\"{{ url(Config::get('constants.ADMIN_PATH').'mailings/')}}" +"/"+ data + "/edit\" title=\"Edit Category\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Editer</a></li>";

                                @endif

                               @if(App\Helpers\Checker::checkAcces('mailings','destroy')) 
                            
                                    text += "<li><a class=\"btnDeleteMail dropdown-item\" href=\"#\" data-key=\""+ data + "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Supprimer</a></li>";

                                  /* text += "<li><form method=\"POST\" action=\"{{ url(Config::get('constants.ADMIN_PATH').'mailings/')}}" +"/"+ data + "\" accept-charset=\"UTF-8\" style=\"display:inline\">"

                                    text +=' {{method_field("DELETE")}} {{csrf_field()}} ';
                                    text += "<button type=\"submit\" class=\"dropdown-item\" title=\"Delete Mailing\" onclick=\"return confirm(\'Voulez vous vraiment supprimer ?\')\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> Supprimer</button></form></li>";*/
                                @endif
                                 text += ' </ul></div>';


                                return text;
                            
                            },
                            orderable: false
                       }
                ],
                dom: '<"html5buttons"B>lTfgitp',
                select: true,
                buttons: [
                    @if(App\Helpers\Checker::checkAcces('mailings','files'))
                        {
                            text: ' <a class="" id="btnSendEmail" href="#"><i class="fa fa-envelope"></i></a>'
                            
                        },
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
                ],

                
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0,
                }],
                select: {
                    style: 'multi', // 'single', 'multi', 'os', 'multi+shift'
                    selector: 'td:first-child',
                },
                createdRow: function( row, data, dataIndex ) {
                    // Set the data-status attribute, and add a class
                    $( row ).find('td:eq(0)')
                        .attr('my-id', data.id );
                }
                
             });

            // Setup - add a text input to each footer cell
            $('.dataTables-example tfoot th').not('.dataTables-example tfoot th:last').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Cherche '+title+'" />' );
            } );
            // DataTable
            var table = $('.dataTables-example').DataTable();

             $('#MyTableCheckAllButton').click(function() {
                    if (table.rows({
                            selected: true
                        }).count() > 0) {
                        table.rows().deselect();
                        return;
                    }

                    table.rows().select();
            });

             table.on('select deselect', function(e, dt, type, indexes) {
                    if (type === 'row') {
                        // We may use dt instead of table to have the freshest data.
                        if (dt.rows().count() === dt.rows({
                                selected: true
                            }).count()) {
                            // Deselect all items button.
                            $('#MyTableCheckAllButton i').attr('class', 'far fa-check-square');
                            return;
                        }

                        if (dt.rows({
                                selected: true
                            }).count() === 0) {
                            // Select all items button.
                            $('#MyTableCheckAllButton i').attr('class', 'far fa-square');
                            return;
                        }

                        // Deselect some items button.
                        $('#MyTableCheckAllButton i').attr('class', 'far fa-minus-square');
                    }
                });

             $("#btnSendEmail").click(function(event) {

 

                /* Act on the event */
                 var ids =[]
                event.preventDefault();
               /* $('.checked-item').each(function(index, el) {
                   if ($(el).hasClass('checked')) 
                   {
                    ids.push($(el).val());
                   } 
                });*/

                 $('.dataTables-example > tbody >tr').each(function(){

                    var _this = $(this);
                     
                        // If checkbox is checked
                        if(_this.hasClass('selected')){
                           // Create a hidden element 
                           var _myid=_this.find('td:first').attr('my-id');
                           console.log("id",_this.find('td:first').attr('my-id')); 
                            ids.push(_myid);
                        }
                  });
                $("#dataSend").val(ids);
                $("#send-emailing").submit();
               
                
            });
         
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



           /* $('.dataTables-example tbody').on('click', 'tr', function () {
                    var data = table.row( this ).data();
                    alert( 'You clicked on '+data[0]+'\'s row' );
                } );*/
                @if(App\Helpers\Checker::checkAcces('mailings','show')) 
                    var touchtime = 0;
                    $('.dataTables-example tbody').on('click', 'tr', function () {
                      if (((new Date().getTime()) - touchtime) < 300) {
                         var data = table.row( this ).data();
                           var _key = data['id'];
                           /* var _key = $(this).parent().attr('data-key');*/
                            console.log(_key);

                            $.ajax({
                                        url: "{{ url(Config::get('constants.ADMIN_PATH').'mailings/') }}"+'/'+_key,
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
                @endif

                $('.dataTables-example tbody ').on("click", '.btnDeleteMail',function() {
                
                    var _key = $(this).attr('data-key');

                    console.log(_key);
                     $("#formDeleteMailing").attr("action", "{{ url(Config::get('constants.ADMIN_PATH').'mailings')}}"+'/' + _key);
                     $("#formDeleteMailing").submit();

                   /*  var ids =[]
                    event.preventDefault();
                    $('.checked-item').each(function(index, el) {
                       if ($(el).hasClass('checked')) 
                       {
                        ids.push($(el).val());
                       } 
                    });
                    $("#dataSend").val(ids);
                    $("#send-emailing").submit();*/
                   
                    
                });
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function() {
           

          /*  $('.checked-item').click(function(event) {*/
            $('.dataTables-example tbody ').on("click", '.checked-item',function() {
                var _item = $(this);
                if (_item.is(':checked')) {
                    _item.addClass('checked');
                }
                else
                {
                    _item.removeClass('checked');
                }
            });
           /* $("#btnSendEmail").click(function(event) {
        
                 var ids =[]
                event.preventDefault();
                $('.checked-item').each(function(index, el) {
                   if ($(el).hasClass('checked')) 
                   {
                    ids.push($(el).val());
                   } 
                });
                $("#dataSend").val(ids);
                $("#send-emailing").submit();
               
                
            });*/
        });
    </script>

    
@endsection
