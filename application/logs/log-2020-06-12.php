[2020-06-12 23:32:10]: {"error":"invalid_client","error_description":"Client Authentication failed"}
[2020-06-12 23:32:19]: {"error":"invalid_client","error_description":"Client Authentication failed"}
[2020-06-12 23:32:31]: {"error":"invalid_client","error_description":"Client Authentication failed"}
[2020-06-12 23:35:49]: {"error":"invalid_client","error_description":"Client Authentication failed"}
[2020-06-12 23:38:14]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3R4IEQ18P288119L198692V
            [intent] => sale
            [state] => approved
            [cart] => 7JU03827PJ479890S
            [payer] => PayPal\Api\Payer Object
                (
                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                        (
                            [payment_method] => paypal
                            [status] => VERIFIED
                            [payer_info] => PayPal\Api\PayerInfo Object
                                (
                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                        (
                                            [email] => sb-1ualk2270936@personal.example.com
                                            [first_name] => John
                                            [last_name] => Doe
                                            [payer_id] => JS3DDBT77E4DS
                                            [shipping_address] => PayPal\Api\ShippingAddress Object
                                                (
                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                        (
                                                            [recipient_name] => John Doe
                                                            [line1] => Flat no. 507 Wing A Raheja Residency
                                                            [line2] => Film City Road
                                                            [city] => Mumbai
                                                            [state] => Maharashtra
                                                            [postal_code] => 400097
                                                            [country_code] => IN
                                                        )

                                                )

                                            [country_code] => IN
                                        )

                                )

                        )

                )

            [transactions] => Array
                (
                    [0] => PayPal\Api\Transaction Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [amount] => PayPal\Api\Amount Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [total] => 99.90
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 99.90
                                                                    [shipping] => 0.00
                                                                    [insurance] => 0.00
                                                                    [handling_fee] => 0.00
                                                                    [shipping_discount] => 0.00
                                                                )

                                                        )

                                                )

                                        )

                                    [payee] => PayPal\Api\Payee Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [merchant_id] => TDLQR5FJNRY2W
                                                    [email] => seller@astutedev.com
                                                )

                                        )

                                    [description] => Credit purchase from Adult Lounge
                                    [invoice_number] => 5ee3c40b4fe1a
                                    [soft_descriptor] => PAYPAL *SELLERASTUT
                                    [item_list] => PayPal\Api\ItemList Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [shipping_address] => PayPal\Api\ShippingAddress Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [recipient_name] => John Doe
                                                                    [line1] => Flat no. 507 Wing A Raheja Residency
                                                                    [line2] => Film City Road
                                                                    [city] => Mumbai
                                                                    [state] => Maharashtra
                                                                    [postal_code] => 400097
                                                                    [country_code] => IN
                                                                )

                                                        )

                                                )

                                        )

                                    [related_resources] => Array
                                        (
                                            [0] => PayPal\Api\RelatedResources Object
                                                (
                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                        (
                                                            [sale] => PayPal\Api\Sale Object
                                                                (
                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                        (
                                                                            [id] => 7JF931503F349260C
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 99.90
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 99.90
                                                                                                            [shipping] => 0.00
                                                                                                            [insurance] => 0.00
                                                                                                            [handling_fee] => 0.00
                                                                                                            [shipping_discount] => 0.00
                                                                                                        )

                                                                                                )

                                                                                        )

                                                                                )

                                                                            [payment_mode] => INSTANT_TRANSFER
                                                                            [reason_code] => RECEIVING_PREFERENCE_MANDATES_MANUAL_ACTION
                                                                            [protection_eligibility] => ELIGIBLE
                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE
                                                                            [receivable_amount] => PayPal\Api\Currency Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [value] => 99.90
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3R4IEQ18P288119L198692V
                                                                            [create_time] => 2020-06-12T18:08:11Z
                                                                            [update_time] => 2020-06-12T18:08:11Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/7JF931503F349260C
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/7JF931503F349260C/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3R4IEQ18P288119L198692V
                                                                                                    [rel] => parent_payment
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                )

                                                                            [soft_descriptor] => PAYPAL *SELLERASTUT
                                                                        )

                                                                )

                                                        )

                                                )

                                        )

                                )

                        )

                )

            [redirect_urls] => PayPal\Api\RedirectUrls Object
                (
                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                        (
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3R4IEQ18P288119L198692V
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-12T18:06:09Z
            [update_time] => 2020-06-12T18:08:11Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3R4IEQ18P288119L198692V
                                    [rel] => self
                                    [method] => GET
                                )

                        )

                )

            [failed_transactions] => Array
                (
                )

        )

)

