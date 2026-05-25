<h2>New Career Application</h2>

<p><strong>Name:</strong> {{ $submission['name'] }}</p>
<p><strong>Email:</strong> {{ $submission['email'] }}</p>
<p><strong>Phone:</strong> {{ $submission['phone'] }}</p>
<p><strong>Position:</strong> {{ $submission['position'] }}</p>

@if(!empty($submission['cover_letter']))
<h3>Cover Letter</h3>
<p>{{ $submission['cover_letter'] }}</p>
@endif

<p>The applicant's CV is attached to this email.</p>