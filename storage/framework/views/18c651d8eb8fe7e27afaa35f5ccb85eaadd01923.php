  

<?php $__env->startSection('content'); ?>
    <div class="top">
        Dashboard >Committee Election ><mark class="red">Voting </mark> 
    </div>
    <div class="center">
        <div >
            Calon Majlis Tertinggi
        </div>
        <div class="item">
            <img class ="candidate" src="/images/candidate/candidate 1.png" alt="candidate 1"/>
            <span class="caption">Rubyatun Amirah <br>Binti Hanizam Amin</span>
            <div class="test>">
                <input type="checkbox">
                <span class="checkmark"></span>
            </div>
        </div>
        <div class="item">
            <img class ="candidate" src="/images/candidate/candidate 2.png" alt="candidate 2">
            <span class="caption">Ik Shim A/P<br>Eh Fhot</span>
            <div class="test>">
                <input type="checkbox">
                <span class="checkmark"></span>
            </div>
        </div>
        <div class="item">
            <img class ="candidate" src="/images/candidate/candidate 3.png" alt="candidate 2">
            <span class="caption">Muhammad Nurhidayat<br>Bin Mohd Taufik</span>
            <div class="test>">
                <input type="checkbox">
                <span class="checkmark"></span>
            </div>
        </div>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
            <button type="submit" class="submit">Submit</button>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/Manage Committee Election/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petakom\resources\views/Manage Committee Election/Student/VotingPage.blade.php ENDPATH**/ ?>