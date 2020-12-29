 @extends('layouts.app')

 @section('css')

    <link href="{{ asset('admin/assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    
@endsection

@section('content')


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
    </div>
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Mailings</h5>
                        <ul id="mytestMails">
                            <li></li>
                        </ul>
                   
                    
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
                deferLoading: 57,
                lengthMenu: [10, 25, 50, 500],
                pageLength: 10,
                
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                @if(App\Helpers\Checker::checkAcces('mailings','files'))
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
    <script type="text/javascript">
        $(document).ready(function() {
           

            $('.checked-item').click(function(event) {
                var _item = $(this);
                if (_item.is(':checked')) {
                    _item.addClass('checked');
                }
                else
                {
                    _item.removeClass('checked');
                }
            });
            $("#btnSendEmail").click(function(event) {
                /* Act on the event */
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
               
                
            });
        });
    </script>

    @if(App\Helpers\Checker::checkAcces('mailings','show')) 

        <script>
            var touchtime = 0;
            $("tr td:not(:nth-last-child(1))").on("click", function() {
              if (((new Date().getTime()) - touchtime) < 300) {
                    var _key = $(this).parent().attr('data-key');
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
        </script>


        <script type="text/javascript">
            var _counter=0;
            (function next(){
                
                  console.log("run");

                  $.ajax({
                            url: "{{ url(Config::get('constants.ADMIN_PATH').'sendTestMailings/') }}",
                        })
                .done(function(data) {
                    $('#mytestMails').append("<li>"+data+" - ( "+_counter+" )"+"</li>");
                    _counter++;
       

               /* $('.modal-content').html(data);            
                $('#mytestMails').trigger('click');
                    console.log(data);*/
                })
                .fail(function() {
                    $('#mytestMails').append("<li>erreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeur</li>");
                })
                .always(function() {
                        console.log("complete");
                });
                  setTimeout( next, 75000);
                })();
        </script>
    @endif
@endsection
