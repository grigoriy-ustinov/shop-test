<?php require_once('header.php')?>
<div class="row">
    <div class="col-sm">
<!--   FORM FOR CPU -->
    <div class="formcontainer">
    <form method="POST" action="add_cpu.php">
        <div class="mb-3">
            <div class="form-group">
                <h3>Add CPU</h3>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name ="name">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="cores">Cores</label>
                <input type="text" class="form-control" id="cores" name ="cores">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="clock">Clockspeed</label>
                <input type="text" class="form-control" id="clock" name ="clock">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name ="price">
            </div>
        </div>
        <button type="submit" name="action" value="create_post" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
    <div class="col-sm">
    <!--   FORM FOR CPU -->
    <div class="formcontainer">
    <form method="POST" action="add_ram.php">
        <div class="mb-3">
            <div class="form-group">
                <h3>Add RAM</h3>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name ="name">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="latency">Latency</label>
                <input type="text" class="form-control" id="latency" name ="latency">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="speed">Clockspeed</label>
                <input type="text" class="form-control" id="clock" name ="clock">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name ="price">
            </div>
        </div>
        <button type="submit" name="action" value="create_post" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
    <div class="col-sm">
    <!--   FORM FOR SCREENS -->
    <div class="formcontainer">
    <form method="POST" action="add_screen.php">
    <div class="mb-3">
            <div class="form-group">
                <h3>Add Screens</h3>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name ="name">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="resolution">Resolution</label>
                <input type="text" class="form-control" id="resolution" name ="resolution">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="panel">Panel</label>
                <input type="text" class="form-control" id="panel" name ="panel">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name ="price">
            </div>
        </div>
        <button type="submit" name="action" value="create_post" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
</div>



