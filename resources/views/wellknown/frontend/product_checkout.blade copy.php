@extends('wellknown.layouts.index')


@section("content")

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>
<!-- Page Title Section -->
<div class="container">
    {{-- <div class="row"> --}}



    <div class="card">
        <div class="card-header">
            <h4 class="box-title"><strong>Products Cart Table</strong></h4>
        </div>
        <div class="card-body">
           <!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
					{{-- <form action="#" method="get" name="frm-billing"> --}}
                     <form accept-charset="UTF-8" action="{{ route('stripe.post') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IsMpzBKEgzbLhPreIcbvpOeBqK7Aw9rhvv5DAikDCJF8ClY5O1c4taoBWSUBAOle8BeYb3iN5ruGWsV8AHkjcTY00THJ9kqq3" id="payment-form" method="post">
                                    {{ csrf_field() }}
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Your name">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input id="email" type="email" name="email" value="" placeholder="Type your email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="United States">
						</p>
						<p class="row-in-form">
							<label for="zip-code">Postcode / ZIP:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
						</p>
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="City name">
						</p>
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								<input name="create-account" id="create-account" value="forever" type="checkbox">
								<span>Create an account?</span>
							</label>
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="forever" type="checkbox">
								<span>Ship to a different address?</span>
							</label>
						</p>
					{{-- </form> --}}
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Direct Bank Transder</span>
								<span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
						<a href="thankyou.html" class="btn btn-medium">Place order now</a>
					</div>
					<div class="summary-item shipping-method">
						
                          {{-- <form accept-charset="UTF-8" action="{{ route('stripe.post') }}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51IsMpzBKEgzbLhPreIcbvpOeBqK7Aw9rhvv5DAikDCJF8ClY5O1c4taoBWSUBAOle8BeYb3iN5ruGWsV8AHkjcTY00THJ9kqq3" id="payment-form" method="post">
                                    {{ csrf_field() }} --}}
                                    <div class='form-row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input name="" class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input name="card_num" autocomplete='off' class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-xs-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off' name="cvc" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-4 form-group expiration required'>
                                            <label class='control-label'>Expiration</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="e_m">
                                        </div>
                                        <div class='col-xs-4 form-group expiration required'>
                                            <label class='control-label'> </label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="e_y">
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12'>
                                            <div class='form-control total btn btn-info'>
                                                Total: <span class='amount'>{{ $g_t }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12 form-group'>
                                        <input type="hidden" name="g_t" value="{{ $g_t }}">
                                            <button class='form-control btn btn-primary submit-button' type='submit' style="margin-top: 10px;">Pay »</button>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>
                                </form>

					</div>
                   
				</div>
				
				
				


			</div><!--end main content area-->
		</div><!--end container-->
		
		
		

	</main>
	<!--main area-->

        </div>

    </div>











    {{-- </div> --}}

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(e.target).closest('form')
                , inputSelector = ['input[type=email]', 'input[type=password]'
                    , 'input[type=text]', 'input[type=file]'
                    , 'textarea'
                ].join(', ')
                , $inputs = $form.find('.required').find(inputSelector)
                , $errorMessage = $form.find('div.error')
                , valid = true;

            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault(); // cancel on first error
                }
            });
            $form.on('submit', function(e) {
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val()
                        , cvc: $('.card-cvc').val()
                        , exp_month: $('.card-expiry-month').val()
                        , exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    });

</script>







<!-- End Project Section -->
@endsection

