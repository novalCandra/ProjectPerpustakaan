<!-- <?php
$apiurl = "https://bukuacak-9bdcb4ef2605.herokuapp.com/api/v1/book/";
$response = file_get_contents($apiurl);

// mengubah data json menjadi array php
$data = json_decode($response, true);

// ambil data buku saja
$book = $data['_id'];

echo json_encode($book);
?> -->