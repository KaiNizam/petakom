  

<?php $__env->startSection('content'); ?>

<div class="top">
        Dashboard > Committee Election > <mark class="red"> Edit </mark> 
</div>
    <div class="center">
        <div class="item1">
        Edit  Candidate Profile
            <div class="profileleft">
                Name
                <div class="input">
                    <input type="text" placeholder="Enter Name" id="name" value="Rubyatun Amirah Binti Hanizam Amin
">
                </div>
                Program
                <div class="input">
                    <input type="text" placeholder="Enter Program" id="program"value="TEKNOLOGI GRAFIK & MULTIMEDIA">
                </div>
                Year
                <div class="input">
                    <input type="text" placeholder="Enter Year" id="year" value="Tahun 3">
                </div>
                Manifesto
                <textarea id="story" name="story" rows="5" cols="33">Membuka makmal kepada pelajar untuk melakukan
kerja-kerja di fakulti sementara menunggu 
kelas selanjutnya
</textarea>
            </div>
        </div>
        <div class="item1">
            <div class="profileleft">
                Image
                <div>
                <img class ="candidatefull" src="/images/candidate/full 1.png" alt="candidate 1"/>
                </div>
                <button type="submit" class="submit">Submit</button>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('/Manage Committee Election/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petakom\resources\views/Manage Committee Election/Committee/EditCandidatePage.blade.php ENDPATH**/ ?>