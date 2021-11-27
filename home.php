 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Patient Appointment Scheduler</h1>
            <p class="lead fw-normal text-white-50 mb-0">
                <button class="btn btn-sm btn-primary" type="button" id="create_appointment">Schedule Appointment Now</button>
                <br><a href="admin/login.php">Log In as Admin</a></br>
            </p>c
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        
    <?php include('about.html') ?>
        
    </div>
</section>
<script>
    $(function(){
        $('#create_appointment').click(function(){
			uni_modal("Appointment Form","admin/appointments/manage_appointment.php",'mid-large')
		})
    })
</script>