{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang
    <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#fafafa; -webkit-text-size-adjust:none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fafafa" class="gwfw">
        <tr>
            <td align="center" valign="top">
                <table width="600" border="0" cellspacing="0" cellpadding="0" class="m-shell">
                    <tr>
                        <td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                <!-- Header -->
                                <tr>
                                    <td class="plr-15" style="padding: 25px 35px 15px 35px;" bgcolor="#1b2834">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td valign="top" class="img img-logo" width="129" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                    <a href="https://quickcarfinance.co.uk/" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/logo_qcf.png" width="129" height="53" border="0" alt="" /></a>
                                                </td>
                                                <td valign="top" class="img" width="15" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                                <td valign="top">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td align="right" style="padding-bottom: 10px;">
                                                                <!-- Button -->
                                                                <table border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td style="border-radius: 3px;" bgcolor="#db0a5b">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tr>
                                                                                    
                                                                                    <td class="img-center img-ico" width="35" style="border-radius: 3px 0 0 3px; font-size:0pt; line-height:0pt; text-align:center;" bgcolor="#b9084d">
                                                                                        <a href="https://quickcarfinance.co.uk/login" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/ico_user.png" width="13" height="11" border="0" alt="" /></a>
                                                                                    </td>
                                                                                    <td class="text-btn text-btn-header fw-600 plr-5" style="color:#ffffff; font-family:Raleway, Arial, sans-serif; font-size:14px; line-height:18px; text-align:center; padding:5px 20px; font-weight:600;">
                                                                                        <a href="https://quickcarfinance.co.uk/login" target="_blank" class="text-btn-link link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Login to Member&rsquo;s Area</span>

                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- END Button -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">
                                                                <table border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td class="img" width="13" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                                            <img src="https://quickcarfinance.co.uk/public/images/ico_earphone.png" width="13" height="14" border="0" alt="" />
                                                                        </td>
                                                                        <td class="img" width="5" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                                                        <td class="text-header" style="color:#ffffff; font-family:Roboto, Arial, sans-serif; font-size:15px; line-height:19px; text-align:left;">
                                                                            <span style="color: #868686; font-family: Raleway, Arial, sans-serif;">Call Us:</span> <a href="tel:+01202286500" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">01202 286500</span></a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Header -->

                                <!-- Main -->
                                <tr>
                                    <td class="plr-15" style="padding: 35px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="text" style="color:#383838; font-family:Roboto, Arial, sans-serif; font-size:14px; line-height:18px; text-align:left;">
                                                    Hi {!! $notifiable->name !!}
                                                    <br><br>
                                                    Forgot your password?
                                                    <br>
                                                    No worries – it happens!
                                                    <br>
                                                    Simply click on the button below to choose a new one. It's as easy as that.
                                                    <br>
                                                    <br>
                                                    <center><a href="<?php echo $actionUrl; ?>" target="_blank" class="text-btn-link link-white" style="color:#ffffff; border-radius:4px; font-family:Raleway, Arial, sans-serif; background:#db0a5b;font-size:14px; line-height:18px; text-align:center; padding:8px 25px; font-weight:600;color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Reset Password</span>
                                                    </a><center>   
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Main -->

                                <!-- Socials -->
                                <tr>
                                    <td align="center" class="plr-15" style="padding: 15px 35px;" bgcolor="#f0f0f0">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="img" width="42" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                    <a href="http://facebook.com/QCARFINANCE/" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/ico_facebook.png" width="42" height="42" border="0" alt="" /></a>
                                                </td>
                                                <td class="img" width="15" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                                <td class="img" width="42" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                    <a href="https://twitter.com/QCARFINANCE" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/ico_twitter.png" width="42" height="42" border="0" alt="" /></a>
                                                </td>
                                                <td class="img" width="15" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                                <td class="img" width="42" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                    <a href="https://www.instagram.com/qcarfinance/" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/ico_instagram.png" width="42" height="42" border="0" alt="" /></a>
                                                </td>
                                                <td class="img" width="15" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                                <td class="img" width="42" style="font-size:0pt; line-height:0pt; text-align:left;">
                                                    <a href="https://www.youtube.com/channel/UCREA9FCb-iWyR88aiIxVHkQ" target="_blank"><img src="https://quickcarfinance.co.uk/public/images/ico_youtube.png" width="42" height="42" border="0" alt="" /></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Socials -->

                                <!-- Footer -->
                                <tr>
                                    <td class="plr-15" style="padding: 25px 35px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="text-footer t-cyan fw-500" style="padding-bottom: 15px; font-family:Roboto, Arial, sans-serif; font-size:20px; line-height:24px; text-align:center; color:#2fc4d8; font-weight:500;">
                                                    Opening hours
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-footer-1" style="color:#383838; font-family:Roboto, Arial, sans-serif; font-size:15px; line-height:28px; text-align:center;">
                                                    <em>
                                                        Monday - Thursday: 9.00am - 8.00pm
                                                        <br />
                                                        Friday: 9.00am - 6.00pm
                                                        <br />
                                                        Saturday: 9.00am - 5.30pm
                                                        <br />
                                                        Sunday: 11.00am - 5.00pm
                                                        <br /><br />

                                                        Copyright 2018 Quick Car Finance
                                                        <br />
                                                        <a href="#" target="_blank" class="link-grey" style="color:#383838; text-decoration:none;"><span class="link-grey" style="color:#383838; text-decoration:none;">315-317 Wallisdown Road,<span class="m-hide"><br /></span> Bournemouth, Dorset BH12 5BT</span></a>
                                                    </em>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Footer -->
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<!-- {!! $actionUrl !!} -->
@endcomponent
@endisset
