[2020-06-22 14:54:49]: PayPal\Api\Payment Object
(
    [_propMap:PayPal\Common\PayPalModel:private] => Array
        (
            [id] => PAYID-L3YHRMQ5HT361760P617951Y
            [intent] => sale
            [state] => approved
            [cart] => 71J14355VR805960R
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
                                            [email] => howladarsayantan-buyer@hotmail.com
                                            [first_name] => test
                                            [last_name] => buyer
                                            [payer_id] => EGRFAASZDBBBE
                                            [shipping_address] => PayPal\Api\ShippingAddress Object
                                                (
                                                    [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                        (
                                                            [recipient_name] => test buyer
                                                            [line1] => Flat no. 507 Wing A Raheja Residency
                                                            [line2] => Film City Road, Goregaon East
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
                                    [invoice_number] => 5ef078acc3cfa
                                    [soft_descriptor] => PAYPAL *SELLERASTUT
                                    [item_list] => PayPal\Api\ItemList Object
                                        (
                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                (
                                                    [shipping_address] => PayPal\Api\ShippingAddress Object
                                                        (
                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                (
                                                                    [recipient_name] => test buyer
                                                                    [line1] => Flat no. 507 Wing A Raheja Residency
                                                                    [line2] => Film City Road, Goregaon East
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
                                                                            [id] => 4T132421CK983881L
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
                                                                            [parent_payment] => PAYID-L3YHRMQ5HT361760P617951Y
                                                                            [create_time] => 2020-06-22T09:24:48Z
                                                                            [update_time] => 2020-06-22T09:24:48Z
                                                                            [links] => Array
                                                                                (
                                                                                    [0] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/4T132421CK983881L
                                                                                                    [rel] => self
                                                                                                    [method] => GET
                                                                                                )

                                                                                        )

                                                                                    [1] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/sale/4T132421CK983881L/refund
                                                                                                    [rel] => refund
                                                                                                    [method] => POST
                                                                                                )

                                                                                        )

                                                                                    [2] => PayPal\Api\Links Object
                                                                                        (
                                                                                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                                                                                (
                                                                                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3YHRMQ5HT361760P617951Y
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
                            [return_url] => http://localhost/Adult-Lounge/payment-success?paymentId=PAYID-L3YHRMQ5HT361760P617951Y
                            [cancel_url] => http://localhost/Adult-Lounge/payment-cancel
                        )

                )

            [create_time] => 2020-06-22T09:24:02Z
            [update_time] => 2020-06-22T09:24:48Z
            [links] => Array
                (
                    [0] => PayPal\Api\Links Object
                        (
                            [_propMap:PayPal\Common\PayPalModel:private] => Array
                                (
                                    [href] => https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L3YHRMQ5HT361760P617951Y
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

[2020-06-22 15:16:53]: File not uploaded
[2020-06-22 15:16:53]: File not uploaded
[2020-06-22 15:16:53]: File not uploaded
[2020-06-22 15:16:53]: File not uploaded
[2020-06-22 21:34:25]: File not uploaded
[2020-06-22 21:38:30]: File not uploaded
[2020-06-22 21:39:15]: File not uploaded
[2020-06-22 21:43:35]: File not uploaded
