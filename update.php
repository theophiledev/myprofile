<?php
// update.php: Receives POST data and updates data.json
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'title' => $_POST['title'],
        'about' => $_POST['about'],
        'education' => array_map('trim', explode(',', $_POST['education'])),
        'skills' => array_map('trim', explode(',', $_POST['skills'])),
        'projects' => array_map('trim', explode(',', $_POST['projects'])),
        'languages' => array_map('trim', explode(',', $_POST['languages'])),
        'contact' => [
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'linkedin' => $_POST['linkedin']
        ]
    ];
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents('data.json', $json);
    echo '<div style="text-align:center; margin-top:50px;">Profile updated successfully.<br><a href="index.html">Return to Profile</a></div>';
} else {
    header('Location: admin.html');
    exit();
}
?>
