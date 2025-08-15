<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $formData['message'] }}</p>
@if (!empty($formData['nda']))
    <p><em>The sender requested an NDA.</em></p>
@endif
