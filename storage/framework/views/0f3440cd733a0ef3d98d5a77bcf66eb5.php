<?php $__env->startSection('content'); ?>
<style>
    body {
        background-image: url('https://example.com/background-image.jpg'); /* Replace with your desired background image URL */
        background-size: cover; /* Cover the entire viewport */
        background-repeat: no-repeat; /* No repeat */
        background-position: center; /* Center the image */
        color: white; /* Default text color */
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
        padding: 20px;
    }

    .card {
        background-color: rgba(27, 42, 89, 0.9); /* Semi-transparent deep blue */
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px; /* Limit the width */
        text-align: center;
    }

    .form-label {
        color: #FF5900; /* Gold orange */
        margin-bottom: 8px; /* Add margin below labels */
        font-weight: bold; /* Make labels bold */
    }

    .form-control {
        border-radius: 5px; /* Rounded corners for input fields */
        border: 1px solid #FF5900; /* Gold orange border */
        padding: 10px; /* Add padding inside input fields */
        margin-bottom: 15px; /* Space between input fields */
    }

    .btn {
        background-color: #F24C27; /* Gold Orange */
        color: white;
        border: none;
        width: 100%;
        border-radius: 5px;
        padding: 10px;
        font-weight: bold; /* Make button text bold */
    }
a{
    color:white;
    text-decoration: none;
}
    .btn:hover {
        background-color: #FF8C00; /* Darker orange on hover */
    }

    .icon {
        font-size: 48px; /* Icon size */
        color: #FF5900; /* Gold orange */
        margin-bottom: 20px;
    }

    .additional-links {
        margin-top: 20px;
        color: #FF5900; /* Gold orange */
    }
</style>

<div class="login-container">
    <div class="card">
        <i class="fas fa-user icon"></i> <!-- Font Awesome User Icon -->
        <h2 class="mb-4"><?php echo e(__('Login to Your Student Account')); ?></h2>
        <form method="POST" action="<?php echo e(route('student.login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Email -->
            <div class="form-group mb-3">
                <label for="email" class="form-label"><?php echo e(__('Email')); ?></label><br><br>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>

            <!-- Password -->
            <div class="form-group mb-3">
                <label for="password" class="form-label"><?php echo e(__('Password')); ?></label><br><br>
                <input type="password" name="password" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn"><?php echo e(__('Log in')); ?></button>
            <div class="home-link">
                <a href="/" style="color: white;"><?php echo e(__('Go Home')); ?></a>
            </div>
        </form>

        <!-- Additional Links -->
        <div class="additional-links">
            <a href="<?php echo e(route('student.register')); ?>"><?php echo e(__('Don\'t have an account? Register here')); ?></a><br>
            <a href="#"><?php echo e(__('Forgot your password?')); ?></a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\career_guidance-main\career_guidance-main\resources\views/auth/student-login.blade.php ENDPATH**/ ?>