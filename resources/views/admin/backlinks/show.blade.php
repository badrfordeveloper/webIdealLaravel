
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Backlink</h5>
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
                                    <tr><th> Lien </th><td> {{ $backlink->link }} </td></tr><tr><th> Type </th><td> {{ $backlink->type }} </td></tr><tr><th> Etat </th><td> {{ $backlink->etat }} </td></tr><tr><th> Genre </th><td> {{ $backlink->genre }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                        @if(App\Helpers\Checker::checkAcces('backlinks','edit')) 

                         <a href="{{ url('/admin/backlinks/' . $backlink->id . '/edit') }}" title="Edit Backlink"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</button></a>
                          @endif


                        <div class="table-responsive" style="display:inline">
                        @if(App\Helpers\Checker::checkAcces('backlinks','destroy')) 

                        <form method="POST" action="{{ url('admin/backlinks' . '/' . $backlink->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Backlink" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>
                         @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


