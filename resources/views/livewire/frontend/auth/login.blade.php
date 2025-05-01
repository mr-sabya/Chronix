<form wire:submit.prevent="login" class="row mt-4 align-items-center">
    <div class="mb-3 col-sm-12">
        <input type="text" class="form-control" placeholder="Email Address" wire:model.defer="email">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="mb-3 col-sm-12">
        <input type="password" class="form-control" placeholder="Password" wire:model.defer="password">
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="col-sm-6 text-sm-start">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" wire:model="remember">
            <label class="form-check-label" for="remember">Keep me logged in</label>
        </div>
    </div>
    <div class="col-sm-6 mb-0 mb-sm-3 text-sm-end">
        <a href="#">Forget Password?</a>
    </div>
    <div class="col-sm-12">
        <div class="sign-btn d-grid">
            <button type="submit" class="btn btn-primary btn-flat">Log in</button>
        </div>
    </div>
    <div class="col-sm-12">
        <ul class="list-unstyled">
            <li class="me-1">Don't have an account?
                <a class="text-primary" href="sign-up.html">Signup</a>
            </li>
        </ul>
    </div>
</form>