{{-- ===== Lead Enquiry Modal ===== --}}
<div class="modal fade" id="leadModal" tabindex="-1" aria-labelledby="leadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0" style="border-radius:12px;overflow:hidden;">

            <div class="modal-header border-0 pb-0" style="background:linear-gradient(135deg,#1e3a5f 0%,#2d6aad 100%);padding:28px 30px 20px;">
                <div>
                    <h5 class="modal-title text-white fw-bold mb-1" id="leadModalLabel" style="font-size:1.4rem;">
                        Enquire Now
                    </h5>
                    <p class="text-white-50 mb-0" style="font-size:0.85rem;">
                        Fill in your details and we'll get back to you shortly.
                    </p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4" id="leadModalBody">
                <div id="leadFormWrap">
                    <form id="leadModalForm" novalidate>
                        @csrf
                        <input type="hidden" name="source" id="leadSource">

                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="leadName">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="leadName" name="name"
                                   placeholder="Enter your full name" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="leadPhone">Mobile Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="leadPhone" name="phone"
                                   placeholder="Enter your mobile number" required>
                            <div class="invalid-feedback">Please enter your mobile number.</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold" for="leadEmail">Email ID</label>
                            <input type="email" class="form-control" id="leadEmail" name="email"
                                   placeholder="Enter your email address">
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <button type="submit" id="leadSubmitBtn"
                                class="btn w-100 fw-bold text-white py-2"
                                style="background:linear-gradient(135deg,#1e3a5f 0%,#2d6aad 100%);border:none;border-radius:6px;font-size:1rem;">
                            Submit Enquiry
                        </button>
                    </form>
                </div>

                <div id="leadSuccessWrap" class="text-center py-3 d-none">
                    <div style="font-size:3.5rem;color:#28a745;"><i class="las la-check-circle"></i></div>
                    <h5 class="mt-2 fw-bold">Thank You!</h5>
                    <p class="text-muted mb-0">We have received your enquiry and will contact you shortly.</p>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- ===== Lead Enquiry Modal end ===== --}}
