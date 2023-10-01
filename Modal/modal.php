<?php
session_start();
if (isset($_SESSION['Type']) && $_SESSION['Type'] == 1) { ?>
    <!-- Button for Admin -->
    <a Edit type="button" class="btn btn-danger" data-toggle="modal" data-target="#editModal_<?php echo $_SESSION['id']; ?>"
        data-Name="<?php echo $_SESSION['Name'] ?>">Edit</a>

    <!-- Modal for Admin -->
    <div class="modal fade" id="editModal_<?php echo $_SESSION['id']; ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <?php echo $_SESSION['Name'] ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="#" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Caption</label>
                            <input type="text" class="form-control" id="#" placeholder="Caption">
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="text" class="form-control" id="#" placeholder="Stock">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <?php
} else { ?>
    <!-- Button for User -->
    <a type="button" class="btn btn-primary" data-toggle="modal" data-Name="<?php echo $_SESSION['Name'] ?>"
        data-target="#orderModal_<?php echo $_SESSION['id']; ?>">Order</a>

    <!-- Modal for User -->
    <div class="modal fade" id="orderModal_<?php echo $_SESSION['id'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalMessage">
                        <?php echo $_SESSION['Name'] ?> has been added to cart!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>