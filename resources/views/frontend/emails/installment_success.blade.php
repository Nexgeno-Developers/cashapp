<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Installment Payment Successful</title>
</head>

<body style="margin:0; padding:0; background-color:#f5f5f5; font-family:'Helvetica Neue', Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f5f5f5; padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0"
                    style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:linear-gradient(135deg,#b8860b,#f2c94c); padding:30px;">
                            <img src="https://motiwalajewels.in/public/assets/img/logo.png" alt="Motiwala Jewels" width="120"
                                style="display:block; margin-bottom:10px;">
                            <h2 style="color:#fff; font-size:24px; margin:0;">Installment Payment Successful</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px;">
                            @if (!empty($user_name))
                                <p style="font-size:16px; color:#333;">Hi <strong>{{ ucfirst($user_name) }}</strong>,
                                </p>
                            @else
                                <p style="font-size:16px; color:#333;">Dear Valued Customer,</p>
                            @endif

                            <p style="font-size:16px; color:#555; line-height:1.6;">
                                We’re delighted to inform you that your
                                <strong>{{ $installment }}</strong> installment of
                                <strong>{{ $amount }}</strong> has been successfully completed.
                            </p>

                            <p style="font-size:16px; color:#555; line-height:1.6; margin-bottom:20px;">
                                Thank you for trusting <strong>Motiwala Jewels</strong> on your precious journey with
                                us.
                            </p>

                            @if (!empty($redemption_items) && count($redemption_items) > 0)
                                <h3 style="color:#b8860b; font-size:18px; margin-bottom:10px;">Transaction Summary</h3>
                                <div style="overflow-x:auto; margin-bottom:20px;">
                                    <table border="0" cellpadding="10" cellspacing="0" width="100%"
                                        style="border-collapse:collapse; font-size:14px; color:#333; background:#faf7f0; border-radius:8px;">
                                        <thead>
                                            <tr style="background:#f0e6d2; color:#222; text-align:left;">
                                                <th>Installment No</th>
                                                <th>Date</th>
                                                <th>Due Date</th>
                                                <th>Amount</th>
                                                @if ($redemption->plan_id == 2)
                                                    <th>Reserved Gold</th>
                                                @endif
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($redemption_items as $item)
                                                <tr style="border-top:1px solid #e5e5e5;">
                                                    <td>{{ $item->installment_no }}</td>
                                                    <td>{{ in_array($item->status, ['paid', 'request_approval']) ? custom_date_change($item->receipt_date) : 'NA' }}
                                                    </td>
                                                    <td>{{ $item->installment_no == 1 ? '-' : custom_date_change($item->due_date_start) }}
                                                    </td>
                                                    <td>{{ $item->installment_amount }}</td>
                                                    @if ($redemption->plan_id == 2)
                                                        <td>{{ gold_prifix($item->receivable_gold) ?? '-' }}</td>
                                                    @endif
                                                    <td
                                                        style="color:{{ in_array($item->status, ['paid', 'request_approval']) ? '#2e7d32' : '#c62828' }};">
                                                        {{ in_array($item->status, ['paid', 'request_approval']) ? 'Paid' : 'Unpaid' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                            <p style="font-size:15px; color:#555; line-height:1.6;">
                                We truly appreciate your continued support and look forward to serving you with even
                                more sparkling experiences!
                            </p>

                            <p style="font-size:15px; color:#555; line-height:1.6;">
                                If you have any questions or need assistance, feel free to reach out to us anytime.
                            </p>

                            {{-- <div style="text-align:center; margin:30px 0;">
                                <a href="https://motiwalajewels.com/account"
                                    style="background:linear-gradient(135deg,#b8860b,#f2c94c); color:#fff; text-decoration:none; padding:12px 30px; border-radius:30px; font-weight:bold; display:inline-block;">
                                    View My Account
                                </a>
                            </div> --}}

                            <p style="color:#888; font-size:14px; line-height:1.6; text-align:center;">
                                Warm regards,<br>
                                <strong>Motiwala Jewels Team</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background:#f9f9f9; padding:20px; font-size:13px; color:#999;">
                            © {{ date('Y') }} Motiwala Jewels. All rights reserved.<br>
                            <a href="https://motiwalajewels.com" style="color:#b8860b; text-decoration:none;">Visit
                                Website</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
