            <footer class="footer text-center">
                All Rights Reserved by Vital Educators Admin.
            </footer>
        </div>
    </div>
    <div class="modal fade" id="SendNotification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form method="POST">
          <div class="modal-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="add_notification"><i class="fa fa-plus"></i> Add Notification</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>
</div>
</div>

<!-- Owner Info Modal -->
<div class="modal fade" id="OwnerInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Owner Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            <b>Owner Name : </b> <span id="owner-name-div"></span>
        </p>
        <p>
            <b>Owner Phone : </b> <span id="owner-phone-div"></span>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Add Result Modal -->
<div class="modal fade" id="AddResult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sample Result</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
            <input type="hidden" id="sample_id" name="id">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <label>Select Gender</label>
                    <select name="result" class="form-control">
                        <option value="" hidden>Select</option>
                        <option value="Fe-Male">Fe-Male</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
              </div>
              <div class="col-6">
                <button class="btn btn-success" type="submit" name="update_sample">Add</button>
              </div>
            </div>
            

        </form>
        
      </div>
    </div>
  </div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/pages/dashboards/dashboard1.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(document).ready(function() {
        $('<?php echo $var['global']['table_id'] ?>').DataTable();
    } );

    <?php if (isset($_GET['send_notification'])) {
        echo '$("#SendNotification").modal("show");';
    } ?>
</script>
</body>

</html>