<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width" name="viewport">
    <style type="text/css">
        @font-face {
            font-family: &#x27;
            Postmates Std&#x27;
            ;
            font-weight: 600;
            font-style: normal;
            src: local(&#x27; Postmates Std Bold&#x27; ), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27; woff&#x27; );
        }

        @font-face {
            font-family: &#x27;
            Postmates Std&#x27;
            ;
            font-weight: 500;
            font-style: normal;
            src: local(&#x27; Postmates Std Medium&#x27; ), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27; woff&#x27; );
        }

        @font-face {
            font-family: &#x27;
            Postmates Std&#x27;
            ;
            font-weight: 400;
            font-style: normal;
            src: local(&#x27; Postmates Std Regular&#x27; ), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27; woff&#x27; );
        }
    </style>
    <style media="screen and (max-width: 680px)">
        @media screen and (max-width: 680px) {
            .page-center {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .footer-center {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }
    </style>
</head>

<body style="background-color: #f4f4f5;">
    <table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; background-color: #f4f4f5; text-align: center;">
        <tbody>
            <tr>

                <td style="text-align: center;">
                    <table align="center" cellpadding="0" cellspacing="0" id="body" style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 88px; width: 100%; padding-left: 120px; padding-right: 120px;">
                                        <tbody>
                                            @php
                                            $token = $_GET['token'];
                                            $email = $_GET['email'];
                                            @endphp
                                            <form action="{{url('/reset-new-pass')}}" method="POST">
                                                @csrf
                                                <tr>
                                                    <td style="padding-top: 24px;">
                                                        <img src="https://d1pgqke3goo8l6.cloudfront.net/wRMe5oiRRqYamUFBvXEw_logo.png" style="width: 56px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="padding-top: 72px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 48px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -2.6px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">{{__('Đặt mật khẩu mới')}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 48px; padding-bottom: 48px;">
                                                        <table cellpadding="0" cellspacing="0" style="width: 100%">
                                                            <tbody>
                                                                <tr>
                                                                    <input style="width: 100%; height: 25px;" value="{{$email}}" name="email" type="hidden"></input>
                                                                    <input style="width: 100%; height: 25px;" value="{{$token}}" name="token" type="hidden"></input>
                                                                    <input style="width: 100%; height: 25px;" placeholder="Nhập mật khẩu mới" name="password_account" type="text"></input>

                                                                </tr>
                                                                <tr>
                                                                    @if(session()->has('message'))
                                                                    <div style="margin-top: 5%; color: rgba(166, 76, 80, 1);" class="alert alert-success">
                                                                        {!! session()->get('message') !!}
                                                                    </div>
                                                                    @elseif(session()->has('error'))
                                                                    <div style="margin-top: 5%; color: rgba(166, 76, 80, 1);" class="alert alert-danger">
                                                                        {!! session()->get('error') !!}
                                                                    </div>
                                                                    @endif
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095a2; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.18px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                                        {{__('Vui lòng nhấn vào nút bên dưới để chọn mật khẩu mới.')}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <button data-click-track-id="37" type="submit" style="margin-top: 36px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #ffffff; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 12px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: 0.7px; line-height: 48px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 220px; background-color: #00cc99; border-radius: 28px; display: block; text-align: center; text-transform: uppercase" target="_blank">
                                                            {{__('Đồng ý')}}
                                                        </button>
                                                    </td>
                                                </tr>
                                            </form>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>



</body>
