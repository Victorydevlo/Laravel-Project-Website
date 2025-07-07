<script src="<?php echo e(asset('js/my.js')); ?>"></script>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
<header class="bg-gray-100 py-4 shadow-md">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-800">INTEL SHOP</h1>
            <?php if(auth()->guard()->check()): ?>
            <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                 <?php $__env->slot('trigger', null, []); ?> 
                    <button class="flex items-center text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                        <span class="mr-2"><?php echo e(Auth::user()->name); ?></span>
                        <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, ['class' => 'bg-white shadow-md rounded-md overflow-hidden']); ?> 
                    <div class="px-4 py-2 text-gray-700">
                        <?php echo e(Auth::user()->is_admin == 1 ? 'Administrator' : 'Customer'); ?>

                    </div>
                    <div class="border-t border-gray-200">
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="px-4 py-2">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Log Out')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                        </form>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>

            <?php else: ?>
            <div class="flex items-center space-x-6">
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 border border-gray-700 px-4 py-2 hover:text-blue-700 hover:border-blue-700 transition duration-300" style="margin-right:10;">
                    Login
                </a>
                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="text-sm text-gray-700 border border-gray-700 px-4 py-2 hover:text-blue-700 hover:border-blue-700 transition duration-300">
                    Register
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>
</body>



        <style>


        .lines {
            border-bottom: 2px solid gray;
            margin-top: 5px;
            width: 100%;
        } 

        .shadowlines {
            border-bottom: 2px solid white;
            margin-top: 5px;
            width: 100%;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }
        </style>
                
<?php if (isset($component)) { $__componentOriginal3f63ab0a0a58747864844e96c88e0fa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f63ab0a0a58747864844e96c88e0fa3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f63ab0a0a58747864844e96c88e0fa3)): ?>
<?php $attributes = $__attributesOriginal3f63ab0a0a58747864844e96c88e0fa3; ?>
<?php unset($__attributesOriginal3f63ab0a0a58747864844e96c88e0fa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f63ab0a0a58747864844e96c88e0fa3)): ?>
<?php $component = $__componentOriginal3f63ab0a0a58747864844e96c88e0fa3; ?>
<?php unset($__componentOriginal3f63ab0a0a58747864844e96c88e0fa3); ?>
<?php endif; ?>
<div class="lines"></div>
<section>
        </section>        
        <?php echo e($slot); ?>

        <section>

        <div class="lines"></div>
        </section>

        <footer>
            <p class="text-right">Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)</p>
        </footer>
    </body>
    
</html><?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/background-layout.blade.php ENDPATH**/ ?>