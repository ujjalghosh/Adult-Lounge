[2020-06-15 20:49:35]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZA7Q6AD556539B967205D
            [intent] => sale
            [state] => approved
            [cart] => 2W7849939Y422064M
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
                                    [invoice_number] => 5ee790745da15
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
                                                                            [id] => 1T257709WP2372947
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
                                                                            [parent_payment] => PAYID-L3TZA7Q6AD556539B967205D
                                                                            [create_time] => 2020-06-15T15:19:34Z
                                                                            [update_time] => 2020-06-15T15:19:34Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/1T257709WP2372947
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/1T257709WP2372947/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZA7Q6AD556539B967205D
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZA7Q6AD556539B967205D
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T15:15:10Z
            [update_time] => 2020-06-15T15:19:34Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZA7Q6AD556539B967205D
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

[2020-06-15 20:59:56]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZHSA4E578784FX8652925
            [intent] => sale
            [state] => approved
            [cart] => 6EE860233F643245M
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
                                                    [total] => 499.99
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 499.99
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
                                    [invoice_number] => 5ee793bb45718
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
                                                                            [id] => 03L79480JK713572V
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 499.99
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 499.99
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
                                                                                            [value] => 499.99
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3TZHSA4E578784FX8652925
                                                                            [create_time] => 2020-06-15T15:29:54Z
                                                                            [update_time] => 2020-06-15T15:29:54Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/03L79480JK713572V
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/03L79480JK713572V/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZHSA4E578784FX8652925
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZHSA4E578784FX8652925
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T15:29:11Z
            [update_time] => 2020-06-15T15:29:54Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZHSA4E578784FX8652925
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

[2020-06-15 21:14:18]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZOLA59D22098P7766012P
            [intent] => sale
            [state] => approved
            [cart] => 44W05079WA934291K
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
                                                    [total] => 499.99
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 499.99
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
                                    [invoice_number] => 5ee79721ec0c2
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
                                                                            [id] => 3E119115PW778801F
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 499.99
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 499.99
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
                                                                                            [value] => 499.99
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3TZOLA59D22098P7766012P
                                                                            [create_time] => 2020-06-15T15:44:17Z
                                                                            [update_time] => 2020-06-15T15:44:17Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3E119115PW778801F
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3E119115PW778801F/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZOLA59D22098P7766012P
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZOLA59D22098P7766012P
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T15:43:40Z
            [update_time] => 2020-06-15T15:44:17Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZOLA59D22098P7766012P
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

[2020-06-15 21:17:26]: 
[2020-06-15 21:17:53]: 
[2020-06-15 21:22:40]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZSIA4E502137TH743901M
            [intent] => sale
            [state] => approved
            [cart] => 9BT70773UB114425F
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
                                                    [total] => 499.99
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 499.99
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
                                    [invoice_number] => 5ee79916984cc
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
                                                                            [id] => 2R519866KW506423S
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 499.99
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 499.99
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
                                                                                            [value] => 499.99
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3TZSIA4E502137TH743901M
                                                                            [create_time] => 2020-06-15T15:52:40Z
                                                                            [update_time] => 2020-06-15T15:52:40Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/2R519866KW506423S
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/2R519866KW506423S/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZSIA4E502137TH743901M
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZSIA4E502137TH743901M
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T15:52:00Z
            [update_time] => 2020-06-15T15:52:40Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZSIA4E502137TH743901M
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

[2020-06-15 21:24:20]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZS3I08G633787D231032E
            [intent] => sale
            [state] => approved
            [cart] => 4H945950B1238904F
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
                                                    [total] => 499.99
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 499.99
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
                                    [invoice_number] => 5ee799658dd19
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
                                                                            [id] => 8XY36987WT145343A
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 499.99
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 499.99
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
                                                                                            [value] => 499.99
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3TZS3I08G633787D231032E
                                                                            [create_time] => 2020-06-15T15:54:19Z
                                                                            [update_time] => 2020-06-15T15:54:19Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8XY36987WT145343A
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8XY36987WT145343A/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZS3I08G633787D231032E
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZS3I08G633787D231032E
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T15:53:17Z
            [update_time] => 2020-06-15T15:54:19Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZS3I08G633787D231032E
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

