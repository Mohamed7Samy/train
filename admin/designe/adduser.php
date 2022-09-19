<div class="row">
    <div class="col-lg-12">

        <form method="post" action="function/useradd.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username" style="font-weight: bold;"> username :</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password" style="font-weight: bold;"> password :</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold;"> email :</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="phone" style="font-weight: bold;"> phone :</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <input type="radio" name="gender" id="inlineradio1" value="1">
                <label for="inlineradio1">male</label>
            <div class="form-group">
            <div class="form-group">
                <input type="radio" name="gender" id="inlineradio2" value="2">
                <label for="inlineradio2">female</label>
            <div class="form-group">
                <label for="exampleInputEmail" style="font-weight: bold;"> address :</label>
                <input type="text" class="form-control" name="address" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail" style="font-weight: bold;"> privliges :</label>
                <select class="form-control" name="priv" >
                <option value = "1">User</option>
                <option value = "2">Admin</option>
                <option value = "3">Owner</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>   
    </div>  
</div>            