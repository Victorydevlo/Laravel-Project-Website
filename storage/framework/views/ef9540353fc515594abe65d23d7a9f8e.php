<div class="flex">
    <!-- Home link -->
    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="<?php echo e(route('product')); ?>" class="text-gray-700 hover:text-blue-700 transition duration-300">Home</a>
    </div>

    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="<?php echo e(route('productpage')); ?>" class="text-gray-700 hover:text-blue-700 transition duration-300">Products</a>
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Product::class)): ?>
        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="<?php echo e(route('create')); ?>" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product</a>
        </div>

        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="<?php echo e(route('producttype')); ?>" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product Type</a>
        </div>        
    <?php endif; ?>
    <div class="flex ml-auto" style="position: absolute; right: 5px;">
    <div class="justify-end">
        <div class="py-2 m-3 w-26 justify-end">  
            <?php if(Auth::check()): ?>
                <!-- If logged in, go to the wishlist -->
                <a href="<?php echo e(route('wishlist')); ?>" class="text-center mx-auto text-gray-50">
                    <img src="/images/wishlist.png" class="w-6 h-6 mx-auto">
                </a>
            <?php else: ?>
                <!-- If not logged in, redirect to login -->
                <a href="<?php echo e(route('login')); ?>" onclick="alert('Please log in First')" class="text-center mx-auto text-gray-50">
                    <img src="/images/wishlist.png" class="w-6 h-6 mx-auto">
                </a>
            <?php endif; ?>
        </div> 
    </div>

    <div class="justify-end">
        <div class="px-4 py-2 m-3 w-22 justify-end">  
            <?php if(Auth::check()): ?>
                <!-- If logged in, go to the basket -->
                <a href="<?php echo e(route('basket')); ?>" class="text-center mx-auto text-gray-50">
                    <img src="/images/a.png" class="w-6 h-6 mx-auto">
                </a>
            <?php else: ?>
                <!-- If not logged in, redirect to login -->
                <a href="<?php echo e(route('login')); ?>" onclick="alert('Please log in First.')" class="text-center mx-auto text-gray-50">
                    <img src="/images/a.png" class="w-6 h-6 mx-auto">
                </a>
            <?php endif; ?>
        </div> 
    </div>
</div>

</div><?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/menu-bar.blade.php ENDPATH**/ ?>