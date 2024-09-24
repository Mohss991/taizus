<?php
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['data'])) {
    $file = 'studentdata.text';
    $content = $data['data'];

    // إضافة البيانات إلى الملف
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
    echo "تم حفظ البيانات بنجاح!";
} else {
    echo "لم يتم توفير البيانات!";
}
?>