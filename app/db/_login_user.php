<!-- Modal -->
<div class="modal fade" id="mdlLogin" tabindex="-1" aria-labelledby="mdlRegisterLogin" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlLoginLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="\app\engine\_login.php" method="post">
      <div class="modal-body">
      <div class="container-fluid">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Log In"> 
      </form>
  </div>
</div>
      </div>
      
    </div>
  </div>
</div>
