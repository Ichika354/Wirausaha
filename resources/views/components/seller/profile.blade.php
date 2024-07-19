<div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
        <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i
                    class="mdi mdi-account-outline mdi-20px me-1"></i>Account</a>
        </li>
    </ul>
    <div class="card mb-4">
        <h4 class="card-header">Profile Details</h4>
        <!-- Account -->
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ asset('dashboard/img/avatars/1.png') }}" alt="user-avatar"
                    class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" hidden
                            accept="image/png, image/jpeg" />
                    </label>
                    <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                        <i class="mdi mdi-reload d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                    </button>

                    <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
            </div>
        </div>
        <div class="card-body pt-2 mt-1">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
                <div class="row mt-2 gy-4">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="fullname" name="fullname" value="{{ Auth::user()->fullname }}"
                                autofocus />
                            <label for="fullname">Fullname</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="npm" id="npm" value="{{ Auth::user()->npm }}" oninput="validateNumberInput(this)" />
                            <label for="npm">NPM</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="email" name="email"
                                value="{{ Auth::user()->email }}" placeholder="john.doe@example.com" />
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="role" name="role"
                                value="{{ Auth::user()->role }}" readonly/>
                            <label for="role">Role</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="phone_number" name="phone_number" class="form-control"
                                    placeholder="202 555 0111" value="{{ Auth::user()->phone_number }}" oninput="validateNumberInput(this)"/>
                                <label for="phone_number">Phone Number</label>
                            </div>
                            <span class="input-group-text">ID (+62)</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="street" name="street"
                                placeholder="JL Teratai III No 11" />
                            <label for="street">Street</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="province" class="select2 form-select">
                                <option value="">Select Province</option>
                                <option value="usd">USD</option>
                            </select>
                            <label for="province">Provice</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="regency" class="select2 form-select">
                                <option value="">Select Regency</option>
                                <option value="usd">USD</option>
                            </select>
                            <label for="regency">Regency</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="district" class="select2 form-select">
                                <option value="">Select District</option>
                                <option value="usd">USD</option>
                            </select>
                            <label for="district">District</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="village" class="select2 form-select">
                                <option value="">Select Village</option>
                                <option value="usd">USD</option>
                            </select>
                            <label for="village">Village</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
    <div class="card">
        <h5 class="card-header fw-normal">Delete Account</h5>
        <div class="card-body">
            <div class="mb-3 col-12 mb-0">
                <div class="alert alert-warning">
                    <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
                <div class="form-check mb-3 ms-3">
                    <input class="form-check-input" type="checkbox" name="accountActivation"
                        id="accountActivation" />
                    <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                </div>
                <button type="submit" class="btn btn-danger">Deactivate Account</button>
            </form>
        </div>
    </div>
</div>