[2020-06-12 23:57:27]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3R4R3I3WE09833TE665252D
            [intent] => sale
            [state] => approved
            [cart] => 9AC789564L444470L
            [payer] => PayPal\Api\Payer Object
                (
                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                        (
                            [payment_method] => paypal
                            [status] => VERIFIED
                            [payer_info] => PayPal\Api\PayerInfo Object
                                (
                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                        (
                                            [email] => sb-1ualk2270936@personal.example.com
                                            [first_name] => John
                                            [last_name] => Doe
                                            [payer_id] => JS3DDBT77E4DS
                                            [shipping_address] => PayPal\Api\ShippingAddress Object
                                                (
                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                        (
                                                            [recipient_name] => John Doe
                                                            [line1] => Flat no. 507 Wing A Raheja Residency
                                                            [line2] => Film City Road
                                                            [city] => Mumbai
                                                            [state] => Maharashtra
                                                            [postal_code] => 400097
                                                            [country_code] => IN
                                                        )

                                                )

                                            [country_code] => IN
                                        )

                                )

                        )

                )

            [transactions] => Array
                (
                    [0] => PayPal\Api\Transaction Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [amount] => PayPal\Api\Amount Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [total] => 99.90
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 99.90
                                                                    [shipping] => 0.00
                                                                    [insurance] => 0.00
                                                                    [handling_fee] => 0.00
                                                                    [shipping_discount] => 0.00
                                                                )

                                                        )

                                                )

                                        )

                                    [payee] => PayPal\Api\Payee Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [merchant_id] => TDLQR5FJNRY2W
                                                    [email] => seller@astutedev.com
                                                )

                                        )

                                    [description] => Credit purchase from Adult Lounge
                                    [invoice_number] => 5ee3c8e6f03b0
                                    [soft_descriptor] => PAYPAL *SELLERASTUT
                                    [item_list] => PayPal\Api\ItemList Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [shipping_address] => PayPal\Api\ShippingAddress Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [recipient_name] => John Doe
                                                                    [line1] => Flat no. 507 Wing A Raheja Residency
                                                                    [line2] => Film City Road
                                                                    [city] => Mumbai
                                                                    [state] => Maharashtra
                                                                    [postal_code] => 400097
                                                                    [country_code] => IN
                                                                )

                                                        )

                                                )

                                        )

                                    [related_resources] => Array
                                        (
                                            [0] => PayPal\Api\RelatedResources Object
                                                (
                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                        (
                                                            [sale] => PayPal\Api\Sale Object
                                                                (
                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                        (
                                                                            [id] => 7GX01999YK134601R
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 99.90
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 99.90
                                                                                                            [shipping] => 0.00
                                                                                                            [insurance] => 0.00
                                                                                                            [handling_fee] => 0.00
                                                                                                            [shipping_discount] => 0.00
                                                                                                        )

                                                                                                )

                                                                                        )

                                                                                )

                                                                            [payment_mode] => INSTANT_TRANSFER
                                                                            [reason_code] => RECEIVING_PREFERENCE_MANDATES_MANUAL_ACTION
                                                                            [protection_eligibility] => ELIGIBLE
                                                                            [protection_eligibility_type] => ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE
                                                                            [receivable_amount] => PayPal\Api\Currency Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [value] => 99.90
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3R4R3I3WE09833TE665252D
                                                                            [create_time] => 2020-06-12T18:27:24Z
                                                                            [update_time] => 2020-06-12T18:27:24Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/7GX01999YK134601R
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/7GX01999YK134601R/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3R4R3I3WE09833TE665252D
                                                                                                    [rel] => parent_payment
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                )

                                                                            [soft_descriptor] => PAYPAL *SELLERASTUT
                                                                        )

                                                                )

                                                        )

                                                )

                                        )

                                )

                        )

                )

            [redirect_urls] => PayPal\Api\RedirectUrls Object
                (
                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                        (
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3R4R3I3WE09833TE665252D
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-12T18:26:52Z
            [update_time] => 2020-06-12T18:27:24Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3R4R3I3WE09833TE665252D
                                    [rel] => self
                                    [method] => GET
                                )

                        )

                )

            [failed_transactions] => Array
                (
                )

        )

)

