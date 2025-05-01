<form class="row align-items-center pt-1" wire:submit.prevent="register">
    <div class="mb-3 col-sm-12">
        <input type="text" class="form-control" placeholder="Full name" wire:model.defer="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3 col-sm-12">
        <input type="email" class="form-control" placeholder="Email Address" wire:model.defer="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3 col-sm-12">
        <input type="password" class="form-control" placeholder="Password" wire:model.defer="password">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="agree">
            <label class="form-check-label" for="exampleCheck1">I agree to the terms of service</label>
        </div>
        @error('agree') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12">
        <div class="sign-btn d-grid">
            <button type="submit" class="btn btn-primary">Signup</button>
        </div>
    </div>
    <div class="col-sm-12">
        <ul class="list-unstyled">
            <li class="me-1">Have you an account? <a class="text-primary" href="{{ route('login') }}" wire:navigate>Log in</a></li>
        </ul>
    </div>
</form>