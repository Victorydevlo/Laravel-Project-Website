<?php if (isset($component)) { $__componentOriginale1d6aa14b1d3a941a931c61b524cbe87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87 = $attributes; } ?>
<?php $component = App\View\Components\BackgroundLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('background-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BackgroundLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md"> 
    <h1 class="text-2xl font-bold mb-4 text-center">Edit Product Type</h1>
        <?php $__empty_1 = true; $__currentLoopData = $product_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginal459443b10872bad0a1ead4c40c224b78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal459443b10872bad0a1ead4c40c224b78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-type','data' => ['producttype' => $product_type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-type'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['producttype' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product_type)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal459443b10872bad0a1ead4c40c224b78)): ?>
<?php $attributes = $__attributesOriginal459443b10872bad0a1ead4c40c224b78; ?>
<?php unset($__attributesOriginal459443b10872bad0a1ead4c40c224b78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal459443b10872bad0a1ead4c40c224b78)): ?>
<?php $component = $__componentOriginal459443b10872bad0a1ead4c40c224b78; ?>
<?php unset($__componentOriginal459443b10872bad0a1ead4c40c224b78); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No product types available.</li>
        <?php endif; ?>
        <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">  
            <a href="<?php echo e(route('createtp')); ?>" class="text-stone-50 hover:text-stone-50 transition duration-300">Add Product</a>
        </div>
    </div> 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87)): ?>
<?php $attributes = $__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87; ?>
<?php unset($__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1d6aa14b1d3a941a931c61b524cbe87)): ?>
<?php $component = $__componentOriginale1d6aa14b1d3a941a931c61b524cbe87; ?>
<?php unset($__componentOriginale1d6aa14b1d3a941a931c61b524cbe87); ?>
<?php endif; ?>

<?php /**PATH /projects/component-2-Victorydevlo/resources/views/producttypeform.blade.php ENDPATH**/ ?>