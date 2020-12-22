
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Post</h5>
                        <div class="ibox-tools">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="ibox-content  text-center">

                       

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <td colspan="2" style="text-align:center"> <img height="150px;" src="@if($post->photo) {{asset('storage/'.$post->photo)}} @else {{asset('assets/images/default.png')}} @endif" alt="{{ $post->titre }}"> </td>
                                    </tr> 
                                    <tr>
                                        <th> Titre </th><td> {{ $post->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Description </th><td> {{ $post->description }} </td>
                                    </tr>
                                    <tr>
                                        <th> Content </th><td> {!! $post->content !!} </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        @if(App\Helpers\Checker::checkAcces('posts','edit')) 

                         <a href="{{ url(config::get('constants.ADMIN_PATH').'posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</button></a>
                          @endif


                        <div class="table-responsive" style="display:inline">
                        @if(App\Helpers\Checker::checkAcces('posts','destroy')) 

                        <form method="POST" action="{{ url(config::get('constants.ADMIN_PATH').'posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                         @endif

                    </div>
                </div>
            </div>
        </div>
    </div>