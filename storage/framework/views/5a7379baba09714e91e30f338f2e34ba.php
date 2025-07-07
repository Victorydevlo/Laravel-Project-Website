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
    <div class="p-4 m-4 rounded-lg border-2 border-blue-900 max-w-md">
        <h1 class="text-2xl font-bold mb-4">Add Product Type</h1>
        <form method="POST" action="<?php echo e(route('ptstore')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="POST">
            <div class="mb-4">
                <label for="type" class="block text-lg font-semibold">Product Type:</label>
                <input type="text" name="type" id="type" class="w-full p-2 border rounded-lg" placeholder="Enter product type" required>
            </div>
            <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">
            <button type="submit" class=" text-white px-4 py-2 rounded ">
                Add Type
            </button>
            </div>
        </form>
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
<?php endif; ?><?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/product-type-add.blade.php ENDPATH**/ ?>