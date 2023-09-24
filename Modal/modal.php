<?php 
session_start();
if(isset($_SESSION['Type']) && $_SESSION['Type'] == 1){ ?>
    <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#orderModal">Edit</a>
    <?php
}
else{ ?>
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModal">Order</a>
<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Your order has been added to your cart. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
