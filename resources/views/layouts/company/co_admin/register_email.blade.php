@component('mail::message')
# Welcome to Foodviews

<b>Congratulations.</b> Your {{ $email_data["name"] }} is approved. Thank you for choosing our foodviews service.
You getting started a new web service for online food management and marketing system. We investigated your company's information and thanks again for valid information of company.

Now you need to enroll as company admin/owner with our system. You getting full access  of your company. Click the following link to enroll.

<a href="http://foodviews.test/companyadmin/register/{{ $email_data["domain"] }}"><i>Click here to enroll as a admin</i></a>

Keep safe this link until you enrolled.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
