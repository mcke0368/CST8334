<div id="modal-select-logbook-type" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Select a template</h4>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <select class="form-control" id="logbook-select-template">
                            <option selected="true" disabled="disabled">--- Choose Template ---</option>
                            <option value="new">Create New Template</option>
                            @foreach($templates as $template)
                                <option value="{{$template->html_data}}">{{$template->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="modal-button-select-type" type="button" class="btn btn-success" data-dismiss="modal">
                    Select
                </button>
            </div>
        </div>
    </div>
</div>
