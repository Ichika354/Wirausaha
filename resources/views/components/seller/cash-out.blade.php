<div class="col-md-12">
  <div class="card">
    <h4 class="card-header">Cash Out</h4>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 mb-4">
          <div class="d-flex align-items-center gap-2">
            <i class="mdi mdi-bank-outline"></i>
            <p class="mb-0">Bank Central Asia</p>
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <div class="input-group input-group-merge">
            <span class="input-group-text">Rp</span>
            <div class="form-floating form-floating-outline">
                <input type="text" id="phone_number" name="phone_number" class="form-control"
                    placeholder="20000" oninput="validateNumberInput(this)"/>
                <label for="phone_number">Enter Cashout Amount</label>
            </div>
          </div>
          <div id="floatingInputHelp" class="form-text">
            Amount available for cashout at the moment: Rp. 3,000,000.00
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <p class="mb-0">The minimum withdrawal amount is Rp20.000. Maximum two-wheeled withdrawal Rp500.000 and Rp1.000.000 for four wheels. Withdrawal of funds will be disbursed the next day (H+1) at a maximum of 19:00 - 22:00 WIB. Disbursement will be processed after approval, please check your account statement. One account can only be used for one account</p>
        </div>
        <div class="col-md-12 mb-4">
          <div class="d-flex justify-content-between">
            <a href="{{ route('dashboard.seller') }}" class="btn btn-info">Back</a>
            <button class="btn btn-primary">Confirm Submission</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>