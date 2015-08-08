<!-- Modal -->
    <div class="modal fade" id="invite-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{'captions.invite-someone'}}</h4>
                </div>

                <div class="modal-body">
                    <div class="modalMessages" id="inviteModalMessages"></div>

                    <div class="bs-example" data-example-id="textarea-form-control">
                        {!! Form::opener(['route' => 'connect.invite', 'id' => 'invite-form']) !!}
                            {!! Form::textarea('emails', null, ['id' => 'emails', 'rows' => '7', 'class' => 'form-control']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {{'captions.cancel'}}
                    </button>
                    <button type="button" class="btn btn-primary" id="invite-button">
                        {{'captions.send-invitation'}}
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
