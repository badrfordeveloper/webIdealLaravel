<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>



    <meta charset="utf-8">

<!--     <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administration</title>

   <!--  <title>{{ config('app.name', 'Freelancer') }}</title> -->



    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">

<!--     <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('admin/assets/fontawesome/css/all.css') }}" rel="stylesheet">



    <!-- Toastr style -->

    <link href="{{ asset('admin/assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">



    <!-- Gritter -->

    <link href="{{ asset('admin/assets/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">



    <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">



     @yield('css')



</head>

<body>

    <div id="wrapper">

        <x-nav /> 

        

        <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="row border-bottom">

            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">

                <div class="navbar-header">

                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                    <form role="search" class="navbar-form-custom" action="search_results.html">

                        <div class="form-group">

                            <input type="text" placeholder="Chercher quelque chose..." class="form-control" name="top-search" id="top-search">

                        </div>

                    </form>

                </div>

                <ul class="nav navbar-top-links navbar-right">

                   <!--  <li class="dropdown">

                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">

                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>

                        </a>

                        <ul class="dropdown-menu dropdown-messages dropdown-menu-right">

                            <li>

                                <div class="dropdown-messages-box">

                                    <a class="dropdown-item float-left" href="profile.html">

                                        <img alt="image" class="rounded-circle" src="{{ asset('admin/assets/img/a7.jpg') }}">

                                    </a>

                                    <div class="media-body">

                                        <small class="float-right">46h ago</small>

                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>

                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>

                                    </div>

                                </div>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <div class="dropdown-messages-box">

                                    <a class="dropdown-item float-left" href="profile.html">

                                        <img alt="image" class="rounded-circle" src="{{ asset('admin/assets/img/a4.jpg') }}">

                                    </a>

                                    <div class="media-body ">

                                        <small class="float-right text-navy">5h ago</small>

                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>

                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>

                                    </div>

                                </div>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <div class="dropdown-messages-box">

                                    <a class="dropdown-item float-left" href="profile.html">

                                        <img alt="image" class="rounded-circle" src="{{ asset('admin/assets/img/profile.jpg') }}">

                                    </a>

                                    <div class="media-body ">

                                        <small class="float-right">23h ago</small>

                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>

                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>

                                    </div>

                                </div>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <div class="text-center link-block">

                                    <a href="mailbox.html" class="dropdown-item">

                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>

                                    </a>

                                </div>

                            </li>

                        </ul>

                    </li>

                    <li class="dropdown">

                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">

                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>

                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>

                                <a href="mailbox.html" class="dropdown-item">

                                    <div>

                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages

                                        <span class="float-right text-muted small">4 minutes ago</span>

                                    </div>

                                </a>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <a href="profile.html" class="dropdown-item">

                                    <div>

                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers

                                        <span class="float-right text-muted small">12 minutes ago</span>

                                    </div>

                                </a>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <a href="grid_options.html" class="dropdown-item">

                                    <div>

                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted

                                        <span class="float-right text-muted small">4 minutes ago</span>

                                    </div>

                                </a>

                            </li>

                            <li class="dropdown-divider"></li>

                            <li>

                                <div class="text-center link-block">

                                    <a href="notifications.html" class="dropdown-item">

                                        <strong>See All Alerts</strong>

                                        <i class="fa fa-angle-right"></i>

                                    </a>

                                </div>

                            </li>

                        </ul>

                    </li> -->



                    @guest

                    @else

                     <li class="dropdown-item">

                    

                            <a class="dropdown-item" href="{{ route('logout') }}"

                               onclick="event.preventDefault();

                                             document.getElementById('logout-form').submit();">

                                <i class="fa fa-sign-out-alt"></i> Deconnexion

                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                @csrf

                            </form>

                    </li>

                            @endguest



                    <!-- <li>

                        <a class="right-sidebar-toggle">

                            <i class="fa fa-tasks"></i>

                        </a>

                    </li> -->

                </ul>

            </nav>

        </div>



        <main >

            @yield('content')



            @include('layouts/alert')

            

        </main>

        <div class="footer">

         

            <div>

                <strong>Copyright</strong> &copy; 2020-2021

            </div>

        </div>

         <x-sidebar /> 

    </div>



    <!-- Mainly scripts -->

    <script src="{{ asset('admin/assets/js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>



    <!-- Flot -->

    <script src="{{ asset('admin/assets/js/plugins/flot/jquery.flot.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/flot/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/flot/jquery.flot.resize.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/flot/jquery.flot.pie.js') }}"></script>



    <!-- Peity -->

    <script src="{{ asset('admin/assets/js/plugins/peity/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/demo/peity-demo.js') }}"></script>



    <!-- Custom and plugin javascript -->

    <script src="{{ asset('admin/assets/js/inspinia.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/pace/pace.min.js') }}"></script>



    <!-- jQuery UI -->

    <script src="{{ asset('admin/assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>



    <!-- GITTER -->

    <script src="{{ asset('admin/assets/js/plugins/gritter/jquery.gritter.min.js') }}"></script>



    <!-- Sparkline -->

    <script src="{{ asset('admin/assets/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>



    <!-- Sparkline demo data  -->

    <script src="{{ asset('admin/assets/js/demo/sparkline-demo.js') }}"></script>



    <!-- ChartJS-->

    <script src="{{ asset('admin/assets/js/plugins/chartJs/Chart.min.js') }}"></script>



    <!-- Toastr -->

    <script src="{{ asset('admin/assets/js/plugins/toastr/toastr.min.js') }}"></script>



    <script>

        

        jQuery(function($) {



            var current = location.pathname;





            var path = window.location.href;

            if(path.indexOf('create') !== -1){

                path = path.slice(0, path.lastIndexOf('/'));

            }

            else if(path.indexOf('edit') !== -1){

                path = path.slice(0, path.lastIndexOf('/'));

                path = path.slice(0, path.lastIndexOf('/'));

            }

             

            // because the 'href' property of the DOM element is the absolute path

            $('nav ul li a').each(function() {

                

                if (this.href === path) {

                       

                    if($(this).parent().addClass('active').parent('ul')){

                        $(this).parent().parent('ul').addClass('in');

                        $(this).parent().parent('ul').parent().addClass('active');



                        if($(this).parent().parent('ul').parent().parent('ul')){

                            $(this).parent().parent('ul').parent().parent('ul').addClass('in');

                            $(this).parent().parent('ul').parent().parent('ul').parent().addClass('active');



                        }

                    }

                }

             });

        });



    </script>



    <script type="text/javascript">

        // currency format pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" 



        $(document).ready(function() {

            $("input[data-type='currency']").each(function(index, el) {

                formatCurrency($(el),"blur");

            });

        });



        $("input[data-type='currency']").on({

            keyup: function() {

              formatCurrency($(this));

            },

            blur: function() { 

              formatCurrency($(this), "blur");

            }

        });

        function formatNumber(n) {

          // format number 1000000 to 1,234,567

          return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, " ")

        }

        function formatCurrency(input, blur) {

          // appends $ to value, validates decimal side

          // and puts cursor back in right position.

          

          // get input value

          var input_val = input.val();

          

          // don't validate empty input

          if (input_val === "") { return; }

          

          // original length

          var original_len = input_val.length;



          // initial caret position 

          var caret_pos = input.prop("selectionStart");

            

          // check for decimal

          if (input_val.indexOf(".") >= 0) {



            // get position of first decimal

            // this prevents multiple decimals from

            // being entered

            var decimal_pos = input_val.indexOf(".");



            // split number by decimal point

            var left_side = input_val.substring(0, decimal_pos);

            var right_side = input_val.substring(decimal_pos);



            // add commas to left side of number

            left_side = formatNumber(left_side);



            // validate right side

            right_side = formatNumber(right_side);

            

            // On blur make sure 2 numbers after decimal

            if (blur === "blur") {

              right_side += "00";

            }

            

            // Limit decimal to only 2 digits

            right_side = right_side.substring(0, 2);



            // join number by .

            input_val =   left_side + "." + right_side;



          } else {

            // no decimal entered

            // add commas to number

            // remove all non-digits

            input_val = formatNumber(input_val);

            input_val =   input_val;

            

            // final formatting

            if (blur === "blur") {

              input_val += ".00";

            }

          }

          

          // send updated string to input

          input.val(input_val);



          // put caret back in the right position

          var updated_len = input_val.length;

          caret_pos = updated_len - original_len + caret_pos;

          input[0].setSelectionRange(caret_pos, caret_pos);

        }

    </script>

   



    @yield('script')

</body>

</html>