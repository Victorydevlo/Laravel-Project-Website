<!-- resources/views/components/wish-card.blade.php -->
<div class="products-container"> 
<form action="<?php echo e(route('basketitem.store', ['id'=>$wishlists->product->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="stockcard">
        <div style="position: absolute; top: 5px; right: 5px; text-align: center;">
            <?php if($wishlists->product-> stock_quantity <= 0): ?>
                <div class="out">Out of stock</div>
            <?php else: ?> 
                <div class="in">In Stock</div>
            <?php endif; ?>
        </div>

        <div style="position: absolute; top: 5px; left: 5px; text-align: center;">
        <div class="quanty"> <?php echo e($wishlists->product->stock_quantity); ?> </div>
        </div>

        <div class="product-card">
            <form action="<?php echo e(route('product')); ?>" method="POST">
                <?php if($wishlists->product['product_image'] == 'A'): ?>
                    <a><img src="/images/pimage/book.png" class="w-8 h-8 mx-auto"></a>
                <?php elseif($wishlists->product['product_image'] == 'B'): ?>
                    <a><img src="/images/pimage/cd.png" class="w-8 h-8 mx-auto"></a>
                <?php elseif($wishlists->product['product_image'] == 'C'): ?>
                    <a><img src="/images/pimage/joystick.png" class="w-8 h-8 mx-auto"></a>
                <?php else: ?>
                    <img class="w-8 h-8 mx-auto" src="<?php echo e(asset('storage/images/' . $wishlists->product->product_image)); ?>" alt="product">
                <?php endif; ?>
                <div class="rounded-full bg-lime-200 px-8 mx-auto w-24 text-center"><?php echo e($wishlists->product->productType->type ?? null); ?></div>
                <p class="text-xl font-semibold text-gray-800 text-center"><?php echo e($wishlists->product->title); ?></p>
                <p class="text-base text-center"><?php echo e($wishlists->product->name); ?></p>
                <p class="text-sm text-center">£<?php echo e($wishlists->product->price); ?></p>
                    <input type="hidden" name="price" value="<?php echo e($wishlists->product->price ?? ''); ?>">
                    <input type="hidden" name="product_id" value="<?php echo e($wishlists->product->id ?? ''); ?>">
                    <input type="hidden" name="basket_id" value="<?php echo e(Auth::id() ?? ''); ?>">
                </form>
                <div class="px-14 flex justify-center align">                    
                <form action="<?php echo e(route('wisdelete', $wishlists->id)); ?>" method="POST" class="remove-item-form">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="remove-btn">Remove</button>
            </form>
            </div>            
        </div>
    </div>
</div>


<style>
.products-container {
    display: flex;
    display: inline-block;
    flex-wrap: nowrap;
    gap: 7rem;
    margin-top: 5;
}

.product-card {
    border: 1px solid #e2e8f0; 
    padding: 1rem;
    /* background-color: #f8fafc; */
    border-radius: 8px;
    width: 300px;
    /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
}

.stockcard {
    position: relative;
}

.align {
    margin-top: 9;
    gap: 25px;
}

.out, .in, .quanty {
    border-radius: 12px;
    padding: 3px 10px;
    font-size: 0.75rem; /* Small font size */
    font-weight: bold;
    min-width: 40px;
}

.out {
    background-color: #ffebee;
    border: 2px solid #f44336;
    color: #f44336;
}

.in {
    background-color: #e8f5e9;
    border: 2px solid #4caf50;
    color: #4caf50;
}

.quanty {
    background-color: #cbd5e1;
    border: 2px solid #94a3b8;
    color: #020617;
}

.remove-btn {
    background-color: #f44336;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: bold;
    transition: background-color 0.3s ease;
}
</style>
<?php /**PATH /projects/component-2-Victorydevlo/resources/views/components/wish-card.blade.php ENDPATH**/ ?>