[2020-06-15 21:50:06]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3TZ7DY8B764655GH6155912
            [intent] => sale
            [state] => approved
            [cart] => 8VM71170L17715155
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
                                    [invoice_number] => 5ee79f883253c
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
                                                                            [id] => 17F7711961679993H
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
                                                                            [parent_payment] => PAYID-L3TZ7DY8B764655GH6155912
                                                                            [create_time] => 2020-06-15T16:20:05Z
                                                                            [update_time] => 2020-06-15T16:20:05Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/17F7711961679993H
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/17F7711961679993H/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZ7DY8B764655GH6155912
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3TZ7DY8B764655GH6155912
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T16:19:26Z
            [update_time] => 2020-06-15T16:20:05Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3TZ7DY8B764655GH6155912
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

[2020-06-15 22:13:20]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3T2KBA3LL93054BK365784C
            [intent] => sale
            [state] => approved
            [cart] => 2KD47823UX753683Y
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
                                    [invoice_number] => 5ee7a4fd1fca6
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
                                                                            [id] => 3CH72987G02236539
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
                                                                            [parent_payment] => PAYID-L3T2KBA3LL93054BK365784C
                                                                            [create_time] => 2020-06-15T16:43:19Z
                                                                            [update_time] => 2020-06-15T16:43:19Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3CH72987G02236539
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3CH72987G02236539/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KBA3LL93054BK365784C
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3T2KBA3LL93054BK365784C
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T16:42:44Z
            [update_time] => 2020-06-15T16:43:19Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KBA3LL93054BK365784C
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

[2020-06-15 22:13:54]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3T2KBA3LL93054BK365784C
            [intent] => sale
            [state] => approved
            [cart] => 2KD47823UX753683Y
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
                                    [invoice_number] => 5ee7a4fd1fca6
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
                                                                            [id] => 3CH72987G02236539
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
                                                                            [parent_payment] => PAYID-L3T2KBA3LL93054BK365784C
                                                                            [create_time] => 2020-06-15T16:43:19Z
                                                                            [update_time] => 2020-06-15T16:43:19Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3CH72987G02236539
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/3CH72987G02236539/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KBA3LL93054BK365784C
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

            [create_time] => 2020-06-15T16:42:44Z
            [update_time] => 2020-06-15T16:43:19Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KBA3LL93054BK365784C
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

[2020-06-15 22:14:52]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3T2KYY24R01770KN365691V
            [intent] => sale
            [state] => approved
            [cart] => 1MG246504S274083U
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
                                    [invoice_number] => 5ee7a55e1fbe2
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
                                                                            [id] => 70P79214KR7602926
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
                                                                            [parent_payment] => PAYID-L3T2KYY24R01770KN365691V
                                                                            [create_time] => 2020-06-15T16:44:51Z
                                                                            [update_time] => 2020-06-15T16:44:51Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/70P79214KR7602926
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/70P79214KR7602926/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KYY24R01770KN365691V
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3T2KYY24R01770KN365691V
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T16:44:19Z
            [update_time] => 2020-06-15T16:44:51Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KYY24R01770KN365691V
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

[2020-06-15 22:15:39]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3T2KYY24R01770KN365691V
            [intent] => sale
            [state] => approved
            [cart] => 1MG246504S274083U
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
                                    [invoice_number] => 5ee7a55e1fbe2
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
                                                                            [id] => 70P79214KR7602926
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
                                                                            [parent_payment] => PAYID-L3T2KYY24R01770KN365691V
                                                                            [create_time] => 2020-06-15T16:44:51Z
                                                                            [update_time] => 2020-06-15T16:44:51Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/70P79214KR7602926
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/70P79214KR7602926/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KYY24R01770KN365691V
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

            [create_time] => 2020-06-15T16:44:19Z
            [update_time] => 2020-06-15T16:44:51Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2KYY24R01770KN365691V
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

[2020-06-15 22:32:43]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3T2TCI6YY27331PM046652J
            [intent] => sale
            [state] => approved
            [cart] => 35W46789Y21382712
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
                                    [invoice_number] => 5ee7a98062df4
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
                                                                            [id] => 2FW80617ML7382236
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
                                                                            [parent_payment] => PAYID-L3T2TCI6YY27331PM046652J
                                                                            [create_time] => 2020-06-15T17:02:42Z
                                                                            [update_time] => 2020-06-15T17:02:42Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/2FW80617ML7382236
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/2FW80617ML7382236/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2TCI6YY27331PM046652J
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3T2TCI6YY27331PM046652J
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-15T17:02:01Z
            [update_time] => 2020-06-15T17:02:42Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3T2TCI6YY27331PM046652J
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

