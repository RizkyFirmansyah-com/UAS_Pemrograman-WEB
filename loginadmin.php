<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Login Eskobar</title> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="bg-light"> 
 
<div class="container mt-5"> 
    <div class="row justify-content-center"> 
        <div class="col-md-4"> 
            <div class="card shadow-sm rounded-4"> 
                <div class="card-body"> 
                    <h3 class="text-center mb-4">Login</h3> 
                    <form method="POST" action="proseslogin.php"> 
                        <div class="mb-3"> 
                            <label for="username" class="formlabel">Username</label> 
                            <input type="text" name="username" class="form-control" id="username" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="password" class="formlabel">Password</label> 
                            <input type="password" name="password" class="form-control" id="password" required> 
                        </div> 
                        <button type="submit" class="btn btn-primary w-100">Login</button> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 

<script>
    history.pushState(null, null, window.location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
    
</body> 
</html>
