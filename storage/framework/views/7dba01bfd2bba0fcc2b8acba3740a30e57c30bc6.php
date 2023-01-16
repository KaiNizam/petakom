  

<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">
	<?php echo e($message); ?>

</div>

<?php endif; ?>

<div class="top">
                    Dashboard > <mark class="red"> Committee Election </mark> 
                </div>
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button class="button button1">Search</button>
                    <a href="/ElectionResultPage">
                        <button class="button button2">Result</button>
                    </a>>
                    <a href="AddCandidatePage">
                        <button class="button button2">Add +</button>
                    </a>
                </div>
                <div class="center">
                    <div >
                        Calon Majlis Tertinggi
                    </div>

                    <div class="item">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $VotingRecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <img src="<?php echo e(asset('images/candidate/')); ?>"/> -->
                        <a href="CandidateProfilePage">
                        <?php echo e($users->candidate_name); ?>

                        <a href="EditCandidatePage">
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 2.png" alt="candidate 2">
                        <span class="caption">Ik Shim A/P<br>Eh Fhot</span>
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                    </div>
                    <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 3.png" alt="candidate 2">
                        <span class="caption">Muhammad Nurhidayat<br>Bin Mohd Taufik</span>
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                    </div> -->
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/Manage Committee Election/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kiran\OneDrive\Desktop\SE\petakom-management-system\petakom\resources\views/Manage Committee Election/Committee/CandidateListPage.blade.php ENDPATH**/ ?>