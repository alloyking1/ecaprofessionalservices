<h2>New Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $submission['name'] }}</p>
<p><strong>Email:</strong> {{ $submission['email'] }}</p>
<p><strong>Phone:</strong> {{ $submission['phone'] }}</p>
<p><strong>Subject:</strong> {{ $submission['subject'] }}</p>

<h3>Message</h3>
<p>{{ $submission['message'] }}</p>