
<div class="remodal" data-remodal-id="modal-resposta-recurso">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Responder Recurso</h1>
    <p>
        <strong>Oportunidade: 
        <label id="replyOpportunityNameLabel"></label>
        </strong>
    </p>
    <p>
        <small id="resourceText"></small>
    </p>
    <form id="formReplyResource">
        <textarea name="resource_reply" id="resource_reply" cols="30" rows="20" class="form-control" style="height: 322px !important"></textarea>
        <br>
        <label for="">Situação</label>
        <select name="resource_status" id="resource_status" class="form-contro">
            <option value="">--Selecione--</option>
            <option value="Deferido">Deferido</option>
            <option value="Parcialmente deferido">Parcialmente Deferido</option>
            <option value="Indeferido">Indeferido</option>
        </select>
        <br>
        <hr>
        <button data-remodal-action="cancel" class="btn btn-default" title="Sair da resposta">
        <i class="fa fa-close" aria-hidden="true"></i>
        Fechar
        </button>
        <input type="hidden" name="_METHOD" value="PUT"/>
        <input type="hidden" name="resource_id" id="resource_id">
        <button class="btn btn-primary" type="submit" title="Enviar o seu recurso para essa oportunidade" style="margin-left: 20px;">
        <i class="fa fa-paper-plane" aria-hidden="true"></i>
        Responder
        </button>
    </form>
</div>