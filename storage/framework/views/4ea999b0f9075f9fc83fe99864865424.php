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
    <div class="flex justify-end mr-5" style="margin-bottom: 20;">
    </div>   

    <div class="flex flex-wrap justify-start gap-5">
        <?php $__empty_1 = true; $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if (isset($component)) { $__componentOriginalb6a917b3f9d67941b34f61bf0dbecbca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6a917b3f9d67941b34f61bf0dbecbca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wish-card','data' => ['wishlists' => $wishlists]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wish-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wishlists' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wishlists)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6a917b3f9d67941b34f61bf0dbecbca)): ?>
<?php $attributes = $__attributesOriginalb6a917b3f9d67941b34f61bf0dbecbca; ?>
<?php unset($__attributesOriginalb6a917b3f9d67941b34f61bf0dbecbca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6a917b3f9d67941b34f61bf0dbecbca)): ?>
<?php $component = $__componentOriginalb6a917b3f9d67941b34f61bf0dbecbca; ?>
<?php unset($__componentOriginalb6a917b3f9d67941b34f61bf0dbecbca); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="empty-basket">
                <p>Your basket is currently empty.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="mt-6">
    <?php echo e($wishlist->links()); ?>

    
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
<?php endif; ?><?php /**PATH /projects/component-2-Victorydevlo/resources/views/wishlist.blade.php ENDPATH**/ ?>