<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up for the account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/college-website/partials/_handleSignup.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="signupUsername" name="signupUsername">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="signupCpassword" name="signupCpassword">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label> <br>
            <input type="radio" name="gender" value="Male" required>Male <br>
            <input type="radio" name="gender" value="Female">Female
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Courses</label>
            <select class="form-control" id="courses" name="courses" required>
              <?php
              $sql = "SELECT * FROM `courses`";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];

                echo '<option value="' . $course_id . '">' . $course_name . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Year</label>
            <select class="form-control" id="courses" name="courses" required>
             <option value="1">First Year</option>
             <option value="2">Second Year</option>
             <option value="3">Third Year</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Photo</label> <br>
            <input class="input" type="file" name="image" required>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>

  </div>
</div>
</div>