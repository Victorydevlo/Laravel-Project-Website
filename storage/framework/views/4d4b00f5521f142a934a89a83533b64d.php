<div>

<?php if(Route::is('create')): ?>
        <form method="POST" action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data">
<?php elseif(Route::is('edit')): ?> 
        <form method="POST" action="<?php echo e(route('product.update', ['id'=>$product->id])); ?>" >
        <input type="hidden" name="_method" value="PUT">
<?php endif; ?>
    <?php echo csrf_field(); ?>

    <?php if($errors->any()): ?>
        <div class="bg-red-600 border-solid rounded-md border-2 border-red-700">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="text-lg text-gray-100"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
            <?php endif; ?>
        <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
            <div class="text-sm">
                <input name="title" type="text" placeholder="title" value = "<?php echo e($product->title ?? ''); ?>" required/>
            </div>
            <p class="text-sm">
                <input name="name" type="text" placeholder="artist/author/console" value="<?php echo e($product->name ?? ''); ?>" required />
            </p>
            <p>
                <input type="number" step='0.01' name="price"  min='0' placeholder="price" value="<?php echo e(($product->price ?? 0)); ?>" required />
            </p>
            <select name='product_type_id'>
            <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value= "<?php echo e($producttype -> id); ?>"> <?php echo e($producttype->type); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            


            
            </select>  
            <!-- <select name='product_type_id'>
                <option value= "<?php echo e($product->product_type_id ?? 1); ?>"> Book </option>
                <option value= "<?php echo e($product->product_type_id ?? 2); ?>"> CD </option>
                <option value= "<?php echo e($product->product_type_id ?? 3); ?>"> Games </option>
            </select>   -->
            <div class='formupload'>                
                <input type="file" name="file" id="file" value="<?php echo e($product->product_image ?? ''); ?>">
            </div>
            <p>
                <input type="number" step='1' min='0' name="stock_quantity"  placeholder="stock_quantity" value="<?php echo e(($product->stock_quantity ?? 0)); ?>" />
            </p>            
            <div>
                <?php if(Route::is('create')): ?>
                    <button type="submit" class="bg-gray-800 text-white mt-2 p-2">Add New</button>
                <?php elseif(Route::is('edit')): ?>         
                    <button href="<?php echo e(route('product')); ?>"type="submit" value="<?php echo e($product->id); ?>" class="bg-gray-800 text-white mt-2 p-2">Update</button>
                <?php endif; ?>
            </div>
        </div>
    </form>    
</div><?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/product-form.blade.php ENDPATH**/ ?>