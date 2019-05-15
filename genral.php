<?php

function showSuccessModel($msg){
    echo '  <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            
            
            <!-- Modal body -->
            <div class="modal-body">
                '.$msg.'
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onClick="removeUrlParam()" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
        </div>';

}

function showFailModel($msg){
    echo '  <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            
            
            <!-- Modal body -->
            <div class="modal-body">
                '.$msg.'
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" onClick="removeUrlParam()" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
        </div>';
        
}

?>