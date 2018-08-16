<?php $__env->startSection('content'); ?>
<div class = "col-sm-3 col-md-9 col-lg-9 pull-left">
	<div class="jumbotron">
		<h1><?php echo e($company->name); ?></h1>
		<p class="lead"><?php echo e($company->description); ?></p>
		<!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
	</div>

	<!-- Example row of columns -->
	<div class="row" style =" background : white; margin: 10px">

		<?php $__currentLoopData = $company->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-lg-4">
			<h2><?php echo e($project->name); ?></h2>
				<p class="text-danger"><?php echo e($project->description); ?></p>
				<p><a class="btn btn-primary" href="/projects/<?php echo e($project->id); ?>" role="button">View Project »</a></p>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>

<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
		<div class="sidebar-module">
		  <h4>Actions</h4>
		  <ol class="list-unstyled">
		    <li><a href="#">Edit</a></li>
		    <li><a href="#">Delete</a></li>
		    <li><a href="#">Add New User</a></li>
		  </ol>
		</div>
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          
          <div class="sidebar-module">
            <h4>Members</h4>
            <?php $__currentLoopData = $company->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ol class="list-unstyled">
              <li><a href="#"><?php echo e($project->name); ?></a></li>
            </ol>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
          
</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>