<div id="loginModal" class="modal fade" role="dialog">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodalLabel">Please login here </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="/Vesperr/Vesperr/partial/_handallogin.php" method="POST">
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="loginEmail" id="loginEmail" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="loginPass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="loginPass" id="loginPass">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  
</div>