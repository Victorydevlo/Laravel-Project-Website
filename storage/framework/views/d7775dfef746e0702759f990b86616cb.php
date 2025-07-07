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
    <div class="flex justify-end mr-5" style="margin-bottom: 20px;">
    </div>

    <div class="flex flex-wrap justify-start gap-5">
        <?php $__empty_1 = true; $__currentLoopData = $basketitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basketitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginal07ec1505c65574de03ddadf213d35937 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal07ec1505c65574de03ddadf213d35937 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-cards','data' => ['basketitem' => $basketitem]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['basketitem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($basketitem)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal07ec1505c65574de03ddadf213d35937)): ?>
<?php $attributes = $__attributesOriginal07ec1505c65574de03ddadf213d35937; ?>
<?php unset($__attributesOriginal07ec1505c65574de03ddadf213d35937); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07ec1505c65574de03ddadf213d35937)): ?>
<?php $component = $__componentOriginal07ec1505c65574de03ddadf213d35937; ?>
<?php unset($__componentOriginal07ec1505c65574de03ddadf213d35937); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="empty-basket">
                <p>Your basket is currently empty.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="mt-6">
    <?php echo e($basketitems->links()); ?>

    
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
<?php /**PATH /projects/component-2-Victorydevlo/resources/views/basket.blade.php ENDPATH**/ ?>