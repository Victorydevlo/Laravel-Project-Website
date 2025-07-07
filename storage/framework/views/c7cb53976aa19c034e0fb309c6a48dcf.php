<div class="flex justify-between items-center">
    
    <?php if(Route::is('producttype')): ?>
        <div class="text-lg font-bold flex justify-between items-center gap-4">
            <?php echo e($producttype->type); ?>

        </div>
    <?php elseif(Route::is('producttype/{id}/edit')): ?>
        <div class="text-lg font-bold flex justify-between items-center gap-4">
            <input name="name" type="text" placeholder="artist/author/console" value="<?php echo e($producttype->type ?? ''); ?>" />
        </div>
    <?php endif; ?>
    <div class='flex next'>
        <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 h-10 text-center">  
            <a href="/producttype/<?php echo e($producttype->id); ?>/edit" class="text-stone-50 hover:text-stone-50 transition duration-300">Edit</a>
        </div>
          
            <form action="<?php echo e(route('ptdelete', $producttype->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="rounded-none border bg-red-600 px-6 py-2 m-3 w-26 text-center text-stone-50 hover:text-stone-50 transition duration-300">
                Delete
            </button>
            </form>
    </div>
        
</div>

<style>
        .next {
            justify-content: right;
        }     
</style><?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/product-type.blade.php ENDPATH**/ ?>