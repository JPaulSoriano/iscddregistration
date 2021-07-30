@component('mail::message')
# ISCDD - ONLINE REGISTRATION

Dear {{ $student->first_name}},

Congratulations for successfully finishing the enrollment process! 
@component('mail::panel')
Student Name: <b>{{ $student->full_name }}</b><br>
Grade: <b>{{ $student->grade }}</b>
@endcomponent
Please take note of the following information:

1.	Notifications on your enrollment will be sent to your email address. Please check your email regularly or follow the official Facebook Page of ISCDD to be updated.

2.	You may request for a printed copy of your Registration form and official receipt at the Enrolment Area in the school campus. Note: Please observe COVID-19 safety protocols when going to the school campus.

Once again, congratulations and thank you for choosing ISCDD!

Best regards,<br>

ISCDD
@endcomponent