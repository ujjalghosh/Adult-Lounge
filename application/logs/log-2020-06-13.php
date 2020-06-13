[2020-06-13 21:52:34]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3SP2GA4EM15770VL991330C
            [intent] => sale
            [state] => approved
            [cart] => 7LH54108HL928533M
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
                                    [invoice_number] => 5ee4fd1165610
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
                                                                            [id] => 8M035129JH099504H
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
                                                                            [parent_payment] => PAYID-L3SP2GA4EM15770VL991330C
                                                                            [create_time] => 2020-06-13T16:22:33Z
                                                                            [update_time] => 2020-06-13T16:22:33Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8M035129JH099504H
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/8M035129JH099504H/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3SP2GA4EM15770VL991330C
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3SP2GA4EM15770VL991330C
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-13T16:21:43Z
            [update_time] => 2020-06-13T16:22:33Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3SP2GA4EM15770VL991330C
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

[2020-06-13 21:56:55]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3SP4KY0U638713V5507552P
            [intent] => sale
            [state] => approved
            [cart] => 8CW032506N770362Y
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
                                                    [total] => 199.99
                                                    [currency] => GBP
                                                    [details] => PayPal\Api\Details Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [subtotal] => 199.99
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
                                    [invoice_number] => 5ee4fe2421ecb
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
                                                                            [id] => 9W099874M3968743T
                                                                            [state] => pending
                                                                            [amount] => PayPal\Api\Amount Object
                                                                                (
                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                        (
                                                                                            [total] => 199.99
                                                                                            [currency] => GBP
                                                                                            [details] => PayPal\Api\Details Object
                                                                                                (
                                                                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                        (
                                                                                                            [subtotal] => 199.99
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
                                                                                            [value] => 199.99
                                                                                            [currency] => GBP
                                                                                        )

                                                                                )

                                                                            [exchange_rate] => 0.010623930440505
                                                                            [parent_payment] => PAYID-L3SP4KY0U638713V5507552P
                                                                            [create_time] => 2020-06-13T16:26:54Z
                                                                            [update_time] => 2020-06-13T16:26:54Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/9W099874M3968743T
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/9W099874M3968743T/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3SP4KY0U638713V5507552P
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3SP4KY0U638713V5507552P
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-13T16:26:18Z
            [update_time] => 2020-06-13T16:26:54Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3SP4KY0U638713V5507552P
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

