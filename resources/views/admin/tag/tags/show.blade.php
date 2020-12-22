
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Tag</h5>
                        <div class="ibox-tools">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="ibox-content  text-center">

                       

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr><th> Libelle </th><td> {{ $tag->libelle }} </td>></tr>
                                </tbody>
                            </table>
                        </div>

                        @if(App\Helpers\Checker::checkAcces('tags','edit')) 

                         <a href="{{ url(config::get('constants.ADMIN_PATH').'tags/' . $tag->id . '/edit') }}" title="Edit Tag"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</button></a>
                          @endif


                        <div class="table-responsive" style="display:inline">
                        @if(App\Helpers\Checker::checkAcces('tags','destroy')) 

                        <form method="POST" action="{{ url(config::get('constants.ADMIN_PATH').'tags' . '/' . $tag->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Tag" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                         @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

