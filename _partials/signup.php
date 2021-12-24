<div class="modal" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenter">
                  Student Registration
                </h5>
                <button type="button" class="close" data-dismiss="modal" area-Label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                  <!-- Start Student Registration Form -->
                  <form>
                    <div class="form-group">
                      <i class="fas fa-user"></i>
                      <label for="stuname" class="pl-2 form-weight-bold">Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                    </div>
                    <div class="form-group">
                      <i class="fas fa-envelope"></i>
                      <label for="stumail" class="pl-2 form-weight-bold">Email</label>
                      <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                      <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <i class="fas fa-key"></i>
                      <label for="stupass" class="pl-2 form-weight-bold">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                    </div>
                  </form>
                  <!-- End Student Registration Form -->
                </div>
                <div class="modal-footer">
                  <button type="botton" class="btn btn-primary" onclick="addStu()">Sign Up</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="model">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>