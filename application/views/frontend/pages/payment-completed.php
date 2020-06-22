<main class="content-wrapper">
    <section class="content-sec payment-success-page">
        <div class="box-content-layout">
            <span class="close_reg" id="forgot_cancel_btn">X</span>
            <div class="title-sec">
                <h1>PAYMENT SUCCESS</h1>
            </div>
            <div class="box-content-widget per">
                <p>Thank you for your payment. <?= $this->session->userdata('credited_amount') ?> credits has been transferred to your account.</p>
            </div>
        </div>
    </section>
</main> 