<?php require_once '../__constants.php'; ?>
<?php use GreenEye\App \{
    Config\Import,
    Functions\getself
}; ?>
<?php Import::Header(); ?>
<div class="container">
    <h2>Appointment form</h2><br>
    <form action="<?php getself::getName(); ?>">
        <div class="form-group">
            <label for="Patient Name">Patient Name:</label>
            <input type="text" class="form-control" id="Patient Name" placeholder="Enter Patient Name" name="Patient Name">
        </div>

        <label for="Date">Date:</label>
        <input type="date" name="bday">
        <br>
        <br>

        <label for="Gender">Gender:</label>
        <select class="form-control">
            <option></option>
            <option>Male</option>
            <option>Female</option>
        </select>

        <div class="form-group">
            <label for="pwd">Symptoms:</label>
            <input type="text" class="form-control" id="Symptoms" placeholder="Enter symptoms" name="Symptoms">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-default">Make an appointment</button>


    </form>
</div>
<?php Import::Footer(); ?>