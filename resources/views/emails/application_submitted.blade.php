<!DOCTYPE html>
<html>
<head>
    <title>Application</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h2,h3{ margin-bottom:0; }
        p{ margin:2px 0; }
        .section{ margin-bottom:15px; }
    </style>
</head>
<body>

<h2>New Career Application</h2>

<h3>Applicant Info</h3>
<p><strong>Name:</strong> {{ $application->first_name }} {{ $application->last_name }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>
<p><strong>Phone:</strong> {{ $application->phone }}</p>
<p><strong>Gender:</strong> {{ ucfirst($application->gender) }}</p>
<p><strong>Age:</strong> {{ $application->age }}</p>

<hr>

<h3>Education</h3>
<p><strong>Education Level:</strong> {{ $application->education_level }}</p>
<p><strong>Last School:</strong> {{ $application->last_school }}</p>

<hr>

<h3>Address</h3>
<p>{{ $application->address }}</p>
<p>{{ $application->city }}</p>

<hr>

<p>
📎 <strong>Resume:</strong> Attached<br>
🎤 <strong>Voice Recording:</strong> Attached
</p>


</body>
</html>
