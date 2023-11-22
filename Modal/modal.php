<?php
// session_start();
if (isset($_SESSION['Type']) && $_SESSION['Type'] == 1) { ?>
    <!-- Button for Admin -->
    <a Edit type="button" class="btn btn-danger" data-toggle="modal" data-target="#editModal_<?php echo $_SESSION['id']; ?>"
        data-Name="<?php echo $_SESSION['Name'] ?>">Edit</a>
    
    <!-- Modal for Admin -->
    <div class="modal fade" id="editModal_<?php echo $_SESSION['id']; ?>"  tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Title for selected food -->
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <?php echo $_SESSION['Name'] ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form method="post" action="../Logic/editItem.php">
                        <input type="hidden" name="idProduct" value="<?php echo $_SESSION['id']; ?>">
                        <input type="hidden" name="idProductName" value="<?php echo $_SESSION['Name']; ?>">
                        <input type="hidden" name="idProductCaption" value="<?php echo $_SESSION['Caption']; ?>">
                        <!-- Form that must be filled in -->
                        <div class="form-group">
                            
                            <label>Name (optional)</label>
                            <input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Caption (optional)</label>
                            <input type="text" class="form-control" id="editCaption" name="editCaption" placeholder="Caption">
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" class="form-control" id="editStock" name="editStock" value="<?php echo $_SESSION['stock']; ?>"
                            min ="0" max="100">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit"  data-Name="<?php echo $_SESSION['Name']?>" class="btn btn-primary"></input>
                        </div>
   
                    </form>
                    <!-- End of form -->
                </div>
            </div>
        </div>
    </div>

    <div class="button-delete btn">
    <a type="button" class="btn btn-danger" id="Delete" name="Delete"  
    href="modal.php?delete=<?php echo $_SESSION['id']; ?>" onclick="return confirm('Hapus menu ini?');">Delete</a>
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