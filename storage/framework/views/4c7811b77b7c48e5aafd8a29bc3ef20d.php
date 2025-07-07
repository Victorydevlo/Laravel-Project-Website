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
    <?php if (isset($component)) { $__componentOriginal354164d99b18c6789616df0af7e040b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal354164d99b18c6789616df0af7e040b3 = $attributes; } ?>
<?php $component = App\View\Components\ProductForm::resolve(['product' => $product ?? null,'producttypes' => $producttypes] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProductForm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal354164d99b18c6789616df0af7e040b3)): ?>
<?php $attributes = $__attributesOriginal354164d99b18c6789616df0af7e040b3; ?>
<?php unset($__attributesOriginal354164d99b18c6789616df0af7e040b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal354164d99b18c6789616df0af7e040b3)): ?>
<?php $component = $__componentOriginal354164d99b18c6789616df0af7e040b3; ?>
<?php unset($__componentOriginal354164d99b18c6789616df0af7e040b3); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87)): ?>
<?php $attributes = $__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87; ?>
<?php unset($__attributesOriginale1d6aa14b1d3a941a931c61b524cbe87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1d6aa14b1d3a941a931c61b524cbe87)): ?>
<?php $component = $__componentOriginale1d6aa14b1d3a941a931c61b524cbe87; ?>
<?php unset($__componentOriginale1d6aa14b1d3a941a931c61b524cbe87); ?>
<?php endif; ?><?php /**PATH /projects/component-2-Victorydevlo/resources/views/productform.blade.php ENDPATH**/ ?>