

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-8">
        <article class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
            <h1 class="text-3xl font-bold mb-4">The Importance of Mental Health Awareness</h1>
            <p class="text-gray-500 text-sm">Published on July 15, 2024 by John Doe</p>

            <img src="<?php echo e(asset('images/blog-image.jpg')); ?>" alt="Mental Health Awareness" class="w-full h-64 object-cover mt-4 mb-6 rounded">

            <div class="prose max-w-none">
                <p>
                    Mental health is just as important as physical health, yet it is often overlooked. 
                    In today's fast-paced world, stress and anxiety have become common issues that affect people of all ages.
                </p>
                <p>
                    Taking care of your mental well-being is essential. Simple activities like meditation, regular exercise, 
                    and talking to loved ones can significantly improve your mental state.
                </p>
                <blockquote>
                    "Your mental health is a priority. Your happiness is essential. Your self-care is a necessity."
                </blockquote>
                <p>
                    By spreading awareness and fostering open conversations, we can break the stigma surrounding mental health 
                    and encourage people to seek help when needed.
                </p>
            </div>
        </article>

        <section class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Related Posts</h2>
            <ul class="list-disc pl-6">
                <li><a href="#" class="text-blue-600 hover:underline">5 Simple Ways to Reduce Stress</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Why Sleep is Crucial for Mental Health</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">How to Practice Mindfulness Daily</a></li>
            </ul>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-portfolio\resources\views/single-blog.blade.php ENDPATH**/ ?>