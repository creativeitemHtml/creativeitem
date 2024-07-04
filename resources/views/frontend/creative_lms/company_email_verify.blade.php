<div class="ci1-card-body p-30px" id="verify-form">
    <h3 class="man-title-26px mb-12px">Verify Your Email</h3>
    <p class="man-subtitle-16px mb-4">Enter the 5 digit code sent to your email</p>
    <form action="">
        <div class="d-flex align-items-center gap-4 flex-wrap mb-50px justify-content-xl-between">
            <input type="tel" maxlength="1" pattern="[0-9]" class="form-control verify-input" value="">
            <input type="tel" maxlength="1" pattern="[0-9]" class="form-control verify-input" value="">
            <input type="tel" maxlength="1" pattern="[0-9]" class="form-control verify-input" value="">
            <input type="tel" maxlength="1" pattern="[0-9]" class="form-control verify-input" value="">
            <input type="tel" maxlength="1" pattern="[0-9]" class="form-control verify-input" value="">
        </div>
        <button type="submit" class="btn btn-primary-ci1 px-30px text-center w-100 mb-20px" onclick="verifyEmail()">Verify</button>
        <p class="man-subtitle-16px lh-normal text-center">Didn’t receive the mail? <a href="#" class="fw-semibold text-dark-link">Resend</a></p>
    </form>
</div>