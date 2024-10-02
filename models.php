      <?php 
        $rand = rand();
      ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Add Student modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-student-form" class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <select name="class" class="form-control">
                                    <option>Select Class...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="reg_no" id="reg_no" class="form-control" placeholder="<?=$rand?>" readonly>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="other_name" class="form-control" placeholder="Other Name">
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option>select gender...</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="dob" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="save-student" class="btn btn-primary">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
      <!-- Cash Payment model -->
      <div class="modal fade" id="modal-payment">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pay School Fees (Cash)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="images/IMG_2399.jpg" width="200"><br>
                </div>
                <div class="col-md-6">
                  <form method="POST" class="form">
                    <div class="form-group">
                       <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="id_number" class="form-control" placeholder="<?=$rand?>" readonly>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="gender" class="form-control" placeholder="Male" readonly="yes">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col">
                          <input type="text" name="full_name" class="form-control" placeholder="Usman Shehu" readonly="yes">
                       </div>
                       </div><br>

                      <div class="row">
                        <div class="col">
                          <input type="text" name="class" class="form-control" placeholder="Primary 1" readonly="yes">
                       </div>
                       </div><br>
                       <div class="row">
                        <div class="col">
                          <input type="text" name="dob" class="form-control" placeholder="01-03-995" readonly="yes">
                        </div>
                      </div><br>
                    </div>
                </div>
                
              </div>

                      <input type="text" name="id_number" class="form-control" placeholder="#7,000.00" readonly="yes"><br>
                      <input type="text" name="amount" class="form-control" placeholder="Enter Amount"><br>
                      <input type="text" name="debt" class="form-control" placeholder="#0.00" readonly="yes">
                  </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Pay</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Add Session model -->
      <div class="modal fade" id="modal-session">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Session</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="session-form" class="form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="session" id="session" class="form-control" placeholder="Session">
                                </div>
                            </div>
                          </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" id="save-session" class="btn btn-primary">Save</button>
                  </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Add Term model -->
      <div class="modal fade" id="modal-term">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">New Term</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="term-form" class="form">
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-md-6">
                                      <select name="session" class="form-control">
                                          <option>Select Session...</option>
                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="term" class="form-control" placeholder="Term">
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" id="save-term" class="btn btn-primary">Save</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <!-- Add Class model -->
      <div class="modal fade" id="modal-class">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">New Class</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="class-form" class="form">
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-md-6">
                                      <select name="session" class="form-control">
                                          <option>Select Session...</option>
                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <select name="term" class="form-control">
                                          <option>Select Term...</option>
                                      </select>
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-12">
                                      <input type="text" name="class" class="form-control" placeholder="Class">
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" id="save-class" class="btn btn-primary">Save</button>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<script>
    $(document).ready(function () {
        $("#save-session").click(function () {
            // Get form data
            var session = $("#session").val();

            // AJAX request
            $.ajax({
                type: "POST",
                url: "inseart_session.php",
                data: { session: session },
                success: function (response) {
                    // Handle success response
                    alert(response);
                    // Optionally, you can close the modal or reset the form here
                },
                error: function (xhr, status, error) {
                    // Handle error
                    alert("Error: " + error);
                }
            });
        });
    });


    $(document).ready(function () {
        $("#save-student").click(function () {
            // Serialize form data
            var formData = $("#add-student-form").serialize();

            // AJAX request
            $.ajax({
                type: "POST",
                url: "insert_student.php",
                data: formData,
                success: function (response) {
                    // Handle success response
                    alert(response); // Display success message
                    // Clear input fields
                    $("#add-student-form")[0].reset();
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.log("Error: " + error);
                }
            });
        });
    });

    $(document).ready(function () {
        $("#save-term").click(function () {
            // Serialize form data
            var formData = $("#term-form").serialize();

            // AJAX request
            $.ajax({
                type: "POST",
                url: "insert_term.php", // Path to your PHP script handling form submission
                data: formData,
                success: function (response) {
                    // Handle success response
                    alert(response); // Display success message
                    // Clear input fields
                    $("#term-form")[0].reset();
                },
                error: function (xhr, status, error) {
                    // Handle error
                    alert("Error: " + error);
                }
            });
        });
    });

     $(document).ready(function () {
        $("#save-class").click(function () {
            // Serialize form data
            var formData = $("#class-form").serialize();

            // AJAX request
            $.ajax({
                type: "POST",
                url: "insert_class.php", // Path to your PHP script handling form submission
                data: formData,
                success: function (response) {
                    // Handle success response
                    alert(response); // Display success message
                    // Clear input fields
                    $("#class-form")[0].reset();
                },
                error: function (xhr, status, error) {
                    // Handle error
                    alert("Error: " + error);
                }
            });
        });
    });
</script>
