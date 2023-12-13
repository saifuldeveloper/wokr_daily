<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now                    = now();
        $data = [
            [
                'title'         => 'email_address',
                'value'         => '"sales@spagreen.net"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'phone',
                'value'         => '"+8801400620055"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mail_server',
                'value'         => '"smtp"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_server_address',
                'value'         => '"smtp.elasticemail.com"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_user_name',
                'value'         => '"test5@spagreen.net"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_password',
                'value'         => '"2C971E6BCCCA9425E4E077DE1EDF582A5348"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_mail_port',
                'value'         => '"465"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_encryption_type',
                'value'         => '"ssl"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'smtp_mail_from_name',
                'value'         => '"OvoyLMS"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mail_from_address',
                'value'         => '"ovoy@spagreen.net"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mail_signature',
                'value'         => '"<p>Thanks</p><p>SpaGreen Creative</p>"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'jazz_cash_merchant_id',
                'value'         => '',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'jazz_cash_password',
                'value'         => '',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'stripe_key',
                'value'         => '"pk_test_51KSEttAEcZ6N0eChIDGzc0EXX8P1gOsTmYwexZ7188WFnyY2bEOqfvPT3MyePOwDNCPNKDb2o5M50w31dCUdjQha00R590C6Wg"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'stripe_secret',
                'value'         => '"sk_test_51KSEttAEcZ6N0eChifvBvTyjszi2Bti1iuLvOjuIvt9PfMgDLRlRDgfgzGylXTqkOGFO6KYPeCb7N78FCKSUNwNh00hE1xcGN2"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_stripe_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'payment_method',
                'value'         => '"paypal"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'paypal_client_id',
                'value'         => '"AZxyKxJo_Ogc7jYDellCuEogwYbkFVdIXYGmCajwgbkBe-Wodlls8jplUzZAmXHxxmxhWB9xJq1L79V1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_paypal_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_uddokta_pay_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_uddokta_pay_sandbox_mode_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'uddokta_pay_api_key',
                'value'         => '"982d381360a69d419689740d9f2e26ce36fb7a50"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_mollie_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mollie_api_key',
                'value'         => '"test_NB2BVwR8rekUbtQvenmb9nCvVVRwNJ"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_skrill_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'skrill_merchant_email',
                'value'         => '"demoqco@sun-fish.com"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_sslcommerz_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_sslcommerz_sandbox_mode_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'sslcommerz_id',
                'value'         => '"ecomm621c6cee01086"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'sslcommerz_password',
                'value'         => '"ecomm621c6cee01086@ssl"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_bkash_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_bkash_sandbox_mode_activated',
                'value'         => 1,
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'app_key',
                'value'         => '"4f6o0cjiki2rfm34kfdadl1eqq"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'bkash_app_secret',
                'value'         => '"2is7hdktrekvrbljjh44ll3d9l1dtjo4pasmjvs5vl5qr3fug4b"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'bkash_username',
                'value'         => '"sandboxTokenizedUser02"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'bkash_password',
                'value'         => '"sandboxTokenizedUser02@12345"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_amarpay_sandbox_mode_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_aamarpay_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'aamrapay_store_id',
                'value'         => '"aamarpay"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'aamarpay_signature_key',
                'value'         => '"28c78bb1f45112f5d40b956fe104645a"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_razorpay_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'razorpay_key',
                'value'         => '"rzp_test_0TxiJynxZFTbwx"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'razorpay_secret',
                'value'         => '"3WTWGfrzVjwTcVMgzy8phSpJ"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_paystack_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'paystack_secret_key',
                'value'         => '"sk_test_95d06017a0e7dc907708c44c33ee0dd06c43c9b2"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'paystack_public_key',
                'value'         => '"pk_test_0c22c8b86d1c70fc97d85caaa57c460efde7c9fc"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_mercado_pago_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mercadopago_access_key',
                'value'         => '"APP_USR-4488927440113908-102518-53151da33060878333b01bbed7d7b477-577487269"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mercadopago_key',
                'value'         => '"APP_USR-d770982e-aa81-4252-8285-326bb273f862"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_kkiapay_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_kkiapay_sandbox_enabled',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'kkiapay_public_api_key',
                'value'         => '"3c1d8b50846311ebbaa79fdd109248c0"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'kkiapay_private_api_key',
                'value'         => '"tpk_3c1d8b52846311ebbaa79fdd109248c0"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'kkiapay_secret',
                'value'         => '"tsk_3c1db260846311ebbaa79fdd109248c0"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_mid_trans_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_midtrans_sandbox_enabled',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mid_trans_client_id',
                'value'         => '"SB-Mid-client-W37JosxKCA5iS45Q"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'mid_trans_server_key',
                'value'         => '"SB-Mid-server-KSF0d8bUpgK62_98goRxHTZU"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_hitpay_sandbox_mode_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'is_hitpay_activated',
                'value'         => '"1"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'system_commission',
                'value'         => '"20"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'title'         => 'hitpay_api_key',
                'value'         => '"c3272a28ee0dc817ee9c83401eef95e25a5ea4f4d52ded116df56bb9fc12aaec"',
                'status'        => 1,
                'lang'          => 'en',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ];

        Setting::insert($data);
    }
}
